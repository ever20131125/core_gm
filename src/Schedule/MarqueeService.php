<?php

namespace Xnhd\Core\Schedule;

use Illuminate\Support\Facades\Log;
use Xnhd\Core\Game\SdoChatMaster;
use Xnhd\Core\Game\SdoControlMaster;
use Xnhd\Core\GmServer\Cache\CacheMarqueeService;
use Xnhd\Core\GmServer\Zone\CacheZoneService;
use Xnhd\Core\Log\LogTrait;
use Xnhd\Core\Traint\PortTrait;

class MarqueeService
{
    use PortTrait, LogTrait;
    
    public function sendNotice()
    {
        $res = [];
        $project = config('app.project'); 
        $notice = new CacheMarqueeService($project);
        $noticeInfos = $notice->getNotice();
        $now = strtotime(date('Y-m-d H:i'), time());
        if (!empty($noticeInfos)) {
            foreach ($noticeInfos as $noticeInfo) {
                if($noticeInfo['interval'] == 0) continue;
                $takeType   = $noticeInfo['takeType'];
                $s         = date('Y-m-d H:i', strtotime($noticeInfo['openTime']));
                $start     = strtotime($s);
                if ($takeType == 1) {
                    $e   = date('Y-m-d H:i', strtotime($noticeInfo['endTime']));
                    $end = strtotime($e);
                    if ($now > $start && $now < $end) {
                        if (($now - $start) % $noticeInfo['interval'] == 0) {
                            $res[] = $this->postNotice($noticeInfo);
                        }
                    }
                }
                if ($takeType == 2) {
                    if ($now == $start) {
                        $res[] = $this->postNotice($noticeInfo);
                    }
                }
            }
        }
        return $res;
    }

    
    public function postNotice($noticeInfo)
    {
        $content   = $noticeInfo['notice'];
        $zoneId = $noticeInfo['zoneId'];
        $broadType = intval($noticeInfo['playType']);
        //发送类型
        // $sendType = intval($noticeInfo['sendType']);
        
        $res = [];
        // if($sendType == 1) {
            $serverId = $noticeInfo['serverId'];
            $portInfo = $this->_getGmServer($serverId);
            $master = new SdoControlMaster($portInfo['host'], $portInfo['port']);
            $sendRes = $master->sendNotice($serverId, $content, $broadType);

            // Log::info($sendRes);
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
                'type' => 'marquee',
                'text' => '跑马灯 (发送)',
                'data' => $content,
                'status' => $status
            ];
            // $this->saveLog($logData);
            
        // }
        return $res;
    }
}