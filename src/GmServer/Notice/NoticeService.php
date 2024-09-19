<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-05-06 16:48:25
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2022-01-05 18:07:26
 */

namespace Xnhd\Core\GmServer\Notice;

use Xnhd\Core\Service\BaseService;

class NoticeService extends BaseService
{
    public function __construct($project = '')
    {
        parent::__construct(new Notice(), $project . '_gm_basic');
    }

    public function getInfo()
    {
        return  $this->model->select(
            'id',
            'notice_id',
            'zoneList',
            'transaction_type',
            'channels',
            'channel_id',
            'notice_title', 
            'notice_content', 
            'img_url',
            'weight',
            'start_time',
            'end_time',
        )->orderBy('weight', 'desc')->get();
    }


    public function checkById(int $id)
    {
        return $this->model->find($id);
    }

    
}
