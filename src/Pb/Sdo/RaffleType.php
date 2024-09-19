<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RaffleType enum
 */
final class RaffleType
{
    const enmRaffleType_Null = -1;
    const enmRaffleType_ALL = 0;
    const enmRaffleType_Circle = 1;
    const enmRaffleType_Loop = 2;
    const enmRaffleType_Multi = 3;
    const enmRaffleType_Ban = 4;
    const enmRaffleType_TotalCount = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRaffleType_Null' => self::enmRaffleType_Null,
            'enmRaffleType_ALL' => self::enmRaffleType_ALL,
            'enmRaffleType_Circle' => self::enmRaffleType_Circle,
            'enmRaffleType_Loop' => self::enmRaffleType_Loop,
            'enmRaffleType_Multi' => self::enmRaffleType_Multi,
            'enmRaffleType_Ban' => self::enmRaffleType_Ban,
            'enmRaffleType_TotalCount' => self::enmRaffleType_TotalCount,
        );
    }
}
}