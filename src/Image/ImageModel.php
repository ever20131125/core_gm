<?php
namespace Xnhd\Core\Image;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model {
    protected $connection = 'gm';
    protected $table = 'image';
    protected $fillable = ['type', 'name', 'config', 'is_display'];
    public $timestamps = false;
}