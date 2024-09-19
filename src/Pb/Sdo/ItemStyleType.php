<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemStyleType enum
 */
final class ItemStyleType
{
    const enmItemStyle_Normal = 0;
    const enmItemStyle_SwimDress = 1;
    const enmItemStyle_WeddingDress = 2;
    const enmItemStyle_GuildDress = 3;
    const enmItemStyle_Formal = 4;
    const enmItemStyle_Hanfu = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmItemStyle_Normal' => self::enmItemStyle_Normal,
            'enmItemStyle_SwimDress' => self::enmItemStyle_SwimDress,
            'enmItemStyle_WeddingDress' => self::enmItemStyle_WeddingDress,
            'enmItemStyle_GuildDress' => self::enmItemStyle_GuildDress,
            'enmItemStyle_Formal' => self::enmItemStyle_Formal,
            'enmItemStyle_Hanfu' => self::enmItemStyle_Hanfu,
        );
    }
}
}