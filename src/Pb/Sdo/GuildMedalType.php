<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildMedalType enum
 */
final class GuildMedalType
{
    const enmGuildMedalType_None = 0;
    const enmGuildMedalType_System = 1;
    const enmGuildMedalType_Custom = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildMedalType_None' => self::enmGuildMedalType_None,
            'enmGuildMedalType_System' => self::enmGuildMedalType_System,
            'enmGuildMedalType_Custom' => self::enmGuildMedalType_Custom,
        );
    }
}
}