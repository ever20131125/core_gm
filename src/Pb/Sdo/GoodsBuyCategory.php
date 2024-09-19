<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GoodsBuyCategory enum
 */
final class GoodsBuyCategory
{
    const enmGoodsBuyCategory_None = 0;
    const enmGoodsBuyCategory_Money = 1;
    const enmGoodsBuyCategory_GCoin = 2;
    const enmGoodsBuyCategory_Score = 3;
    const enmGoodsBuyCategory_MaxCount = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGoodsBuyCategory_None' => self::enmGoodsBuyCategory_None,
            'enmGoodsBuyCategory_Money' => self::enmGoodsBuyCategory_Money,
            'enmGoodsBuyCategory_GCoin' => self::enmGoodsBuyCategory_GCoin,
            'enmGoodsBuyCategory_Score' => self::enmGoodsBuyCategory_Score,
            'enmGoodsBuyCategory_MaxCount' => self::enmGoodsBuyCategory_MaxCount,
        );
    }
}
}