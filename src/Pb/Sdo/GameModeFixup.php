<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameModeFixup enum
 */
final class GameModeFixup
{
    const enmGameModeFixup_None = 0;
    const enmGameModeFixup_Normal = 1;
    const enmGameModeFixup_Team = 2;
    const enmGameModeFixup_Tour = 4;
    const enmGameModeFixup_PK = 8;
    const enmGameModeFixup_Suvive = 16;
    const enmGameModeFixup_GuildPK = 32;
    const enmGameModeFixup_GuildBossPK = 64;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGameModeFixup_None' => self::enmGameModeFixup_None,
            'enmGameModeFixup_Normal' => self::enmGameModeFixup_Normal,
            'enmGameModeFixup_Team' => self::enmGameModeFixup_Team,
            'enmGameModeFixup_Tour' => self::enmGameModeFixup_Tour,
            'enmGameModeFixup_PK' => self::enmGameModeFixup_PK,
            'enmGameModeFixup_Suvive' => self::enmGameModeFixup_Suvive,
            'enmGameModeFixup_GuildPK' => self::enmGameModeFixup_GuildPK,
            'enmGameModeFixup_GuildBossPK' => self::enmGameModeFixup_GuildBossPK,
        );
    }
}
}