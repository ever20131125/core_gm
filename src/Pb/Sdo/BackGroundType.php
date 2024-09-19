<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BackGroundType enum
 */
final class BackGroundType
{
    const enmBackGroundType_Normal = 0;
    const enmBackGroundType_House = 1;
    const enmBackGroundType_CoupleHouse = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBackGroundType_Normal' => self::enmBackGroundType_Normal,
            'enmBackGroundType_House' => self::enmBackGroundType_House,
            'enmBackGroundType_CoupleHouse' => self::enmBackGroundType_CoupleHouse,
        );
    }
}
}