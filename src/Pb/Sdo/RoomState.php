<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomState enum
 */
final class RoomState
{
    const enmRoomState_None = 0;
    const enmRoomState_Waiting = 1;
    const enmRoomState_Game = 2;
    const enmRoomState_AfterMovie = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoomState_None' => self::enmRoomState_None,
            'enmRoomState_Waiting' => self::enmRoomState_Waiting,
            'enmRoomState_Game' => self::enmRoomState_Game,
            'enmRoomState_AfterMovie' => self::enmRoomState_AfterMovie,
        );
    }
}
}