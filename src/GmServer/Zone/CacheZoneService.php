<?php

namespace Xnhd\Core\GmServer\Zone;

use Xnhd\Core\Cache\CacheTrait;
use Xnhd\Core\Cache\Cache;

class CacheZoneService extends ZoneService
{
    const CACHE_KEY_NOSDK_ZONEINFO = 'wdxsy:nosdk:zoneinfo';
    const CACHE_KEY_ZONEINFO_ZONEID = 'wdxsy:zoneinfo:zoneid';

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

    public function getNosdkZoneList($publisher)
    {
        return $this->getCacheFirst(
            self::CACHE_KEY_NOSDK_ZONEINFO . ':' . $publisher,
            'parent::getNosdkZoneList',
            [$publisher]
        );
    }

    public function getInfoByZoneId($zone_id)
    {
        return $this->getCacheFirst(
            self::CACHE_KEY_ZONEINFO_ZONEID . ':' . $zone_id,
            'parent::getInfoByZoneId',
            [$zone_id]
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
            $this->updateRelatedCache($id, $info);
        }

        return $res;
    }

    protected function updateRelatedCache($id, $params = '')
    {
        $this->setForceUpdate(true);

        $info = $this->getInfoById($id);

        if(!empty($params)) {
            $this->getNosdkZoneList($params['publisher']);
            $this->getInfoByZoneId($params['zone_id']);
        }else {           
            $this->getNosdkZoneList($info['publisher']);
            $this->getInfoByZoneId($info['zone_id']);
        }

        $this->setForceUpdate(false);
    }
}
