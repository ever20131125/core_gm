<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendEventType enum
 */
final class FriendEventType
{
    const enmFriendEvent_None = 0;
    const enmFriendEvent_SendGift = 1;
    const enmFriendEvent_UpdateIntimacy = 2;
    const enmFriendEvent_Meet = 3;
    const enmFriendEvent_VisitHomePage = 11;
    const enmFriendEvent_VisitHouse = 12;
    const enmFriendEvent_LikeHomePage = 13;
    const enmFriendEvent_LikeHouse = 14;
    const enmFriendEvent_Follow = 21;
    const enmFriendEvent_Fans = 22;
    const enmFriendEvent_AddFriend = 23;
    const enmFriendEvent_DeleteFriend = 24;
    const enmFriendEvent_SendFCoin = 25;
    const enmFriendEvent_DanceWithFriend = 26;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFriendEvent_None' => self::enmFriendEvent_None,
            'enmFriendEvent_SendGift' => self::enmFriendEvent_SendGift,
            'enmFriendEvent_UpdateIntimacy' => self::enmFriendEvent_UpdateIntimacy,
            'enmFriendEvent_Meet' => self::enmFriendEvent_Meet,
            'enmFriendEvent_VisitHomePage' => self::enmFriendEvent_VisitHomePage,
            'enmFriendEvent_VisitHouse' => self::enmFriendEvent_VisitHouse,
            'enmFriendEvent_LikeHomePage' => self::enmFriendEvent_LikeHomePage,
            'enmFriendEvent_LikeHouse' => self::enmFriendEvent_LikeHouse,
            'enmFriendEvent_Follow' => self::enmFriendEvent_Follow,
            'enmFriendEvent_Fans' => self::enmFriendEvent_Fans,
            'enmFriendEvent_AddFriend' => self::enmFriendEvent_AddFriend,
            'enmFriendEvent_DeleteFriend' => self::enmFriendEvent_DeleteFriend,
            'enmFriendEvent_SendFCoin' => self::enmFriendEvent_SendFCoin,
            'enmFriendEvent_DanceWithFriend' => self::enmFriendEvent_DanceWithFriend,
        );
    }
}
}