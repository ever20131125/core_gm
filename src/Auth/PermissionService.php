<?php
namespace Xnhd\Core\Auth;

use Xnhd\Core\Service\BaseService;

class PermissionService extends BaseService {
    public function __construct($project = ''){
        parent::__construct(new Permission(), 'xnhd_base');
    }

    public static function newWithConn($connection){
        $service = new self();
        $service->model->setConnection($connection);
        return $service;
    }

    public function getIdDisNameList(){
        return $this->model->pluck('display_name', 'id');
    }

    public function getInfoByPrefix($prefix){
        return $this->model->where('name', 'like', "$prefix%")->get();
    }
}
