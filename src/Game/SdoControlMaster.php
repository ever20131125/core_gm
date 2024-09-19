<?php

namespace Xnhd\Core\Game;

use Xnhd\Core\Pb\Sdo\ACTAddActParamReq;
use Xnhd\Core\Pb\Sdo\ACTAddActParamResp;
use Xnhd\Core\Pb\Sdo\ACTAddGMPrizeMailReq;
use Xnhd\Core\Pb\Sdo\ACTAddGMPrizeMailResp;
use Xnhd\Core\Pb\Sdo\ACTDelGMPrizeMailReq;
use Xnhd\Core\Pb\Sdo\ACTDelGMPrizeMailResp;
use Xnhd\Core\Pb\Sdo\ACTGetGMPrizeMailReq;
use Xnhd\Core\Pb\Sdo\ACTGetGMPrizeMailResp;
use Xnhd\Core\Pb\Sdo\ItemBase;
use Xnhd\Core\Pb\Sdo\CHSBanReq;
use Xnhd\Core\Pb\Sdo\CHSBanResp;
use Xnhd\Core\Pb\Sdo\CHSBroadCastChatReq;
use Xnhd\Core\Pb\Sdo\CHSBroadCastChatResp;
use Xnhd\Core\Pb\Sdo\CHSCancelBanReq;
use Xnhd\Core\Pb\Sdo\CHSCancelBanResp;
use Xnhd\Core\Pb\Sdo\CHSGetBanListReq;
use Xnhd\Core\Pb\Sdo\CHSGetBanListResp;
use Xnhd\Core\Pb\Sdo\COSBanReq;
use Xnhd\Core\Pb\Sdo\COSBanResp;
use Xnhd\Core\Pb\Sdo\COSCancelBanReq;
use Xnhd\Core\Pb\Sdo\COSCancelBanResp;
use Xnhd\Core\Pb\Sdo\COSGetBanListReq;
use Xnhd\Core\Pb\Sdo\COSGetBanListResp;
use Xnhd\Core\Pb\Sdo\GDSGMDissolveGuildReq;
use Xnhd\Core\Pb\Sdo\GDSGMDissolveGuildResp;
use Xnhd\Core\Pb\Sdo\GDSGMEditGuildReq;
use Xnhd\Core\Pb\Sdo\GDSGMEditGuildResp;
use Xnhd\Core\Pb\Sdo\GDSGMSearchGuildManageReq;
use Xnhd\Core\Pb\Sdo\GDSGMSearchGuildManageResp;
use Xnhd\Core\Pb\Sdo\GDSGMSearchGuildReq;
use Xnhd\Core\Pb\Sdo\GDSGMSearchGuildResp;
use Xnhd\Core\Pb\Sdo\GDSGuildLevelUpReq;
use Xnhd\Core\Pb\Sdo\GDSGuildLevelUpResp;
use Xnhd\Core\Pb\Sdo\GMSVersionReq;
use Xnhd\Core\Pb\Sdo\GMSVersionResp;
use Xnhd\Core\Pb\Sdo\MSGID_ACTSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_CONTROLSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_CHATSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_GMSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_GUILDSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_STATESERVER;
use Xnhd\Core\Pb\Sdo\MSGID_ROLEDBSERVER;
use Xnhd\Core\Pb\Sdo\STSGetServerStatusReq;
use Xnhd\Core\Pb\Sdo\STSGetServerStatusResp;
use Xnhd\Core\Pb\Sdo\STSKickAllPlayerReq;
use Xnhd\Core\Pb\Sdo\STSKickAllPlayerResp;
use Xnhd\Core\Pb\Sdo\MSGID_TASKSERVER;
use Xnhd\Core\Pb\Sdo\STSBanReq;
use Xnhd\Core\Pb\Sdo\STSBanResp;
use Xnhd\Core\Pb\Sdo\STSCancelBanReq;
use Xnhd\Core\Pb\Sdo\STSCancelBanResp;
use Xnhd\Core\Pb\Sdo\STSGetBanListReq;
use Xnhd\Core\Pb\Sdo\STSGetBanListResp;
use Xnhd\Core\Pb\Sdo\TASSetWorkRecordReq;
use Xnhd\Core\Pb\Sdo\TASSetWorkRecordResp;
use Xnhd\Core\Pb\Sdo\RDBGetTipOffListReq;
use Xnhd\Core\Pb\Sdo\RDBGetTipOffListResp;
use Xnhd\Core\Pb\Sdo\RDBGetBeTipOffListReq;
use Xnhd\Core\Pb\Sdo\RDBGetBeTipOffListResp;
use Xnhd\Core\Pb\Sdo\SORRemoveFromRankReq;
use Xnhd\Core\Pb\Sdo\SORRemoveFromRankResp;
use Xnhd\Core\Pb\Sdo\MSGID_SORTSERVER;
use Xnhd\Core\Pb\Sdo\RDBDealWithTipOffReq;
use Xnhd\Core\Pb\Sdo\RDBDealWithTipOffResp;
use Xnhd\Core\Pb\Sdo\RDBGMClearRoleRedisReq;
use Xnhd\Core\Pb\Sdo\RDBGMClearRoleRedisResp;
use Xnhd\Core\Pb\Sdo\STSGetServerStateReq;
use Xnhd\Core\Pb\Sdo\STSGetServerStateResp;
use Xnhd\Core\Pb\Sdo\STSSetServerStateReq;
use Xnhd\Core\Pb\Sdo\STSSetServerStateResp;
use Xnhd\Core\Socket\SocketTrait;

class SdoControlMaster
{
    private $socket_stream;
    private $sequence = 0;
    private $host     = "";
    private $port     = 0;

    function __construct($myhost = '', $myport = 0)
    {
        $this->host = $myhost;
        $this->port = $myport;
    }

    use SocketTrait;

    /**
     * 发送GM邮件
     */
    public function sendGmPrizeMail($params, $items, $zoneId)
    {
        $request = new ACTAddGMPrizeMailReq();
        $request->setNZoneID($zoneId);
        $request->setNStartTime(strtotime($params['openTime']));
        $request->setNEndTime(strtotime($params['endTime']));
        $request->setSzTitle($params['title']);
        $request->setSzContent($params['content']);
        $request->setNEffectTime($params['effectTime']);
        $request->setNPlatID(!empty($params['platId']) ? intval($params['platId']) : 0);
        $request->setNMinLevel(!empty($params['minLevel']) ? intval($params['minLevel']) : 0);
        $request->setNMaxLevel(!empty($params['maxLevel']) ? intval($params['maxLevel']) : 0);
        $request->setNMinVip(!empty($params['minVip']) ? intval($params['minVip']) : 0);
        $request->setNMaxVip(!empty($params['maxVip']) ? intval($params['maxVip']) : 0);
        $request->setNMinCreateRoleTime(!empty($params['minCreateTime']) ? strtotime($params['minCreateTime']) : 0);
        $request->setNMaxCreateRoleTime(!empty($params['maxCreateTime']) ? strtotime($params['maxCreateTime']) : 0);
        $request->setNSource(0);
        $request->setSzExtendSource(!empty($params['channel_id']) ? strtotime($params['channel_id']) : 0);
        foreach ($items as $itemId => $quantity) {
            if (!empty($itemId)) {
                $item = new ItemBase();
                $item->setNItemID($itemId);
                $item->setNQuantity($quantity);
                $request->appendArrItemList($item);
            }
        }

        if (!empty($params['channels'])) {
            foreach ($params['channels'] as $channels) {
                $request->appendArrSdkSource($channels);
            }
        }
        $messages = new MSGID_ACTSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CACT_REQ_ADDGMPRIZEMAIL'];

        $response = new ACTAddGMPrizeMailResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    public function getGmPrizeMail($zoneId)
    {
        $request = new ACTGetGMPrizeMailReq();

        $messages = new MSGID_ACTSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CACT_REQ_GETGMPRIZEMAIL'];

        $response = new ACTGetGMPrizeMailResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    public function delGmPrizeMail($zoneId, $id)
    {
        $request = new ACTDelGMPrizeMailReq();
        $request->setNID($id);

        $messages = new MSGID_ACTSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CACT_REQ_DELGMPRIZEMAIL'];

        $response = new ACTDelGMPrizeMailResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 公告
     */
    public function sendNotice($zoneId, $content, $broadType)
    {
        $request = new CHSBroadCastChatReq();
        $request->setZoneID($zoneId);
        $request->setBroadType($broadType);
        $request->setContent($content);
        $request->setChatSytle(0);
        $request->setSendTimes(1);
        $request->setDstRoleID(0);
        $request->setNSpeakerSourceType(13);
        $request->setPrio(0);
        $request->setOptData('');
        $request->setIsUseCard(0);
        $request->setChatSN(0);
        $request->setRoleID(-1);
        $request->setSpeakerCardID(0);
        $request->setChatContentType(0);
        $request->setChatScene(0);

        $message    = new MSGID_CHATSERVER();
        $arrMessage = $message->getEnumValues();
        $message    = $arrMessage['MSGID_CCHS_REQ_BROADCASTCHAT'];

        $response = new CHSBroadCastChatResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 封号
     */
    public function bannedUser($zoneId, $banType, $message, $roleIds, $operator = '', $startTime = '', $endTime = '', $Period = '')
    {
        $request = new STSBanReq();
        $request->setBanType($banType);
        $request->setReason($message);
        $request->setNZoneID($zoneId);
        $request->setSzOperator($operator);
        $request->setNStartTime($startTime);
        $request->setNEndTime($endTime);
        $request->setNPeriod($Period);

        foreach ($roleIds as $roleId) {
            $request->appendArrRoleID($roleId);
        }

        $messages = new MSGID_STATESERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSTS_REQ_BAN'];

        $response = new STSBanResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 开封
     */
    public function unBannedUser($zoneId, $banType, $roleIds)
    {
        $request = new STSCancelBanReq();
        $request->setBanType($banType);
        $request->setNZoneID($zoneId);
        foreach ($roleIds as $roleId) {
            $request->appendArrRoleID($roleId);
        }
        $messages = new MSGID_STATESERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSTS_REQ_CANCELBAN'];

        $response = new STSCancelBanResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }


    /**
     * 封号列表
     */
    public function getBanList($zoneId, $banType)
    {
        $request = new STSGetBanListReq();
        $request->setBanType($banType);
        $request->setNZoneID($zoneId);
        $request->setNZoneID(1);

        $messages = new MSGID_STATESERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSTS_REQ_GETBANLIST'];

        $response = new STSGetBanListResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 禁言
     */
    public function forbiddenUser($zoneId, $message, $roleIds, $operator = '', $startTime = '', $endTime = '', $Period = '')
    {
        $request = new CHSBanReq();
        foreach ($roleIds as $roleId) {
            $request->appendNRoleID($roleId);
        }
        $request->setReason($message);
        $request->setNZoneID($zoneId);
        $request->setSzOperator($operator);
        $request->setNStartTime($startTime);
        $request->setNEndTime($endTime);
        $request->setNPeriod($Period);

        $messages = new MSGID_CHATSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CCHS_REQ_BAN'];

        $response = new CHSBanResp();
        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 开封
     */
    public function unForbiddenUser($zoneId, $roleIds)
    {
        $request = new CHSCancelBanReq();
        $request->setNZoneID($zoneId);
        foreach ($roleIds as $roleId) {
            $request->appendNRoleID($roleId);
        }
        $messages = new MSGID_CHATSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CCHS_REQ_CANCELBAN'];

        $response = new CHSCancelBanResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }


    /**
     * 禁言列表
     */
    public function getForbiddenList($zoneId, $banType)
    {
        $request = new CHSGetBanListReq();
        $request->setBanType($banType);
        $request->setNZoneID($zoneId);

        $messages = new MSGID_CHATSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CCHS_REQ_GETBANLIST'];

        $response = new CHSGetBanListResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 举报列表
     */
    public function getTipOffList($TargetID, $TipOffType, $zoneId)
    {
        $request = new RDBGetTipOffListReq();
        $request->setNTargetID($TargetID);
        $request->setTipOffType($TipOffType);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GETTIPOFFLIST'];

        $response = new RDBGetTipOffListResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 被举报列表
     */
    public function getBeTipOffList($zoneId, $tipType)
    {
        $request = new RDBGetBeTipOffListReq();
        $request->setNFinished($tipType);
        $request->setNStart(1);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GETBETIPOFFLIST'];

        $response = new RDBGetBeTipOffListResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 处理举报信息
     */
    public function dealWithTipOff($zoneId, $nTargetID, $tipOffType, $szMessage)
    {
        $request = new RDBDealWithTipOffReq();
        $request->setNTargetID($nTargetID);
        $request->setTipOffType($tipOffType);
        $request->setSzMessage($szMessage);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_DEALWITHTIPOFF'];

        $response = new RDBDealWithTipOffResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }
    /**
     * 踢全服玩家下线
     */
    public function doFullOff($zoneId)
    {
        $request = new STSKickAllPlayerReq();

        $messages = new MSGID_STATESERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSTS_REQ_KICKALLPLAYER'];

        $response = new STSKickAllPlayerResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    function getServerStatus($serverId)
    {
        $request = new STSGetServerStatusReq();

        $messages = new MSGID_CONTROLSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSTS_REQ_GETSERVERSTATUS'];

        $response = new STSGetServerStatusResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }


    /**
     * 关卡设置
     *
     */
    public function setWorkRecord($zoneId, $workId, $roleId, $star)
    {
        $request = new TASSetWorkRecordReq();
        $request->setNStar($star);
        $request->setRoleID($roleId);
        $request->setNWorkID($workId);

        $messages = new MSGID_TASKSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CTAS_REQ_SETWORKRECORD'];

        $response = new TASSetWorkRecordResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }


    /**
     * 排行榜拉黑
     *
     */
    public function removeRank($zoneId, $roleId, $SortType)
    {
        $request = new SORRemoveFromRankReq();
        $request->setNRoleID($roleId);
        $request->setSortType($SortType);

        $messages = new MSGID_SORTSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSOR_REQ_REMOVEFROMRANK'];

        $response = new SORRemoveFromRankResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    function updateServerState($serverId, $registerOpen, $onlineLimit, $queueLimit, $loginPerSecond, $inputbucketperiod, $queueOpen)
    {
        $request = new STSSetServerStateReq();
        $request->setRegisterOpen($registerOpen);
        $request->setQueueOpen($queueOpen);
        $request->setOnlineLimit($onlineLimit);
        $request->setQueueLimit($queueLimit);
        $request->setLoginPerSecond($loginPerSecond);
        $request->setInputbucketperiod($inputbucketperiod);

        $messages = new MSGID_STATESERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSTS_REQ_SETSERVERSTATE'];

        $response = new STSSetServerStateResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }

    /**
     * GM查询舞团请求
     *
     */
    function getGMSearchGuild($zoneId, $nType, $szName, $nLevel, $nComp, $nStartTime, $nEndTime, $nPageNum, $nPageSize)
    {
        $request = new GDSGMSearchGuildReq();
        $request->setNType($nType);
        $request->setSzName($szName);
        $request->setNLevel($nLevel);
        $request->setNComp($nComp);
        $request->setNStartTime($nStartTime);
        $request->setNEndTime($nEndTime);
        $request->setNPageNum($nPageNum);
        $request->setNPageSize($nPageSize);

        $messages = new MSGID_GUILDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CGDS_REQ_GMSEARCHGUILD'];

        $response = new GDSGMSearchGuildResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * GM舞团修改
     *
     */
    function editGuild($serverId, $nGuildID, $content, $nType)
    {
        $request = new GDSGMEditGuildReq();
        $request->setNGuildID($nGuildID);
        $request->setSzcontent($content);
        $request->setNType($nType);


        $messages = new MSGID_GUILDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CGDS_REQ_GMEDITGUILD'];

        $response = new GDSGMEditGuildResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }

    /**
     * GM舞团处置
     *
     */
    function dissolveGuild($serverId, $GuildNames, $Params)
    {
        $request = new GDSGMDissolveGuildReq();
        foreach ($GuildNames as $GuildName) {
            $request->appendSzGuildName($GuildName);
        }
        $request->setSzTitle($Params['Title']);
        $request->setSzReason($Params['Reason']);
        $request->setNManageType($Params['ManageType']);
        $request->setSzMailContent($Params['Content']);
        $request->setSzOprerator($Params['Oprerator']);

        $messages = new MSGID_GUILDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CGDS_REQ_GMDISSOLVEGUILD'];

        $response = new GDSGMDissolveGuildResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }

    /**
     * GM舞团处置
     *
     */
    function GuildManageList($serverId, $nType, $szName, $nLevel, $nComp, $nStartTime, $nEndTime, $nPageNum, $nPageSize)
    {
        $request = new GDSGMSearchGuildManageReq();
        $request->setNType($nType);
        $request->setSzName($szName);
        $request->setNLevel($nLevel);
        $request->setNComp($nComp);
        $request->setNStartTime($nStartTime);
        $request->setNEndTime($nEndTime);
        $request->setNPageNum($nPageNum);
        $request->setNPageSize($nPageSize);

        $messages = new MSGID_GUILDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CGDS_REQ_GMSEARCHGUILDMANAGE'];

        $response = new GDSGMSearchGuildManageResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }

    /**
     * GM舞团升级
     *
     */
    function guildLevelUp($serverId, $nGuildID)
    {
        $request = new GDSGuildLevelUpReq();
        $request->setRoleID($nGuildID);

        $messages = new MSGID_GUILDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CGDS_REQ_GUILDLEVELUP'];

        $response = new GDSGuildLevelUpResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }

    /**
     * 信任客户端的活动参数请求
     *
     */
    function AddActParam($serverId, $roleID, $nParam, $nValue)
    {
        $request = new ACTAddActParamReq();
        $request->setRoleID($roleID);
        $request->setNParam($nParam);
        $request->setNValue($nValue);

        $messages = new MSGID_ACTSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CACT_REQ_ADDACTPARAM'];

        $response = new ACTAddActParamResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }


    /**
     * 信任客户端的活动参数请求
     *
     */
    function GetServerState($serverId)
    {
        $request = new STSGetServerStateReq();

        $messages = new MSGID_STATESERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSTS_REQ_GETSERVERSTATE'];

        $response = new STSGetServerStateResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }


    function GetServerVersion($serverId)
    {
        $request = new GMSVersionReq();

        $messages = new MSGID_GMSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CGMS_REQ_VERSION'];

        $response = new GMSVersionResp();
        return $this->getResponse($request, $response, $message, $serverId);
    }

    function ClearRoleRedis($serverId, $RoleID)
    {
        $request = new RDBGMClearRoleRedisReq();
        $request->setNRoleID($RoleID);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GMCLEARROLEREDIS'];

        $response = new RDBGMClearRoleRedisResp();
        return $this->getResponse($request, $response, $message, $serverId);
    }
}
