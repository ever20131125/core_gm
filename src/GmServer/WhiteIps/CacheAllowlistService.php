<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-05-06 16:48:19
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2021-12-28 11:25:50
 */

namespace Xnhd\Core\GmServer\WhiteIps;

use Xnhd\Core\Cache\Cache;
use Xnhd\Core\Cache\CacheTrait;

class CacheAllowlistService extends AllowlistService
{
    const CACHE_KEY_ALLOWLISTINFO = 'wdxsy:allowlistinfo';

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
            self::CACHE_KEY_ALLOWLISTINFO,
            'parent::getInfo'
        );
    }

    public function createOne($params, $id = 'id')
    {
        // create one into database
        $id = parent::createOne($params, $id);

        // store into cache
        if ($id) {
            $this->updateRelatedCache($id);
        }

        return $id;
    }

    
    public function addAll($data)
    {
        // create one into database
        $res = parent::addAll($data);

        // store into cache
        if ($res) {
            $this->updateRelatedCache();
        }

        return $res;
    }

    public function updateOne($id, $params)
    {
        // update one
        $res = parent::updateOne($id, $params);

        if ($res) {
            $this->updateRelatedCache($id);
        }
        return $res;
    }

    public function deleteOne($id)
    {
        // delete one from database
        $res = parent::deleteOne($id);

        // store into cache
        if ($res) {
            $this->updateRelatedCache($id);
        }

        return $res;
    }

    protected function updateRelatedCache($id = '')
    {
        $this->setForceUpdate(true);

        $this->getInfo();

        $this->setForceUpdate(false);
    }
}
