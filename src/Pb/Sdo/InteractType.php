<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InteractType enum
 */
final class InteractType
{
    const enmInteractType_None = 0;
    const enmInteractType_VisitHomePage = 1;
    const enmInteractType_LikeHomePage = 2;
    const enmInteractType_VisitHouse = 3;
    const enmInteractType_LikeHouse = 4;
    const enmInteractType_BeVisitHomePage = 5;
    const enmInteractType_BeLikeHomePage = 6;
    const enmInteractType_BeVisitHouse = 7;
    const enmInteractType_BeLikeHouse = 8;
    const enmInteractType_VisitCPHouse = 9;
    const enmInteractType_LikeCPHouse = 10;
    const enmInteractType_BeVisitCPHouse = 11;
    const enmInteractType_BeLikeCPHouse = 12;
    const enmInteractType_Chat = 21;
    const enmInteractType_InviteRoom = 22;
    const enmInteractType_InviteMatch = 23;
    const enmInteractType_InviteQualify = 24;
    const enmInteractType_ActCard = 31;
    const enmInteractType_BeInvitedWheel = 32;
    const enmInteractType_BeInvitedBoat = 33;
    const enmInteractType_SendGift = 40;
    const enmInteractType_SendGoods = 41;
    const enmInteractType_SendGCoin = 42;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmInteractType_None' => self::enmInteractType_None,
            'enmInteractType_VisitHomePage' => self::enmInteractType_VisitHomePage,
            'enmInteractType_LikeHomePage' => self::enmInteractType_LikeHomePage,
            'enmInteractType_VisitHouse' => self::enmInteractType_VisitHouse,
            'enmInteractType_LikeHouse' => self::enmInteractType_LikeHouse,
            'enmInteractType_BeVisitHomePage' => self::enmInteractType_BeVisitHomePage,
            'enmInteractType_BeLikeHomePage' => self::enmInteractType_BeLikeHomePage,
            'enmInteractType_BeVisitHouse' => self::enmInteractType_BeVisitHouse,
            'enmInteractType_BeLikeHouse' => self::enmInteractType_BeLikeHouse,
            'enmInteractType_VisitCPHouse' => self::enmInteractType_VisitCPHouse,
            'enmInteractType_LikeCPHouse' => self::enmInteractType_LikeCPHouse,
            'enmInteractType_BeVisitCPHouse' => self::enmInteractType_BeVisitCPHouse,
            'enmInteractType_BeLikeCPHouse' => self::enmInteractType_BeLikeCPHouse,
            'enmInteractType_Chat' => self::enmInteractType_Chat,
            'enmInteractType_InviteRoom' => self::enmInteractType_InviteRoom,
            'enmInteractType_InviteMatch' => self::enmInteractType_InviteMatch,
            'enmInteractType_InviteQualify' => self::enmInteractType_InviteQualify,
            'enmInteractType_ActCard' => self::enmInteractType_ActCard,
            'enmInteractType_BeInvitedWheel' => self::enmInteractType_BeInvitedWheel,
            'enmInteractType_BeInvitedBoat' => self::enmInteractType_BeInvitedBoat,
            'enmInteractType_SendGift' => self::enmInteractType_SendGift,
            'enmInteractType_SendGoods' => self::enmInteractType_SendGoods,
            'enmInteractType_SendGCoin' => self::enmInteractType_SendGCoin,
        );
    }
}
}