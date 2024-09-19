<?php
/**
 * Auto generated from define.proto at 2021-07-29 01:54:30
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FollowType enum
 */
final class FollowType
{
    const enmFollow_Normal = 0;
    const enmFollow_MyFriendFull = 1;
    const enmFollow_HisFriendFull = 2;
    const enmFollow_RefuseFriend = 3;
    const enmFollow_DeleteFriend = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFollow_Normal' => self::enmFollow_Normal,
            'enmFollow_MyFriendFull' => self::enmFollow_MyFriendFull,
            'enmFollow_HisFriendFull' => self::enmFollow_HisFriendFull,
            'enmFollow_RefuseFriend' => self::enmFollow_RefuseFriend,
            'enmFollow_DeleteFriend' => self::enmFollow_DeleteFriend,
        );
    }
}
}