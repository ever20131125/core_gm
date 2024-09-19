<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingActOpt enum
 */
final class WeddingActOpt
{
    const enmWeddingActOperate_Null = 0;
    const enmWeddingActOperate_RefreshChest = 1;
    const enmWeddingActOperate_BuyChest = 2;
    const enmWeddingActOperate_GetRefreshPrize = 3;
    const enmWeddingActOperate_Wish = 4;
    const enmWeddingActOperate_GetWishPrize = 5;
    const enmWeddingActOperate_BuySpecials = 6;
    const enmWeddingActOperate_Exchange = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWeddingActOperate_Null' => self::enmWeddingActOperate_Null,
            'enmWeddingActOperate_RefreshChest' => self::enmWeddingActOperate_RefreshChest,
            'enmWeddingActOperate_BuyChest' => self::enmWeddingActOperate_BuyChest,
            'enmWeddingActOperate_GetRefreshPrize' => self::enmWeddingActOperate_GetRefreshPrize,
            'enmWeddingActOperate_Wish' => self::enmWeddingActOperate_Wish,
            'enmWeddingActOperate_GetWishPrize' => self::enmWeddingActOperate_GetWishPrize,
            'enmWeddingActOperate_BuySpecials' => self::enmWeddingActOperate_BuySpecials,
            'enmWeddingActOperate_Exchange' => self::enmWeddingActOperate_Exchange,
        );
    }
}
}