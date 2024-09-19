<?php

namespace Xnhd\Core\GmServer\Order;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['publisher', 'pfId', 'pf', 'orderNo', 'outOrderNo', 'orderTime', 'orderStatus', 'orderCode', 'payTime', 'payStatus', 'payCode', 'deliverTime', 'deliverStatus', 'deliverCode', 'accountId', 'openId', 'zoneId', 'money', 'gameMoney', 'moneyType', 'pmId', 'channelName', 'bankId', 'rawData'];

    public function __construct($connection = 'order', $time = '')
    {
        $this->setConnection($connection);

        if(empty($time)) {
            $this->setTable('pay' . date('Ym', time()));

        }else {
            
            $this->setTable('pay' . $time);
        }
        parent::__construct();
    }
}
