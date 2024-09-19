<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RecordPrizeType enum
 */
final class RecordPrizeType
{
    const enmRecordPrize_Invalid = -1;
    const enmRecordPrize_ThemeItemBook = 1;
    const enmRecordPrize_SuitItemBook = 2;
    const enmRecordPrize_QualifyRank = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRecordPrize_Invalid' => self::enmRecordPrize_Invalid,
            'enmRecordPrize_ThemeItemBook' => self::enmRecordPrize_ThemeItemBook,
            'enmRecordPrize_SuitItemBook' => self::enmRecordPrize_SuitItemBook,
            'enmRecordPrize_QualifyRank' => self::enmRecordPrize_QualifyRank,
        );
    }
}
}