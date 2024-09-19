<?php

namespace Xnhd\Core\Game;

use DB;
//use Config;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;
use Xnhd\Core\Account\Account;
use Xnhd\Core\Game\CacheZoneService;
use Xnhd\Core\Traint\PortTrait;

class PlayerService
{
    use PortTrait;

    const QUANTITY_NUMBER = 1;
    const QUANTITY_1_DAY = 86400;
    const QUANTITY_3_DAY = 259200;
    const QUANTITY_7_DAY = 604800;
    const QUANTITY_15_DAY = 1296000;
    const QUANTITY_30_DAY = 2592000;
    const QUANTITY_FOREVER = 2147483647;

    public function __construct($project)
    {
        $this->project = $project;
    }

    public function getByAccount($serverId, $account)
    {
        return $this->_getInfo($serverId, 'account', $account);
    }

    public function getByRoleId($serverId, $roleId, $nRoleType = 3, $avatarType = 1)
    {
        return $this->_getInfo($serverId, 'roleId', $roleId, $nRoleType, $avatarType);
    }

    public function getByUID($serverId, $uid)
    {
        return $this->_getInfo($serverId, 'uid', $uid);
    }

    public function getByNickName($serverId, $nickname)
    {
        return $this->_getInfo($serverId, 'nickname', $nickname);
    }

    protected function getAccountByUID($uid)
    {            
        $account = Account::where('publisher', 'kuaishou')->select('id')->where('openId', $uid)->orderby('created_at')->first();
        // if (env('PROJECT') == 'sdo_ls') { // use heitao uid
        // } else { // use default openId
        //     $account = Account::where('publisher', 'xnhd')->where('openId', $uid)->first();
        // }
        return !empty($account->id) ? $account->id : false;
    }

    protected function getUID($accountId)
    {
        $account = Account::find($accountId);
        if (empty($account)) {
            return false;
        } elseif (env('PROJECT') == 'sdo') { // use heitao uid
            return $account->uid;
        } else { // use default openId
            return $account->openId;
        }
    }

    private function _getInfo($serverId, $type, $account, $nRoleType = 3, $avatarType = 1)
    {
        $params = [];

        $serverPortInfo = $this->_getGmServer($serverId);
        if (empty($serverPortInfo)) {
            return $params;
        }
        $master  = new SdoGameMaster($serverPortInfo['host'], $serverPortInfo['port']);
       
        if ($type == 'account') {
            $res = $master->getAccountInfo($serverId, $account);
        } elseif ($type == 'roleId') {
            $res     = $master->getRoleInfo($serverId, $account);
            // dd($res);
           
        } elseif ($type == 'uid') {
            $accountId = $this->getAccountByUID($account);
            if (empty($accountId)) {
                return false;
            }
            $res = $master->getAccountInfo($serverId, $accountId);
        } elseif ($type == 'nickname') {
            $roleId = $master->getRoleIDByNickName($serverId, $account);
            if (empty($roleId)) {
                return false;
            }
            $res     = $master->getRoleInfo($serverId, $roleId);
        }
        if ($res && $res->getNErrorCode() == 0) {
            $rolePub   = $res->getStRolePublicInfo();
            $rolePri   = $res->getStRolePrivateInfo();

            if (!empty($rolePub)) {
                $HeadPic = $rolePub->getStHeadPic();
                // dd($HeadPic);
                $params['public']['nRoleID']          = $rolePub->getNRoleID();
                $params['public']['szAccountID']      = $rolePub->getSzAccountID();
                $params['public']['UID']              = $this->getUID($rolePub->getSzAccountID());
                $params['public']['nZoneID']          = $rolePub->getNZoneID();
                $params['public']['szRoleName']       = $rolePub->getSzRoleName();
                $params['public']['gender']           = $rolePub->getGender();
                $params['public']['vipLevel']         = $rolePub->getVipLevel();
                $params['public']['nLevel']           = $rolePub->getNLevel();
                // $params['public']['nTotalOnlineTime'] = $rolePub->getNTotalOnlineTime(); // . '小时';
                $params['public']['roleType'] = $rolePub->getRoleType();
                $params['public']['HeadPic'] = !empty($HeadPic) ? $HeadPic->getSzFileUrl() : '';
                $params['public']['NameRGB']    = $rolePub->getNNameRGB();
                $params['public']['RoleType']    = $rolePub->getRoleType();
                $params['private']['NLastLogoutTime']         = !empty($rolePub->getNLastLogoutTime()) ? date('Y-m-d H:i:s', $rolePub->getNLastLogoutTime()) : $rolePub->getNLastLogoutTime();
            }

            if (!empty($rolePri)) {
                $params['public']['nRoleCreateTime']  = date('Y-m-d H:i:s', $rolePri->getNRoleCreateTime());
                $params['public']['Select']           = $rolePri->getNSelect();
                // $params['public']['nCity']              = $rolePri->getNCity();
                // $params['public']['ArrMyLabel']    = $rolePri->getArrMyLabel();
                // $params['public']['ArrFavLabel']    = $rolePri->getArrFavLabel();
                // $params['private']['nBirthday']          = !empty($rolePri->getNBirthday()) ? date('Y-m-d H:i:s', $rolePri->getNBirthday()) : $rolePri->getNBirthday();
                // $params['private']['SzVoice']            = $rolePri->getSzVoice();
                // $params['private']['szWords']            = $rolePri->getSzWords();
                $params['private']['nMoney']             = $rolePri->getNMoney();
                $params['private']['nScore']             = $rolePri->getNScore();
                $params['private']['nGCoin']             = $rolePri->getNGCoin();
                $params['private']['nQCoin']             = $rolePri->getNQCoin();
                $params['private']['nHCoin']             = $rolePri->getNHCoin();
                $params['private']['NStamina']             = $rolePri->getNStamina();
                $params['private']['nExperience']        = $rolePri->getNExperience();
                $params['private']['nAchieve']           = $rolePri->getNAchieve();
                // $params['private']['HighStage1']           = $rolePri->getNHighStage1();
                // $params['private']['HighStage2']              = $rolePri->getNHighStage2();
                // $params['private']['HighStage3']              = $rolePri->getNHighStage3();
                // $params['private']['nBestRank']          = $rolePri->getNBestRank();
                // $params['private']['nVIPCost']           = $rolePri->getNVIPCost();
                $params['private']['nTodayLoginCount']   = $rolePri->getNTodayLoginCount();
                $params['private']['nTodayOnlineTime']   = $rolePri->getNTodayOnlineTime();
                // $params['private']['nTodayStaminaCnt']   = $rolePri->getNTodayStaminaCnt();
                // $params['private']['nTodayStaminaSpend'] = $rolePri->getNTodayStaminaSpend();
                // $params['private']['nTodayGCoinCnt']     = $rolePri->getNTodayGCoinCnt();
                // $params['private']['nAccRoleCount']      = $rolePri->getNAccRoleCount();
                // $params['private']['nDataFlag']          = $rolePri->getNDataFlag();
                // $params['private']['nGuideStage']        = $rolePri->getNGuideStage();
                // $params['private']['BSVIP']           = $rolePri->getBSVIP();
                // $params['private']['szQQ']         = $rolePri->getSzQQ();
                // $params['private']['nTel']         = $rolePri->getNTel();
                // $params['private']['NUsedPlanID']         = $rolePri->getNUsedPlanID();
                // $params['private']['NBlackMallTimeLimit']         = $rolePri->getNBlackMallTimeLimit();
                // $params['private']['NCCScore']         = $rolePri->getNCCScore();
                // $params['private']['NMoneyMonthPay']         = $rolePri->getNMoneyMonthPay();
            }
        }
        return $params;
    }

    public function _formatItemsIdCount($itemUnit)
    {
        $res = [];
        foreach ($itemUnit as $item) {
            $nQuantity = !empty($item->getNQuantity()) ? $item->getNQuantity() : 0;
            $useMeans = $item->getUseMeans();
            $this->_formatQuantity($nQuantity, $useMeans);

            $obj['id'] = $item->getNItemID();
            $obj['quantity'] = $nQuantity;

            $res[] = $obj;
        }
        return $res;
    }

    public function _formatItems($zoneId, $itemUnit, $type = 0)
    {
        $res = [];
        $itemIds = [];
        foreach ($itemUnit as $item) {
            $itemIds[] = $item->getNItemID();
        }
        $itemInfos = $this->getItemInfos($zoneId, $itemIds);
        foreach ($itemUnit as $item) {
            $nQuantity = !empty($item->getNQuantity()) ? $item->getNQuantity() : 0;

            if (!empty($type)) {
                $itemId = $item->getNItemID();

                $obj['id'] = $itemId;
                $obj['name'] = !empty($itemInfos[$itemId]) ? $itemInfos[$itemId]->Name : $itemId;
                $obj['quantity'] = $nQuantity;
            } else {
                $useMeans = $item->getUseMeans();
                $this->_formatQuantity($nQuantity, $useMeans);
                $itemId = $item->getNItemID();

                $obj['id'] = $itemId;
                $obj['insId'] = $item->getNItemInsID();
                $obj['name'] = !empty($itemInfos[$itemId]) ? $itemInfos[$itemId]->Name : $itemId;
                $obj['quantity'] = $nQuantity;
                $obj['useMeans'] = $useMeans;
                $obj['ownTick'] = date('Y-m-d H:i:s', $item->getNOwnTick());
            }
            // $obj['num_quantity'] = $nQuantity;

            $res[] = $obj;
        }
        return $res;
    }

    private function _formatQuantity(&$quantity, &$usemeans)
    {
        switch ($usemeans) {
            case 1: // 计时
                $usemeans = '计时';
                if ($quantity == 2147483647) {
                    $quantity = '永久';
                } else {
                    $quantity = ceil($quantity / 86400) . '天';
                }
                break;
            case 2: // 计数
                $usemeans = '计数';
                $quantity = $this->_quan2desc($quantity, 'cnt');
                break;
            case 3: // 触发计时
                $usemeans = '触发计时';
                $quantity = $this->_quan2desc($quantity, 'cnt');
                break;
            case 4: // 体验道具
                $usemeans = '体验道具';
                $quantity = $quantity;
                break;
            default: // 无效/未知
                $usemeans = '无效/未知';
                $quantity = $quantity;
                break;
        }
    }

    private function _quan2desc($quantity, $day_or_cnt = 'day')
    {
        if ($day_or_cnt == 'day') {
            if ($quantity == 2147483647) {
                $k = config('language.quantity_unit.forever');
            } else {
                $k = intval($quantity / (24 * 3600));
                $k .= config('language.quantity_unit.day');
                $tmp = intval($quantity % (24 * 3600));
                $k .= intval($tmp / 3600);
                $k .= config('language.quantity_unit.hour');
            }
        } else {
            $k = $quantity . config('language.quantity_unit.cnt');
        }
        return $k;
    }

    public function getItemInfos($zoneId, $itemIds)
    {
        $res = [];

        if (empty($zoneId) || empty($itemIds)) {
            return $res;
        }

        $connection = "{$this->project}_config_{$zoneId}";
        if (config('database.connections.' . $connection)) {
            try {
                $items = DB::connection($connection)->select("select ItemID, Name from item where ItemID in (" . join(',', $itemIds) . ")");
                foreach ($items as $item) {
                    $res[$item->ItemID] = $item;
                }
            } catch (QueryException $e) {
            }
        }

        return $res;
    }

    public function getBaseDistribution($zoneId, $columns, $source = -1, $channelList, $openTime = '', $endTime = '', $_table = 'roleBase')
    {
        $res = [];

        if (empty($zoneId)) {
            return $res;
        }

        $where = ' WHERE 1';
        if (!empty($source)) {
            if ($source != -1) {
                $where .= " and Source = '$source'";
            }
            if ($source == -1 && !empty($channelList)) {
                $where .= " and Source in ($channelList)";
            }
        }

        if (!empty($openTime) && !empty($endTime)) {
            $open = strtotime($openTime);
            $end = strtotime($endTime);
            $where .= " and CreateTime between '$open' and '$end'";
        }

        $connection = "{$this->project}_player_{$zoneId}";
        if (config('database.connections.' . $connection)) {
            $conn = DB::connection($connection);
            for ($i = 0; $i < 64; $i++) {
                $table = $_table . sprintf("%02s", $i);
                $_res = $conn->select("select " . join(',', $columns) . " from $table $where");
                foreach ($_res as $info) {
                    foreach ($columns as $column) {
                        if (empty($res[$info->$column])) {
                            $res[$info->$column] = 0;
                        }
                        $res[$info->$column] += 1;
                    }
                }
            }
        }

        return $res;
    }

    public function getLevelDistribution($zoneId, $source = -1, $channelList = '', $openTime = '', $endTime = '')
    {
        return $this->getBaseDistribution($zoneId, ['Level'], $source, $channelList, $openTime, $endTime);
    }

    public function getAddressDistribution($zoneId, $source = -1, $channelList = '', $openTime = '', $endTime = '')
    {
        return $this->getBaseDistribution($zoneId, ['City'], $source, $channelList, $openTime, $endTime);
    }

    public function getVipDistribution($zoneId, $source = -1, $channelList = '')
    {
        return $this->getBaseDistribution($zoneId, ['VIPLevel'], $source, $channelList);
    }

    public function getPowerDistribution($zoneId, $source = -1, $channelList = '')
    {
        return $this->getBaseDistribution($zoneId, ['Power'], $source, $channelList);
    }

    public function getGuideLose($zoneId, $startDate = '', $endDate = '', $source = -1)
    {
        $res = [];

        if (empty($zoneId)) {
            return $res;
        }

        $where = 'where 1';
        $where .= " and ZoneID = $zoneId";
        if (!empty($startDate)) {
            $where .= ' and Date >= ' . $startDate;
        }
        if (!empty($endDate)) {
            $where .= ' and Date <= ' . $endDate;
        }
        if ($source != -1) {
            $where .= " and Source = '$source'";
        }

        $connection = "{$this->project}_statistic_{$zoneId}";
        if (config('database.connections.' . $connection)) {
            $rows = DB::connection($connection)->select("select Point, Source, sum(Count) as Count from guide $where group by Point");
            foreach ($rows as $r) {
                $r->Count = intval($r->Count);
                if ($text = config('language.guidePoint.' . $r->Point)) {
                    $r->text = $text;
                } else {
                    $r->text = $r->Point;
                }
                $res[] = (array)$r;
            }
        }

        return $res;
    }

    public function getBillInfoTotal($zoneId, $date, $table, $condition)
    {
        $connection = "{$this->project}_bill";
        if ($dbConf = config("database.connections.$connection")) {
            $pf = sprintf("%03s", intval($zoneId / 1000));
            $db = "sdo_bill_app{$pf}_{$date}";
            $sql = "select count(1) as total from $db.$table $condition";

            try {
                if ($res = DB::connection($connection)->select($sql)) {
                    return $res[0]->total;
                }
            } catch (QueryException $e) {
            }
        }
        return false;
    }

    public function getBillInfo($zoneId, $date, $select, $table, $condition, $limit = '', $offset = '')
    {
        $res = [];
        $connection = "{$this->project}_bill";
        if ($dbConf = config("database.connections.$connection")) {
            $pf = sprintf("%03s", intval($zoneId / 1000));
            $db = "sdo_bill_app{$pf}_{$date}";
            $sql = "$select from $db.$table $condition";

            if (!empty($limit)) {
                $sql .= " limit $limit";
            }
            if (!empty($offset)) {
                $sql .= " offset $offset";
            }
            try {
                $res = DB::connection($connection)->select($sql);
                foreach ($res as $k => $r) {
                    $res[$k] = (array)$r;
                }
            } catch (QueryException $e) {
            }
        }
        return $res;
    }

    // item history summaries
    protected function getItemHistory($type, $zoneId, $startDate, $endDate, $source = '', $itemId = '', $mark = '', $itemType = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where PlayerZoneID = '$zoneId'";
        if (!empty($source)) {
            $where .= " and Source = '$source'";
        }
        if (!empty($itemId)) {
            if (!empty($mark) && $mark == 'clothes') {
                $where .= " and ItemID in ({$itemId})";
            } else {
                $where .= " and ItemID = '$itemId'";
            }
        }
        if (!empty($itemType)) {
            $where .= " and ItemType in ({$itemType})";
        }

        if ($type == 'add') {
            $select = "select ItemID, ItemName, ItemType, Quantity, NewQuantity, Price, UseMeans, ItemIcon";
        } else {
            $select = "select ItemID, ItemName, ItemType, Quantity, UseMeans, ItemIcon";
        }

        $res = [];
        $hourSeconds = 3600;
        $daySeconds = $hourSeconds * 24;
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $total = $this->getBillInfoTotal($zoneId, $i, "item$type", $where);

            $offset = 0;
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $billInfo = $this->getBillInfo($zoneId, $i, $select, "item$type", $where, $limit, $offset);
                foreach ($billInfo as $k => $r) {
                    $itemIdQuanMap[$r['ItemID']][$r['Quantity']] = 1;
                    // format quantity
                    $_r = $r;
                    if ($r['UseMeans'] == 1) {
                        $quan = $r['Quantity'];
                        if ($r['Quantity'] == '2147483647') {
                            $_r['Type'] = '永久';
                        } elseif ($r['Quantity'] % $daySeconds == 0) {
                            if ((int)($r['Quantity'] / $daySeconds) == 0) {
                                if (isset($r['NewQuantity'])) {
                                    if ($r['NewQuantity'] == '2147483647') {
                                        $_r['Type'] = '永久';
                                    } else {
                                        $_r['Type'] = (int)($r['NewQuantity'] / $daySeconds) . '天';
                                    }
                                } else {
                                    $_r['Type'] = (int)($r['Quantity'] / $daySeconds) . '天';
                                }
                            } else {
                                $_r['Type'] = (int)($r['Quantity'] / $daySeconds) . '天';
                            }
                        } else {
                            if (!empty($r['NewQuantity'])) {
                                $r['Type'] = (int)($r['NewQuantity'] / $hourSeconds) . '小时';
                            } else {
                                $r['Type'] = (int)($r['Quantity'] / $hourSeconds) . '小时';
                            }
                        }
                    } else {
                        $quan = 1;
                        $_r['Type'] = '单个';
                    }
                    if (!empty($res[$r['ItemID']][$quan])) {
                        $_r = $res[$r['ItemID']][$quan];
                    }
                    if (empty($_r['Number'])) {
                        $_r['Number'] = 0;
                    }
                    if ($_r['Type'] == '单个') {
                        $_r['Number'] += $r['Quantity'];
                    } else {
                        $_r['Number'] += 1;
                    }
                    //get icon dir
                    if (in_array($_r['ItemType'], array_keys(config("default.shop.player.itemType")))) {
                        $_r['dir'] = config("default.shop.player.dir");
                    } else if (in_array($_r['ItemType'], array_keys(config("default.shop.props.itemType")))) {
                        $_r['dir'] = config("default.shop.props.dir");
                    }
                    if (empty($_r['TotalPrice'])) {
                        $_r['TotalPrice'] = 0;
                    }
                    $res[$r['ItemID']][$quan] = $_r;
                    $res[$r['ItemID']][$quan]['TotalPrice'] += isset($r['Price']) ? $r['Price'] : 0;
                }
            }
        }

        return $res;
    }

    public function getItemAdd($zoneId, $startDate, $endDate, $source = '', $itemId = '', $mark = '', $itemType = '')
    {
        return $this->getItemHistory('add', $zoneId, $startDate, $endDate, $source, $itemId, $mark, $itemType);
    }

    public function getItemDelete($zoneId, $startDate, $endDate, $source = '', $itemId = '')
    {
        return $this->getItemHistory('delete', $zoneId, $startDate, $endDate, $source, $itemId);
    }

    // role item history
    protected function getRoleItemHistory($type, $zoneId, $accountType, $account, $startDate, $endDate, $itemId = '', $source = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where PlayerZoneID = $zoneId ";
        if (!empty($itemId)) {
            $where .= " and ItemID = '$itemId'";
        }
        if (!empty($source)) {
            $where .= " and Source = '$source'";
        }
        if (!empty($accountType) && !empty($account)) {
            $where .= "and $accountType = '$account'";
        }
        if ($type == 'add') {
            $select = "select BillTime, Source, ItemID, ItemName, Quantity, OldQuantity, NewQuantity, UseMeans";
        } else {
            $select = "select BillTime, Source, ItemID, ItemName, Quantity, UseMeans";
        }


        $res = [];
        $hourSeconds = 3600;
        $daySeconds = $hourSeconds * 24;
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $total = $this->getBillInfoTotal($zoneId, $i, "item$type", $where);
            $offset = 0;
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $billInfo = $this->getBillInfo($zoneId, $i, $select, "item$type", $where, $limit, $offset);
                foreach ($billInfo as $k => $r) {
                    if ($r['UseMeans'] == 1) {
                        if ($r['Quantity'] == '2147483647') {
                            $r['Type'] = '永久';
                        } elseif ($r['Quantity'] % $daySeconds == 0) {
                            if ((int)($r['Quantity'] / $daySeconds) == 0) {
                                if (!empty($r['NewQuantity'])) {
                                    if ($r['NewQuantity'] == '2147483647') {
                                        $r['Type'] = '永久';
                                    } else {
                                        $r['Type'] = (int)($r['NewQuantity'] / $daySeconds) . '天';
                                    }
                                } else {
                                    $r['Type'] = (int)($r['Quantity'] / $daySeconds) . '天';
                                }
                            } else {
                                $r['Type'] = (int)($r['Quantity'] / $daySeconds) . '天';
                            }
                        } else {
                            if (!empty($r['NewQuantity'])) {
                                $r['Type'] = (int)($r['NewQuantity'] / $hourSeconds) . '小时';
                            } else {
                                $r['Type'] = (int)($r['Quantity'] / $hourSeconds) . '小时';
                            }
                        }
                        $r['quan'] = $r['Type'];
                        $r['NewQuantity'] = $r['Type'];
                    } else {
                        $r['quan'] = $r['Quantity'];
                        $r['Type'] = '单个';
                    }
                    $res[] = $r;
                }
            }
        }
        return $res;
    }

    protected function _getAssetHistory($type, $zoneId, $startDate, $endDate, $assetType, $source = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where PlayerZoneID = $zoneId ";
        if (!empty($source)) {
            $where .= " and Source = '$source'";
        }

        $table = "update$assetType";
        switch ($assetType) {
            case 'gcoin':
                $columnBase = "GCoin";
                break;
            case 'gwealth':
                $columnBase = "GWealth";
                break;
            case 'experence':
                $columnBase = "Exp";
                break;
            default:
                $columnBase = ucfirst($assetType);
                break;
        }
        $addColumn = "Add$columnBase";
        $newColumn = "New$columnBase";
        $oldColumn = "Old$columnBase";

        $select = "select BillTime, Source, count(distinct(RoleID)) as RoleNum, sum($addColumn) as AddValue, sum($newColumn) as NewValue, sum($oldColumn) as OldValue";
        if ($type == 'add') {
            $where .= " and $newColumn > $oldColumn";
        } else {
            $where .= " and $newColumn < $oldColumn";
        }

        $res = [];
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $_res = $this->getBillInfo($zoneId, $i, $select, $table, $where . ' group by Source');
            foreach ($_res as $_r) {
                if (!empty($res[$_r['Source']])) {
                    foreach (['RoleNum', 'AddValue', 'NewValue', 'OldValue'] as $_k) {
                        $res[$_r['Source']][$_k] += $_r[$_k];
                    }
                } else {
                    $res[$_r['Source']] = $_r;
                }
            }
        }
        return $res;
    }

    protected function _getRoleAssetHistory($type, $zoneId, $accountType, $account, $startDate, $endDate, $assetType, $source = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where PlayerZoneID = $zoneId ";
        if (!empty($source)) {
            $where .= " and Source = '$source'";
        }
        if (!empty($accountType) && !empty($account)) {
            $where .= "and $accountType = '$account'";
        }

        $table = "update$assetType";
        switch ($assetType) {
            case 'gcoin':
                $columnBase = "GCoin";
                break;
            case 'gwealth':
                $columnBase = "GWealth";
                break;
            case 'experence':
                $columnBase = "Exp";
                break;
            default:
                $columnBase = ucfirst($assetType);
                break;
        }
        $addColumn = "Add$columnBase";
        $newColumn = "New$columnBase";
        $oldColumn = "Old$columnBase";

        if ($type == 'add') {
            $where .= " and $newColumn > $oldColumn";
        } else {
            $where .= " and $newColumn < $oldColumn";
        }
        $select = "select BillTime, Source, $addColumn as AddValue, $newColumn as NewValue, $oldColumn as OldValue";

        $res = [];
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $total = $this->getBillInfoTotal($zoneId, $i, $table, $where);
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $res = array_merge($res, $this->getBillInfo($zoneId, $i, $select, $table, $where, $limit, $offset));
            }
        }
        return $res;
    }
    // role asset history
    protected function getRoleAssetHistory($type, $zoneId, $accountType, $account, $startDate, $endDate, $assetType = '', $source = '')
    {
        $res = [];
        $assetTypes = array_keys(config('language.asset_info'));
        if (empty($assetType)) {
            foreach ($assetTypes as $assetType) {
                $res[$assetType] = $this->_getRoleAssetHistory($type, $zoneId, $accountType, $account, $startDate, $endDate, $assetType, $source);
            }
        } else if (in_array($assetType, $assetTypes)) {
            $res[$assetType] = $this->_getRoleAssetHistory($type, $zoneId, $accountType, $account, $startDate, $endDate, $assetType, $source);
        }
        return $res;
    }
    protected function getAssetHistory($type, $zoneId, $startDate, $endDate, $assetType = '', $source = '')
    {
        $res = [];
        $assetTypes = array_keys(config('language.asset_info'));
        if (empty($assetType)) {
            foreach ($assetTypes as $assetType) {
                $res[$assetType] = $this->_getAssetHistory($type, $zoneId, $startDate, $endDate, $assetType, $source);
            }
        } else if (in_array($assetType, $assetTypes)) {
            $res[$assetType] = $this->_getAssetHistory($type, $zoneId, $startDate, $endDate, $assetType, $source);
        }
        return $res;
    }

    public function getRoleItemAdd($zoneId, $roleId, $startDate, $endDate, $itemId = '', $source = '')
    {
        return $this->getRoleItemHistory('add', $zoneId, 'RoleId', $roleId, $startDate, $endDate, $itemId, $source);
    }

    public function getRoleItemDelete($zoneId, $roleId, $startDate, $endDate, $itemId = '', $source = '')
    {
        return $this->getRoleItemHistory('delete', $zoneId, 'RoleId', $roleId, $startDate, $endDate, $itemId, $source);
    }

    public function getAccountItemAdd($zoneId, $account, $startDate, $endDate, $itemId = '', $source = '')
    {
        return $this->getRoleItemHistory('add', $zoneId, 'AccountID', $account, $startDate, $endDate, $itemId, $source);
    }

    public function getAccountItemDelete($zoneId, $account, $startDate, $endDate, $itemId = '', $source = '')
    {
        return $this->getRoleItemHistory('delete', $zoneId, 'AccountID', $account, $startDate, $endDate, $itemId, $source);
    }

    public function getItemAddRoleList($zoneId, $startDate, $endDate, $itemId = '', $source = '')
    {
        return $this->getRoleItemHistoryList('add', $zoneId, $startDate, $endDate, $itemId, $source);
    }

    public function getItemDeleteRoleList($zoneId, $startDate, $endDate, $itemId = '', $source = '')
    {
        return $this->getRoleItemHistoryList('delete', $zoneId, $startDate, $endDate, $itemId, $source);
    }


    public function getAssetAdd($zoneId, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getAssetHistory('add', $zoneId, $startDate, $endDate, $assetType, $source);
    }

    public function getAssetDelete($zoneId, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getAssetHistory('delete', $zoneId, $startDate, $endDate, $assetType, $source);
    }

    public function getRoleAssetAdd($zoneId, $roleId, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getRoleAssetHistory('add', $zoneId, 'RoleId', $roleId, $startDate, $endDate, $assetType, $source);
    }

    public function getRoleAssetDelete($zoneId, $roleId, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getRoleAssetHistory('delete', $zoneId, 'RoleId', $roleId, $startDate, $endDate, $assetType, $source);
    }

    public function getAccountAssetAdd($zoneId, $account, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getRoleAssetHistory('add', $zoneId, 'AccountID', $account, $startDate, $endDate, $assetType, $source);
    }

    public function getAccountAssetDelete($zoneId, $account, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getRoleAssetHistory('delete', $zoneId, 'AccountID', $account, $startDate, $endDate, $assetType, $source);
    }

    public function getAssetAddRoleList($zoneId, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getRoleAssetHistoryList('add', $zoneId, $startDate, $endDate, $assetType, $source);
    }

    public function getAssetDeleteRoleList($zoneId, $startDate, $endDate, $assetType = '', $source = '')
    {
        return $this->getRoleAssetHistoryList('delete', $zoneId, $startDate, $endDate, $assetType, $source);
    }

    public function getOnline($onlineType, $zoneId, $openTime, $endTime = '', $source = '', $channelList = '')
    {
        return $this->getRealTimeData('online', $onlineType, $zoneId, $openTime, $endTime, $source, $channelList);
    }

    public function getSpend($spendType, $zoneId, $openTime, $endTime = '')
    {
        return $this->getRealTimeData('money', $spendType, $zoneId, $openTime, $endTime, -1);
    }

    public function getPay($payType, $zoneId, $openTime, $endTime = '')
    {
        return $this->getRealTimeData('money', $payType, $zoneId, $openTime, $endTime, -1);
    }

    public function getOnlineInfo($onlineType, $startTime, $endTime, $zoneId = '', $source = '')
    {
        $res = ['total' => 0, 'zoneData' => [], 'channelData' => []];
        // zone data
        $_res = $this->getRealTimeDataInfo('online', $onlineType, $startTime, $endTime, $zoneId, $source);
        foreach ($_res as $_r) {
            $res['total'] += $_r[$onlineType];
            //$res['zoneData']
            if (empty($res['channelData'][$_r['Source']])) {
                $res['channelData'][$_r['Source']] = 0;
            }
            $res['channelData'][$_r['Source']] += $_r['Online'];
        }

        return $res;
    }


    public function getPayInfo($payType, $startTime, $endTime, $zoneId = '', $source = '', $pfIdArr = [])
    {
        $res = ['total' => 0, 'zoneData' => [], 'channelData' => []];
        // zone data
        $_res = $this->getRealTimeDataInfo('money', $payType, $startTime, $endTime, $zoneId, $source);
        foreach ($_res as $_r) {
            // use our sdo_order database to get total amount;
            //$res['total'] += $_r[$payType];
            $res['zoneData'][] = $_r;
        }
        // channel data
        $startDate = date('Ymd', strtotime($startTime));
        $startMonth = date('Ym', strtotime($startTime));
        $endMonth = date('Ym', strtotime($endTime));
        try {
            for ($i = $startMonth, $j = 1; $i <= $endMonth; $i = date('Ym', strtotime($startDate . "+$j month")), $j++) {
                $db = "pay" . $i;
                $payRes = $this->getPayBill($db, $startTime, $endTime, $pfIdArr);
                foreach ($payRes['channelData'] as $key => $value) {
                    if (!isset($res['channelData'][$key]['total'])) {
                        $res['channelData'][$key]['total'] = 0;
                    }
                    $res['channelData'][$key]['publisher'] = $value['publisher'];
                    $res['channelData'][$key]['pfId'] = $value['pfId'];
                    $res['channelData'][$key]['total'] += $value['total'];
                    $res['total'] += $value['total'];
                }
            }
        } catch (QueryException $e) {
        }
        return $res;
    }

    public function getRealTimeDataYesterday($pfId = '')
    {
        $res = ['total' => 0];
        try {
            $_res = DB::connection('xnhd_base')->select("select id, publisher, pfId from accounts where created_at > '" . date('Y-m-d', strtotime("-1 day")) . "' and created_at < '" . date('Y-m-d', time()) . "'");
        } catch (QueryException $e) {
        }
        $res['total'] = count($_res);
        $res['data'] = (array)$_res;
        return $res;
    }

    public function getLoginInfo($project, $startTime, $endTime, $zoneList = [])
    {
        $res = ['total' => 0, 'zoneData' => [], 'channelData' => []];

        $zoneService = new CacheZoneService($project);
        $zones = $zoneService->getInfo();
        $zonesel = "select ZoneID, count(distinct(AccountID)) as total";
        $channelsel = "select LoginChannel, count(distinct(AccountID)) as total";
        $table = 'login';
        $startTime = date('Y-m-d H:i:s', strtotime($startTime));
        $endTime = date('Y-m-d H:i:s', strtotime($endTime));
        $_tmp = [];
        foreach ($zones as $zone) {
            if (!empty($zoneList)) {
                if (in_array($zone->zoneId, $zoneList)) {
                    //$zone->db;
                    for ($i = $startTime, $j = 1; $i < $endTime; $i = date('Y-m-d H:i:s', strtotime($startTime . "+$j day")), $j++) {
                        $_i = date('Ymd', strtotime($i));
                        //get login list by zoneId
                        //                $zoneres = $this->getBillInfo($zone->zoneId, $_i, $zonesel, $table, "group by ZoneID");
                        //                foreach ($zoneres as $_zr) {
                        //                    $key = $i.':'.$_zr['ZoneID'];
                        //                    if (empty($_tmp[$key])) {
                        //                        $res['total'] += $_zr['total'];
                        //                        if (empty($res['zoneData'][$_zr['ZoneID']])) {
                        //                            $res['zoneData'][$_zr['ZoneID']] = $_zr;
                        //                        }
                        //                        $res['zoneData'][$_zr['ZoneID']]['total'] += $_zr['total'];
                        //                    }
                        //                    // daily zone info recorded
                        //                    $_tmp[$key] = 1;
                        //                }
                        //get login list by channel
                        $channelres = $this->getBillInfo($zone->zoneId, $_i, $channelsel, $table, "group by LoginChannel");
                        foreach ($channelres as $_cr) {
                            $key = $i . ':' . $_cr['LoginChannel'];
                            if (empty($_tmp[$key])) {
                                $res['total'] += $_cr['total'];
                                if (empty($res['channelData'][$_cr['LoginChannel']])) {
                                    $res['channelData'][$_cr['LoginChannel']] = $_cr;
                                } else {
                                    $res['channelData'][$_cr['LoginChannel']]['total'] += $_cr['total'];
                                }
                            }
                            // daily zone info recorded
                            $_tmp[$key] = 1;
                        }
                    }
                }
            } else {
                for ($i = $startTime, $j = 1; $i < $endTime; $i = date('Y-m-d H:i:s', strtotime($startTime . "+$j day")), $j++) {
                    $_i = date('Ymd', strtotime($i));
                    //get login list by zoneId
                    //                $zoneres = $this->getBillInfo($zone->zoneId, $_i, $zonesel, $table, "group by ZoneID");
                    //                foreach ($zoneres as $_zr) {
                    //                    $key = $i.':'.$_zr['ZoneID'];
                    //                    if (empty($_tmp[$key])) {
                    //                        $res['total'] += $_zr['total'];
                    //                        if (empty($res['zoneData'][$_zr['ZoneID']])) {
                    //                            $res['zoneData'][$_zr['ZoneID']] = $_zr;
                    //                        }
                    //                        $res['zoneData'][$_zr['ZoneID']]['total'] += $_zr['total'];
                    //                    }
                    //                    // daily zone info recorded
                    //                    $_tmp[$key] = 1;
                    //                }
                    //get login list by channel
                    $channelres = $this->getBillInfo($zone->zoneId, $_i, $channelsel, $table, "group by LoginChannel");
                    foreach ($channelres as $_cr) {
                        $key = $i . ':' . $_cr['LoginChannel'];
                        if (empty($_tmp[$key])) {
                            $res['total'] += $_cr['total'];
                            if (empty($res['channelData'][$_cr['LoginChannel']])) {
                                $res['channelData'][$_cr['LoginChannel']] = $_cr;
                            } else {
                                $res['channelData'][$_cr['LoginChannel']]['total'] += $_cr['total'];
                            }
                        }
                        // daily zone info recorded
                        $_tmp[$key] = 1;
                    }
                }
            }
        }

        return $res;
    }

    public function _getLoginInfo($startTime, $endTime, $zone, $channelsel, $table)
    {
        $res = [];


        return $res;
    }


    public function getNewAccountsBefore($startTime, $endTime, $pfId = '', $channelList = '')
    {
        $res = ['total' => 0, 'data' => []];
        $select = "select id, publisher, pfId from accounts where created_at > '$startTime' and created_at < '$endTime'";
        if (!empty($channelList)) {
            $select .= " and pfId in ($channelList)";
        }
        try {
            $_res = DB::connection('xnhd_base')->select($select);
        } catch (QueryException $e) {
        }
        $res['total'] = count($_res);
        $res['data'] = (array)$_res;
        return $res;
    }

    public function getAddStay($project, $startTime, $endTime, $channelList = '', $type = 1)
    {
        $res = ['total' => 0, 'yesterdayTotal' => 0, 'channelData' => []];

        $zoneService = new CacheZoneService($project);
        $zones = $zoneService->getInfo();

        $select = "select LoginChannel, AccountID";
        $table = 'login';
        $where = 'group by LoginChannel, AccountID';

        if ($type == 3) {
            //前两天的注册，今天的登录
            $_ores = $this->getNewAccountsBefore(date('Y-m-d', strtotime("$startTime -2 day")), date('Y-m-d', strtotime("$endTime -2 day")), '', $channelList);
        } else if ($type == 7) {
            $_ores = $this->getNewAccountsBefore(date('Y-m-d', strtotime("$startTime -6 day")), date('Y-m-d', strtotime("$endTime -6 day")), '', $channelList);
        } else if ($type == 14) {
            $_ores = $this->getNewAccountsBefore(date('Y-m-d', strtotime("$startTime -13 day")), date('Y-m-d', strtotime("$endTime -13 day")), '', $channelList);
        } else if ($type == 30) {
            $_ores = $this->getNewAccountsBefore(date('Y-m-d', strtotime("$startTime -29 day")), date('Y-m-d', strtotime("$endTime -29 day")), '', $channelList);
        } else {
            $_ores = $this->getNewAccountsBefore(date('Y-m-d', strtotime("$startTime -1 day")), date('Y-m-d', strtotime("$endTime -1 day")), '', $channelList);
        }

        $res['yesterdayTotal'] = $_ores['total'];
        $allMap = [];
        $channeloldMap = [];
        foreach ($_ores['data'] as $_r) {
            $allMap[$_r->id] = 1;
            $channeloldMap[$_r->pfId][$_r->id] = $_r->id;
        }
        unset($_ores);

        $date = date('Ymd', strtotime($startTime));
        $todayMap = [];
        $channeltodayMap = [];
        foreach ($zones as $zone) {
            //$zone->db;
            $_res = $this->getBillInfo($zone->zoneId, $date, $select, $table, $where);

            if (!empty($_res[0]['LoginChannel']) && !empty($res['data'][$_res[0]['LoginChannel']])) {
                break;
            }

            foreach ($_res as $_r) {
                $todayMap[$_r['AccountID']] = 1;
                $channeltodayMap[$_r['LoginChannel']][$_r['AccountID']] = $_r['AccountID'];
            }
            unset($_res);
        }

        if (!empty($res['yesterdayTotal'])) {
            foreach ($todayMap as $k => $v) {
                if (!empty($allMap[$k])) {
                    $res['total'] += 1;
                }
            }
            foreach ($channeloldMap as $channel => $ids) {
                if (!empty($channelList)) {
                    $res['pointchannelTotal'] = 0;
                    $channelArray = explode(',', $channelList);
                    if (in_array($channel, $channelArray)) {
                        $res['channelData'][$channel]['yesterdayTotal'] = count($ids);
                        foreach ($ids as $id) {
                            $res['channelData'][$channel]['total'] = 0;
                            if (isset($channeltodayMap[$channel][$id])) {
                                $res['channelData'][$channel]['total'] += 1;
                            }
                            $res['pointchannelTotal'] += 1;
                        }
                    }
                } else {
                    $res['channelTotal'] = 0;
                    $res['channelData'][$channel]['yesterdayTotal'] = count($ids);
                    $res['channelData'][$channel]['total'] = 0;
                    if (in_array($channel, array_keys($channeltodayMap))) {
                        foreach ($ids as $id) {
                            if (isset($channeltodayMap[$channel][$id])) {
                                $res['channelData'][$channel]['total'] += 1;
                            }
                            $res['channelTotal'] += 1;
                        }
                    }
                }
            }

            foreach ($res['channelData'] as $c => $v) {
                $res['channelData'][$c]['addStay'] = !empty($v['yesterdayTotal']) ? number_format($v['total'] / $v['yesterdayTotal'], 4) * 100 : 0;
            }
            if (!empty($channelList)) {
                $res['total'] = !empty($res['yesterdayTotal']) ? number_format($res['pointchannelTotal'] / $res['yesterdayTotal'], 4) * 100 : 0;
            } else {
                $res['total'] = !empty($res['yesterdayTotal']) ? number_format($res['channelTotal'] / $res['yesterdayTotal'], 4) * 100 : 0;
            }
        }

        return $res;

        //        $select = "select ZoneID, AccountID";
        //        $table = 'login';
        //        $where = 'group by ZoneID, AccountID';
        //
        //        $_ores = $this->getNewAccountsBefore(date('Y-m-d', strtotime("$startTime -1 day")), date('Y-m-d', strtotime("$endTime -1 day")));
        //        $res['yesterdayTotal'] = $_ores['total'];
        //        $allMap = [];
        //        foreach ($_ores['data'] as $_r) {
        //            $allMap[$_r->id] = 1;
        //        }
        //        unset($_ores);
        //
        //        $date = date('Ymd', strtotime($startTime));
        //        $todayMap = [];
        //        foreach ($zones as $zone) {
        //            //$zone->db;
        //            $_res = $this->getBillInfo($zone->zoneId, $date, $select, $table, $where);
        //
        //            if (!empty($_res[0]['ZoneID']) && !empty($res['data'][$_res[0]['ZoneID']])) {
        //                break;
        //            }
        //
        //            foreach ($_res as $_r) {
        //                $todayMap[$_r['AccountID']] = 1;
        //            }
        //            unset($_res);
        //        }
        //
        //        if (!empty($res['yesterdayTotal'])) {
        //            foreach ($todayMap as $k => $v) {
        //                if (!empty($allMap[$k])) {
        //                    $res['total'] += 1;
        //                }
        //            }
        //            $res['total'] = number_format($res['total']/$res['yesterdayTotal'], 4) * 100;
        //        }

    }

    public function getNewAccountsInfo($startTime, $endTime, $pfIdArr = [])
    {
        $res = ['total' => 0, 'data' => []];

        $where = " where created_at between '$startTime' and '$endTime'";
        if (!empty($pfIdArr)) {
            $pfIdList = join(',', $pfIdArr);
            $where .= " and pfId in ($pfIdList)";
        }

        try {
            $_res = DB::connection('xnhd_base')->select("select publisher, pfId, count(distinct(openId)) as total from accounts {$where} group by publisher, pfId");
        } catch (QueryException $e) {
        }
        foreach ($_res as $_r) {
            $res['total'] += $_r->total;
            $res['data']["{$_r->publisher}_{$_r->pfId}"] = (array)$_r;
        }
        return $res;
    }

    public function getPayAccountInfo($startTime, $endTime, $pfIdArr = [])
    {
        $res = ['total' => 0, 'data' => []];
        $startDate = date('Ymd', strtotime($startTime));
        $startMonth = date('Ym', strtotime($startTime));
        $endMonth = date('Ym', strtotime($endTime));
        try {
            for ($i = $startMonth, $j = 1; $i <= $endMonth; $i = date('Ym', strtotime($startDate . "+$j month")), $j++) {
                $db = "pay" . $i;
                $_res = $this->getPayAccountBill($db, $startTime, $endTime, $pfIdArr);
                $res['total'] += $_res['total'];
                foreach ($_res['data'] as $key => $value) {
                    if (!isset($res['data'][$key]['total'])) {
                        $res['data'][$key]['total'] = 0;
                    }
                    $res['data'][$key]['publisher'] = $value['publisher'];
                    $res['data'][$key]['pfId'] = $value['pfId'];
                    $res['data'][$key]['total'] += $value['total'];
                }
            }
        } catch (QueryException $e) {
        }
        return $res;
    }

    protected function getPayAccountBill($db, $startTime, $endTime, $pfIdArr = [])
    {
        $res = ['total' => 0, 'data' => []];
        $start = date('Y-m-d', strtotime($startTime));
        $end = date('Y-m-d', strtotime($endTime));
        $project = config('app.project', 'sdo');
        if ($project == 'sdo_tw' || $project == 'sdo_taiguo') {
            if ($project == 'sdo_tw') {
                $iosSource = 51;
                $androidSource = 52;
            } else {
                $iosSource = 71;
                $androidSource = 72;
            }
            $_res2 = DB::connection('order')->select("select 'xnhd' as publisher, $iosSource as pfId, count(distinct(accountId)) as total from $db where orderTime between '$start' and '$end' and payStatus = 2 and channelName = 'ios'");
            $res['total'] += $_res2[0]->total;
            $res['data']["xnhd_$iosSource"] = (array)$_res2[0];
            $_res2 = DB::connection('order')->select("select 'xnhd' as publisher, $androidSource as pfId, count(distinct(accountId)) as total from $db where orderTime between '$start' and '$end' and payStatus = 2 and channelName != 'ios'");
            $res['total'] += $_res2[0]->total;
            $res['data']["xnhd_$androidSource"] = (array)$_res2[0];
        } else {

            //查询舞动1的信息
            $where = " where orderTime between '$start' and '$end' and payStatus = 2 ";
            if (!empty($pfIdArr)) {
                $pfIdList = join(',', $pfIdArr);
                $where .= " and pfId in ($pfIdList)";
            }

            $_res = DB::connection('order')->select("select publisher, pfId, count(distinct(accountId)) as total from $db {$where}  group by publisher, pfId");
            foreach ($_res as $_r) {
                $res['total'] += $_r->total;
                $res['data']["{$_r->publisher}_{$_r->pfId}"] = (array)$_r;
            }
        }
        return $res;
    }

    protected function getPayBill($db, $startTime, $endTime, $pfIdArr = [])
    {
        $res = ['total' => 0, 'channelData' => []];
        $start = date('Y-m-d H:i:s', strtotime($startTime));
        $end = date('Y-m-d H:i:s', strtotime($endTime));
        $project = config('app.project', 'sdo');
        if ($project == 'sdo_tw' || $project == 'sdo_taiguo') {
            if ($project == 'sdo_tw') {
                $iosSource = 51;
                $androidSource = 52;
            } else {
                $iosSource = 71;
                $androidSource = 72;
            }
            $_res2 = DB::connection('order')->select("select 'xnhd' as publisher, $iosSource as pfId, sum(money) as total from $db where orderTime between '$start' and '$end' and payStatus = 2 and channelName = 'ios'");
            $res['channelData']["xnhd_$iosSource"] = (array)$_res2[0];
            $_res2 = DB::connection('order')->select("select 'xnhd' as publisher, $androidSource as pfId, sum(money) as total from $db where orderTime between '$start' and '$end' and payStatus = 2 and channelName != 'ios'");
            $res['channelData']["xnhd_$androidSource"] = (array)$_res2[0];
        } else {

            //查询舞动1的信息
            $where = " where orderTime between '$start' and '$end' and payStatus = 2 ";
            if (!empty($pfIdArr)) {
                $pfIdList = join(',', $pfIdArr);
                $where .= " and pfId in ($pfIdList)";
            }
            $_res2 = DB::connection('order')->select("select publisher, pfId, sum(money) as total from $db $where group by publisher, pfId");
            foreach ($_res2 as $_r) {
                $res['channelData']["{$_r->publisher}_{$_r->pfId}"] = (array)$_r;
            }
        }
        return $res;
    }

    public function getRoleCreateLog($zoneId)
    {
        return $this->getRealTimeData('createRole', null, $zoneId, '', '');
    }

    public function getRoleLoginLog($zoneId)
    {
        return $this->getRealTimeData('login', null, $zoneId, '', '');
    }

    public function getRoleLevelupLog($zoneId)
    {
        return $this->getRealTimeData('levelup', null, $zoneId, '', '');
    }

    public function deleteRealTimeDataByIds($type, $ids, $zoneId)
    {
        if (empty($ids)) {
            return false;
        }

        $connection = "{$this->project}_monitor_{$zoneId}";
        if ($dbConf = config("database.connections.$connection")) {
            if (in_array($type, ['createRole', 'login', 'levelup'])) {
                $db = $type;
                $sql = "delete from $db where id in (" . join(',', $ids) . ")";
                try {
                    return DB::connection($connection)->delete($sql);
                } catch (QueryException $e) {
                }
            }
        }

        return false;
    }

    protected function getRealTimeDataInfo($type, $totalType, $startTime, $endTime, $zoneId = '', $source = '')
    {
        $res = [];
        $startTime = date('Y-m-d H:i:s', strtotime($startTime));
        $endTime = date('Y-m-d H:i:s', strtotime($endTime));
        for ($i = $startTime, $j = 1; $i < $endTime; $i = date('Y-m-d H:i:s', strtotime($startTime . "+$j day")), $j++) {
            $db = $type . date('Ymd', strtotime($i));
            if (in_array($type, ['online'])) {
                //$sql = "select * from (select ZoneID, Source, $totalType from $db order by BillTime desc) as A group by ZoneID, Source";
                $sql = "select ZoneID, Source, $totalType from $db where BillTime between '$startTime' and '$endTime' group by Source, ZoneID order by BillTime desc ";
                return $this->getRealTimeInfoBySQL($sql, $zoneId);
            }
            if (in_array($type, ['money'])) {
                $sql = "select ZoneID, $totalType from $db where BillTime between '$startTime' and '$endTime' group by ZoneID order by BillTime desc";
                return $this->getRealTimeInfoBySQL($sql, $zoneId);
            }
            if (in_array($type, ['login'])) {
                $zoneService = new CacheZoneService($this->project);
                $zones = $zoneService->getInfo();
                $sql = "select ZoneID, count(distinct(AccountID)) as total from $type group by ZoneID";
                return $this->getRealTimeInfoBySQL($sql, $zoneId);
            }
        }

        return $res;
    }

    protected function getRealTimeData($type, $totalType, $zoneId, $openTime, $endTime = '', $source = '', $channelList = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "WHERE 1 ";
        $where .= " and ZoneID = '$zoneId'";
        if ($source != -1) {
            $where .= " and Source = '$source'";
        }
        if ($source == -1 && !empty($channelList)) {
            $where .= " and Source in ($channelList)";
        }

        $res = [];
        $start = date('Ymd', strtotime($openTime));
        $end = date('Ymd', strtotime($endTime));
        $time = date('Y-m-d H:i:s', strtotime($endTime));
        if ($type == 'online') {
            $total = $this->getRealTimeTotal($start, $type, $where, $zoneId);
            $select = "select BillTime, CAST(sum($totalType) as UNSIGNED) as $totalType ";
            $offset = 0;
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $sql = $where . " group by BillTime";
                $res = array_merge($res, $this->getRealTimeInfo($zoneId, $start, $select, $type, $sql, $limit, $offset));
            }
        }
        if ($type == 'money') {
            $total = $this->getRealTimeTotal($start, $type, $where, $zoneId);
            $select = "select BillTime, CAST(sum($totalType) as UNSIGNED) as $totalType ";
            $offset = 0;
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $sql = $where . " group by BillTime";
                $res = array_merge($res, $this->getRealTimeInfo($zoneId, $start, $select, $type, $sql, $limit, $offset));
            }
        }
        if (in_array($type, ['createRole', 'login', 'levelup'])) {
            $where = "WHERE 1 ";
            $where .= " and ZoneID = '$zoneId' ORDER BY id";
            $total = $this->getRealTimeTotal('', $type, $where, $zoneId);
            $select = "select *";
            $offset = 0;
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $sql = $where;
                $res = array_merge($res, $this->getRealTimeInfo($zoneId, '', $select, $type, $sql, $limit, $offset));
            }
        }

        return $res;
    }

    protected function getRealTimeTotal($date, $type, $condition, $zoneId)
    {
        $connection = "{$this->project}_monitor_{$zoneId}";
        if ($dbConf = config("database.connections.$connection")) {
            $db = $type . $date;
            $sql = "select count(1) as total from $db $condition";
            try {
                if ($res = DB::connection($connection)->select($sql)) {
                    return $res[0]->total;
                }
            } catch (QueryException $e) {
            }
        }
        return false;
    }

    protected function getRealTimeInfoBySQL($sql, $zoneId)
    {
        $res = [];
        $connection = "{$this->project}_monitor_{$zoneId}";
        if ($dbConf = config("database.connections.$connection")) {
            try {
                $res = DB::connection($connection)->select($sql);
                foreach ($res as $k => $r) {
                    $res[$k] = (array)$r;
                }
            } catch (QueryException $e) {
            }
        }
        return $res;
    }
    protected function getRealTimeInfo($zoneId, $date, $select, $type, $condition, $limit = '', $offset = '', $order = 'ASC')
    {
        $res = [];
        $connection = "{$this->project}_monitor_{$zoneId}";
        if ($dbConf = config("database.connections.$connection")) {
            $db = $type . $date;
            $sql = "$select from $db $condition $order";
            if (!empty($limit)) {
                $sql .= " limit $limit";
            }
            if (!empty($offset)) {
                $sql .= " offset $offset";
            }
            try {
                $res = DB::connection($connection)->select($sql);
                foreach ($res as $k => $r) {
                    $res[$k] = (array)$r;
                }
            } catch (QueryException $e) {
            }
        }
        return $res;
    }

    public function getCheckPoint($zoneId)
    {
        $res = [];

        if (empty($zoneId)) {
            return $res;
        }

        $com = [];
        $rec = [];
        $connection = "{$this->project}_task_{$zoneId}";
        if ($dbConf = config("database.connections.$connection")) {
            try {
                $conn = DB::connection($connection);
                for ($i = 0; $i < 16; $i++) {
                    $table  = 'playerRecTaskInfo' . sprintf("%02s", $i);
                    $comSql = "select COUNT(RoleID) as Num, TaskID FROM $table WHERE State>0 GROUP BY TaskID ORDER BY TaskID ASC";
                    $comRes = $conn->select($comSql);
                    $comRes = $this->object_to_array($comRes);
                    $_comRes = $this->combineSelRes($com, $comRes);
                    $com     = $_comRes;
                    $recSql = "select COUNT(RoleID) as Num, TaskID FROM $table GROUP BY TaskID ORDER BY TaskID ASC";
                    $recRes = $conn->select($recSql);
                    $recRes = $this->object_to_array($recRes);
                    $_recRes = $this->combineSelRes($rec, $recRes);
                    $rec     = $_recRes;
                }
                for ($i = 0; $i < count($com); $i++) {
                    $res[$i]['taskId']     = $com[$i]['TaskID'];
                    $res[$i]['number']        = $com[$i]['Num'];

                    foreach ($rec as $_rec) {
                        if ($res[$i]['taskId'] == $_rec['TaskID'] && $_rec['Num'] != 0) {
                            $res[$i]['proportion'] = (floatval(number_format($res[$i]['number'] / $_rec['Num'], 2)) * 100) . "%";
                            break;
                        }
                    }
                }
                return $res;
            } catch (QueryException $e) {
            }
        }
    }

    protected function combineSelRes($resArr, $selectRes)
    {
        $res = [];
        if (!empty($selectRes)) {
            if (!empty($resArr)) {
                $resLeng = count($resArr);
                $selLeng = count($selectRes);
                if ($resLeng >= $selLeng) {
                    for ($i = 0; $i < $resLeng; $i++) {
                        foreach ($selectRes as $s) {
                            if ($resArr[$i]['TaskID'] == $s['TaskID']) {
                                $res[$i]['TaskID'] = $resArr[$i]['TaskID'];
                                $res[$i]['Num']    = $resArr[$i]['Num'] + $s['Num'];
                                break;
                            } else {
                                $res[$i]['TaskID'] = $resArr[$i]['TaskID'];
                                $res[$i]['Num']    = $resArr[$i]['Num'];
                            }
                        }
                    }
                } else {
                    for ($i = 0; $i < $selLeng; $i++) {
                        foreach ($resArr as $r) {
                            if ($selectRes[$i]['TaskID'] == $r['TaskID']) {
                                $res[$i]['TaskID'] = $selectRes[$i]['TaskID'];
                                $res[$i]['Num']    = $selectRes[$i]['Num'] + $r['Num'];
                            } else {
                                $res[$i]['TaskID'] = $selectRes[$i]['TaskID'];
                                $res[$i]['Num']    = $selectRes[$i]['Num'];
                            }
                        }
                    }
                }
            } else {
                $res = $selectRes;
            }
        } else {
            $res = $resArr;
        }

        return $res;
    }

    protected function object_to_array($obj)
    {
        $arr = [];
        $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
        foreach ($_arr as $key => $val) {
            $val = (is_array($val) || is_object($val)) ? $this->object_to_array($val) : $val;
            $arr[$key] = $val;
        }
        return $arr;
    }

    public function getZoneListByCat()
    {
        $res = [];
        $connection = "{$this->project}_gm";
        try {
            $conn = DB::connection($connection);
            $zoneSql = "select zoneId from zones";
            $zoneIds = $conn->select($zoneSql);
            $zoneSql = "select catId from zonecats";
            $catsIds = $conn->select($zoneSql);
            foreach ($catsIds as $cat) {
                foreach ($zoneIds as $zone) {
                    if ($cat->catId == intval($zone->zoneId / 1000)) {
                        $res[$cat->catId] = $zone->zoneId;
                    }
                }
            }
        } catch (QueryException $e) {
        }
        return $res;
    }

    public function getSpendData($spendType, $zoneId, $openTime, $long)
    {
        return $this->getTotalData('spend', $spendType, $zoneId, $openTime, $long);
    }

    public function getPayData($payType, $zoneId, $openTime, $long)
    {
        return $this->getTotalData('money', $payType, $zoneId, $openTime, $long);
    }

    public function getOnlineData($onlineType, $zoneId, $openTime, $long, $source = '')
    {
        return $this->getTotalData('online', $onlineType, $zoneId, $openTime, $long, $source);
    }

    protected function getTotalData($type, $totalType, $zoneId, $openTime, $long, $source = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "WHERE 1 ";
        $where .= " and ZoneID = '$zoneId'";

        $res = [];
        $start = date('Ymd', strtotime($openTime));
        $time = date('Y-m-d H:i:s', strtotime($openTime));
        if (in_array($type, ['money', 'spend'])) {
            for ($i = $start, $t = $time, $j = 1; $j <= $long; $i = date('Ymd', strtotime($time . "-$j day")), $t = date('Y-m-d H:i:s', strtotime($time . "-$j day")), $j++) {
                $endTime = date('Y-m-d H:i:s', strtotime($t . "+1 day"));
                $db = 'money' . $i;
                $date = date('Y-m-d', strtotime($t));
                $sql = "select {$totalType} from {$db} $where and BillTime <= '{$endTime}' ORDER BY BillTime desc limit 1";
                $number = $this->getRealTimeInfoBySQL($sql, $zoneId);
                $number = !empty($number[0][$totalType]) ? $number[0][$totalType] : '';
                $res[] = ['date' => $date, 'number' => $number];
            }
        } elseif ($type = 'online') {
            for ($i = $start, $t = $time, $j = 1; $j <= $long; $i = date('Ymd', strtotime($time . "-$j day")), $t = date('Y-m-d H:i:s', strtotime($time . "-$j day")), $j++) {
                $endTime = date('Y-m-d H:i:s', strtotime($t . "+1 day"));
                $db = 'online' . $i;
                $date = date('Y-m-d', strtotime($t));
                if ($source != -1) {
                    $where .= " and Source = '$source'";
                    $n_sql = "select {$totalType} from {$db} $where and BillTime <= '{$endTime}'  ORDER BY BillTime desc limit 1";
                    $number = $this->getRealTimeInfoBySQL($n_sql, $zoneId);
                    $number = !empty($number[0][$totalType]) ? $number[0][$totalType] : '';
                    $sql = "select {$totalType}, BillTime from {$db} $where and BillTime <= '{$endTime}'  ORDER BY BillTime desc";
                    $result = $this->getRealTimeInfoBySQL($sql, $zoneId);
                } else {
                    $n_sql = "select sum($totalType) as $totalType from (select * from (select Source, $totalType, BillTime from $db $where and BillTime <= '{$endTime}' ORDER BY BillTime desc) as A group by Source) as B";
                    $number = $this->getRealTimeInfoBySQL($n_sql, $zoneId);
                    $number = !empty($number[0][$totalType]) ? $number[0][$totalType] : '';
                    $sql = "select sum($totalType) as $totalType, BillTime from (select * from (select Source, $totalType, BillTime from $db $where and BillTime <= '{$endTime}' ORDER BY BillTime desc) as A group by Source,BillTime) as B GROUP BY BillTime";
                    $result = $this->getRealTimeInfoBySQL($sql, $zoneId);
                }
                $max = $min = !empty($result[0][$totalType]) ? $result[0][$totalType] : 0;
                foreach ($result as $r) {
                    $max = $max >= $r[$totalType] ? $max : $r[$totalType];
                    $min = $min <= $r[$totalType] ? $min : $r[$totalType];
                }
                $res[] = ['date' => $date, 'number' => $number, 'max' => $max, 'min' => $min];
            }
        }
        return $res;
    }

    public function getMoneyCount($zoneId, $source = -1, $payChannel, $startTime = '', $endTime = '', $channelList = '')
    {
        $res = [];
        if (empty($zoneId)) {
            return [];
        }

        $where = " Source in ({$payChannel})";

        if ($source != -1) {
            $where .= " and LoginChannel = $source";
        } else if ($source == -1 && !empty($channelList)) {
            $where .= " and LoginChannel in ($channelList)";
        }

        $where .= " group by Source, AddMoney order by Source, AddMoney";
        $startDate = date('Ymd', strtotime($startTime));
        $endDate = date('Ymd', strtotime($endTime));
        for ($i = $startDate, $j = 1; $i <= $endDate; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $connection = "{$this->project}_monitor_{$zoneId}";
            if ($dbConf = config("database.connections.$connection")) {
                $db = "sdo_bill_app" . sprintf("%03s", intval($zoneId / 1000)) . "_$i";
                $table = 'updatemoney';
                $sql = "select count(1) as total, AddMoney,Source from $db.$table where $where";
                try {
                    if ($_res = DB::connection($connection)->select($sql)) {
                        foreach ($_res as $r) {
                            $sourceName = config('language.payChannel.' . $r->Source);

                            if (empty($res[$sourceName][$r->AddMoney])) {
                                $res[$sourceName][$r->AddMoney] = $r->total;
                            } else {
                                $res[$sourceName][$r->AddMoney] += $r->total;
                            }
                        }
                    }
                } catch (QueryException $e) {
                }
            }
        }
        return $res;
    }


    public function getPurchaseCount($zoneId, $source = -1, $payChannel, $startTime = '', $endTime = '', $channelList = '')
    {
        $res = [];
        if (empty($zoneId)) {
            return [];
        }

        $where = " Source in ({$payChannel})";

        if ($source != -1) {
            $where .= " and LoginChannel = $source";
        } else if ($source == -1 && !empty($channelList)) {
            $where .= " and LoginChannel in ($channelList)";
        }

        $where .= " group by Source,`Option` order by Source,`Option`";
        $startDate = date('Ymd', strtotime($startTime));
        $endDate = date('Ymd', strtotime($endTime));
        for ($i = $startDate, $j = 1; $i <= $endDate; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $connection = "{$this->project}_monitor_{$zoneId}";
            if ($dbConf = config("database.connections.$connection")) {
                $db = "sdo_bill_app" . sprintf("%03s", intval($zoneId / 1000)) . "_$i";
                $table = 'spendrmb';
                $sql = "select count(1) as total, `Option`, Source from $db.$table where $where";
                try {
                    if ($_res = DB::connection($connection)->select($sql)) {
                        foreach ($_res as $r) {
                            $sourceName = config('language.purchaseChannel.' . $r->Source);
                            //                            $res[$sourceName][$r->Option] = $r->total;
                            if (empty($res[$sourceName][$r->Option])) {
                                $res[$sourceName][$r->Option] = $r->total;
                            } else {
                                $res[$sourceName][$r->Option] += $r->total;
                            }
                        }
                    }
                } catch (QueryException $e) {
                }
            }
        }
        return $res;
    }

    public function getEmailByAccount($zoneId, $account, $openTime, $endTime, $item, $channel)
    {
        return $this->getEmailInfos($zoneId, 'AccountID', $account, $openTime, $endTime, $item, $channel);
    }

    public function getEmailByRole($zoneId, $account, $openTime, $endTime, $item, $channel)
    {
        return $this->getEmailInfos($zoneId, 'RoleID', $account, $openTime, $endTime, $item, $channel);
    }

    protected function getEmailInfos($zoneId, $accountType, $account, $startDate, $endDate, $itemId, $source)
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where PlayerZoneID = $zoneId ";
        $where .= "and $accountType = '$account'";
        if (!empty($itemId)) {
            $where .= " and ItemID = '$itemId'";
        }
        if (!empty($source)) {
            $where .= " and Source = '$source'";
        }

        $res = [];
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $total = $this->getBillInfoTotal($zoneId, $i, "mail", $where);
            $select = "select BillTime, Source, RoleID, RoleName, UseMeans, ItemID, ItemType, ItemName, MailID, Quantity";
            $offset = 0;
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $res = array_merge($res, $this->getBillInfo($zoneId, $i, $select, "mail", $where, $limit, $offset));
            }
        }

        return $res;
    }

    public function getVoteInfos($startTime, $index, $zoneId, $status, $roleId = '', $start = 0, $length = 10)
    {
        $res = ['total' => 0, 'data' => []];

        $where = " WHERE ThirdKey = '$index' and SecondKey = '$startTime' and State = '$status'";
        if (!empty($roleId)) {
            $where .= " and RoleID = '$roleId'";
        }
        $connection = "{$this->project}_actData_{$zoneId}";
        if (config('database.connections.' . $connection)) {
            $conn = DB::connection($connection);
            $selectData = $length ? true : false;
            for ($i = 0; $i < 4; $i++) {
                $table = 'voteStars' . $i;
                $_res = $conn->select("select count(1) as total from $table $where");
                $res['total'] += $_res[0]->total;
                // select from this table
                if ($selectData && $_res[0]->total > $start) {
                    // select from this table
                    $res['data'] = array_merge($res['data'], $conn->select("select RoleID, State, Likes, URL, PicID from $table $where limit $length offset $start"));
                    // if it necessary to select from next table
                    if (($nextTableNum = $start + $length - $_res[0]->total) > 0) {
                        // select and merge from next table
                        $length = $nextTableNum;
                    } else {
                        $length = 0;
                    }
                }

                $start = $start > $_res[0]->total ? ($start - $_res[0]->total) : 0;
                //
                // select finished
                if ($length <= 0) {
                    $selectData = false;
                }
            }
        }

        return $res;
    }


    public function changeVoteStatus($startTime, $index, $zoneId, $roleId)
    {
        $res = 0;
        $where = " WHERE ThirdKey = '$index' and SecondKey = '$startTime' and RoleID = '$roleId'";
        $connection = "{$this->project}_actData_{$zoneId}";
        if (config('database.connections.' . $connection)) {
            $conn = DB::connection($connection);
            for ($i = 0; $i < 4; $i++) {
                $table = 'voteStars' . $i;
                $res += $conn->update("update $table set State = 0 $where");
            }
        }

        return $res;
    }

    public function getLoginByAccount($zoneId, $account, $openTime, $endTime, $channel, $channelList = '')
    {
        return $this->getLoginInfos($zoneId, 'AccountID', $account, $openTime, $endTime, $channel, $channelList);
    }

    public function getLoginByRole($zoneId, $account, $openTime, $endTime, $channel, $channelList = '')
    {
        return $this->getLoginInfos($zoneId, 'RoleID', $account, $openTime, $endTime, $channel, $channelList);
    }

    protected function getLoginInfos($zoneId, $accountType, $account, $startDate, $endDate, $source, $channelList)
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where ZoneID = $zoneId ";
        $where .= "and $accountType = '$account'";
        if ($source != -1) {
            $where .= " and LoginChannel = '$source'";
        }
        if ($source == -1 && !empty($channelList)) {
            $where .= " and LoginChannel in ($channelList)";
        }

        $res = [];
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));
        for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
            $select = "select LoginTime, RoleID, RoleName, IP, ZoneID";
            $total = $this->getBillInfoTotal($zoneId, $i, "login", $where);
            $offset = 0;
            $limit = 10000;
            for ($offset = 0; $offset < $total; $offset += $limit) {
                $res = array_merge($res, $this->getBillInfo($zoneId, $i, $select, "login", $where, $limit, $offset));
            }
        }

        return $res;
    }

    protected function getRoleAssetHistoryList($type, $zoneId, $startDate, $endDate, $assetType, $source = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where PlayerZoneID = $zoneId ";
        if (!empty($source)) {
            $where .= " and Source = '$source'";
        }

        $table = "update$assetType";
        switch ($assetType) {
            case 'gcoin':
                $columnBase = "GCoin";
                break;
            case 'gwealth':
                $columnBase = "GWealth";
                break;
            case 'experence':
                $columnBase = "Exp";
                break;
            default:
                $columnBase = ucfirst($assetType);
                break;
        }
        $addColumn = "Add$columnBase";
        $newColumn = "New$columnBase";
        $oldColumn = "Old$columnBase";

        // get list info into temporary table
        $select = "select Source, RoleID, RoleName, sum($addColumn) as AddValue";
        if ($type == 'add') {
            $where .= " and $newColumn > $oldColumn group by RoleID, Source";
        } else {
            $where .= " and $newColumn < $oldColumn group by RoleID, Source";
        }

        $res = [];
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));

        // create temporary table in test
        $conn = DB::connection("{$this->project}_monitor_{$zoneId}");
        $tableName = $columnBase . '_' . strtotime(date('Y-m-d H:i:s')) . '_' . rand(0, 99);
        $createSql = "create table test.{$tableName} (id INT(20) NOT NULL AUTO_INCREMENT, Source VARCHAR (40) NOT NULL, RoleID VARCHAR (20) NOT NULL, RoleName VARCHAR (50) NOT NULL, AddValue INT(20) NOT NULL, PRIMARY KEY (id), Key `Source` (`Source`) USING BTREE, KEY `RoleID` (`RoleID`) USING BTREE)";

        // insert daily data select from bill
        try {
            $conn->statement($createSql);
            for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
                $pf = sprintf("%03s", intval($zoneId / 1000));
                $db = "sdo_bill_app{$pf}_{$i}";
                $conn->insert("insert into test.{$tableName} (Source, RoleID, RoleName, AddValue) $select from $db.$table $where");
            }
            // get select result
            $res = $conn->select("select Source, RoleID, RoleName, sum(AddValue) as AddValue from test.{$tableName} group by RoleID, Source");

            // destroy table
            $conn->statement("drop table test.{$tableName}");
        } catch (QueryException $e) {
        }
        return $res;
    }

    // role item history
    protected function getRoleItemHistoryList($type, $zoneId, $startDate, $endDate, $itemId = '', $source = '')
    {
        if (empty($zoneId)) {
            return [];
        }

        $where = "where PlayerZoneID = $zoneId ";
        if (!empty($itemId)) {
            $where .= " and ItemID = '$itemId'";
        }
        if (!empty($source)) {
            $where .= " and Source = '$source'";
        }
        // get roleid list info
        $countSelect = "select Source, RoleID, RoleName, ItemID, ItemName, sum(Quantity) as Quantity, UseMeans";
        if ($type == 'add') {
            $timeSelect = "select Source, RoleID, RoleName, ItemID, ItemName, Quantity, UseMeans, NewQuantity";
            $insertData = "Source, RoleID, RoleName, ItemID, ItemName, Quantity, UseMeans, NewQuantity";
        } else {
            $timeSelect = "select Source, RoleID, RoleName, ItemID, ItemName, Quantity, UseMeans";
            $insertData = "Source, RoleID, RoleName, ItemID, ItemName, Quantity, UseMeans";
        }
        $res = [];
        $start = date('Ymd', strtotime($startDate));
        $end = date('Ymd', strtotime($endDate));

        // create temporary table in test
        $conn = DB::connection("{$this->project}_monitor_{$zoneId}");
        $tableName = 'item_' . strtotime(date('Y-m-d H:i:s')) . '_' . rand(0, 99);
        $createSql = "create table test.{$tableName} (id INT(20) NOT NULL AUTO_INCREMENT, Source VARCHAR (40) NOT NULL, RoleID VARCHAR (20) NOT NULL, RoleName VARCHAR (50) NOT NULL, ItemID VARCHAR (20) NOT NULL, ItemName VARCHAR (50) NOT NULL, Quantity INT(20) NOT NULL, UseMeans VARCHAR (10) NOT NULL, NewQuantity VARCHAR (10) NOT NULL, PRIMARY KEY (id), Key `Source` (`Source`) USING BTREE, KEY `RoleID` (`RoleID`) USING BTREE)";

        // insert daily data select from bill
        try {
            $conn->statement($createSql);
            for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($startDate . " +$j day")), $j++) {
                $pf = sprintf("%03s", intval($zoneId / 1000));
                $db = "sdo_bill_app{$pf}_{$i}";
                $conn->insert("insert into test.{$tableName} ($insertData) $timeSelect from $db.item$type $where");
                //                $conn->insert("insert into test.{$tableName} (Source, RoleID, RoleName, ItemID, ItemName, Quantity, UseMeans, NewQuantity) $timeSelect from $db.item$type $where and UseMeans = 1");
            }
            // get select result
            $billInfo = $conn->select("$countSelect from test.{$tableName} group by RoleID, Source");
            $daySeconds = 3600 * 24;
            foreach ($billInfo as $k => $r) {
                if (!empty($r->RoleID)) {
                    $data['Source'] = $r->Source;
                    $data['RoleID'] = $r->RoleID;
                    $data['RoleName'] = $r->RoleName;
                    $data['ItemID'] = $r->ItemID;
                    $data['ItemName'] = $r->ItemName;
                    $data['UseMeans'] = $r->UseMeans;
                    if ($r->UseMeans == 1) {
                        $quan = $r->Quantity;
                        $data['Number'] = 1;
                        if ($quan == '2147483647') {
                            $data['Type'] = '永久';
                        } elseif ($quan % $daySeconds == 0) {
                            if ((int)($quan / $daySeconds) == 0) {
                                if ($r->NewQuantity == '2147483647') {
                                    $data['Type'] = '永久';
                                } else {
                                    $data['Type'] = (int)($r->NewQuantity / $daySeconds) . '天';
                                }
                            } else {
                                $data['Type'] = (int)($r->Quantity / $daySeconds) . '天';
                            }
                        } else {
                            $data['Type'] = (int)($r->NewQuantity / $daySeconds) . '天';
                        }
                    } else {
                        $data['Type'] = '单个';
                        $data['Number'] = $r->Quantity;
                    }
                    $res[] = $data;
                }
            }

            // destroy table
            $conn->statement("drop table test.{$tableName}");
        } catch (QueryException $e) {
        }

        return $res;
    }

    public function getFacebookInfos($zoneId, $channel, $openTime, $endTime)
    {
        $connection = "{$this->project}_bill";
        if ($dbConf = config("database.connections.$connection")) {
            $pf = sprintf("%03s", intval($zoneId / 1000));
            $start = date('Ymd', strtotime($openTime));
            $end = date('Ymd', strtotime($endTime));
            $total = 0;
            for ($i = $start, $j = 1; $i <= $end; $i = date('Ymd', strtotime($openTime . " +$j day")), $j++) {
                try {
                    $db = "sdo_bill_app{$pf}_{$i}";
                    $sql = "select count(ItemID) as total  from $db.mail  where Source = '$channel'";
                    if ($res = DB::connection($connection)->select($sql)) {
                        $total += $res[0]->total;
                    }
                } catch (QueryException $e) {
                }
            }
            return $total;
        }
        return false;
    }

    public function getRoleAssetDistribution($zoneId)
    {
        ini_set('memory_limit', '500M');
        set_time_limit(0);
        $res = [];
        $connection = "{$this->project}_player_{$zoneId}";
        if (config('database.connections.' . $connection)) {
            $conn = DB::connection($connection);
            for ($i = 0; $i < 64; $i++) {
                $table = 'roleAsset' . sprintf("%02s", $i);
                $_res = $conn->select("select FirstSpendMoneySource, FirstSpendMoney from $table ");
                foreach ($_res as $info) {
                    $source = $info->FirstSpendMoneySource;
                    $money = $info->FirstSpendMoney;
                    //获取渠道用户数,首充总金额
                    if (empty($res[$source])) {
                        $res[$source]['number'] = 0;
                        $res[$source]['total'] = 0;
                        $res[$source]['max'] = $money;
                    }
                    $res[$source]['number'] += 1;
                    $res[$source]['total'] += $money;

                    //获取各渠道首充最大值
                    if ($res[$source]['max'] < $money) {
                        $res[$source]['max'] = $money;
                    }
                }
            }
        }
        return $res;
    }

    public function getIspush($uid){
        return 0;
        // $account = Account::where('publisher', 'kuaishou')->select('ispush')->where('openId', $uid)->orderby('created_at')->first();
        // if()
        // return $account->ispush;
    }
}
