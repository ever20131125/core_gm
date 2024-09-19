<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-04-25 11:51:02
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2021-12-07 09:59:13
 */
namespace Xnhd\Core\GmServer\ZoneTeam;

use Xnhd\Core\Service\BaseService;

class ZoneTeamService extends BaseService{
    public function __construct($project){
        parent::__construct(new ZoneTeam(), $project . '_gm_basic');
    }

    public function getCatList(){
        return $this->model->pluck('catName', 'catId');
    }

    public function getInfo(){
        return $this->model->orderBy('id', 'desc')->get()->toArray();
    }
}
