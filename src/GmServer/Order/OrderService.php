<?php
namespace Xnhd\Core\GmServer\Order;

use Xnhd\Core\Service\BaseService;

use DB;

class OrderService extends BaseService {
    public function __construct($connection = 'order', $time = ''){
        parent::__construct(new Order($connection, $time), 'order');
    }

    public function getInfoByData($openTime, $endTime, $data){
        $res = $ret = [];
        $where = 'where 1';
        foreach ($data as $key => $value) {
            $where .= " and {$key} = '{$value}'";
        }

        $start = date('Ym', strtotime($openTime));
        $end = date('Ym', strtotime($endTime));
        $connection = "order";

        for ($i = $start, $j = 1; $i <= $end; $i = date('Ym', strtotime($openTime." +$j month")), $j++) {
            $table = "pay{$i}";
            $sql = "select * from {$table} {$where}";
            $ret = DB::connection($connection)->select($sql);
            $res = array_merge($ret, $res);
        }

        return $res;
    }

    public function getOrders($id){
        return $this->model->where('id', $id)->first();
    }

    
    public function updateById($id, $params){
        return $this->model->where('id', $id)->update($params);
    }
    
    public function createOrderTable($table){
        $sql = "CREATE TABLE {$table} LIKE pay";
        $ret = DB::connection("order")->select($sql);
    }
}
