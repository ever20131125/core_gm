<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-05-06 16:48:25
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2022-07-27 15:14:09
 */

namespace Xnhd\Core\GmServer\TimedPush;

use Xnhd\Core\Service\BaseService;

class TimedPushService extends BaseService
{
    public function __construct($project = '', $zone_id = '')
    {
        $this->zone_id = $zone_id;
        parent::__construct(new TimedPush(), $project . '_gm_basic');
    }

    public function getInfo()
    {
        return  $this->model->where('status',1)->orderBy('id', 'desc')->get();
    }
}
