<?php
/**
 * Auto generated from define.proto at 2021-12-03 06:53:24
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PrizeType enum
 */
final class PrizeType
{
    const enmPrizeType_Invalid = -1;
    const enmPrizeType_AvatarGain_EachSuit = 0;
    const enmPrizeType_AvatarGain_SuitBook = 1;
    const enmPrizeType_AvatarGain_CCLevel = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPrizeType_Invalid' => self::enmPrizeType_Invalid,
            'enmPrizeType_AvatarGain_EachSuit' => self::enmPrizeType_AvatarGain_EachSuit,
            'enmPrizeType_AvatarGain_SuitBook' => self::enmPrizeType_AvatarGain_SuitBook,
            'enmPrizeType_AvatarGain_CCLevel' => self::enmPrizeType_AvatarGain_CCLevel,
        );
    }
}
}