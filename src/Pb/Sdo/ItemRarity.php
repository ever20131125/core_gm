<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemRarity enum
 */
final class ItemRarity
{
    const enmItemRarity_NULL = 0;
    const enmItemRarity_Lv1 = 1;
    const enmItemRarity_Lv2 = 2;
    const enmItemRarity_Lv3 = 3;
    const enmItemRarity_Lv4 = 4;
    const enmItemRarity_Lv5 = 5;
    const enmItemRarity_Lv6 = 6;
    const enmItemRarity_Lv7 = 7;
    const enmItemRarity_Max = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmItemRarity_NULL' => self::enmItemRarity_NULL,
            'enmItemRarity_Lv1' => self::enmItemRarity_Lv1,
            'enmItemRarity_Lv2' => self::enmItemRarity_Lv2,
            'enmItemRarity_Lv3' => self::enmItemRarity_Lv3,
            'enmItemRarity_Lv4' => self::enmItemRarity_Lv4,
            'enmItemRarity_Lv5' => self::enmItemRarity_Lv5,
            'enmItemRarity_Lv6' => self::enmItemRarity_Lv6,
            'enmItemRarity_Lv7' => self::enmItemRarity_Lv7,
            'enmItemRarity_Max' => self::enmItemRarity_Max,
        );
    }
}
}