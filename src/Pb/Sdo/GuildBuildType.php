<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildBuildType enum
 */
final class GuildBuildType
{
    const enmGuildBuildType_Null = 0;
    const enmGuildBuildType_StarTower = 1;
    const enmGuildBuildType_StarIsland = 2;
    const enmGuildBuildType_Templar = 3;
    const enmGuildBuildType_Mall = 4;
    const enmGuildBuildType_WorshipPool = 5;
    const enmGuildBuildType_SignTower = 6;
    const enmGuildBuildType_MaxCount = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildBuildType_Null' => self::enmGuildBuildType_Null,
            'enmGuildBuildType_StarTower' => self::enmGuildBuildType_StarTower,
            'enmGuildBuildType_StarIsland' => self::enmGuildBuildType_StarIsland,
            'enmGuildBuildType_Templar' => self::enmGuildBuildType_Templar,
            'enmGuildBuildType_Mall' => self::enmGuildBuildType_Mall,
            'enmGuildBuildType_WorshipPool' => self::enmGuildBuildType_WorshipPool,
            'enmGuildBuildType_SignTower' => self::enmGuildBuildType_SignTower,
            'enmGuildBuildType_MaxCount' => self::enmGuildBuildType_MaxCount,
        );
    }
}
}