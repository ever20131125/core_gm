<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * NotiType enum
 */
final class NotiType
{
    const enmNotiType_None = 0;
    const enmNotiType_Follow = 1;
    const enmNotiType_Fans = 2;
    const enmNotiType_CancelFollow = 3;
    const enmNotiType_CancelFans = 4;
    const enmNotiType_Friend = 5;
    const enmNotiType_BeFriend = 6;
    const enmNotiType_PlayMate = 7;
    const enmNotiType_FriendAsk = 11;
    const enmNotiType_FriendAgree = 12;
    const enmNotiType_FriendRefuse = 13;
    const enmNotiType_BreakUp = 14;
    const enmNotiType_Divroce = 15;
    const enmNotiType_BlackList = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmNotiType_None' => self::enmNotiType_None,
            'enmNotiType_Follow' => self::enmNotiType_Follow,
            'enmNotiType_Fans' => self::enmNotiType_Fans,
            'enmNotiType_CancelFollow' => self::enmNotiType_CancelFollow,
            'enmNotiType_CancelFans' => self::enmNotiType_CancelFans,
            'enmNotiType_Friend' => self::enmNotiType_Friend,
            'enmNotiType_BeFriend' => self::enmNotiType_BeFriend,
            'enmNotiType_PlayMate' => self::enmNotiType_PlayMate,
            'enmNotiType_FriendAsk' => self::enmNotiType_FriendAsk,
            'enmNotiType_FriendAgree' => self::enmNotiType_FriendAgree,
            'enmNotiType_FriendRefuse' => self::enmNotiType_FriendRefuse,
            'enmNotiType_BreakUp' => self::enmNotiType_BreakUp,
            'enmNotiType_Divroce' => self::enmNotiType_Divroce,
            'enmNotiType_BlackList' => self::enmNotiType_BlackList,
        );
    }
}
}