<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendGiftType enum
 */
final class FriendGiftType
{
    const enmFriendGiftType_None = 0;
    const enmFriendGiftType_Consume = 1;
    const enmFriendGiftType_Transfer = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFriendGiftType_None' => self::enmFriendGiftType_None,
            'enmFriendGiftType_Consume' => self::enmFriendGiftType_Consume,
            'enmFriendGiftType_Transfer' => self::enmFriendGiftType_Transfer,
        );
    }
}
}