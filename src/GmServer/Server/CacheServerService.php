<?php

namespace Xnhd\Core\GmServer\Server;

use Xnhd\Core\Cache\CacheTrait;
use Xnhd\Core\Cache\Cache;

class CacheServerService extends ServerService
{
    const CACHE_KEY_SERVERINFO = 'wdxsy:serverinfo';
    const CACHE_KEY_ALL_SERVERINFO = 'wdxsy:all:serverinfo';
    const CACHE_KEY_SERVER_PORTINFO = 'wdxsy:server:portinfo';
    const CACHE_KEY_SERVER_ONE = 'wdxsy:server:Typical:one';

    // force update cache, default: false
    protected $forceUpdate = false;

    public function __construct($project)
    {
        $this->cache = new Cache($project);
        parent::__construct($project);
    }

    public function setForceUpdate($force)
    {
        $this->forceUpdate = $force;
    }

    use CacheTrait;

    public function getInfo()
    {
        return $this->getCacheFirst(
            self::CACHE_KEY_ALL_SERVERINFO,
            'parent::getInfo'
        );
    }

    public function getInfoByServerId($server_id)
    {
        return $this->getCacheFirst(
            self::CACHE_KEY_SERVERINFO . ':' . $server_id,
            'parent::getInfoByServerId',
            [$server_id]
        );
    }

    public function getPortInfoByServerId($server_id)
    {
        return $this->getCacheFirst(
            self::CACHE_KEY_SERVER_PORTINFO . ':' . $server_id,
            'parent::getPortInfoByServerId',
            [$server_id]
        );
    }

    public function createOne($params, $id = '')
    {
        // create one into database
        $id = parent::createOne($params);

        // store into cache
        if ($id) {
            $this->updateRelatedCache($id);
        }

        return $id;
    }

    public function updateOne($id, $params)
    {
        // update one
        $res = parent::updateOne($id, $params);

        // store into cache
        if ($res) {
            $this->updateRelatedCache($id);
        }

        return $res;
    }

    public function deleteOne($id)
    {

        $info = $this->getInfoById($id);

        // delete one from database
        $res = parent::deleteOne($id);

        // store into cache
        if ($res) {
            $this->updateRelatedCache($id, $info['server_id']);
        }

        return $res;
    }

    public function delByServerIds($serverIds)
    {
        $res = parent::delByServerIds($serverIds);

        if ($res) {

            $this->setForceUpdate(true);

            $this->getInfo();
            foreach ($serverIds as $serverId) {
                $this->getInfoByServerId($serverId);
            }

            $this->setForceUpdate(false);
        }

        return $res;
    }

    protected function updateRelatedCache($id, $server_id = '')
    {
        $this->setForceUpdate(true);

        $this->getInfo();
        $info = $this->getInfoById($id);

        if(!empty($server_id)) {
            $this->getInfoByServerId($server_id);
            $this->getPortInfoByServerId($server_id);
        }else {           
            $this->getInfoByServerId($info['server_id']);
            $this->getPortInfoByServerId($info['server_id']);
        }

        $this->setForceUpdate(false);
    }
}
