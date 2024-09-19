<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomMsgPos enum
 */
final class RoomMsgPos
{
    const enmRoomMsgPos_Top = 0;
    const enmRoomMsgPos_Mid = 1;
    const enmRoomMsgPos_Bottom = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoomMsgPos_Top' => self::enmRoomMsgPos_Top,
            'enmRoomMsgPos_Mid' => self::enmRoomMsgPos_Mid,
            'enmRoomMsgPos_Bottom' => self::enmRoomMsgPos_Bottom,
        );
    }
}
}