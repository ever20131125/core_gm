<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildActiveTaskType enum
 */
final class GuildActiveTaskType
{
    const enmGuildActiveTaskType_Null = 0;
    const enmGuildActiveTaskType_TodayPlayerActive = 1;
    const enmGuildActiveTaskType_WeekGuildActive = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildActiveTaskType_Null' => self::enmGuildActiveTaskType_Null,
            'enmGuildActiveTaskType_TodayPlayerActive' => self::enmGuildActiveTaskType_TodayPlayerActive,
            'enmGuildActiveTaskType_WeekGuildActive' => self::enmGuildActiveTaskType_WeekGuildActive,
        );
    }
}
}