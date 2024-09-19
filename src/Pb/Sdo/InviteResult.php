<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InviteResult enum
 */
final class InviteResult
{
    const enmInviteResult_Success = 0;
    const enmInviteResult_Failed = 1;
    const enmInviteResult_UnknownPlayer = 2;
    const enmInviteResult_NotIdle = 4;
    const enmInviteResult_NotSameZone = 5;
    const enmInviteResult_RoomFull = 7;
    const enmInviteResult_HasBeenInvited = 8;
    const enmInviteResult_NotEnoughChance = 9;
    const enmInviteResult_RankTitleLow = 10;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmInviteResult_Success' => self::enmInviteResult_Success,
            'enmInviteResult_Failed' => self::enmInviteResult_Failed,
            'enmInviteResult_UnknownPlayer' => self::enmInviteResult_UnknownPlayer,
            'enmInviteResult_NotIdle' => self::enmInviteResult_NotIdle,
            'enmInviteResult_NotSameZone' => self::enmInviteResult_NotSameZone,
            'enmInviteResult_RoomFull' => self::enmInviteResult_RoomFull,
            'enmInviteResult_HasBeenInvited' => self::enmInviteResult_HasBeenInvited,
            'enmInviteResult_NotEnoughChance' => self::enmInviteResult_NotEnoughChance,
            'enmInviteResult_RankTitleLow' => self::enmInviteResult_RankTitleLow,
        );
    }
}
}