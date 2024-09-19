<?php

namespace Xnhd\Core\Game;

use DB;

class UserService {

    public function __construct($project) {
        $this->project = $project;
    }

    public function getInfoByRoles($zoneId, $roles, $openTime, $endTime) {
        if(empty($zoneId)) {
            return [];
        }

        $roleStr = join(',', $roles);
        $where = "where ZoneID = {$zoneId} and RoleID in ($roleStr)";
        $res = [];
        $connection = "{$this->project}_bill";
        $pf = sprintf("%03s", intval($zoneId/1000));

        $start = date('Ymd', strtotime($openTime));
        $end = date('Ymd', strtotime($endTime));

        for($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($start . "+$j day")), $j++){
            $db = "sdo_bill_app{$pf}_{$i}";
            $sql = "select * from (select OnlineTime,RoleID from $db.loginlogout $where order by LogoutTime desc) as A group by RoleID";

            $dateKey = date('Y-m-d', strtotime($i));
            $res[$dateKey] = 0;
            try {
                if ($_res = DB::connection($connection)->select($sql)) {
                    $total = 0;
                    foreach ($_res as $v) {
                        $total +=  $v->OnlineTime;
                    }
                    $res[$dateKey] = $total;
                }
            } catch (QueryException $e) {
            }
        }
        return $res;
    }

    public function get_stay_time($time)
    {
        if(is_numeric($time)){
            $value = array(
                "years" => 0, "days" => 0, "hours" => 0,
                "minutes" => 0, "seconds" => 0,
            );
//            if($time >= 31556926){
//                $value["years"] = floor($time/31556926);
//                $time = ($time%31556926);
//            }
//            if($time >= 86400){
//                $value["days"] = floor($time/86400);
//                $time = ($time%86400);
//            }
            if($time >= 3600){
                $value["hours"] = floor($time/3600);
                $time = ($time%3600);
            }
            if($time >= 60){
                $value["minutes"] = floor($time/60);
                $time = ($time%60);
            }
            $value["seconds"] = floor($time);
            //return (array) $value;
            $res = $value["hours"] ."小时". $value["minutes"] ."分".$value["seconds"]."秒";
//            $t=$value["years"] ."年". $value["days"] ."天"." ". $value["hours"] ."小时". $value["minutes"] ."分".$value["seconds"]."秒";
            return $res;

        }else{
            return (bool) FALSE;
        }
    }
}

