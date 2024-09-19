<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-04-25 11:50:59
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2021-12-23 14:50:04
 */

namespace Xnhd\Core\GmServer\WhiteIps;

use Illuminate\Database\Eloquent\Model;

class Allowlist extends Model
{
    protected $table = 'allowlist';

    protected $primaryKey = 'id';
}
