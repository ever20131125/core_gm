<?php

namespace Xnhd\Core\Register;

use Xnhd\Core\Service\BaseService;

class RegisterService extends BaseService {
    public function __construct($project = ''){
        parent::__construct(new Register(), 'xnhd_base');
    }

    public function getInfoByUser($publisher, $user){
        return $this->model->where('publisher', $publisher)->where('user', $user)->first();
    }

    public function updateOneByDevice($publisher, $device, $params){
        $model = $this->model->where('publisher', $publisher)->where('device', $device)->first();
        foreach ($params as $key=>$value){
            $model->$key = $value;
        }
        return $model->save();
    }

    public function getInfoByDevice($publisher, $device){
        return $this->model->where('publisher', $publisher)->where('device', $device)->first();
    }

    public function updateByUser($publisher, $user, $params){
        $model = $this->model->where('publisher', $publisher)->where('user', $user)->first();
        foreach ($params as $key=>$value){
            $model->$key = $value;
        }
        return $model->save()? $model->id : false;
    }

    public function getInfoByCode($publisher, $code, $status = 0){
        return $this->model->where('publisher', $publisher)->where('code', $code)->where('status', $status)->first();
    }
}
