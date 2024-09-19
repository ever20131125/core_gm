<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MergeLineType enum
 */
final class MergeLineType
{
    const enmMergeLineType_None = 0;
    const enmMergeLineType_Line1 = 1;
    const enmMergeLineType_Line2 = 2;
    const enmMergeLineType_Line3 = 3;
    const enmMergeLineType_Line4 = 4;
    const enmMergeLineType_Line5 = 5;
    const enmMergeLineType_Backslash = 11;
    const enmMergeLineType_Slash = 12;
    const enmMergeLineType_All = 21;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMergeLineType_None' => self::enmMergeLineType_None,
            'enmMergeLineType_Line1' => self::enmMergeLineType_Line1,
            'enmMergeLineType_Line2' => self::enmMergeLineType_Line2,
            'enmMergeLineType_Line3' => self::enmMergeLineType_Line3,
            'enmMergeLineType_Line4' => self::enmMergeLineType_Line4,
            'enmMergeLineType_Line5' => self::enmMergeLineType_Line5,
            'enmMergeLineType_Backslash' => self::enmMergeLineType_Backslash,
            'enmMergeLineType_Slash' => self::enmMergeLineType_Slash,
            'enmMergeLineType_All' => self::enmMergeLineType_All,
        );
    }
}
}