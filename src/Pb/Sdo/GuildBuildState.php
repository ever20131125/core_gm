<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildBuildState enum
 */
final class GuildBuildState
{
    const enmGuildBuildState_Normal = 0;
    const enmGuildBuildState_Updating = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildBuildState_Normal' => self::enmGuildBuildState_Normal,
            'enmGuildBuildState_Updating' => self::enmGuildBuildState_Updating,
        );
    }
}
}