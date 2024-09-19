<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleRaiseLogType enum
 */
final class CoupleRaiseLogType
{
    const enmCoupleRaiseLogType_None = 0;
    const enmCoupleRaiseLogType_Name = 1;
    const enmCoupleRaiseLogType_Body = 2;
    const enmCoupleRaiseLogType_Raise = 3;
    const enmCoupleRaiseLogType_Up = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCoupleRaiseLogType_None' => self::enmCoupleRaiseLogType_None,
            'enmCoupleRaiseLogType_Name' => self::enmCoupleRaiseLogType_Name,
            'enmCoupleRaiseLogType_Body' => self::enmCoupleRaiseLogType_Body,
            'enmCoupleRaiseLogType_Raise' => self::enmCoupleRaiseLogType_Raise,
            'enmCoupleRaiseLogType_Up' => self::enmCoupleRaiseLogType_Up,
        );
    }
}
}