<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildActiveOpt enum
 */
final class GuildActiveOpt
{
    const enmGuildActiveOpt_Null = 0;
    const enmGuildActiveOpt_GetActiveTaskInfo = 1;
    const enmGuildActiveOpt_Sign = 2;
    const enmGuildActiveOpt_Worship = 3;
    const enmGuildActiveOpt_GetWorshipPrize = 4;
    const enmGuildActiveOpt_GetActiveTaskPrize = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildActiveOpt_Null' => self::enmGuildActiveOpt_Null,
            'enmGuildActiveOpt_GetActiveTaskInfo' => self::enmGuildActiveOpt_GetActiveTaskInfo,
            'enmGuildActiveOpt_Sign' => self::enmGuildActiveOpt_Sign,
            'enmGuildActiveOpt_Worship' => self::enmGuildActiveOpt_Worship,
            'enmGuildActiveOpt_GetWorshipPrize' => self::enmGuildActiveOpt_GetWorshipPrize,
            'enmGuildActiveOpt_GetActiveTaskPrize' => self::enmGuildActiveOpt_GetActiveTaskPrize,
        );
    }
}
}