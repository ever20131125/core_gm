<?php

namespace Xnhd\Core\Log;

use Illuminate\Database\Eloquent\Model;

class gmLog extends Model {
    protected $fillable = ['id', 'openTime', 'endTime', 'type', 'content', 'url', 'status'];
    protected $table = 'operate_announcement_log';
    public $timestamps = false;

}



