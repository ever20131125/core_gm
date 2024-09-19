<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-05-06 16:48:25
 * @LastEditors: Please set LastEditors
 */

namespace Xnhd\Core\GmServer\Zone;

use Xnhd\Core\Service\BaseService;

class ZoneService extends BaseService
{
    public function __construct($project = '')
    {
        parent::__construct(new Zone(), $project . '_gm_basic');
    }

    public function getInfoByPubZoneId($publisher, $zone_id)
    {
        return  $this->model->select('zone_id', 'sid','zone_name', 'hotfix_version', 'hotfix_url', 'status')->where('publisher', $publisher)->where('zone_id', $zone_id)->first();
    }

    public function getNosdkZoneList($publisher)
    {
        return  $this->model->select('zone_id', 'sid', 'zone_name', 'hotfix_version', 'hotfix_url', 'status')->where('publisher', $publisher)->orderBy('id', 'desc')->get();
    }

    public function getIdNameMap()
    {
        return $this->model->pluck('zone_name', 'zone_id');
    }

    public function getInfoByPub($publisher)
    {
        return $this->model->where('publisher', $publisher)->get();
    }

    public function getIdNameMapByPub($publisher)
    {
        return $this->model->where('publisher', $publisher)->pluck('zone_name', 'zone_id');
    }

    public function getInfoByZoneId($zone_id)
    {
        return  $this->model->select('zone_id', 'sid', 'zone_name', 'hotfix_version', 'hotfix_url', 'status')->where('zone_id', $zone_id)->first();
    }
}
