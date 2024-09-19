<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomOption enum
 */
final class RoomOption
{
    const enmRoomOption_Normal = 0;
    const enmRoomOption_Reverse = 16;
    const enmRoomOption_8_Key = 32;
    const enmRoomOption_12_Key = 64;
    const enmRoomOption_Auto = 128;
    const enmRoomOption_ReverseKeyMask = 15;
    const enmRoomOption_Reverse_1 = 1;
    const enmRoomOption_Reverse_2 = 2;
    const enmRoomOption_Reverse_3 = 3;
    const enmRoomOption_Reverse_4 = 4;
    const enmRoomOption_Reverse_5 = 5;
    const enmRoomOption_Reverse_6 = 6;
    const enmRoomOption_Reverse_Random = 10;
    const enmRoomOption_Reverse_Free = 11;
    const enmRoomOption_PlayerSilent = 256;
    const enmRoomOption_ObserverSilent = 512;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoomOption_Normal' => self::enmRoomOption_Normal,
            'enmRoomOption_Reverse' => self::enmRoomOption_Reverse,
            'enmRoomOption_8_Key' => self::enmRoomOption_8_Key,
            'enmRoomOption_12_Key' => self::enmRoomOption_12_Key,
            'enmRoomOption_Auto' => self::enmRoomOption_Auto,
            'enmRoomOption_ReverseKeyMask' => self::enmRoomOption_ReverseKeyMask,
            'enmRoomOption_Reverse_1' => self::enmRoomOption_Reverse_1,
            'enmRoomOption_Reverse_2' => self::enmRoomOption_Reverse_2,
            'enmRoomOption_Reverse_3' => self::enmRoomOption_Reverse_3,
            'enmRoomOption_Reverse_4' => self::enmRoomOption_Reverse_4,
            'enmRoomOption_Reverse_5' => self::enmRoomOption_Reverse_5,
            'enmRoomOption_Reverse_6' => self::enmRoomOption_Reverse_6,
            'enmRoomOption_Reverse_Random' => self::enmRoomOption_Reverse_Random,
            'enmRoomOption_Reverse_Free' => self::enmRoomOption_Reverse_Free,
            'enmRoomOption_PlayerSilent' => self::enmRoomOption_PlayerSilent,
            'enmRoomOption_ObserverSilent' => self::enmRoomOption_ObserverSilent,
        );
    }
}
}