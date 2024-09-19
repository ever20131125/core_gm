<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GardenEventType enum
 */
final class GardenEventType
{
    const enmGardenEventType_Null = 0;
    const enmGardenEventType_P_Water = 1;
    const enmGardenEventType_P_SpeedUp = 2;
    const enmGardenEventType_P_Reap = 3;
    const enmGardenEventType_A_Water = 4;
    const enmGardenEventType_A_SpeedUp = 5;
    const enmGardenEventType_A_Reap = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGardenEventType_Null' => self::enmGardenEventType_Null,
            'enmGardenEventType_P_Water' => self::enmGardenEventType_P_Water,
            'enmGardenEventType_P_SpeedUp' => self::enmGardenEventType_P_SpeedUp,
            'enmGardenEventType_P_Reap' => self::enmGardenEventType_P_Reap,
            'enmGardenEventType_A_Water' => self::enmGardenEventType_A_Water,
            'enmGardenEventType_A_SpeedUp' => self::enmGardenEventType_A_SpeedUp,
            'enmGardenEventType_A_Reap' => self::enmGardenEventType_A_Reap,
        );
    }
}
}