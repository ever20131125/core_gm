<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GMGuildSearchType enum
 */
final class GMGuildSearchType
{
    const enmGMGuildSearchType_None = 0;
    const enmGMGuildSearchType_Name = 1;
    const enmGMGuildSearchType_Level = 2;
    const enmGMGuildSearchType_CreateTime = 3;
    const enmGMGuildSearchType_GID = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGMGuildSearchType_None' => self::enmGMGuildSearchType_None,
            'enmGMGuildSearchType_Name' => self::enmGMGuildSearchType_Name,
            'enmGMGuildSearchType_Level' => self::enmGMGuildSearchType_Level,
            'enmGMGuildSearchType_CreateTime' => self::enmGMGuildSearchType_CreateTime,
            'enmGMGuildSearchType_GID' => self::enmGMGuildSearchType_GID,
        );
    }
}
}