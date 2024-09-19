<?php

namespace Xnhd\Core\Anchor;

use Illuminate\Database\Eloquent\Model;

class AnchorInfo extends Model
{
    protected $fillable = ['anchorid', 'likes', 'fans'];
    protected $table = 'anchorInfo';
    public $timestamps = false;
    protected $primaryKey = 'anchorid';
}
