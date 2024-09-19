<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomNotiType enum
 */
final class RoomNotiType
{
    const enmRoomNotiType_New = 0;
    const enmRoomNotiType_Exist = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoomNotiType_New' => self::enmRoomNotiType_New,
            'enmRoomNotiType_Exist' => self::enmRoomNotiType_Exist,
        );
    }
}
}