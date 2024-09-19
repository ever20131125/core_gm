<?php
namespace Xnhd\Core\Tencentyun;

use Illuminate\Database\Eloquent\Model;

class Record extends Model {
    protected $fillable = ['userid', 'fileid'];
    public $timestamps = false;

    public function __construct($connection = 'test_file') {
        $this->setConnection($connection);
        $this->setTable('user_files');
        parent::__construct();
    }
}

