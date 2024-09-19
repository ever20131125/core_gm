<?php

namespace Xnhd\Core\GmServer\Activity;

use Illuminate\Database\Eloquent\Model;

class PushAct extends Model {
    protected $fillable = ['name', 'id', 'taskid', 'time'];
    protected $table = 'pushAct';
    public $timestamps = false;
}
