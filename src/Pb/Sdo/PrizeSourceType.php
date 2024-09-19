<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PrizeSourceType enum
 */
final class PrizeSourceType
{
    const PrizeSourceType_Base = 0;
    const PrizeSourceType_Build = 1;
    const PrizeSourceType_Prayer = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PrizeSourceType_Base' => self::PrizeSourceType_Base,
            'PrizeSourceType_Build' => self::PrizeSourceType_Build,
            'PrizeSourceType_Prayer' => self::PrizeSourceType_Prayer,
        );
    }
}
}