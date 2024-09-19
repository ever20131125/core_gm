<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildLevelCompType enum
 */
final class GuildLevelCompType
{
    const enmGuildLevelCompType_None = 0;
    const enmGuildLevelCompType_GreaterEqual = 1;
    const enmGuildLevelCompType_Greater = 2;
    const enmGuildLevelCompType_Equal = 3;
    const enmGuildLevelCompType_LessEqual = 4;
    const enmGuildLevelCompType_Less = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildLevelCompType_None' => self::enmGuildLevelCompType_None,
            'enmGuildLevelCompType_GreaterEqual' => self::enmGuildLevelCompType_GreaterEqual,
            'enmGuildLevelCompType_Greater' => self::enmGuildLevelCompType_Greater,
            'enmGuildLevelCompType_Equal' => self::enmGuildLevelCompType_Equal,
            'enmGuildLevelCompType_LessEqual' => self::enmGuildLevelCompType_LessEqual,
            'enmGuildLevelCompType_Less' => self::enmGuildLevelCompType_Less,
        );
    }
}
}