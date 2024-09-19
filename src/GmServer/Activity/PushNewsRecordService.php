<?php

namespace Xnhd\Core\GmServer\Activity;

use Xnhd\Core\Service\BaseService;
use DB;

class PushNewsRecordService extends BaseService
{
    public function __construct($project = '')
    {
        $this->project = $project;
        parent::__construct(new PushNewsRecord(), 'sdo_activity');
    }

    public function getInfoByRoleId($news, $roleId, $zoneId, $openTime = '', $endTime = '')
    {
        $model = $this->model->where('news', $news)->where('roleId', $roleId)->where('zoneId', $zoneId);
        if (!empty($openTime)) {
            $model = $model->where('created_at', '>=', $openTime);
        } elseif (!empty($endTime)) {
            $model = $model->where('created_at', '<', $endTime);
        }
        return $model->count();
    }

    public function batchInsert($params)
    {
        return $this->model->insert($params);
    }
}
