<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildTaskState enum
 */
final class GuildTaskState
{
    const enmGuildTaskState_UnReceive = 0;
    const enmGuildTaskState_Received = 1;
    const enmGuildTaskState_Completed = 2;
    const enmGuildTaskState_PrizeGot = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildTaskState_UnReceive' => self::enmGuildTaskState_UnReceive,
            'enmGuildTaskState_Received' => self::enmGuildTaskState_Received,
            'enmGuildTaskState_Completed' => self::enmGuildTaskState_Completed,
            'enmGuildTaskState_PrizeGot' => self::enmGuildTaskState_PrizeGot,
        );
    }
}
}