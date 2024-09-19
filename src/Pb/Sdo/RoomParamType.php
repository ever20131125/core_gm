<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomParamType enum
 */
final class RoomParamType
{
    const enmRoomParamType_None = 0;
    const enmRoomParamType_Scene = 1;
    const enmRoomParamType_Music = 2;
    const enmRoomParamType_MusicLevel = 4;
    const enmRoomParamType_GamePlay = 8;
    const enmRoomParamType_GameMode = 16;
    const enmRoomParamType_RoomOption = 32;
    const enmRoomParamType_OtherParam0 = 32768;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoomParamType_None' => self::enmRoomParamType_None,
            'enmRoomParamType_Scene' => self::enmRoomParamType_Scene,
            'enmRoomParamType_Music' => self::enmRoomParamType_Music,
            'enmRoomParamType_MusicLevel' => self::enmRoomParamType_MusicLevel,
            'enmRoomParamType_GamePlay' => self::enmRoomParamType_GamePlay,
            'enmRoomParamType_GameMode' => self::enmRoomParamType_GameMode,
            'enmRoomParamType_RoomOption' => self::enmRoomParamType_RoomOption,
            'enmRoomParamType_OtherParam0' => self::enmRoomParamType_OtherParam0,
        );
    }
}
}