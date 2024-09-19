<?php
namespace Xnhd\Core\Auth;

use Xnhd\Core\Service\BaseService;

class StaffService extends BaseService {
    public function __construct($project = ''){
        parent::__construct(new Staff(), 'xnhd_base');
    }
    public function getName(){
        return $this->model->pluck('name');
    }

    public function getByEmail($email){
        return $this->model->where('email', $email)->first();
    }

    public function createOneWithRoles($params, $roles){
        foreach ($params as $key=>$value){
            $this->model->$key = $value;
        }
        $res = $this->model->save()? $this->model->id : false;
        $this->model->roles()->sync($roles);
        return $res;
    }

    public function updateOneWithRoles($id, $params, $roles){
        $obj = $this->model->find($id);
        foreach ($params as $key=>$value){
            $obj->$key = $value;
        }
        $obj->roles()->sync($roles);
        return $obj->save();
    }

    public function changePWD($id, $password){
        return $this->model->where('id', $id)->update(['password' => $password]);
    }

    public function auth($account, $password){
        $staff = $this->model->where('email', $account)->where('password', $password)->first();
        if (empty($staff)) {
            $staff = $this->model->where('name', $account)->where('password', $password)->first();
        }
        return !empty($staff) ? $staff : false;
    }

    public function getInfo() {
        return $this->model->where('name', "<>" ,'xnhd_admin')->orderBy('id', 'desc')->get();
    }

    public function getInfoByName() {
        return $this->model->where('name' ,'xnhd_admin')->pluck('id')->toArray();
    }
}
