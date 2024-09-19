<?php
namespace Xnhd\Core\Account;

use Xnhd\Core\Service\BaseService;
use DB;

class Device_accountService extends BaseService {

    public function __construct($project = ''){
        $this->connection = 'xnhd_base';
        parent::__construct(new Device_account(), $this->connection);
    }

    public function createOne($params){
        foreach ($params as $key=>$value){
            $this->model->$key = $value;
        }

        return $this->model->save()? true : false;
    }

    public function getInfoByDevice($device){
        return $this->model->where('device', $device)->get();
    }

    public function getInfoByDeviceAcc($device, $account){
        return $this->model->where('device', $device)->where('accountId', $account)->first();
    }

    public function deleteByDeviceAcc($device, $account){
        return $this->model->where('device', $device)->where('accountId', $account)->delete();
    }
}
