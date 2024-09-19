<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WishFriendReason enum
 */
final class WishFriendReason
{
    const enmWishFriendReason_None = 0;
    const enmWishFriendReason_Level = 1;
    const enmWishFriendReason_GetModel = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWishFriendReason_None' => self::enmWishFriendReason_None,
            'enmWishFriendReason_Level' => self::enmWishFriendReason_Level,
            'enmWishFriendReason_GetModel' => self::enmWishFriendReason_GetModel,
        );
    }
}
}