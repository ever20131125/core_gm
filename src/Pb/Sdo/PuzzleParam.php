<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzleParam enum
 */
final class PuzzleParam
{
    const PuzzleParam_Repeat = 0;
    const PuzzleParam_NotCount = 1;
    const PuzzleParam_HasType = 2;
    const PuzzleParam_FloorsCount = 3;
    const PuzzleParam_Max = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PuzzleParam_Repeat' => self::PuzzleParam_Repeat,
            'PuzzleParam_NotCount' => self::PuzzleParam_NotCount,
            'PuzzleParam_HasType' => self::PuzzleParam_HasType,
            'PuzzleParam_FloorsCount' => self::PuzzleParam_FloorsCount,
            'PuzzleParam_Max' => self::PuzzleParam_Max,
        );
    }
}
}