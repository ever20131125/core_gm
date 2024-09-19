<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TourInfoType enum
 */
final class TourInfoType
{
    const enmTourInfoType_Invalid = 0;
    const enmTourInfoType_Stage = 1;
    const enmTourInfoType_Puzzle = 2;
    const enmTourInfoType_Tree = 3;
    const enmTourInfoType_Section = 4;
    const enmTourInfoType_TreeKey = 5;
    const enmTourInfoType_PuzzlePart = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTourInfoType_Invalid' => self::enmTourInfoType_Invalid,
            'enmTourInfoType_Stage' => self::enmTourInfoType_Stage,
            'enmTourInfoType_Puzzle' => self::enmTourInfoType_Puzzle,
            'enmTourInfoType_Tree' => self::enmTourInfoType_Tree,
            'enmTourInfoType_Section' => self::enmTourInfoType_Section,
            'enmTourInfoType_TreeKey' => self::enmTourInfoType_TreeKey,
            'enmTourInfoType_PuzzlePart' => self::enmTourInfoType_PuzzlePart,
        );
    }
}
}