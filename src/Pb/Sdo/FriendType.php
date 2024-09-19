<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendType enum
 */
final class FriendType
{
    const enmFriendType_None = 0;
    const enmFriendType_Follow = 1;
    const enmFriendType_Fans = 2;
    const enmFriendType_Blacked = 3;
    const enmFriendType_Friend = 4;
    const enmFriendType_PlayMate = 5;
    const enmFriendType_Couple = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFriendType_None' => self::enmFriendType_None,
            'enmFriendType_Follow' => self::enmFriendType_Follow,
            'enmFriendType_Fans' => self::enmFriendType_Fans,
            'enmFriendType_Blacked' => self::enmFriendType_Blacked,
            'enmFriendType_Friend' => self::enmFriendType_Friend,
            'enmFriendType_PlayMate' => self::enmFriendType_PlayMate,
            'enmFriendType_Couple' => self::enmFriendType_Couple,
        );
    }
}
}