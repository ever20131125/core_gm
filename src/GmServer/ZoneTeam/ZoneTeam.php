<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-04-25 11:50:59
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2021-10-27 14:23:43
 */

namespace Xnhd\Core\GmServer\ZoneTeam;

use Illuminate\Database\Eloquent\Model;

class ZoneTeam extends Model {
    protected $fillable = ['catId', 'catName', 'dbSlave'];
    protected $table = 'zonecats';
}



