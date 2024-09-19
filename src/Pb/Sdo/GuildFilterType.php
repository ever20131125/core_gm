<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildFilterType enum
 */
final class GuildFilterType
{
    const enmGuildFilterType_None = 0;
    const enmGuildFilterType_Label = 1;
    const enmGuildFilterType_Title = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildFilterType_None' => self::enmGuildFilterType_None,
            'enmGuildFilterType_Label' => self::enmGuildFilterType_Label,
            'enmGuildFilterType_Title' => self::enmGuildFilterType_Title,
        );
    }
}
}