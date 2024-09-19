<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExitGuildType enum
 */
final class ExitGuildType
{
    const enmExitType_Invalid = 0;
    const enmExitType_ByProactive = 1;
    const enmExitType_ByForced = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmExitType_Invalid' => self::enmExitType_Invalid,
            'enmExitType_ByProactive' => self::enmExitType_ByProactive,
            'enmExitType_ByForced' => self::enmExitType_ByForced,
        );
    }
}
}