<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_EVENT enum
 */
final class MSGID_EVENT
{
    const MSGID_EVENT_ONLINE = 65281;
    const MSGID_EVENT_OFFLINE = 65282;
    const MSGID_EVENT_HEARTBEAT = 65283;
    const MSGID_EVENT_ASSETUPDATED = 65284;
    const MSGID_EVENT_RANKKEYVALUE = 65285;
    const MSGID_EVENT_GAMEEND = 65286;
    const MSGID_EVENT_SENDSPEAKER = 65287;
    const MSGID_EVENT_COMPLETETASK = 65288;
    const MSGID_EVENT_FRIEND = 65289;
    const MSGID_EVENT_SORTVALUE = 65290;
    const MSGID_EVENT_RAFFLE = 65291;
    const MSGID_EVENT_LOVER = 65296;
    const MSGID_EVENT_UGC = 65297;
    const MSGID_EVENT_INTERACT = 65298;
    const MSGID_EVENT_HOUSE = 65299;
    const MSGID_EVENT_USEITEM = 65300;
    const MSGID_EVENT_RANKUPDATE = 65301;
    const MSGID_EVENT_ITEMACTION = 65302;
    const MSGID_EVENT_QUALIFYTITLE = 65303;
    const MSGID_EVENT_ITEMBOOKINFO = 65304;
    const MSGID_EVENT_WEDDING = 65305;
    const MSGID_EVENT_SNSROOM = 65306;
    const MSGID_EVENT_REDBAG = 65307;
    const MSGID_EVENT_SOW = 65308;
    const MSGID_EVENT_GIVE = 65309;
    const MSGID_EVENT_COLLECTDATA = 65310;
    const MSGID_EVENT_LOT = 65311;
    const MSGID_EVENT_ENTERROOM = 65312;
    const MSGID_EVENT_EXITROOM = 65313;
    const MSGID_EVENT_GARDENWATER = 65314;
    const MSGID_EVENT_UPDATEITEM = 65315;
    const MSGID_EVENT_ACTIVITY = 65316;
    const MSGID_EVENT_RANKLIST = 65317;
    const MSGID_EVENT_UNLOCKMUSIC = 65328;
    const MSGID_EVENT_GETCUP = 65329;
    const MSGID_EVENT_CUPRANK = 65330;
    const MSGID_EVENT_CREATEGUILD = 65331;
    const MSGID_EVENT_SETGUILDNAME = 65332;
    const MSGID_EVENT_DISSOLVEGUILD = 65333;
    const MSGID_EVENT_BAN = 65334;
    const MSGID_EVENT_PAY = 65336;
    const MSGID_EVENT_GMUPDATEFILESTATE = 65337;
    const MSGID_EVENT_ITEMBOOKSUIT = 65344;
    const MSGID_EVENT_BPUPDATE = 65345;
    const MSGID_EVENT_PUZZLEPART = 65346;
    const MSGID_EVENT_COUPLEPLAN = 65347;
    const MSGID_EVENT_GUILDUPDATE = 65360;
    const MSGID_EVENT_SIGNIN = 65361;
    const MSGID_EVENT_COUPLECHAT = 65362;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_EVENT_ONLINE' => self::MSGID_EVENT_ONLINE,
            'MSGID_EVENT_OFFLINE' => self::MSGID_EVENT_OFFLINE,
            'MSGID_EVENT_HEARTBEAT' => self::MSGID_EVENT_HEARTBEAT,
            'MSGID_EVENT_ASSETUPDATED' => self::MSGID_EVENT_ASSETUPDATED,
            'MSGID_EVENT_RANKKEYVALUE' => self::MSGID_EVENT_RANKKEYVALUE,
            'MSGID_EVENT_GAMEEND' => self::MSGID_EVENT_GAMEEND,
            'MSGID_EVENT_SENDSPEAKER' => self::MSGID_EVENT_SENDSPEAKER,
            'MSGID_EVENT_COMPLETETASK' => self::MSGID_EVENT_COMPLETETASK,
            'MSGID_EVENT_FRIEND' => self::MSGID_EVENT_FRIEND,
            'MSGID_EVENT_SORTVALUE' => self::MSGID_EVENT_SORTVALUE,
            'MSGID_EVENT_RAFFLE' => self::MSGID_EVENT_RAFFLE,
            'MSGID_EVENT_LOVER' => self::MSGID_EVENT_LOVER,
            'MSGID_EVENT_UGC' => self::MSGID_EVENT_UGC,
            'MSGID_EVENT_INTERACT' => self::MSGID_EVENT_INTERACT,
            'MSGID_EVENT_HOUSE' => self::MSGID_EVENT_HOUSE,
            'MSGID_EVENT_USEITEM' => self::MSGID_EVENT_USEITEM,
            'MSGID_EVENT_RANKUPDATE' => self::MSGID_EVENT_RANKUPDATE,
            'MSGID_EVENT_ITEMACTION' => self::MSGID_EVENT_ITEMACTION,
            'MSGID_EVENT_QUALIFYTITLE' => self::MSGID_EVENT_QUALIFYTITLE,
            'MSGID_EVENT_ITEMBOOKINFO' => self::MSGID_EVENT_ITEMBOOKINFO,
            'MSGID_EVENT_WEDDING' => self::MSGID_EVENT_WEDDING,
            'MSGID_EVENT_SNSROOM' => self::MSGID_EVENT_SNSROOM,
            'MSGID_EVENT_REDBAG' => self::MSGID_EVENT_REDBAG,
            'MSGID_EVENT_SOW' => self::MSGID_EVENT_SOW,
            'MSGID_EVENT_GIVE' => self::MSGID_EVENT_GIVE,
            'MSGID_EVENT_COLLECTDATA' => self::MSGID_EVENT_COLLECTDATA,
            'MSGID_EVENT_LOT' => self::MSGID_EVENT_LOT,
            'MSGID_EVENT_ENTERROOM' => self::MSGID_EVENT_ENTERROOM,
            'MSGID_EVENT_EXITROOM' => self::MSGID_EVENT_EXITROOM,
            'MSGID_EVENT_GARDENWATER' => self::MSGID_EVENT_GARDENWATER,
            'MSGID_EVENT_UPDATEITEM' => self::MSGID_EVENT_UPDATEITEM,
            'MSGID_EVENT_ACTIVITY' => self::MSGID_EVENT_ACTIVITY,
            'MSGID_EVENT_RANKLIST' => self::MSGID_EVENT_RANKLIST,
            'MSGID_EVENT_UNLOCKMUSIC' => self::MSGID_EVENT_UNLOCKMUSIC,
            'MSGID_EVENT_GETCUP' => self::MSGID_EVENT_GETCUP,
            'MSGID_EVENT_CUPRANK' => self::MSGID_EVENT_CUPRANK,
            'MSGID_EVENT_CREATEGUILD' => self::MSGID_EVENT_CREATEGUILD,
            'MSGID_EVENT_SETGUILDNAME' => self::MSGID_EVENT_SETGUILDNAME,
            'MSGID_EVENT_DISSOLVEGUILD' => self::MSGID_EVENT_DISSOLVEGUILD,
            'MSGID_EVENT_BAN' => self::MSGID_EVENT_BAN,
            'MSGID_EVENT_PAY' => self::MSGID_EVENT_PAY,
            'MSGID_EVENT_GMUPDATEFILESTATE' => self::MSGID_EVENT_GMUPDATEFILESTATE,
            'MSGID_EVENT_ITEMBOOKSUIT' => self::MSGID_EVENT_ITEMBOOKSUIT,
            'MSGID_EVENT_BPUPDATE' => self::MSGID_EVENT_BPUPDATE,
            'MSGID_EVENT_PUZZLEPART' => self::MSGID_EVENT_PUZZLEPART,
            'MSGID_EVENT_COUPLEPLAN' => self::MSGID_EVENT_COUPLEPLAN,
            'MSGID_EVENT_GUILDUPDATE' => self::MSGID_EVENT_GUILDUPDATE,
            'MSGID_EVENT_SIGNIN' => self::MSGID_EVENT_SIGNIN,
            'MSGID_EVENT_COUPLECHAT' => self::MSGID_EVENT_COUPLECHAT,
        );
    }
}
}