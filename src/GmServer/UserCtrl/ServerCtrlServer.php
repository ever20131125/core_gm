<?php

namespace Xnhd\Core\GmServer\UserCtrl;

use Xnhd\Core\Game\SdoControlMaster;
use Xnhd\Core\GmServer\Cache\CacheMarqueeService;
use Xnhd\Core\Traint\PortTrait;
use Xnhd\Core\GmServer\Notice\CacheNoticeService;
use Xnhd\Core\GmServer\Server\CacheServerService;
use Xnhd\Core\GmServer\WhiteIps\CacheAllowlistService;
use Xnhd\Core\Log\LogTrait;

class ServerCtrlServer
{
    use PortTrait, LogTrait;

    public function __construct()
    {
        $this->project = config('app.project', 'sdo');
    }

    /**
     * 公告修改
     *
     * @param  $project
     * @param $zoneid
     * @param  $id
     * @param  $params
     * @param int $type
     * 1,删除
     * @return void
     */
    public function noticeSave($params, $id = '',  $type = 0)
    {
        $text = '';
        $server = new CacheNoticeService($this->project); 
        if (empty($type)) {
            if ($id) {
                $text = '修改'; 
                $res = $server->updateOne($id, $params);
            } else {
                $text = '创建';
                $id = $server->createOne($params);
            }
        } else {
            $text = '删除';
            $res = $server->deleteOne($id);
        }

        $logData = [
            'id' => $id,
            'type' => 'notice',
            'text' => $text,
            'data' => json_encode($params, 256),
            'status' => '成功'
        ];
        $this->saveLog($logData);
    }

    /**
     * 白名单修改
     *
     * @param  $project
     * @param $zoneid
     * @param  $id
     * @param  $params
     * @param int $type
     * 1,删除
     * @return void
     */
    public function allowlistSave($params, $id = '',  $type = 0)
    {
        $text = '';
        $server = new CacheAllowlistService($this->project);
        if (empty($type)) {
            if ($id) {
                $text = '修改';
                $res = $server->updateOne($id, $params);
            } else {
                $text = '创建';
                $id = $server->createOne($params);
            }
        } else {

            $text = '删除';
            $res = $server->deleteOne($id);
        }


        $logData = [
            'id' => $id,
            'type' => 'allowlist',
            'text' => $text,
            'data' => json_encode($params, 256),
            'status' => '成功'
        ];
        $this->saveLog($logData);
    }

    /**
     * server修改
     *
     * @param  $project
     * @param $zoneid
     * @param  $id
     * @param  $params
     * @param int $type
     * 1,删除, 2 批量删除
     * @return void
     */
    public function serverSave($params, $id = '',  $type = 0)
    {
        $text = '';
        $server = new CacheServerService($this->project);
        if (empty($type)) {
            if ($id) {
                $text = '修改';
                $res = $server->updateOne($id, $params);
            } else {
                $text = '创建';
                $id = $server->createOne($params);
            }
        } else if ($type == 1) {

            $text = '删除';
            $res = $server->deleteOne($id);
        } else if ($type == 2) {

            $text = '删除';
            $res = $server->delByServerIds($params);
        }


        $logData = [
            'serverId' => $params['server_id'],
            'id' => $id,
            'type' => 'serverinfo',
            'text' => $text,
            'data' => json_encode($params, 256),
            'status' => '成功'
        ];
        $this->saveLog($logData);
    }



    /**
     * 跑马灯修改
     *
     * @param  $project
     * @param $zoneid
     * @param  $id
     * @param  $params
     * @param int $type
     * @return void
     */
    public function marqueeSave($params, $data = '',  $type = 0)
    {
        $notice = new CacheMarqueeService($this->project);

        if (empty($type)) {
            $text = '创建';
            $res    = $notice->saveNotice($params);
            $data = json_encode($params, 256);
        } else if ($type == 1) {
            $text = '删除';
            $res    = $notice->saveNotice($params, true);
            $data = json_encode($data, 256);
        }
        $logData = [
            'zoneId' => !empty($data['zoneId']) ? $data['zoneId'] : '',
            'serverId' => !empty($data['serverId']) ? $data['serverId'] : '',
            'type' => 'marquee',
            'text' => "跑马灯 ($text)",
            'data' => $data,
            'status' => '成功'
        ];
        $this->saveLog($logData);
    }


    /**
     * 全服邮件
     *
     * @param  $project
     * @param $zoneid
     * @param  $id
     * @param  $params
     * @param int $type
     * @return void
     */
    public function mailSave($params, $server_id, $items)
    {
        $portInfo = $this->_getGmServer($server_id);
        $master = new SdoControlMaster($portInfo['host'], $portInfo['port']);
        $res  = $master->sendGmPrizeMail($params, $items, $server_id);

        if (!empty($res)) {
            if ($res->getNErrorCode() == 0) {
                $code = 1;
                $status = '成功';
            } else {
                $code = 2;
                $status = '服务器返回错误码：' . $res->getNErrorCode();
            }
        } else {
            $code = 3;
            $status = '服务器连接失败';
        }
        $info = json_encode($params, 256);
        $logData = [
            'zoneId' => $params['zoneId'],
            'serverId' => $server_id,
            'type' => 'mail',
            'text' => "全服邮件",
            'data' => $info,
            'status' => $status
        ];

        $this->saveLog($logData);
        return $status;
    }
}
