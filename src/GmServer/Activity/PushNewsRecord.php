<?php

namespace Xnhd\Core\GmServer\Activity;

use Illuminate\Database\Eloquent\Model;

class PushNewsRecord extends Model
{
    protected $fillable = ['name', 'id', 'taskid', 'time'];

    public function __construct()
    {
        $this->setTable('push_news_record' . date('Ym', time()));
        parent::__construct();
    }
}
