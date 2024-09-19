<?php

namespace Xnhd\Core\Log;

use Xnhd\Core\Log\OperateLog;

trait LogTrait
{
    protected function saveLog($data, $staff = '')
    {

        return false;
        $server = new OperateLog('sdo_kuaishou');
        $res = $server->save([
            'zoneId' => !empty($data['zoneId']) ? $data['zoneId'] : '',
            'serverId' => !empty($data['serverId']) ? $data['serverId'] : '',
            'roleId' => !empty($data['roleId']) ? $data['roleId'] : '',
            'accountId' => !empty($data['accountId']) ? $data['accountId'] : '',
            'type' => $data['type'],
            'text' => $data['text'],
            'data' => !empty($data['data']) ? $data['data'] : '',
            'status' => $data['status'],
        ], $staff);
    }
}
