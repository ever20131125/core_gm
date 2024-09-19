<?php
namespace Xnhd\Core\GmServer\Activity;

use Xnhd\Core\Service\BaseService;
use DB;

class PushActService extends BaseService {
    public function __construct($project = ''){
        $this->project = $project;
        parent::__construct(new PushAct(), $project . '_gm_basic');
    }

    public function getActivityInfo(){
        return $this->model->where('status', 2)->orderBy('level', 'desc')->get();
    }
}
