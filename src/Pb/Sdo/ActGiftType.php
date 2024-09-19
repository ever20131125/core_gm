<?php
/**
 * Auto generated from define.proto at 2021-12-17 09:50:52
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActGiftType enum
 */
final class ActGiftType
{
    const enmActGiftType_Normal = 0;
    const enmActGiftType_LimitQuantity = 1;
    const enmActGiftType_LimitDay = 2;
    const enmActGiftType_LimitWeek = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActGiftType_Normal' => self::enmActGiftType_Normal,
            'enmActGiftType_LimitQuantity' => self::enmActGiftType_LimitQuantity,
            'enmActGiftType_LimitDay' => self::enmActGiftType_LimitDay,
            'enmActGiftType_LimitWeek' => self::enmActGiftType_LimitWeek,
        );
    }
}
}