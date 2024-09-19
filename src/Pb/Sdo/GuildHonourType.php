<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildHonourType enum
 */
final class GuildHonourType
{
    const enmGuildHonourType_None = 0;
    const enmGuildHonourType_Guild = 1;
    const enmGuildHonourType_Role = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildHonourType_None' => self::enmGuildHonourType_None,
            'enmGuildHonourType_Guild' => self::enmGuildHonourType_Guild,
            'enmGuildHonourType_Role' => self::enmGuildHonourType_Role,
        );
    }
}
}