<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BuyType enum
 */
final class BuyType
{
    const enmBuyType_None = 0;
    const enmBuyType_Normal = 1;
    const enmBuyType_Cart = 2;
    const enmBuyType_Exp = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBuyType_None' => self::enmBuyType_None,
            'enmBuyType_Normal' => self::enmBuyType_Normal,
            'enmBuyType_Cart' => self::enmBuyType_Cart,
            'enmBuyType_Exp' => self::enmBuyType_Exp,
        );
    }
}
}