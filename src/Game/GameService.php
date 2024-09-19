<?php
/**
 * Created by PhpStorm.
 * User: wufl
 * Date: 2018/7/17
 * Time: 10:04
 */

namespace Xnhd\Core\Game;

use DB;
use Illuminate\Database\QueryException;

class GameService {

    public function __construct($project) {
        $this->project = $project;
    }

    public function getMusicInfo($openTime, $endTime, $zoneId = '', $musicId = '', $channel = ''){
        if(empty($zoneId)){
            return [];
        }

        $where = "where ZoneID = $zoneId ";
        if (!empty($channel)) {
            $where .= " and Source = '$channel'";
        }

        if (!empty($musicId)) {
            $where .= " and MusicID = '$musicId'";
            $user_where = $where;
        } else {
            $where .= " group by MusicID";
            $user_where = $where . ", RoleID";
        }



        // The song USES the personnel distribution.
        $user_select = "select distinct(RoleID) , MusicID";

        // Song use frequency distribution.
        $use_select = "select count(1) as total, MusicID";
//
//        // Song score distribution
//        $score_select = "select count(case when Grade = 0 then Grade end) as E, count(case when Grade = 1 then Grade end) as D, count(case when Grade = 2 then Grade end) as C, count(case when Grade =3 then Grade end) as B, count(case when Grade = 4 then Grade end) as A, count(case when Grade = 5 then Grade end) as S, count(case when Grade = 6 then Grade end) as SS, count(case when Grade = 7 then Grade end) as SSS,  MusicID";

        $start = date('Ymd', strtotime($openTime));
        $end = date('Ymd', strtotime($endTime));

        $user_res = $use_res = $score_res = [];
        $playerSer = new PlayerService($this->project);
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($start." +$j day")), $j++) {

            $user_res = array_merge($user_res, $playerSer->getBillInfo($zoneId, $i, $user_select, "balance", $user_where));
            $use_res = $this->array_value_sum($use_res, $playerSer->getBillInfo($zoneId, $i, $use_select, "balance", $where), ['total']);
//            $score_res = $this->array_value_sum($score_res, $playerSer->getBillInfo($zoneId, $i, $score_select, "balance", $where), ['E', 'D', 'C', 'B', 'A', 'S', 'SS', 'SSS']);
        }

        $user_res = $this->format_UserInfo($user_res, 'MusicID');
        $use_res = $this->format($use_res);
//        $score_res = $this->format($score_res);
        $musicNames = $this->getMusicName();
        //merge data
        $res = [];
//        if(!empty($user_res) && !empty($use_res) && !empty($score_res)) {
        if(!empty($user_res) && !empty($use_res)) {
            foreach($user_res as $k => $v) {
                if(!empty($k)) {
                    $res[] = [
                        'musicId' => $k,
                        'musicName' => isset($musicNames[$k]) ? $musicNames[$k] : '',
                        'users' => $v['total'],
                        'useTotal' => $use_res[$k]['total'],
//                        'SSS' => $score_res[$k]['SSS'],
//                        'SS' => $score_res[$k]['SS'],
//                        'S' => $score_res[$k]['S'],
//                        'A' => $score_res[$k]['A'],
//                        'B' => $score_res[$k]['B'],
//                        'C' => $score_res[$k]['C'],
//                        'D' => $score_res[$k]['D'],
//                        'E' => $score_res[$k]['E'],
                    ];
                }
            }
        }
        return $res;
    }

    /**
     * 格式化sql获得的结果集
     * @param $array
     * @param string $word
     * @param bool $arrType
     * @return array
     */
    protected function format($array, $word = '', $arrType = true) {
        if(!empty($word)) {
            if($arrType) {
                foreach ($array as $arr) {
                    $res[$arr[$word]] = $arr;
                }
            } else {
                foreach ($array as $arr) {
                    $res[$arr->$word] = (array)$arr;
                }
            }

        }else {
            foreach ($array as $k => $arr) {
                $res[$k] = $arr;
            }
        }

        return isset($res) ? $res : [];
    }

    protected function getMusicName() {
        $file = app()->publicPath().'/default/xml/music.xml';
        $xmlstr = file_get_contents($file);
        $xml = simplexml_load_string($xmlstr);

        $xmlObj = $xml->musics->music;
        $res = [];
        foreach ($xmlObj as $m) {
            $_m = get_object_vars($m);
            $key   =  $_m['@attributes']['id'];
            $value =  $_m['@attributes']['songname'];
            $res[$key] = $value;
        }
        return $res;
    }

    protected function array_value_sum($array1, $arr2, $_keys = [], $k = 'MusicID') {
        $res = [];
        $array2 = $this->format($arr2, $k);
        $keys = array_merge(array_keys($array1), array_keys($array2));
        foreach ($keys as $key) {
            if(array_key_exists($key, $array1) && array_key_exists($key, $array2)) {
                foreach ($_keys as $_k) {
                    $res[$key][$_k] = $array1[$key][$_k] + $array2[$key][$_k];
                }
            }

            if(array_key_exists($key, $array1) && !array_key_exists($key, $array2)) {
                foreach ($_keys as $_k) {
                    $res[$key][$_k] = $array1[$key][$_k];
                }
            }
            if(!array_key_exists($key, $array1) && array_key_exists($key, $array2)) {
                foreach ($_keys as $_k) {
                    $res[$key][$_k] = $array2[$key][$_k];
                }
            }
        }
        return $res;
    }

    protected function format_UserInfo($user_res, $k) {
        $res = [];
        foreach ($user_res as $_userRes) {
            $key = $_userRes[$k];
            if(array_key_exists($key, $res)) {
                if(!in_array($_userRes['RoleID'], $res[$key]['RoleIds'])) {
                    $res[$key]['total'] += 1;
                    $res[$key]['RoleIds'][] = $_userRes['RoleID'];
                }
            }else{
                $res[$key]['total'] = 1;
                $res[$key]['RoleIds'][] = $_userRes['RoleID'];
            }
        }
        return $res;
    }

    public function getDancerInfoByRoleId($zoneId, $roleId) {
        $res = [];
        $connection = $this->project . "_info_$zoneId";
        $db = 'dancer' . sprintf("%02s", intval($roleId % 64));
        if($dbConf = config("database.connections.$connection")) {
            $base_sql = "select count(DancerID) as total, DancerID, DancerName from sdo_info.$db  WHERE RoleID = $roleId group by DancerID";

            try{
                $base_result = DB::connection($connection)->select($base_sql);
            }catch(QueryException $e) {
            }

            $socre_sql = "select count(case when DancerRarity = 1 then DancerRarity end) as B, count(case when DancerRarity = 2 then DancerRarity end) as A, count(case when DancerRarity = 3 then DancerRarity end) as S, count(case when DancerRarity = 4 then DancerRarity end) as SS, count(case when DancerRarity = 5 then DancerRarity end) as SSS,  DancerID from sdo_info.$db  WHERE RoleID = $roleId  group by DancerID";

            try{
                $socre_result = DB::connection($connection)->select($socre_sql);
            }catch(QueryException $e) {
            }

            $dancerRarityInfo = config('default.DancerAwake');
            foreach ($dancerRarityInfo as $d => $r) {
                $awake_sql = "select count(DancerID) as total, DancerID from sdo_info.$db  WHERE RoleID = $roleId  and DancerID = $d and DancerRarity != $r";
                try{
                    $awake_result = DB::connection($connection)->select($awake_sql);
                    foreach ($awake_result as $_k => $_v) {
                        $awakeInfo[$d] = $_v->total;
                    }
                }catch(QueryException $e) {
                }
            }

            $socre_result = $this->format($socre_result, 'DancerID', false);
            if(!empty($base_result) && !empty($socre_result) && !empty($awakeInfo)) {
                foreach ($base_result as $v) {
                    $_r['DancerID'] = $v->DancerID;
                    $_r['DancerName'] = $v->DancerName;
                    $_r['total'] = $v->total;
                    $_r['socre'] = $socre_result[$v->DancerID];
                    $_r['awake'] = $awakeInfo[$v->DancerID];
                    $res[] =$_r;
                }
            }
        }

        return $res;
    }

    public function getDancerInfoByType($zoneId, $dancerGetType) {
        if(in_array($dancerGetType,  ['DancerRarity', 'DancerFavorLevel'])) {
            $res = $this->_getBaseInfo($zoneId, $dancerGetType);
            //save data
            //"{"3":18,"1":72,"5":62,"2":18,"4":10}"
        }else if(in_array($dancerGetType, ['DancerAwake', 'DancerLevel'])) {
            $res = $this->getdancerInfoByCond($zoneId, $dancerGetType);
            //save data
            //"{"":0,"1":34,"2":98,"3":95,"4":77,"5":86}"
        }else if($dancerGetType == 'DancerCount') {
            $res = $this->getdancerCountInfo($zoneId);
            //save data
            //"{"1":{"1":1,"3":1,"5":1,"4":2,"2":2},"2":{"2":1,"5":1,"3":1,"4":1},"3":{"3":2,"5":1},"4":{"4":1,"5":1},"5":{"5":2}}"
        }

        return json_encode($res);
    }

    protected function _getBaseInfo($zoneId, $column) {
        $res = [];

        if(empty($zoneId)) {
            return [];
        }

        $_res = [];
        $connection = $this->project . "_info_$zoneId";
        if($dbConf = config("database.connections.$connection")) {
            for ($i = 0; $i < 64; $i++) {
                $table = 'dancer' . sprintf('%02s', $i);
                $sql = "select count(RoleID) as total, $column ,DancerID from $table group by $column,DancerID";
                try {
                    $ret = DB::connection($connection)->select($sql);
                    if(!empty($ret)) {
                        foreach ($ret as $k => $v) {
                            if(isset($_res[$v->DancerID][$v->$column])) {
                                $res[$v->DancerID][$v->$column] += $v->total;
                            }else {
                                $res[$v->DancerID][$v->$column] = $v->total;
                            }
                        }
                    }
                }catch (QueryException $e) {}

            }
        }

        return $res;
    }

    protected function getdancerCountInfo($zoneId) {
        $res = [];

        if(empty($zoneId)) {
            return [];
        }

        $connection = $this->project . "_info_$zoneId";
        if($dbConf = config("database.connections.$connection")) {
            for ($i = 0; $i < 64; $i++) {
                $table = 'dancer' . sprintf('%02s', $i);
                $sql = "select count(DancerID) as total, RoleID  from $table group by RoleID";
                try {
                    $ret = DB::connection($connection)->select($sql);
                    if(!empty($ret)) {
                        foreach ($ret as $k => $v) {
                            $_res[$v->total]['roleId'][] = $v->RoleID;
                        }
                    }
                }catch (QueryException $e) {}

            }

            foreach ($_res as $_k => $_v) {
                $res[$_k] = count($_v['roleId']);
            }
        }

        return $res;
    }

    /**
     * 歌舞姬稀有度不为原始稀有度即为觉醒, 歌舞姬等级由经验值决定
     * @param $zoneId
     * @return array
     */
    protected function getdancerInfoByCond($zoneId, $dancerGetType) {
        $res = [];

        if(empty($zoneId)) {
            return [];
        }

        $select = "select count(RoleID) as total, DancerID";

        $connection = $this->project . "_info_$zoneId";
        if($dbConf = config("database.connections.$connection")) {
            for ($i = 0; $i < 64; $i++) {
                $table = 'dancer' . sprintf('%02s', $i);
                $dancerRarityInfo = config('default.' . $dancerGetType);
                foreach ($dancerRarityInfo as $d => $r) {
                    if($dancerGetType == 'DancerAwake') {
                        $sql = "$select from $table  WHERE DancerID = $d and DancerRarity != $r";
                    }else if($dancerGetType == 'DancerLevel') {
                        $sql = "$select from $table  WHERE DancerID = $d and DancerRarity BETWEEN {$r['start']} and {$r['end']}";
                    }
                    try {
                        $ret = DB::connection($connection)->select($sql);
                        if($ret[0]->total != 0) {
                            foreach ($ret as $k => $v) {
                                if(!isset($res[$v->DancerID])) {
                                    $res[$v->DancerID] = $v->total;
                                }else {
                                    $res[$v->DancerID] += $v->total;
                                }
                            }
                        }
                    } catch (QueryException $e) {
                    }

                }
            }
        }

        return $res;
    }

    /**
     * 每天领取好感度任务的玩家数（精确至任务数量）和每天解锁歌舞姬剧情的玩家数（精确至剧情数量）
     * @param $zoneId
     * @param $openTime
     * @param string $endTime
     * @param $type
     * @return array
     */
    public function getDancerTaskDailyInfo($zoneId, $openTime, $endTime = '', $type) {
        $res = [];
        $i = date('Ymd', strtotime($openTime));
        if($type == 'DancerMission') {
            $column = 'MissionID';
            $state = 1;
        }else if($type == 'DancerMemory') {
            $column = 'MemroyID';
            $state = 1;
        }
        $table = strtolower($type);

//        $start = date('Ymd', strtotime($openTime));
//        $end = date('Ymd', strtotime($endTime));
//        for($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($start . "+$j day")), $j++) {
        $connection = "{$this->project}_bill";
        $db = "sdo_bill_{$i}";
        $sql = "select count(RoleID) as total, taskNum from (select count({$column}) as taskNum, RoleID from $db.$table where ZoneID = $zoneId and State = $state group by RoleID) as A group by taskNum";
        try {
            $res = DB::connection($connection)->select($sql);
        } catch (QueryException $e) {
        }
//        }
        return $res;
    }

    /**
     * 每天解锁歌舞姬的玩家数统计和每天赠送歌舞姬礼物的玩家数
     * @param $zoneId
     * @param $openTime
     * @param $endTime
     * @param $type
     * @return array
     */
    public function getDancerDailyUserInfo($zoneId, $openTime, $endTime, $type) {
        $res = [];
        $playerSer = new PlayerService($this->project);

        $table = strtolower($type);
        $where = " where ZoneID = $zoneId ";

        if($type == 'DancerFavor') {
            $where .= " and ItemID != '' ";
        }

        $start = date('Ymd', strtotime($openTime));
        $end = date('Ymd', strtotime($endTime));
        for($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($start . "+$j day")), $j++) {
            $total = $playerSer->getBillInfoTotal($zoneId, $i, $table, $where, false, $count = 'distinct(RoleID)');
            $date = date('Y-m-d', strtotime($i));
            $res[$date] = $total;
        }
        return $res;
    }

    /**
     * 每天使用歌舞姬跳舞的玩家数（精确至每个歌舞姬的使用量），统计包括DancerID_One，DancerID_Two，DancerID_Friend
     * @param $zoneId
     * @param $openTime
     * @param $endTime
     * @return array
     */
    public function getDancerUseInfo($zoneId, $openTime, $endTime = '') {
        $res = [];
        $playerSer = new PlayerService($this->project);

        $i = date('Ymd', strtotime($openTime));
        $condition = " where ZoneID = $zoneId group by RoleID";

        $keys = ['DancerID_One', 'DancerID_Two', 'DancerID_Friend'];
        $data = [];
        foreach ($keys as $key) {
            $select = " select RoleID, $key as DancerID ";
            $_res = $playerSer-> getBillInfo($zoneId, $i, $select, 'balance', $condition);
            if(!empty($_res)) {
                foreach ($_res as $k => $v) {
                    if(empty($data[$v['DancerID']])) {
                        $data[$v['DancerID']][] = $v['RoleID'];
                    }else {
                        if(!in_array($v['RoleID'], $data[$v['DancerID']])) {
                            $data[$v['DancerID']][] = $v['RoleID'];
                        }
                    }
                }
            }
        }

        foreach ($data as $_k => $_v) {
            $res[$_k] = count($_v);
        }
//        $select = " select count(distinct(RoleID)) as total, DancerID_One as DancerID";
//        $condition = " where ZoneID = $zoneId group by DancerID_One";
//

////        $start = date('Ymd', strtotime($openTime));
////        $end = date('Ymd', strtotime($endTime));
////        for($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($start . "+$j day")), $j++) {
//
//            foreach ($_res as $v) {
//                if(empty($res[$v['DancerID']])) {
//                    $res[$v['DancerID']] = $v['total'];
//                }else {
//                    $res[$v['DancerID']] += $v['total'];
//                }
//            }
//        }
        return $res;
    }

    /**
     * 进行舞魂技能升级的玩家数和解锁舞魂技能的玩家数
     * @param $zoneId
     * @param $openTime
     * @param string $endTime
     * @param $type
     * @return array
     */
    public function getSoulSkillInfo($zoneId, $openTime, $endTime = '', $type) {
        $res = [];

        if($type == 'SoulUnlock') {
            $select = "select count(distinct(RoleID)) as total, SkillID ";
            $condition = " where ZoneID = $zoneId and SkillLevel = 1 group by SkillID";

        }else if($type == 'SoulLevelUp') {
            $select = "select count(distinct(RoleID)) as total ";
            $condition = " where ZoneID = $zoneId and SkillLevel != 1";
        }

        $playerSer = new PlayerService($this->project);
        $i = date('Ymd', strtotime($openTime));
        $res = $playerSer-> getBillInfo($zoneId, $i, $select, 'soulskill', $condition);

        return $res;
    }

    /**
     * 每天获取武魂信息
     * @param $zoneId
     * @param $roleId
     * @param $soulGetType
     * @return array
     */
    public function getSoulDailyInfo($zoneId, $roleId, $soulGetType) {
        $res = $ret = [];

        $connection = $this->project . "_item_$zoneId";
        if($dbConf = config("database.connections.$connection")) {
            if(!empty($roleId)) {
                $table = 'itemList' . sprintf("%02s", intval($roleId % 64));
                $sql = " select count(distinct(RoleID)) as total, ItemID from $table group by ItemID";
                try {
                    $ret = DB::connection($connection)->select($sql);

                } catch (QueryException $e) {
                }
            }
//            }else {
//                for ($i = 0; $i < 64; $i++) {
//                    $table = 'itemList' . sprintf('%02s', $i);
//                    $sql = "select count(DancerID) as total, RoleID  from $table group by RoleID";
//                    try {
//                        $ret = DB::connection($connection)->select($sql);
//
//                    }catch (QueryException $e) {}
//
//                }
//            }
        }

        if($soulGetType == 'SoulRarity') {
            $res = $this->getSoulRarityData($ret);

        }else if($soulGetType == 'SoulAwake') {
            $res = $this->getSoulAwakeData($ret);
        }

        return $res;
    }

    protected function getSoulRarityData($data) {
        $res = [];
        if(!empty($data)) {
            $keys = ['R', 'SR', 'SSR'];
            foreach ($keys as $key) {
                foreach ($data as $v) {
                    $rarity = config('default.dancer_soulSetting.' . $v->ItemID . '.rarity');
                    if(!empty($rarity) && $rarity == $key) {
                        if(empty($res[$key])) {
                            $res[$key] = $v->total;
                        }else {
                            $res[$key] += $v->total;
                        }
                    }
                }
            }
        }
        return $res;
    }

    protected function getSoulAwakeData($data) {
        $res = [];
        if(!empty($data)) {
            $keys = [1, 2, 3, 4];
            foreach ($keys as $key) {
                foreach ($data as $v) {
                    if(config('default.dancer_soulSetting.' . $v->ItemID . '.awake') == $key) {
                        if(empty($res[$key])) {
                            $res[$key] = $v->total;
                        }else {
                            $res[$key] += $v->total;
                        }
                    }
                }
            }
        }
        return $res;
    }

    /**
     * 模式和玩法统计
     * @param $zoneId
     * @param $type
     * @param $openTime
     * @param $endTime
     * @param $gameModeId
     * @return array
     */
    public function getGameModeInfo($zoneId, $type, $openTime, $endTime, $gameModeId) {
        if(empty($zoneId)){
            return [];
        }

        $where = "where ZoneID = $zoneId ";
        if (!empty($gameModeId)) {
            $where .= " and $type = '$gameModeId'";
            $_where = $where;
            $user_where = $where;
        } else {
            $_where = $where .  " group by $type";
            $user_where = $_where . ", RoleID";
        }

        // The mode USES the personnel distribution.
        $user_select = "select distinct(RoleID), $type";

        // Mode use frequency distribution.
        $use_select = "select count(1) as total, $type";

        // Mode level distribution
        $score_select = "select count(case when MusicLevel = 1 then MusicLevel end) as Easy, count(case when MusicLevel = 2 then MusicLevel end) as Normal, count(case when MusicLevel = 3 then MusicLevel end) as Hard, $type";

        $start = date('Ymd', strtotime($openTime));
        $end = date('Ymd', strtotime($endTime));

        $user_res = $use_res = $score_res = [];
        $playerSer = new PlayerService($this->project);
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($start." +$j day")), $j++) {

            $user_res = array_merge($user_res, $playerSer->getBillInfo($zoneId, $i, $user_select, "balance", $user_where));
            $use_res = $this->array_value_sum($use_res, $playerSer->getBillInfo($zoneId, $i, $use_select, "balance", $_where), ['total'], $type);
            $score_res = $this->array_value_sum($score_res, $playerSer->getBillInfo($zoneId, $i, $score_select, "balance", $_where), ['Easy', 'Normal', 'Hard'], $type);

            $keys = [1,2,3];
            foreach ($keys as $key) {

                if(empty($data[$key])) {
                    $data[$key] = [];
                }
                $levelwhere = $where . " and MusicLevel = $key group by $type, RoleID ";
                $data[$key] = array_merge($data[$key], $playerSer->getBillInfo($zoneId, $i, $user_select, "balance", $levelwhere));
            }
        }

        $user_res = $this->format_UserInfo($user_res, $type);
        $use_res = $this->format($use_res);
        $score_res = $this->format($score_res);

        $Easy = $Normal = $Hard = [];
        if(!empty($data)) {
            $Easy = $this->format_UserInfo($data[1], $type);
            $Normal = $this->format_UserInfo($data[2], $type);
            $Hard = $this->format_UserInfo($data[3], $type);
        }

//        $musicNames = $this->getMusicName();
        //merge data
        $res = [];
        if(!empty($user_res) && !empty($use_res) && !empty($score_res)) {
            foreach($user_res as $k => $v) {
                if(!empty($k)) {
                    $res[] = [
                        'id' => $k,
                        'name' => '',
//                        'musicName' => isset($modeNames[$k]) ? $modeNames[$k] : '',
                        'users' => $v['total'],
                        'useTotal' => $use_res[$k]['total'],
                        'Easy' => [
                            'rNum' => !empty($Easy[$k]) ? $Easy[$k]['total'] : 0,
                            'total' => $score_res[$k]['Easy'],
                        ],
                        'Normal' => [
                            'rNum' => !empty($Normal[$k]) ?  $Normal[$k]['total'] : 0,
                            'total' => $score_res[$k]['Normal'],
                        ],
                        'Hard' => [
                            'rNum' => !empty($Hard[$k]) ?  $Hard[$k]['total'] : 0,
                            'total' => $score_res[$k]['Hard'],
                        ],
                    ];
                }
            }
        }
        return $res;
    }
}

