<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildTaskType enum
 */
final class GuildTaskType
{
    const enmGuildTaskType_Invalid = 0;
    const enmGuildTaskType_Daily = 1;
    const enmGuildTaskType_Accumulate = 2;
    const enmGuildTaskType_Max = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildTaskType_Invalid' => self::enmGuildTaskType_Invalid,
            'enmGuildTaskType_Daily' => self::enmGuildTaskType_Daily,
            'enmGuildTaskType_Accumulate' => self::enmGuildTaskType_Accumulate,
            'enmGuildTaskType_Max' => self::enmGuildTaskType_Max,
        );
    }
}
}