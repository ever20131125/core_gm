<?php

namespace Xnhd\Core\Account;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    protected $fillable = ['publisher', 'pfId', 'openid', 'uid', 'old_publisher', 'old_openId', 'old_pfId', 'type'];

    public function __construct($connection = 'xnhd_base') {
        $this->setConnection($connection);
        // default table 'accounts'
        parent::__construct();
    }
}



