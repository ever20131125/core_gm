<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CupType enum
 */
final class CupType
{
    const enmCupType_None = 0;
    const enmCupType_Copper = 1;
    const enmCupType_Sliver = 2;
    const enmCupType_Gold = 3;
    const enmCupType_Platinum = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCupType_None' => self::enmCupType_None,
            'enmCupType_Copper' => self::enmCupType_Copper,
            'enmCupType_Sliver' => self::enmCupType_Sliver,
            'enmCupType_Gold' => self::enmCupType_Gold,
            'enmCupType_Platinum' => self::enmCupType_Platinum,
        );
    }
}
}