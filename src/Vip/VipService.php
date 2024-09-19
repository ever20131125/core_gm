<?php
namespace Xnhd\Core\Vip;

use Illuminate\Support\Facades\DB;
use Xnhd\Core\Service\BaseService;

class VipService extends BaseService
{
    public function __construct($project)
    {
        $this->project = $project;
        parent::__construct(new Vip(), 'xnhd_base');
    }

    public function getInfoByQuery($params)
    {
        $service = $this->model;

        if (!empty($params)) {
            foreach ($params as $k => $v) {
                if (!empty($v)) {
                    $service = $service->where($k, $v);
                }
            }
        }
        return $service->get();
    }

    public function getPayInfo($zoneId, $accountIds, $month = '')
    {
        $res = [];
        $date = date('Ym');
        $where = 'where';
        if (!empty($accountIds)) {
            $accountId = implode(',', $accountIds);
            $where .= " accountId in ($accountId)";
        }
        if (!empty($zoneId)) {
            $where .= " and zoneId = $zoneId";
        }

        $select = "select sum(money) as total, accountId";
        if (empty($month)) {
            $_res = $this->_getPayInfo($select, $where, $date);
            if(!empty($_res)) {
                $res = $this->format($_res);
            }
        } else {
            $start = date('Ym', strtotime("-$month month"));
            for ($i = $date, $j = 1; $i > $start; $i = date('Ym', strtotime("-$j month")), $j++) {
                $_res = $this->_getPayInfo($select, $where, $i);
                if(!empty($_res)) {
                    $r = $this->format($_res);
                    if (empty($res)) {
                        $res = $r;
                    } else {
                        foreach ($r as $k => $v) {
                            if (array_key_exists($k, $res)) {
                                $res[$k] = $res[$k] + $v;
                            } else {
                                $res[$k] = $v;
                            }
                        }
                    }
                }
            }
        }
        return $res;
    }

    public function getLoginInfo($zoneId, $accountIds, $month = '')
    {
        $where = 'where';
        if (!empty($accountIds)) {
            $accountId = implode(',', $accountIds);
            $where .= " accountId in ($accountId)";
        }
        if (!empty($zoneId)) {
            $where .= " and zoneId = $zoneId";
        }

        $select = "select accountId, 1 as total";
        $where = $where . ' group by accountId';
        $start = $end = '';
        if(!empty($month)) {
            if($month == 'last') {
                $start = date("Ymd",mktime(0,0,0,date("m")-1,1,date("Y")));
                $end = date("Ymd",mktime(23,59,59,date("m") ,0,date("Y")));
            } else if($month == 'third'){
                $start = date("Ymd",mktime(0,0,0,date("m")-2,1,date("Y")));
                $end = date('Ymd');
            }
        } else {
            $start = date("Ymd",mktime(0, 0 , 0,date("m"),1,date("Y")));
            $end = date('Ymd');
        }

        $res = $this->getMonthLoginCount($zoneId, $select, $where, $start, $end);
        return $res;
    }

    protected function getMonthLoginCount($zoneId, $select, $where, $start, $end) {
        $res = [];
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($start." +$j day")), $j++) {
            $_res = $this->_getLoginInfo($zoneId, $select, $where, $i);
            if(!empty($_res)) {
                $r = $this->format($_res);
                if (empty($res)) {
                    $res = $r;
                } else {
                    foreach ($r as $k => $v) {
                        if (array_key_exists($k, $res)) {
                            $res[$k] = $res[$k] + $v;
                        } else {
                            $res[$k] = $v;
                        }
                    }
                }
            }
        }
        return $res;
    }

    protected function _getPayInfo($select, $where, $date)
    {
        $connection = "order";
        $table = "pay$date";
        $sql = "$select from $table $where group by accountId";
        try {
            $res = DB::connection($connection)->select($sql);
            if ($res) {
                return $res;
            }
        } catch (QueryException $e) {
        }
        return false;
    }

    protected function _getLoginInfo($zoneId, $select, $where, $date)
    {
        $connection = "{$this->project}_bill";
        $pf = sprintf("%03s", intval($zoneId/1000));
        $db = "sdo_bill_app{$pf}_{$date}";
        $sql = "$select from $db.login $where";
        try {
            $res = DB::connection($connection)->select($sql);
            if ($res) {
                return $res;
            }
        } catch (QueryException $e) {
        }
        return false;
    }

    protected function format($arr)
    {
        $newArr = [];
        foreach ($arr as $k => $v) {
            $newArr[$v->accountId] = $v->total;
        }
        return $newArr;
    }
}
