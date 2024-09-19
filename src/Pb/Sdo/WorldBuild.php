<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WorldBuild enum
 */
final class WorldBuild
{
    const enmWorldBuild_None = 0;
    const enmWorldBuild_Hall = 1;
    const enmWorldBuild_Mall = 2;
    const enmWorldBuild_Story = 3;
    const enmWorldBuild_Raffle = 4;
    const enmWorldBuild_Guild = 5;
    const enmWorldBuild_Church = 6;
    const enmWorldBuild_Tree = 7;
    const enmWorldBuild_Amuse = 8;
    const enmWorldBuild_House = 9;
    const enmWorldBuild_SNS = 10;
    const enmWorldBuild_Office = 11;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWorldBuild_None' => self::enmWorldBuild_None,
            'enmWorldBuild_Hall' => self::enmWorldBuild_Hall,
            'enmWorldBuild_Mall' => self::enmWorldBuild_Mall,
            'enmWorldBuild_Story' => self::enmWorldBuild_Story,
            'enmWorldBuild_Raffle' => self::enmWorldBuild_Raffle,
            'enmWorldBuild_Guild' => self::enmWorldBuild_Guild,
            'enmWorldBuild_Church' => self::enmWorldBuild_Church,
            'enmWorldBuild_Tree' => self::enmWorldBuild_Tree,
            'enmWorldBuild_Amuse' => self::enmWorldBuild_Amuse,
            'enmWorldBuild_House' => self::enmWorldBuild_House,
            'enmWorldBuild_SNS' => self::enmWorldBuild_SNS,
            'enmWorldBuild_Office' => self::enmWorldBuild_Office,
        );
    }
}
}