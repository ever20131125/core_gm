<?php

namespace Xnhd\Core\Account;

use Illuminate\Database\Eloquent\Model;

class Device_account extends Model
{
    protected $fillable = ['device', 'accountId'];
    protected $table = 'device_account';
}
