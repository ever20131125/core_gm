<?php

namespace Xnhd\Core\Verify;

use Illuminate\Database\Eloquent\Model;

class VerifyCon extends Model
{
    protected $fillable = ['id', 'status', 'content'];
    protected $keyType = 'string';
    protected $table = 'verify';

    public function __construct($connection = 'sdo_verify')
    {
        $this->setConnection($connection);
        $this->setTable('verify' . date('Ym', time()));
        parent::__construct();
    }
}
