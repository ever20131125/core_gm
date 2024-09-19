<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualityColor enum
 */
final class QualityColor
{
    const enmQualityColor_Green = 1;
    const enmQualityColor_Blue = 2;
    const enmQualityColor_Purple = 3;
    const enmQualityColor_Orange = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmQualityColor_Green' => self::enmQualityColor_Green,
            'enmQualityColor_Blue' => self::enmQualityColor_Blue,
            'enmQualityColor_Purple' => self::enmQualityColor_Purple,
            'enmQualityColor_Orange' => self::enmQualityColor_Orange,
        );
    }
}
}