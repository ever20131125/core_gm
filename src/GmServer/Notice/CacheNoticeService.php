<?php

namespace Xnhd\Core\GmServer\Notice;

use Xnhd\Core\Cache\CacheTrait;
use Xnhd\Core\Cache\Cache;

class CacheNoticeService extends NoticeService
{
    const CACHE_KEY_LOGIN_NEWS = 'wdxsy:notice';

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
            self::CACHE_KEY_LOGIN_NEWS,
            "parent::getInfo"
        );
    }


    public function createOne($params, $id = 'id')
    {
        // create one into database
        $res = parent::createOne($params, $id);

        // store into cache
        if ($res) {
            $this->updateRelatedCache();
        }

        return $id;
    }

    public function updateOne($id, $params)
    {
        // update one
        $res = parent::updateOne($id, $params);

        // store into cache
        if ($res) {
            $this->updateRelatedCache();
        }

        return $res;
    }

    public function deleteOne($id)
    {

        // delete one from database
        $res = parent::deleteOne($id);

        // store into cache
        if ($res) {
            $this->updateRelatedCache();
        }

        return $res;
    }

    protected function updateRelatedCache()
    {
        $this->setForceUpdate(true);

        $res = $this->getInfo();

        $this->setForceUpdate(false);
    }
}
