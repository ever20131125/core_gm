<?php

namespace Xnhd\Core\Register;

use Illuminate\Database\Eloquent\Model;

class Register extends Model {
    protected $fillable = ['id', 'publisher', 'type', 'user', 'password', 'device', 'status'];
    protected $table = 'register';
}



