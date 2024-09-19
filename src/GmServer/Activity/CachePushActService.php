<?php
/**
 * Created by PhpStorm.
 * User: wufl
 * Date: 2018/10/30
 * Time: 11:30
 */

namespace Xnhd\Core\GmServer\Activity;

use Xnhd\Core\Cache\Cache;
use Xnhd\Core\Cache\CacheTrait;

class CachePushActService extends PushActService {
    const CACHE_KEY_INFO_ID = 'gm:push:activity:info';

    public function __construct($project){
        $this->cache = new Cache($project);
        $this->project = $project;
        parent::__construct($project);
    }

    public function setForceUpdate($force) {
        $this->forceUpdate = $force;
    }

    use CacheTrait;

    public function getActivityInfo(){
        return $this->getCacheFirst(
            self::CACHE_KEY_INFO_ID,
            'parent::getActivityInfo'
        );
    }


    public function createOne($params, $id = 'id'){
        // create one into database
        $id = parent::createOne($params);

        // store into cache
        if ($id) {
            $this->updateRelatedCache();
        }

        return $id;
    }

    public function updateOne($id, $params){
        // update one
        $res = parent::updateOne($id, $params);

        // store into cache
        if ($res) {
            $this->updateRelatedCache();
        }

        return $res;
    }

    public function deleteOne($id){

        // delete one from database
        $res = parent::deleteOne($id);

        // store into cache
        if ($res) {
            $this->updateRelatedCache();
        }

        return $res;
    }

    protected function updateRelatedCache() {
        $this->setForceUpdate(true);

        $this->getActivityInfo();

        $this->setForceUpdate(false);
    }
}