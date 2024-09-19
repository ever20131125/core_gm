<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomType enum
 */
final class RoomType
{
    const enmRoomType_None = 0;
    const enmRoomType_Common = 1;
    const enmRoomType_Wedding = 2;
    const enmRoomType_Match = 3;
    const enmRoomType_Leisure = 4;
    const enmRoomType_Teach = 5;
    const enmRoomType_House = 6;
    const enmRoomType_CoupleHouse = 7;
    const enmRoomType_Amateur = 8;
    const enmRoomType_Qualify = 9;
    const enmRoomType_Idol = 10;
    const enmRoomType_GuildBattle = 11;
    const enmRoomType_Max = 32;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoomType_None' => self::enmRoomType_None,
            'enmRoomType_Common' => self::enmRoomType_Common,
            'enmRoomType_Wedding' => self::enmRoomType_Wedding,
            'enmRoomType_Match' => self::enmRoomType_Match,
            'enmRoomType_Leisure' => self::enmRoomType_Leisure,
            'enmRoomType_Teach' => self::enmRoomType_Teach,
            'enmRoomType_House' => self::enmRoomType_House,
            'enmRoomType_CoupleHouse' => self::enmRoomType_CoupleHouse,
            'enmRoomType_Amateur' => self::enmRoomType_Amateur,
            'enmRoomType_Qualify' => self::enmRoomType_Qualify,
            'enmRoomType_Idol' => self::enmRoomType_Idol,
            'enmRoomType_GuildBattle' => self::enmRoomType_GuildBattle,
            'enmRoomType_Max' => self::enmRoomType_Max,
        );
    }
}
}