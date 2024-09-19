<?php
namespace Xnhd\Core\Anchor;

use Xnhd\Core\Service\BaseService;
use DB;

class AnchorAnswerService extends BaseService {

    public function __construct($project = ''){
        $this->connection = $project . '_newActData';
        parent::__construct(new AnchorAnswer(), $this->connection);
    }

    public function batchInsert($params) {
        return $this->model->insert($params);
    }

    public function batchUpdate($ids, $value = 1) {
        $ret = $this->model->whereIn('id', $ids)->increment('used', $value);
        $ret = $this->model->whereIn('id', $ids)->decrement('select', $value);
        return $ret;
    }

    public function batchDelete($ids) {
        return $this->model->whereIn('id', $ids)->delete();
    }

    public function getCount() {
        return $this->model->count();
    }

    public function getInfoByConf($data) {
        $model = $this->model;
        foreach ($data as $key => $value) {
            if(!empty($value)) {
                $model = $model->where($key, $value);
            }
        }
        return $model->get();
    }

    public function getInfoByIds($ids) {
        return $this->model->whereIn('id', $ids)->get();
    }

    public function getSelectedAnswer() {
        return $this->model->where('select', 1)->get();
    }

    public function getAllCount() {
        $res['count'] = $this->model->where('select', 1)->count();
        $res['one_count'] = $this->model->where('select', 1)->where('level', 1)->count();
        $res['two_count'] = $this->model->where('select', 1)->where('level', 2)->count();
        $res['three_count'] = $this->model->where('select', 1)->where('level', 3)->count();

        return $res;
    }

    public function getSelectedAnswerIds() {
        return $this->model->select('id')->where('select', 1)->orderBy('level', 'asc')->get();
    }
}
