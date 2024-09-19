<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActGoodsType enum
 */
final class ActGoodsType
{
    const enmActGoodsType_None = 0;
    const enmActGoodsType_Discount = 1;
    const enmActGoodsType_SaleLi = 2;
    const enmActGoodsType_BuyLi = 4;
    const enmActGoodsType_TimeLi = 8;
    const enmActGoodsType_DayBuyLi = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActGoodsType_None' => self::enmActGoodsType_None,
            'enmActGoodsType_Discount' => self::enmActGoodsType_Discount,
            'enmActGoodsType_SaleLi' => self::enmActGoodsType_SaleLi,
            'enmActGoodsType_BuyLi' => self::enmActGoodsType_BuyLi,
            'enmActGoodsType_TimeLi' => self::enmActGoodsType_TimeLi,
            'enmActGoodsType_DayBuyLi' => self::enmActGoodsType_DayBuyLi,
        );
    }
}
}