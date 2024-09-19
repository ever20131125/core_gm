<?php
namespace Xnhd\Core\Game;
use DB;

class TaskService{
    public function __construct($project){
        $this->project = $project;
    }

    public function getTaskInfos($zoneId, $taskType, $taskSection, $source = -1, $channelList, $openTime = '', $endTime = '') {
        $res = [];

        if(empty($zoneId)){
            return $res;
        }

        $playerSer = new PlayerService($this->project);
        $allRoles = $playerSer->getBaseDistribution($zoneId, ['RoleID'], $source, $channelList, $openTime, $endTime);

        //总创角
        $totalRole = count($allRoles);
        if(empty($totalRole)) {
            return $res;
        }

        foreach ($allRoles as $k => $v) {
            $_tableKey = fmod($k, 16);
            $ret[$_tableKey][] = $k;
        }

        $where = " WHERE TaskType = '$taskType' ";
        if($taskType == 1) {
            $res = $this->getBreakTaskInfos($zoneId, $where, $taskSection, $totalRole, $ret);
            return ['break' => $res];
        }elseif($taskType == 2) {
            $res = $this->getMainTaskInfos($zoneId, $where, $totalRole, $ret);
            return ['main' => $res];
        }
        return [];

    }

    /**
     * 通关任务玩家分布情况
     * @param $zoneId
     * @param $where
     * @param $taskSection
     * @return mixed
     */
    protected function getBreakTaskInfos($zoneId, $where, $taskSection, $totalRole, $roleArr){
        $res = [];
        $startId = 10100001  + ($taskSection - 1) * 10;
        $endId = $startId + 10;
        for($i = $startId; $i < $endId; $i++) {
            $taskIDArr[] = $i;
        }
        $taskIDStr = implode(',', $taskIDArr);
        $where .= "and TaskID in ($taskIDStr)";
        $select = 'select count(distinct(RoleID)) as total, TaskID ';

        $clearance = $receive = $star = [];
        $connection = "{$this->project}_task_{$zoneId}";
        if (config('database.connections.'.$connection)) {
            $conn = DB::connection($connection);
            for ($i=0; $i < 16; $i++) {
                if(!empty($roleArr[$i])) {
                    $_roleArr = $roleArr[$i];
                    $roleStr = join($_roleArr, ',');
                    $where .= " and RoleID in ($roleStr) ";

                    $table = 'playerRecTaskInfo'.sprintf("%02s", $i);

                    $clearance_sql  = "$select from $table $where and State in (1,2) group by TaskID";
                    $receive_sql  = "$select from $table $where and State = 2 group by TaskID";
                    $star_sql  = "$select, TaskStar from $table $where and State in (1,2) group by TaskID, TaskStar";

                    $clearance_res = $conn->select($clearance_sql);
                    $receive_res = $conn->select($receive_sql);
                    $star_res = $conn->select($star_sql);

                    foreach ($clearance_res as $_c) {
                        if(empty($clearance[$_c->TaskID])) {
                            $clearance[$_c->TaskID] = $_c->total;
                        }else {
                            $clearance[$_c->TaskID] += $_c->total;
                        }
                    }
                    foreach ($receive_res as $_c) {
                        if(empty($receive[$_c->TaskID])) {
                            $receive[$_c->TaskID] = $_c->total;
                        }else {
                            $receive[$_c->TaskID] += $_c->total;
                        }
                    }

                    foreach ($star_res as $s) {
                        if(empty($star[$s->TaskID])) {
                            foreach ([1,2,3] as $_k) {
                                $star[$s->TaskID][$_k] = ($s->TaskStar == $_k) ? $s->total : 0;
                            }
                        }else{
                            foreach ([1,2,3] as $_k) {
                                if(empty($star[$s->TaskID][$_k])) {
                                    $star[$s->TaskID][$_k] =  ($s->TaskStar == $_k) ? $s->total : 0;
                                }else {
                                    if($s->TaskStar == $_k) {
                                        $star[$s->TaskID][$_k] +=  $s->total;
                                    }
                                }
                            }
                        }
                    }
                }
            }

            //format task data
            if(!empty($clearance) && !empty($receive) && !empty($star)) {
                foreach ($clearance as $key => $value) {
                    $section = floor(($key - 10100001) / 10) + 1;
                    $_part = floor(($key - 10100000) % 10);
                    $part = empty($_part) ? 10 : $_part;

                    $firstPart = ($section - 1) * 10 + 10100001;

                    $res[$key] = [
                        'section' => "第" . $section . "章",
                        'part' => "第" . $part . "节",
                        'clearance' => $value,
                        'clearancePer' => !empty($totalRole) ? floor($value * 100 / $totalRole)  . '%' : '0%',
                        'sectionPer' => !empty($totalRole) ? floor($value * 100 / $clearance[$firstPart])  . '%' : '0%',
                        'start' => [
                            1 => !empty($value) ? floor($star[$key][1] * 100 / $value) . '%' : '0%',
                            2 => !empty($value) ? floor($star[$key][2] * 100 / $value) . '%' : '0%',
                            3 => !empty($value) ? floor($star[$key][3] * 100 / $value) . '%' : '0%',
                        ],
                        'receivePer' => !empty($value) ? floor($receive[$key] * 100 / $value) . '%' : '0%',
                    ];
                }
            }
        }
        return $res;

    }

    /**
     * 主线任务玩家分布情况
     * @param $zoneId
     * @param $where
     * @param $totalRole
     * @return array
     */
    protected function getMainTaskInfos($zoneId, $where, $totalRole, $roleArr){
        $res = [];
        $where .= "and floor(TaskID / 100000) = 201";
        $select = 'select count(distinct(RoleID)) as total, TaskID ';
        $complete = $receive = $clearance = [];
        $connection = "{$this->project}_task_{$zoneId}";
        if (config('database.connections.'.$connection)) {
            $conn = DB::connection($connection);
            for ($i=0; $i < 16; $i++) {
                if(!empty($roleArr[$i])) {
                    $_roleArr = $roleArr[$i];
                    $roleStr = join($_roleArr, ',');
                    $where .= " and RoleID in ($roleStr) ";

                    $table = 'playerRecTaskInfo' . sprintf("%02s", $i);

                    $clearance_sql = "$select from $table $where and State in (1,2) group by TaskID";
                    $complete_sql = "$select from $table $where and State = 1 group by TaskID";
                    $receive_sql = "$select from $table $where and State = 2 group by TaskID";

                    $clearance_res = $conn->select($clearance_sql);
                    $complete_res = $conn->select($complete_sql);
                    $receive_res = $conn->select($receive_sql);

                    foreach ($clearance_res as $_c) {
                        if (empty($clearance[$_c->TaskID])) {
                            $clearance[$_c->TaskID] = $_c->total;
                        } else {
                            $clearance[$_c->TaskID] += $_c->total;
                        }
                    }
                    foreach ($complete_res as $_c) {
                        if (empty($complete[$_c->TaskID])) {
                            $complete[$_c->TaskID] = $_c->total;
                        } else {
                            $complete[$_c->TaskID] += $_c->total;
                        }
                    }
                    foreach ($receive_res as $_c) {
                        if (empty($receive[$_c->TaskID])) {
                            $receive[$_c->TaskID] = $_c->total;
                        } else {
                            $receive[$_c->TaskID] += $_c->total;
                        }
                    }
                }
            }

            //format task data
            if(!empty($complete) && !empty($receive) && !empty($clearance)) {
                foreach ($complete as $key => $value) {
                    $res[$key] = [
                        'complete' => $value,
                        'completePer' => !empty($totalRole) ? floor($value * 100 / $totalRole)  . '%' : '0%',
                        'receivePer' => !empty($clearance[$key]) &&  !empty($receive[$key]) ? floor($receive[$key]  * 100 / $clearance[$key])  . '%' : '0%',
                    ];
                }
            }
        }

        return $res;
    }
}
