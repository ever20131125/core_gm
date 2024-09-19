<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzlePartState enum
 */
final class PuzzlePartState
{
    const enmPuzzlePartState_Completed = 0;
    const enmPuzzlePartState_PrizeGot = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPuzzlePartState_Completed' => self::enmPuzzlePartState_Completed,
            'enmPuzzlePartState_PrizeGot' => self::enmPuzzlePartState_PrizeGot,
        );
    }
}
}