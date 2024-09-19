<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SocialDataType enum
 */
final class SocialDataType
{
    const enmSocialDataType_None = 0;
    const enmSocialDataType_TokenGift = 1;
    const enmSocialDataType_LoverCommon = 2;
    const enmSocialDataType_LoverBirth = 3;
    const enmSocialDataType_Friend = 4;
    const enmSocialDataType_LoverDayGift = 5;
    const enmSocialDataType_DayGift = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSocialDataType_None' => self::enmSocialDataType_None,
            'enmSocialDataType_TokenGift' => self::enmSocialDataType_TokenGift,
            'enmSocialDataType_LoverCommon' => self::enmSocialDataType_LoverCommon,
            'enmSocialDataType_LoverBirth' => self::enmSocialDataType_LoverBirth,
            'enmSocialDataType_Friend' => self::enmSocialDataType_Friend,
            'enmSocialDataType_LoverDayGift' => self::enmSocialDataType_LoverDayGift,
            'enmSocialDataType_DayGift' => self::enmSocialDataType_DayGift,
        );
    }
}
}