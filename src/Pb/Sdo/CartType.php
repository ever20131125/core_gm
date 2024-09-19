<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CartType enum
 */
final class CartType
{
    const enmCartType_None = 0;
    const enmCartType_Cart = 1;
    const enmCartType_Wish = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCartType_None' => self::enmCartType_None,
            'enmCartType_Cart' => self::enmCartType_Cart,
            'enmCartType_Wish' => self::enmCartType_Wish,
        );
    }
}
}