<?php
/**
 * Auto generated from define.proto at 2021-07-29 01:54:30
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FrinedEventType enum
 */
final class FrinedEventType
{
    const enmFrinedEvent_None = 0;
    const enmFrinedEvent_AddFriend = 1;
    const enmFrinedEvent_SendGift = 2;
    const enmFrinedEvent_DanceWithFriend = 3;
    const enmFrinedEvent_SendFCoin = 4;
    const enmFrinedEvent_UpdateIntimacy = 5;
    const enmFrinedEvent_DeleteFriend = 6;
    const enmFrinedEvent_VisitHomePage = 11;
    const enmFrinedEvent_VisitHouse = 12;
    const enmFrinedEvent_LikeHomePage = 13;
    const enmFrinedEvent_LikeHouse = 14;
    const enmFrinedEvent_Follow = 21;
    const enmFrinedEvent_DisFollow = 22;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFrinedEvent_None' => self::enmFrinedEvent_None,
            'enmFrinedEvent_AddFriend' => self::enmFrinedEvent_AddFriend,
            'enmFrinedEvent_SendGift' => self::enmFrinedEvent_SendGift,
            'enmFrinedEvent_DanceWithFriend' => self::enmFrinedEvent_DanceWithFriend,
            'enmFrinedEvent_SendFCoin' => self::enmFrinedEvent_SendFCoin,
            'enmFrinedEvent_UpdateIntimacy' => self::enmFrinedEvent_UpdateIntimacy,
            'enmFrinedEvent_DeleteFriend' => self::enmFrinedEvent_DeleteFriend,
            'enmFrinedEvent_VisitHomePage' => self::enmFrinedEvent_VisitHomePage,
            'enmFrinedEvent_VisitHouse' => self::enmFrinedEvent_VisitHouse,
            'enmFrinedEvent_LikeHomePage' => self::enmFrinedEvent_LikeHomePage,
            'enmFrinedEvent_LikeHouse' => self::enmFrinedEvent_LikeHouse,
            'enmFrinedEvent_Follow' => self::enmFrinedEvent_Follow,
            'enmFrinedEvent_DisFollow' => self::enmFrinedEvent_DisFollow,
        );
    }
}
}