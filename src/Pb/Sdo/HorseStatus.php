<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HorseStatus enum
 */
final class HorseStatus
{
    const enmHorseStatus_Close = 0;
    const enmHorseStatus_Open = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmHorseStatus_Close' => self::enmHorseStatus_Close,
            'enmHorseStatus_Open' => self::enmHorseStatus_Open,
        );
    }
}
}