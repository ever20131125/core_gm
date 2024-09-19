<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LimitGiftType enum
 */
final class LimitGiftType
{
    const enmLimitGiftType_Normal = 0;
    const enmLimitGiftType_LimitQuantity = 1;
    const enmLimitGiftType_LimitDay = 2;
    const enmLimitGiftType_LimitWeek = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmLimitGiftType_Normal' => self::enmLimitGiftType_Normal,
            'enmLimitGiftType_LimitQuantity' => self::enmLimitGiftType_LimitQuantity,
            'enmLimitGiftType_LimitDay' => self::enmLimitGiftType_LimitDay,
            'enmLimitGiftType_LimitWeek' => self::enmLimitGiftType_LimitWeek,
        );
    }
}
}