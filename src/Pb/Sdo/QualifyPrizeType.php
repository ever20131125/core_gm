<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyPrizeType enum
 */
final class QualifyPrizeType
{
    const enmQualifyPrizeType_Season = 0;
    const enmQualifyPrizeType_Rank = 1;
    const enmQualifyPrizeType_Daily = 2;
    const enmQualifyPrizeType_Career = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmQualifyPrizeType_Season' => self::enmQualifyPrizeType_Season,
            'enmQualifyPrizeType_Rank' => self::enmQualifyPrizeType_Rank,
            'enmQualifyPrizeType_Daily' => self::enmQualifyPrizeType_Daily,
            'enmQualifyPrizeType_Career' => self::enmQualifyPrizeType_Career,
        );
    }
}
}