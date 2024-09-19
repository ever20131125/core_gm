<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GoodsSaleCategory enum
 */
final class GoodsSaleCategory
{
    const enmGoodsSaleCategory_None = 0;
    const enmGoodsSaleCategory_New = 1;
    const enmGoodsSaleCategory_Hot = 2;
    const enmGoodsSaleCategory_Hide = 4;
    const enmGoodsSaleCategory_OffSale = 8;
    const enmGoodsSaleCategory_Discount = 16;
    const enmGoodsSaleCategory_VIP = 32;
    const enmGoodsSaleCategory_Coupon = 64;
    const enmGoodsSaleCategory_TimeLimited = 128;
    const enmGoodsSaleCategory_SaleLimited = 256;
    const enmGoodsSaleCategory_BuyLimited = 512;
    const enmGoodsSaleCategory_OutOfSale = 1024;
    const enmGoodsSaleCategory_DayBuyLimited = 2048;
    const enmGoodsSaleCategory_Recovery = 4096;
    const enmGoodsSaleCategory_Lover = 8192;
    const enmGoodsSaleCategory_Exp = 16384;
    const enmGoodsSaleCategory_HostPet = 32768;
    const enmGoodsSaleCategory_NoShowBuy = 65536;
    const enmGoodsSaleCategory_Player = 1048576;
    const enmGoodsSaleCategory_Star = 2097152;
    const enmGoodsSaleCategory_Room = 4194304;
    const enmGoodsSaleCategory_Guild = 8388608;
    const enmGoodsSaleCategory_Rank = 16777216;
    const enmGoodsSaleCategory_Pet = 33554432;
    const enmGoodsSaleCategory_Activity = 67108864;
    const enmGoodsSaleCategory_Gift = 134217728;
    const enmGoodsSaleCategory_SaleMask = 1048575;
    const enmGoodsSaleCategory_MarketMask = 267386880;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGoodsSaleCategory_None' => self::enmGoodsSaleCategory_None,
            'enmGoodsSaleCategory_New' => self::enmGoodsSaleCategory_New,
            'enmGoodsSaleCategory_Hot' => self::enmGoodsSaleCategory_Hot,
            'enmGoodsSaleCategory_Hide' => self::enmGoodsSaleCategory_Hide,
            'enmGoodsSaleCategory_OffSale' => self::enmGoodsSaleCategory_OffSale,
            'enmGoodsSaleCategory_Discount' => self::enmGoodsSaleCategory_Discount,
            'enmGoodsSaleCategory_VIP' => self::enmGoodsSaleCategory_VIP,
            'enmGoodsSaleCategory_Coupon' => self::enmGoodsSaleCategory_Coupon,
            'enmGoodsSaleCategory_TimeLimited' => self::enmGoodsSaleCategory_TimeLimited,
            'enmGoodsSaleCategory_SaleLimited' => self::enmGoodsSaleCategory_SaleLimited,
            'enmGoodsSaleCategory_BuyLimited' => self::enmGoodsSaleCategory_BuyLimited,
            'enmGoodsSaleCategory_OutOfSale' => self::enmGoodsSaleCategory_OutOfSale,
            'enmGoodsSaleCategory_DayBuyLimited' => self::enmGoodsSaleCategory_DayBuyLimited,
            'enmGoodsSaleCategory_Recovery' => self::enmGoodsSaleCategory_Recovery,
            'enmGoodsSaleCategory_Lover' => self::enmGoodsSaleCategory_Lover,
            'enmGoodsSaleCategory_Exp' => self::enmGoodsSaleCategory_Exp,
            'enmGoodsSaleCategory_HostPet' => self::enmGoodsSaleCategory_HostPet,
            'enmGoodsSaleCategory_NoShowBuy' => self::enmGoodsSaleCategory_NoShowBuy,
            'enmGoodsSaleCategory_Player' => self::enmGoodsSaleCategory_Player,
            'enmGoodsSaleCategory_Star' => self::enmGoodsSaleCategory_Star,
            'enmGoodsSaleCategory_Room' => self::enmGoodsSaleCategory_Room,
            'enmGoodsSaleCategory_Guild' => self::enmGoodsSaleCategory_Guild,
            'enmGoodsSaleCategory_Rank' => self::enmGoodsSaleCategory_Rank,
            'enmGoodsSaleCategory_Pet' => self::enmGoodsSaleCategory_Pet,
            'enmGoodsSaleCategory_Activity' => self::enmGoodsSaleCategory_Activity,
            'enmGoodsSaleCategory_Gift' => self::enmGoodsSaleCategory_Gift,
            'enmGoodsSaleCategory_SaleMask' => self::enmGoodsSaleCategory_SaleMask,
            'enmGoodsSaleCategory_MarketMask' => self::enmGoodsSaleCategory_MarketMask,
        );
    }
}
}