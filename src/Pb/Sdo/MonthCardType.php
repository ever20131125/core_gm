<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MonthCardType enum
 */
final class MonthCardType
{
    const enmMonthCardType_white = 0;
    const enmMonthCardType_black = 1;
    const enmMonthCardType_Max = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMonthCardType_white' => self::enmMonthCardType_white,
            'enmMonthCardType_black' => self::enmMonthCardType_black,
            'enmMonthCardType_Max' => self::enmMonthCardType_Max,
        );
    }
}
}