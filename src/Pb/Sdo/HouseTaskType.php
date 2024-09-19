<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HouseTaskType enum
 */
final class HouseTaskType
{
    const enmHouseTaskType_Normal = 0;
    const enmHouseTaskType_Daily = 1;
    const enmHouseTaskType_Circle = 2;
    const enmHouseTaskType_Max = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmHouseTaskType_Normal' => self::enmHouseTaskType_Normal,
            'enmHouseTaskType_Daily' => self::enmHouseTaskType_Daily,
            'enmHouseTaskType_Circle' => self::enmHouseTaskType_Circle,
            'enmHouseTaskType_Max' => self::enmHouseTaskType_Max,
        );
    }
}
}