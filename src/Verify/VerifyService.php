<?php

namespace Xnhd\Core\Verify;

use Xnhd\Core\Service\BaseService;

class VerifyService extends BaseService
{
    public function __construct($project = '')
    {
        parent::__construct(new VerifyCon(), 'sdo_verify');
    }


    public function getVerifyInfo($status = 0)
    {
        return $this->model->select('id', 'status', 'content')->where('status', $status)->orderBy('created_at', 'desc')->get();
    }
}
