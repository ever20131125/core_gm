<?php

namespace Xnhd\Core\Schedule;

use Xnhd\Core\Game\SdoChatMaster;
use Xnhd\Core\GmServer\TimedPush\CacheTimedPushService;
use Xnhd\Core\GmServer\Zone\CacheZoneService;
use Xnhd\Core\Log\LogTrait;
use Xnhd\Core\Traint\PortTrait;

class PushService
{
    use PortTrait, LogTrait;
    
    public function sendPush()
    {
        $res = [];
        $project = config('app.project');
        $service = new CacheZoneService($project);
        $list = $service->getIdNameMap(); 
        
        if(!empty($list)) {
            foreach($list as $zoneId => $zone_name){  
                $server = new CacheTimedPushService($project, $zoneId);
                $infos = $server->getInfo();
                $now = date('H:i');
                $date = date('Y-m-d H:i');
                if (!empty($infos)) {
                    foreach ($infos as $info) {
                        if($info['type'] == 1 && $info['status'] == 1 && $now == $info['time']) {
                            $res[] = $this->post($info);
                        }else if($info['type'] == 2) {
                            $time = date('Y-m-d H:i', strtotime($info['time']));
                            if($date == $time) {
                                $res[] = $this->post($info);
                            }
                        }
                    }
                }

            }
        }
        return $res;
    }

    
    public function post($info)
    {
        $content   = $info['notice'];
        $zoneId = $info['zoneId'];
        $broadType = intval($info['playType']);
        $sendType = intval($info['sendType']);
        
        $res = [];
        if($sendType == 1) {
            $data = $info['serverId'];
            foreach ($data as $serverId) {
                $portInfo = $this->_getGmServer($serverId, $zoneId);
                $master = new SdoChatMaster($portInfo['host'], $portInfo['port']);
                $sendRes = $master->sendNotice($serverId, $content, $broadType);

                if ($sendRes) {
                    if ($sendRes->getNErrorCode() == 0) {
                        $res[$serverId] = true;
                        $status = '成功';
                    } else {
                        $res[$serverId] = false;
                        $status = '服务器返回错误码：' . $sendRes->getNErrorCode();
                    }
                } else {
                    $res[$serverId] = false;
                    $status = '服务器无响应';
                }
            
                $logData = [
                    'zoneId' => $zoneId,
                    'serverId' => $serverId,
                    'type' => 'push',
                    'text' => '推送 (发送)',
                    'data' => $content,
                    'status' => $status
                ];
                $this->saveLog($logData);
            }
        }
        return $res;
    }
}