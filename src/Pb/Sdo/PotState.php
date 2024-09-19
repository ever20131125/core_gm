<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PotState enum
 */
final class PotState
{
    const enmPotState_None = 0;
    const enmPotState_FREE = 1;
    const enmPotState_PLANT = 2;
    const enmPotState_TREASURE = 4;
    const enmPotState_WATER_SHORTAGE = 8;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPotState_None' => self::enmPotState_None,
            'enmPotState_FREE' => self::enmPotState_FREE,
            'enmPotState_PLANT' => self::enmPotState_PLANT,
            'enmPotState_TREASURE' => self::enmPotState_TREASURE,
            'enmPotState_WATER_SHORTAGE' => self::enmPotState_WATER_SHORTAGE,
        );
    }
}
}