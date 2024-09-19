<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzleLockType enum
 */
final class PuzzleLockType
{
    const enmPuzzleLockType_Invalid = 0;
    const enmPuzzleLockType_Close = 1;
    const enmPuzzleLockType_Open = 2;
    const enmPuzzleLockType_Max = 3;
    const enmPuzzleLockType_Customize = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPuzzleLockType_Invalid' => self::enmPuzzleLockType_Invalid,
            'enmPuzzleLockType_Close' => self::enmPuzzleLockType_Close,
            'enmPuzzleLockType_Open' => self::enmPuzzleLockType_Open,
            'enmPuzzleLockType_Max' => self::enmPuzzleLockType_Max,
            'enmPuzzleLockType_Customize' => self::enmPuzzleLockType_Customize,
        );
    }
}
}