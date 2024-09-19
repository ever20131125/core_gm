<?php
namespace Xnhd\Core\Anchor;

use Xnhd\Core\Service\BaseService;
use DB;

class AnchorVoteService extends BaseService {
    public function __construct($project = ''){
        parent::__construct(new AnchorVote(), 'xnhd_base');
    }

    public function findVoteLog($publisher, $roleId, $targetId) {
        return $this->model->where('publisher', $publisher)->where('aid', $targetId)->where('rid', $roleId)->first();
    }

    public function getAllStartInfo() {
        return $this->model->select('aid', 'sum(star) as total')->groupBy('aid')->get();
    }
}
