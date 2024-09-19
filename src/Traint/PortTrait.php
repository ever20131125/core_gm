<?php

namespace Xnhd\Core\Traint;

use Xnhd\Core\GmServer\Server\CacheServerService;

trait PortTrait
{

    protected function _getPayServer($serverId)
    {
        $project = config('app.project', 'sdo');
        $service = new CacheServerService($project);
        $info = $service->getPortInfoByServerId($serverId);
        if (!empty($info->payPort) && !empty($info->priHost)) {
            return ['host' => $info->priHost, 'port' => $info->payPort];
        } else if (!empty($info->payPort) && !empty($info->ip)) {
            return ['host' => $info->ip, 'port' => $info->payPort];
        }
        return [];
    }

    protected function _getAuthServer($serverId)
    {
        $project = config('app.project', 'sdo');
        $service = new CacheServerService($project);
        $info = $service->getPortInfoByServerId($serverId);
        if (!empty($info->authPort) && !empty($info->priHost)) {
            return ['host' => $info->priHost, 'port' => $info->authPort];
        } else if (!empty($info->authPort) && !empty($info->ip)) {
            return ['host' => $info->ip, 'port' => $info->authPort];
        }
        return ['host' => '', 'port' => ''];
    }

    protected function _getGmServer($serverId)
    {
        $project = config('app.project', 'sdo');
        $service = new CacheServerService($project);
        $info = $service->getPortInfoByServerId($serverId);
        if (!empty($info->gamePort) && !empty($info->priHost)) {
            return ['host' => $info->priHost, 'port' => $info->gamePort];
        } else if (!empty($info->gamePort) && !empty($info->ip)) {
            return ['host' => $info->ip, 'port' => $info->gamePort];
        }
        return ['host' => '', 'port' => ''];
    }

    protected function _getZoneServer($serverId)
    {
        $project = config('app.project', 'sdo');
        $service = new CacheServerService($project);
        $info = $service->getPortInfoByServerId($serverId);
        if (!empty($info->port) && !empty($info->priHost)) {
            return ['host' => $info->priHost, 'port' => $info->port];
        } else if (!empty($info->port) && !empty($info->ip)) {
            return ['host' => $info->ip, 'port' => $info->port];
        }
        return ['host' => '', 'port' => ''];
    }
}
