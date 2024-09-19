<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-05-06 16:48:25
 * @LastEditors: Please set LastEditors
 */

namespace Xnhd\Core\GmServer\Product;

use Xnhd\Core\Service\BaseService;

class ProductService extends BaseService
{
    public function __construct($project = '')
    {
        parent::__construct(new Product(), $project . '_gm_basic');
    }

    public function getProductId($ProductId, $id = '')
    {
        $model = $this->model->where('productid', $ProductId);
        if($id != '') $model->where('id','<>', $id);

        return  $model->orderBy('id', 'desc')->get();
    }

    
    public function getInfoByTime($ProductId, $time)
    {
        return   $this->model->where('productid', $ProductId)->where('starttime', '<', $time)->where('endtime', '>', $time)->orderBy('id', 'desc')->first();
    }
}
