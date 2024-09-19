<?php

namespace Xnhd\Core\Auth;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Staff extends Model implements AuthenticatableContract//, AuthorizableContract
{
    use Authenticatable;// Authorizable;
    use EntrustUserTrait;

    protected $connection = 'xnhd_base';
    protected $table = 'staff';
    protected $fillable = ['name', 'email', 'password'];
    public $timestamps = false;
}
