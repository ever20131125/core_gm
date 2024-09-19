<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SocialPrizeType enum
 */
final class SocialPrizeType
{
    const enmSocialPrizeType_None = 0;
    const enmSocialPrizeType_Birthday = 1;
    const enmSocialPrizeType_Flower = 2;
    const enmSocialPrizeType_Gifts = 3;
    const enmSocialPrizeType_Day = 4;
    const enmSocialPrizeType_Lover_TokenGift = 17;
    const enmSocialPrizeType_Lover_MarryDay = 18;
    const enmSocialPrizeType_Lover_Flower = 19;
    const enmSocialPrizeType_Lover_Gift = 20;
    const enmSocialPrizeType_Lover_Dress = 21;
    const enmSocialPrizeType_Lover_Day = 22;
    const enmSocialPrizeType_Lover_Date = 23;
    const enmSocialPrizeType_LoverDay_Gift = 33;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSocialPrizeType_None' => self::enmSocialPrizeType_None,
            'enmSocialPrizeType_Birthday' => self::enmSocialPrizeType_Birthday,
            'enmSocialPrizeType_Flower' => self::enmSocialPrizeType_Flower,
            'enmSocialPrizeType_Gifts' => self::enmSocialPrizeType_Gifts,
            'enmSocialPrizeType_Day' => self::enmSocialPrizeType_Day,
            'enmSocialPrizeType_Lover_TokenGift' => self::enmSocialPrizeType_Lover_TokenGift,
            'enmSocialPrizeType_Lover_MarryDay' => self::enmSocialPrizeType_Lover_MarryDay,
            'enmSocialPrizeType_Lover_Flower' => self::enmSocialPrizeType_Lover_Flower,
            'enmSocialPrizeType_Lover_Gift' => self::enmSocialPrizeType_Lover_Gift,
            'enmSocialPrizeType_Lover_Dress' => self::enmSocialPrizeType_Lover_Dress,
            'enmSocialPrizeType_Lover_Day' => self::enmSocialPrizeType_Lover_Day,
            'enmSocialPrizeType_Lover_Date' => self::enmSocialPrizeType_Lover_Date,
            'enmSocialPrizeType_LoverDay_Gift' => self::enmSocialPrizeType_LoverDay_Gift,
        );
    }
}
}