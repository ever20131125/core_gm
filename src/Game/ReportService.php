<?php
namespace Xnhd\Core\Game;

use Illuminate\Support\Facades\DB;
use Xnhd\Core\Service\BaseService;

class ReportService {
    public function __construct($project){
        $this->project = $project;
        $this->report = new Report();
        $this->report->setConnection($project.'_gm');
    }

    public function createOne($params){
        $row = $this->report->where('date', $params['date'])->first();
        if(empty($row)) {
            foreach ($params as $key => $value) {
                $this->report->$key = $value;
            }
            return $this->report->save() ? $this->report->id : false;
        }
         return false;
    }

    public function updateOne($params){
        $obj = $this->report->where('date', $params['date'])->first();
        if(!empty($obj)) {
            foreach ($params as $key=>$value){
                $obj->$key = $value;
            }
            return $obj->save();
        }
        return false;
    }

    public function getReportDataByDate($openTime, $endTime){
        return $this->report->orderBy('date', 'desc')->whereBetween('date', [$openTime, $endTime])->get();
    }

    public function getSdoDataByDate($openTime, $endTime){
        return $this->report->select('sdoData', 'date')->orderBy('date', 'desc')->whereBetween('date', [$openTime, $endTime])->get();
    }

}
