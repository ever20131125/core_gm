<?php
namespace Xnhd\Core\Anchor;

use Xnhd\Core\Service\BaseService;
use DB;

class AnchorInfoService extends BaseService {

    public function __construct($project = ''){
        $this->connection = $project . '_center';
        parent::__construct(new AnchorInfo(), $this->connection);
    }

    public function createOne($params){
        foreach ($params as $key=>$value){
            $this->model->$key = $value;
        }

        return $this->model->save()? true : false;
    }

}
