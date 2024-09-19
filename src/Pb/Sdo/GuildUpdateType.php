<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildUpdateType enum
 */
final class GuildUpdateType
{
    const enmGuildUpdateType_None = 0;
    const enmGuildUpdateType_GPopularity = 1;
    const enmGuildUpdateType_Enter = 2;
    const enmGuildUpdateType_Exit = 3;
    const enmGuildUpdateType_Dissolve = 4;
    const enmGuildUpdateType_Level = 5;
    const enmGuildUpdateType_ChangeName = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildUpdateType_None' => self::enmGuildUpdateType_None,
            'enmGuildUpdateType_GPopularity' => self::enmGuildUpdateType_GPopularity,
            'enmGuildUpdateType_Enter' => self::enmGuildUpdateType_Enter,
            'enmGuildUpdateType_Exit' => self::enmGuildUpdateType_Exit,
            'enmGuildUpdateType_Dissolve' => self::enmGuildUpdateType_Dissolve,
            'enmGuildUpdateType_Level' => self::enmGuildUpdateType_Level,
            'enmGuildUpdateType_ChangeName' => self::enmGuildUpdateType_ChangeName,
        );
    }
}
}