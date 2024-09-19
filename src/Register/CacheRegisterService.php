<?php
namespace Xnhd\Core\Register;
use Xnhd\Core\Cache\Redis;
use Xnhd\Core\Cache\Cache;
use Xnhd\Core\Cache\CacheTrait;
use Xnhd\Core\Register\RegisterService;

class CacheRegisterService extends RegisterService {
    const CACHE_KEY_INFO_ID = 'register:user:id';

    // force update cache, default: false
    protected $forceUpdate = false;

    public function __construct($project){
        $this->cache = new Cache($project);
        parent::__construct($project);
    }

    public function setForceUpdate($force) {
        $this->forceUpdate = $force;
    }

    use CacheTrait;

    public function getInfoByUser($publisher, $user){
        return $this->getCacheFirst(
            self::CACHE_KEY_INFO_ID . ':' . $publisher . ':' . $user,
            "parent::getInfoByUser",
            [$publisher, $user]
        );
    }

    public function updateByUser($publisher, $user, $params){
        $id = parent::updateByUser($publisher, $user, $params);
        if ($id) {
            $this->updateRelatedCache($publisher, $user);
        }

        return $id;
    }

    public function createNewOne($publisher, $user, $params){
        // create one into database
        $id = parent::createOne($params);

        // store into cache
        if ($id) {
            $this->updateRelatedCache($publisher, $user);
        }

        return $id;
    }

    protected function updateRelatedCache($publisher, $user) {
        $this->setForceUpdate(true);

        $obj = $this->getInfoByUser($publisher, $user);

        $this->setForceUpdate(false);
    }
}
