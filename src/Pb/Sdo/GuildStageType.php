<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildStageType enum
 */
final class GuildStageType
{
    const enmGuildStageType_Invalid = 0;
    const enmGuildStageType_Perm = 1;
    const enmGuildStageType_Temp = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildStageType_Invalid' => self::enmGuildStageType_Invalid,
            'enmGuildStageType_Perm' => self::enmGuildStageType_Perm,
            'enmGuildStageType_Temp' => self::enmGuildStageType_Temp,
        );
    }
}
}