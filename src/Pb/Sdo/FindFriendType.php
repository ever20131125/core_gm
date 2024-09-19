<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FindFriendType enum
 */
final class FindFriendType
{
    const enmFindFriendType_None = 1;
    const enmFindFriendType_Star = 2;
    const enmFindFriendType_Label = 3;
    const enmFindFriendType_Dance = 4;
    const enmFindFriendType_Near = 5;
    const enmFindFriendType_Rand = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFindFriendType_None' => self::enmFindFriendType_None,
            'enmFindFriendType_Star' => self::enmFindFriendType_Star,
            'enmFindFriendType_Label' => self::enmFindFriendType_Label,
            'enmFindFriendType_Dance' => self::enmFindFriendType_Dance,
            'enmFindFriendType_Near' => self::enmFindFriendType_Near,
            'enmFindFriendType_Rand' => self::enmFindFriendType_Rand,
        );
    }
}
}