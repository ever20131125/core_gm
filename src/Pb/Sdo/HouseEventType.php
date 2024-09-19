<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HouseEventType enum
 */
final class HouseEventType
{
    const enmHouseEvent_None = 0;
    const enmHouseEvent_Merge = 1;
    const enmHouseEvent_Produce = 2;
    const enmHouseEvent_Dress = 3;
    const enmHouseEvent_Visit = 4;
    const enmHouseEvent_Like = 5;
    const enmHouseEvent_Floor = 6;
    const enmHouseEvent_CreateRoom = 7;
    const enmHouseEvent_Invite = 8;
    const enmHouseEvent_DressCPHouse = 9;
    const enmHouseEvent_InviteCPHouse = 10;
    const enmHouseEvent_VisitCPHouse = 11;
    const enmHouseEvent_LikeCPHouse = 12;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmHouseEvent_None' => self::enmHouseEvent_None,
            'enmHouseEvent_Merge' => self::enmHouseEvent_Merge,
            'enmHouseEvent_Produce' => self::enmHouseEvent_Produce,
            'enmHouseEvent_Dress' => self::enmHouseEvent_Dress,
            'enmHouseEvent_Visit' => self::enmHouseEvent_Visit,
            'enmHouseEvent_Like' => self::enmHouseEvent_Like,
            'enmHouseEvent_Floor' => self::enmHouseEvent_Floor,
            'enmHouseEvent_CreateRoom' => self::enmHouseEvent_CreateRoom,
            'enmHouseEvent_Invite' => self::enmHouseEvent_Invite,
            'enmHouseEvent_DressCPHouse' => self::enmHouseEvent_DressCPHouse,
            'enmHouseEvent_InviteCPHouse' => self::enmHouseEvent_InviteCPHouse,
            'enmHouseEvent_VisitCPHouse' => self::enmHouseEvent_VisitCPHouse,
            'enmHouseEvent_LikeCPHouse' => self::enmHouseEvent_LikeCPHouse,
        );
    }
}
}