<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildTaskEventType enum
 */
final class GuildTaskEventType
{
    const enmGuildTaskEvent_None = 0;
    const enmGuildTaskEvent_CreateGuild = 1;
    const enmGuildTaskEvent_GuildDonate = 2;
    const enmGuildTaskEvent_JoinGuild = 3;
    const enmGuildTaskEvent_GuildUpdate = 4;
    const enmGuildTaskEvent_ExitGuild = 5;
    const enmGuildTaskEvent_TransferMaster = 6;
    const enmGuildTaskEvent_ChangeGuildName = 7;
    const enmGuildTaskEvent_Worship = 8;
    const enmGuildTaskEvent_GuildDance = 9;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildTaskEvent_None' => self::enmGuildTaskEvent_None,
            'enmGuildTaskEvent_CreateGuild' => self::enmGuildTaskEvent_CreateGuild,
            'enmGuildTaskEvent_GuildDonate' => self::enmGuildTaskEvent_GuildDonate,
            'enmGuildTaskEvent_JoinGuild' => self::enmGuildTaskEvent_JoinGuild,
            'enmGuildTaskEvent_GuildUpdate' => self::enmGuildTaskEvent_GuildUpdate,
            'enmGuildTaskEvent_ExitGuild' => self::enmGuildTaskEvent_ExitGuild,
            'enmGuildTaskEvent_TransferMaster' => self::enmGuildTaskEvent_TransferMaster,
            'enmGuildTaskEvent_ChangeGuildName' => self::enmGuildTaskEvent_ChangeGuildName,
            'enmGuildTaskEvent_Worship' => self::enmGuildTaskEvent_Worship,
            'enmGuildTaskEvent_GuildDance' => self::enmGuildTaskEvent_GuildDance,
        );
    }
}
}