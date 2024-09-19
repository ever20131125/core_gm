<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildStatus enum
 */
final class GuildStatus
{
    const enmGuildStatus_Invalid = 0;
    const enmGuildStatus_Normal = 1;
    const enmGuildStatus_WaitingTransfer = 2;
    const enmGuildStatus_WaitingDepose = 4;
    const enmGuildStatus_WaitingDeposeStop = 5;
    const enmGuildStatus_WaitingDissolve = 8;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildStatus_Invalid' => self::enmGuildStatus_Invalid,
            'enmGuildStatus_Normal' => self::enmGuildStatus_Normal,
            'enmGuildStatus_WaitingTransfer' => self::enmGuildStatus_WaitingTransfer,
            'enmGuildStatus_WaitingDepose' => self::enmGuildStatus_WaitingDepose,
            'enmGuildStatus_WaitingDeposeStop' => self::enmGuildStatus_WaitingDeposeStop,
            'enmGuildStatus_WaitingDissolve' => self::enmGuildStatus_WaitingDissolve,
        );
    }
}
}