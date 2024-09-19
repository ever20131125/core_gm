<?php
namespace Xnhd\Core\ApplePay;

use Xnhd\Core\Service\BaseService;

class ProductService extends BaseService {
    public function __construct($project){
        parent::__construct(new Product(), $project.'_gm');
    }

    public function getInfoByPublisher($publisher){
        return $this->model->where('publisher', $publisher)->first();
    }
}
