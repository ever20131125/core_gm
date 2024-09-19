<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-05-06 16:48:25
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2022-08-25 20:50:49
 */

namespace Xnhd\Core\GmServer\Server;

use Xnhd\Core\Service\BaseService;

class ServerService extends BaseService
{
    public function __construct($project = '')
    {
        parent::__construct(new Server(), $project . '_gm_basic');
    }

    public function getServerInfo()
    {
        return $this->model->select(
            'name',
            'server_id',
            'authPort',
            'gamePort',
            'payPort',
            'server_id',
            'ip',
            'priHost',
            'dbHost',
            'dbSlave',
            'redisSlave',
            'port'
        )->orderBy('id', 'desc')->get();
    }

    public function getInfo()
    {
        return  $this->model->select(
            'id',
            'name',
            'server_id',
            'display_id',
            'ip',
            'priHost',
            'dbHost',
            'dbSlave',
            'redisSlave',
            'port',
            'version_lower',
            'version_upper',
            'status',
            'color',
            'tags',
            'register_limit',
            'pcu',
            'open_time',
            'ext_json'
        )->orderBy('id', 'desc')->get();
    }

    public function getInfoByServerId($server_id)
    {
        return  $this->model->select(
            'name',
            'server_id',
            'display_id',
            'ip',
            'priHost',
            'dbHost',
            'dbSlave',
            'redisSlave',
            'port',
            'gamePort',
            'version_lower',
            'version_upper',
            'status',
            'color',
            'tags',
            'register_limit',
            'pcu',
            'open_time',
            'ext_json'
        )->where('server_id', $server_id)->first();
    }

    public function getPortInfoByServerId($server_id)
    {
        return $this->model->select(
            'authPort',
            'gamePort',
            'payPort',
            'server_id',
            'ip',
            'priHost',
            'port'
        )->where('server_id', $server_id)->orderBy('updated_at', 'desc')->first();
    }

    public function checkByServerId($server_id)
    {
        return  $this->model->select('id')->where('server_id', $server_id)->first();
    }

    public function delByServerIds($server_ids)
    {
        return  $this->model->whereIn('server_id', $server_ids)->delete();
    }

    public function getIdNameMap()
    {
        return $this->model->pluck('name', 'id');
    }

    public function getSIdNameMap()
    {
        return $this->model->pluck('name', 'server_id');
    }

    public function getGmtServer()
    {
        return $this->model->select(
            'gamePort',
            'payPort',
            'server_id',
            'name',
            'system',
            'ip',
            'priHost',
            'port'
        )->where('gmt', 1)->first();
    }
}
