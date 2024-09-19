<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ArrangeType enum
 */
final class ArrangeType
{
    const enmArrType_Invalid = 0;
    const enmArrType_Talk = 1;
    const enmArrType_Item = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmArrType_Invalid' => self::enmArrType_Invalid,
            'enmArrType_Talk' => self::enmArrType_Talk,
            'enmArrType_Item' => self::enmArrType_Item,
        );
    }
}
}