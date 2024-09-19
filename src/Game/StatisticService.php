<?php
namespace Xnhd\Core\Game;

use DB;
use Illuminate\Database\QueryException;

class StatisticService{

    public function __construct($project){
        $this->project = $project;
    }

    public function getRealTimeInfo($zoneId, $time, $iosSource = 51, $androidSource = 52){
        $res      = [];
        $date     = date('Ymd', strtotime($time));
        $where    = "where ZoneID='$zoneId' ";
        $onlineDb = 'online' . $date;

        $connection = "{$this->project}_monitor";
        $count      = "select sum(Online) as online from $onlineDb $where group by BillTime order by BillTime desc limit 1";
        $ios_count  = "select Online as iosonline from $onlineDb $where and Source=$iosSource order by BillTime desc limit 1";
        $an_count   = "select Online as andonline from $onlineDb $where and Source=$androidSource order by BillTime desc limit 1";
        try{
            $allOnline = DB::connection($connection)->select($count);
            $anOnline  = DB::connection($connection)->select($an_count);
            $iosOnline = DB::connection($connection)->select($ios_count);
            $result    = array_merge($allOnline, $anOnline, $iosOnline);
            for($i = 0; $i < count($result); $i++){
                foreach($result[$i] as $k => $v){
                    $res[$k] = $v;
                }
            }
            $res['serverid'] = $zoneId;
            $res['date']     = date('Y-m-d H:i:s', time());
        }
        catch(QueryException $e){
        }
        return $res;
    }

    public function getRegisterInfo($time, $iosSource = 51, $androidSource = 52){
        $res        = [];
        $date       = date('Y-m-d', strtotime($time));
        $connection = "xnhd_base";
        $select     = "created_at as date, id as uid, openId as pid from accounts";
        $ios_sql    = "select $select where datediff(created_at, '$date')=0 and pfId=$iosSource";
        $an_sql     = "select $select where datediff(created_at, '$date')=0 and pfId=$androidSource";

        $res = $this->getMergeData($connection, $ios_sql, $an_sql);
        return $res;
    }

    protected function getLoginRecords($zoneId, $time, $iosSource = 51, $androidSource = 52) {
        $res        = [];
        $date       = date('Y-m-d', strtotime($time));
        $time      = date('Ymd', strtotime($time));
        $pfId = floor($zoneId/1000);
        $where      = "where ZoneID='$zoneId' and  datediff(LoginTime, '$date')=0";
        $connection = "{$this->project}_bill";
        $db = "sdo_bill_app".sprintf('%03s', $pfId).'_'.$time;
        $select     = "LoginTime as date, ZoneID as serverid, AccountID as uid, IP as ip, Level as level, LoginChannel as Channel from $db.login";
        $loginsql    = "select $select $where";
        $loginsql    = "select LoginTime as date, ZoneID as serverid, AccountID as uid, IP as ip, Level as level, LoginChannel as Channel from $db.login group by uid";

        try{
            $loginTotal = DB::connection($connection)->select("select count(1) as total from $db.login $where");
            $total = $loginTotal[0]->total;
            $limit = 100000;
            for ($offset=0; $offset < $total; $offset+=$limit) {
                $loginres = DB::connection($connection)->select("$loginsql limit $limit offset $offset");

                if(!empty($loginres)){
                    for($i = 0; $i < count($loginres); $i++){
                        if($loginres[$i]->Channel == $iosSource){
                            $o = ['os' => 'IOS'];
                            foreach($loginres[$i] as $k => $v){
                                if ($k != 'Channel') $o[$k]   = $v;
                            }
                            $res[] = $o;
                        }elseif($loginres[$i]->Channel == $androidSource){
                            $o = ['os' => 'Android'];
                            foreach($loginres[$i] as $k => $v){
                                if ($k != 'Channel') $o[$k]   = $v;
                            }
                            $res[] = $o;
                        }
                    }
                }
            }
        }
        catch(QueryException $e){
        }

        return $res;
    }

    protected function getUids($uids) {
        $pidMap = [];
        if(!empty($uids)){
            $uidstr = join(',', $uids);
            $sql    = "select id as uid, openId as pid from accounts where id in ($uidstr)";
            try{
                $pidres = DB::connection("xnhd_base")->select($sql);
            }
            catch(QueryException $e){
            }
            foreach ($pidres as $_p) {
                $pidMap[$_p->uid] = $_p->pid;
            }
        }
        return $pidMap;
    }

    public function getloginInfo($zoneId, $time, $iosSource = 51, $androidSource = 52){
        $res = $this->getLoginRecords($zoneId, $time, $iosSource, $androidSource);

        $uids = [];
        foreach($res as $r){
            $uids[] = $r['uid'];
        }
        $pidMap = $this->getUids($uids);
        foreach($res as &$_r){
            $_r['pid'] = !empty($pidMap[$_r['uid']]) ? $pidMap[$_r['uid']] : '';
        }

        return $res;
    }

    public function getPayInfo($zoneId, $time, $rawLike = ''){
        $res        = [];
        $date       = date('Ym', strtotime($time));
        $time       = date('Y-m-d', strtotime($time));
        $where      = "where ZoneID='$zoneId' and  datediff(orderTime, '$time')=0 and  payStatus =2 and ";
        $connection = "order";
        $db         = "pay$date";
        $select     = "orderTime as date, ZoneID as serverid, accountId as uid, openId as pid, money as amt from $db";
        $ios_sql    = "select $select $where channelName='ios'";
        $an_sql     = "select $select $where channelName='android'";
        $third_sql     = "select $select $where channelName != 'ios' and channelName != 'android'";
        if(!empty($rawLike)) {
            $ios_sql    = "select $select $where channelName='ios' and rawData like '%{$rawLike}%'";
            $an_sql     = "select $select $where channelName='android' and rawData like '%{$rawLike}%'";
            $third_sql     = "select $select $where channelName != 'ios' and channelName != 'android' and rawData like '%{$rawLike}%'";
        }
        $res = $this->getMergeData($connection, $ios_sql, $an_sql, $third_sql);
        return $res;
    }

    protected function getMergeData($conn, $ios_sql, $an_sql, $third_sql=''){
        $res = [];
        try{
            $iosres = DB::connection($conn)->select($ios_sql);
            $anres  = DB::connection($conn)->select($an_sql);
            if(!empty($third_sql)){
                $thirdres = DB::connection($conn)->select($third_sql);
            }
        }
        catch(QueryException $e){
        }
        if(!empty($iosres)){
            for($i = 0; $i < count($iosres); $i++){
                foreach($iosres[$i] as $k => $v){
                    $res[$i][$k]   = $v;
                    $res[$i]['os'] = 'IOS';
                }
            }
        }
        if(!empty($anres)){
            for($a = 0; $a < count($anres); $a++){
                foreach($anres[$a] as $_k => $_v){
                    $res[$a + count($iosres)][$_k]  = $_v;
                    $res[$a + count($iosres)]['os'] = 'Android';
                }
            }
        }
        if(!empty($thirdres)){
            $num = count($anres)+count($iosres);
            for($b = 0; $b < count($thirdres); $b++){
                foreach($thirdres[$b] as $key => $value){
                    $res[$b + $num][$key]  = $value;
                    $res[$b + $num]['os'] = 'Others';
                }
            }
        }
        return $res;
    }
}
