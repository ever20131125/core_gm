<?php

namespace Xnhd\Core\Game;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {
    public $timestamps = false;
    protected $fillable = ['date', 'data'];
    protected $table = 'data_report';
}