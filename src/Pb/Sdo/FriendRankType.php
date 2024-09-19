<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendRankType enum
 */
final class FriendRankType
{
    const enmFriendRankType_None = 0;
    const enmFriendRankType_AddTime = 1;
    const enmFriendRankType_Intimacy = 2;
    const enmFriendRankType_Action = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFriendRankType_None' => self::enmFriendRankType_None,
            'enmFriendRankType_AddTime' => self::enmFriendRankType_AddTime,
            'enmFriendRankType_Intimacy' => self::enmFriendRankType_Intimacy,
            'enmFriendRankType_Action' => self::enmFriendRankType_Action,
        );
    }
}
}