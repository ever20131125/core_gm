<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameMode enum
 */
final class GameMode
{
    const enmGameMode_Invalid = 0;
    const enmGameMode_Normal = 1;
    const enmGameMode_Team = 2;
    const enmGameMode_Tour = 3;
    const enmGameMode_PK = 4;
    const enmGameMode_Suvive = 5;
    const enmGameMode_GuildPK = 6;
    const enmGameMode_BossPK = 7;
    const enmGameMode_Qualify = 8;
    const enmGameMode_DancerChallenge = 9;
    const enmGameMode_Idol = 10;
    const enmGameMode_Max = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGameMode_Invalid' => self::enmGameMode_Invalid,
            'enmGameMode_Normal' => self::enmGameMode_Normal,
            'enmGameMode_Team' => self::enmGameMode_Team,
            'enmGameMode_Tour' => self::enmGameMode_Tour,
            'enmGameMode_PK' => self::enmGameMode_PK,
            'enmGameMode_Suvive' => self::enmGameMode_Suvive,
            'enmGameMode_GuildPK' => self::enmGameMode_GuildPK,
            'enmGameMode_BossPK' => self::enmGameMode_BossPK,
            'enmGameMode_Qualify' => self::enmGameMode_Qualify,
            'enmGameMode_DancerChallenge' => self::enmGameMode_DancerChallenge,
            'enmGameMode_Idol' => self::enmGameMode_Idol,
            'enmGameMode_Max' => self::enmGameMode_Max,
        );
    }
}
}