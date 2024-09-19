<?php

namespace Xnhd\Core\GmServer\UserCtrl;

use Illuminate\Support\Facades\Log;
use Xnhd\Core\Traint\PortTrait;
use Xnhd\Core\Game\SdoControlMaster;
use Xnhd\Core\Log\LogTrait;

class UserCtrlServer
{
    use PortTrait, LogTrait;

    /**
     * 角色封号
     *
     * @param int $server_id
     * @param array $params
     * @return $res
     */
    public function bannedUser($server_id, $params, $operator)
    {
        $roleArr = $params['role_ids'];
        $ctrl_reason = $params['ctrl_reason'];
        $start_time = $params['start_time'];
        $end_time = $params['end_time'];
        $portInfo =  $this->_getGmServer($server_id);
        $master = new SdoControlMaster($portInfo['host'], $portInfo['port']);

        $res = $master->bannedUser($server_id, 1, $params['ctrl_reason'], $roleArr, $operator, $params['start_time'], $params['end_time']);
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

        $info = '';
        if (!empty($period)) {
            $info = $ctrl_reason . "({$start_time} - {$end_time})";
        }
        $logData = [
            'serverId' => $server_id,
            'roleId' => implode(',', $roleArr),
            'type' => 'ban',
            'text' => '封号',
            'data' => $info,
            'status' => $status
        ];
        $this->saveLog($logData, $operator);
        return [$code, $status];
    }

    /**
     * 角色禁言
     *
     * @param int $server_id
     * @param array $params
     * @return $res
     */
    public function forbiddenUser($server_id, $params, $operator)
    {
        $roleArr = $params['role_ids'];
        $ctrl_reason = $params['ctrl_reason'];
        $start_time = $params['start_time'];
        $end_time = $params['end_time'];

        $portInfo =  $this->_getGmServer($server_id);
        $master = new SdoControlMaster($portInfo['host'], $portInfo['port']);

        $res = $master->forbiddenUser($server_id, $ctrl_reason, $roleArr, $operator, $start_time, $end_time);
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

        $info = '';
        if (!empty($period)) {
            $info = $ctrl_reason . "({$start_time} - {$end_time})";
        }
        $logData = [
            'serverId' => $server_id,
            'roleId' => implode(',', $roleArr),
            'type' => 'forbidden',
            'text' => '禁言',
            'data' => $info,
            'status' => $status
        ];
        $this->saveLog($logData, $operator);
        return [$code, $status];
    }

    /**
     * 解除封号
     *
     * @param int $server_id
     * @param array $params
     * @return $res
     */
    public function unBannedUser($server_id, $params, $operator)
    {
        $roleArr = $params['role_ids'];
        $portInfo =  $this->_getGmServer($server_id);
        $master = new SdoControlMaster($portInfo['host'], $portInfo['port']);

        $res = $master->unBannedUser($server_id, 1, $roleArr);
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

        $logData = [
            'serverId' => $server_id,
            'roleId' => implode(',', $roleArr),
            'type' => 'unban',
            'text' => '解除封号',
            'status' => $status
        ];
        $this->saveLog($logData, $operator);
        return [$code, $status];
    }


    /**
     * 解除禁言
     *
     * @param int $server_id
     * @param array $params
     * @return $res
     */
    public function unForbiddenUser($server_id, $params, $operator)
    {
        $roleArr = $params['role_ids'];
        $portInfo =  $this->_getGmServer($server_id);
        $master = new SdoControlMaster($portInfo['host'], $portInfo['port']);

        $res = $master->unForbiddenUser($server_id, $roleArr);
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

        $logData = [
            'serverId' => $server_id,
            'roleId' => implode(',', $roleArr),
            'type' => 'unforbidden',
            'text' => '解除禁言',
            'status' => $status
        ];
        $this->saveLog($logData, $operator);
        return [$code, $status];
    }

    /**
     * 踢下线
     *
     * @param int $server_id
     * @param array $params
     * @return $res
     */
    public function fullOff($server_id)
    {
        $portInfo =  $this->_getGmServer($server_id);
        $master = new SdoControlMaster($portInfo['host'], $portInfo['port']);

        $res = $master->doFullOff($server_id);
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

        $logData = [
            'serverId' => $server_id,
            'type' => 'fulloff',
            'text' => '踢下线',
            'status' => $status
        ];
        $this->saveLog($logData);
        return [$code, $status];
    }
}
