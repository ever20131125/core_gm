<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchKind enum
 */
final class MatchKind
{
    const enmMatchKind_Normal = 0;
    const enmMatchKind_Care = 1;
    const enmMatchKind_Master = 2;
    const enmMatchKind_Cheat = 3;
    const enmMatchKind_Count = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMatchKind_Normal' => self::enmMatchKind_Normal,
            'enmMatchKind_Care' => self::enmMatchKind_Care,
            'enmMatchKind_Master' => self::enmMatchKind_Master,
            'enmMatchKind_Cheat' => self::enmMatchKind_Cheat,
            'enmMatchKind_Count' => self::enmMatchKind_Count,
        );
    }
}
}