<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BreakUpType enum
 */
final class BreakUpType
{
    const enmBreakUpType_None = 0;
    const enmBreakUpType_RollBack = 1;
    const enmBreakUpType_Refuse = 2;
    const enmBreakUpType_Now = 3;
    const enmBreakUpType_Apply = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBreakUpType_None' => self::enmBreakUpType_None,
            'enmBreakUpType_RollBack' => self::enmBreakUpType_RollBack,
            'enmBreakUpType_Refuse' => self::enmBreakUpType_Refuse,
            'enmBreakUpType_Now' => self::enmBreakUpType_Now,
            'enmBreakUpType_Apply' => self::enmBreakUpType_Apply,
        );
    }
}
}