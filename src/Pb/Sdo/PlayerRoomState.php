<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlayerRoomState enum
 */
final class PlayerRoomState
{
    const enmPlayerRoomState_None = 0;
    const enmPlayerRoomState_InRoom = 1;
    const enmPlayerRoomState_Observe = 2;
    const enmPlayerRoomState_Ready = 3;
    const enmPlayerRoomState_Playing = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPlayerRoomState_None' => self::enmPlayerRoomState_None,
            'enmPlayerRoomState_InRoom' => self::enmPlayerRoomState_InRoom,
            'enmPlayerRoomState_Observe' => self::enmPlayerRoomState_Observe,
            'enmPlayerRoomState_Ready' => self::enmPlayerRoomState_Ready,
            'enmPlayerRoomState_Playing' => self::enmPlayerRoomState_Playing,
        );
    }
}
}