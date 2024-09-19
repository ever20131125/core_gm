<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WishStarActOpt enum
 */
final class WishStarActOpt
{
    const enmWishStarActOpt_Null = 0;
    const enmWishStarActOpt_GetInfo = 1;
    const enmWishStarActOpt_LightStar = 2;
    const enmWishStarActOpt_GetPrize = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWishStarActOpt_Null' => self::enmWishStarActOpt_Null,
            'enmWishStarActOpt_GetInfo' => self::enmWishStarActOpt_GetInfo,
            'enmWishStarActOpt_LightStar' => self::enmWishStarActOpt_LightStar,
            'enmWishStarActOpt_GetPrize' => self::enmWishStarActOpt_GetPrize,
        );
    }
}
}