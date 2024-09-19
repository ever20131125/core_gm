<?php

namespace Xnhd\Core\Vip;

use Illuminate\Database\Eloquent\Model;

class Vip extends Model {
    protected $fillable = ['id', 'catId', 'zoneId', 'account', 'name', 'gender', 'qq', 'phone', 'nickname', 'like', 'comQQ', 'birthday', 'month','day','address'];
    protected $table = 'vip';
}