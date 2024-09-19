<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * JoinGuildType enum
 */
final class JoinGuildType
{
    const enmJoinType_None = 0;
    const enmJoinType_QuickJoin = 1;
    const enmJoinType_Apply = 2;
    const enmJoinType_Invite = 3;
    const enmJoinType_AcceptInvite = 4;
    const enmJoinType_CancleApply = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmJoinType_None' => self::enmJoinType_None,
            'enmJoinType_QuickJoin' => self::enmJoinType_QuickJoin,
            'enmJoinType_Apply' => self::enmJoinType_Apply,
            'enmJoinType_Invite' => self::enmJoinType_Invite,
            'enmJoinType_AcceptInvite' => self::enmJoinType_AcceptInvite,
            'enmJoinType_CancleApply' => self::enmJoinType_CancleApply,
        );
    }
}
}