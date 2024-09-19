<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzleState enum
 */
final class PuzzleState
{
    const enmPuzzleState_None = 0;
    const enmPuzzleState_Prepare = 1;
    const enmPuzzleState_Answer = 2;
    const enmPuzzleState_Result = 3;
    const enmPuzzleState_Show = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPuzzleState_None' => self::enmPuzzleState_None,
            'enmPuzzleState_Prepare' => self::enmPuzzleState_Prepare,
            'enmPuzzleState_Answer' => self::enmPuzzleState_Answer,
            'enmPuzzleState_Result' => self::enmPuzzleState_Result,
            'enmPuzzleState_Show' => self::enmPuzzleState_Show,
        );
    }
}
}