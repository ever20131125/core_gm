<?php
namespace Xnhd\Core\ApplePay;

use Xnhd\Core\Cache\Cache;
use Xnhd\Core\Cache\CacheTrait;

class CacheProductService extends ProductService {
    const CACHE_KEY_INFO_ID = 'apple:pay:publisher';

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

    public function getInfoByPublisher($publisher){
        return $this->getCacheFirst(
            self::CACHE_KEY_INFO_ID . ':' . $publisher,
            "parent::getInfoByPublisher",
            [$publisher]
        );
    }


    public function createNewOne($publisher, $params){
        // create one into database
        $id = parent::createOne($params);

        // store into cache
        if ($id) {
            $this->updateRelatedCache($publisher);
        }

        return $id;
    }

    public function updateSomeOne($publisher,$id, $params){
        // update one
        $res = parent::updateOne($id, $params);

        // store into cache
        if ($res) {
            $this->updateRelatedCache($publisher);
        }

        return $res;
    }

    public function deleteSomeOne($publisher, $id){
        // delete one from database
        $res = parent::deleteOne($id);

        // store into cache
        if ($res) {
            $this->updateRelatedCache($publisher);
        }

        return $res;
    }

    protected function updateRelatedCache($publisher) {
        $this->setForceUpdate(true);

        $obj = $this->getInfoByPublisher($publisher);

        $this->setForceUpdate(false);
    }

}
