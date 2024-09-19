<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDKeyType enum
 */
final class CDKeyType
{
    const enmCDKeyType_Normal = 0;
    const enmCDKeyType_WX = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCDKeyType_Normal' => self::enmCDKeyType_Normal,
            'enmCDKeyType_WX' => self::enmCDKeyType_WX,
        );
    }
}
}