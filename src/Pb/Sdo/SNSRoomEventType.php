<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SNSRoomEventType enum
 */
final class SNSRoomEventType
{
    const enmSNSRoomEvent_None = 0;
    const enmSNSRoomEvent_Drink = 1;
    const enmSNSRoomEvent_Gift = 2;
    const enmSNSRoomEvent_Talk = 3;
    const enmSNSRoomEvent_BallGame = 4;
    const enmSNSRoomEvent_Wheel = 5;
    const enmSNSRoomEvent_Boat = 6;
    const enmSNSRoomEvent_BlindBox = 7;
    const enmSNSRoomEvent_Swimpool = 8;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSNSRoomEvent_None' => self::enmSNSRoomEvent_None,
            'enmSNSRoomEvent_Drink' => self::enmSNSRoomEvent_Drink,
            'enmSNSRoomEvent_Gift' => self::enmSNSRoomEvent_Gift,
            'enmSNSRoomEvent_Talk' => self::enmSNSRoomEvent_Talk,
            'enmSNSRoomEvent_BallGame' => self::enmSNSRoomEvent_BallGame,
            'enmSNSRoomEvent_Wheel' => self::enmSNSRoomEvent_Wheel,
            'enmSNSRoomEvent_Boat' => self::enmSNSRoomEvent_Boat,
            'enmSNSRoomEvent_BlindBox' => self::enmSNSRoomEvent_BlindBox,
            'enmSNSRoomEvent_Swimpool' => self::enmSNSRoomEvent_Swimpool,
        );
    }
}
}