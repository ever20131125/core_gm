<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-04-25 11:51:02
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2021-12-31 16:14:55
 */
namespace Xnhd\Core\GmServer\Serverdb;

use Xnhd\Core\Service\BaseService;

class ServerdbService extends BaseService{
    public function __construct($project){
        parent::__construct(new Serverdb(),  $project . '_gm_basic');
    }

    public function getInfoBySId($server_id){
        return  $this->model->select(
            'id',
            'server_id', 
            'dbSlave',
            'redisSlave',
        )->where('server_id', $server_id)->first();
    }

}
