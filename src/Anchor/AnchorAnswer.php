<?php

namespace Xnhd\Core\Anchor;

use Illuminate\Database\Eloquent\Model;

class AnchorAnswer extends Model
{
    protected $fillable = ['id', 'title', 'option1', 'option2', 'option3', 'answer', 'used', 'level', 'select'];
    protected $table = 'puzzlePool';
    public $timestamps = false;
}
