<?php

namespace Xnhd\Core\Anchor;

use Illuminate\Database\Eloquent\Model;

class AnchorVote extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'aid', 'rid', 'star'];
    protected $table = 'anchorVote';
}
