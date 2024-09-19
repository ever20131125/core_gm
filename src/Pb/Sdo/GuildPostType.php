<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildPostType enum
 */
final class GuildPostType
{
    const enmGuildPostType_Invalid = 0;
    const enmGuildPostType_President = 1;
    const enmGuildPostType_Two = 2;
    const enmGuildPostType_Three = 3;
    const enmGuildPostType_Four = 4;
    const enmGuildPostType_Five = 5;
    const enmGuildPostType_SIX = 6;
    const enmGuildPostType_Seven = 7;
    const enmGuildPostType_Eight = 8;
    const enmGuildPostType_Nine = 9;
    const enmGuildPostType_Ten = 10;
    const enmMaxGuildPostTypeCount = 10;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildPostType_Invalid' => self::enmGuildPostType_Invalid,
            'enmGuildPostType_President' => self::enmGuildPostType_President,
            'enmGuildPostType_Two' => self::enmGuildPostType_Two,
            'enmGuildPostType_Three' => self::enmGuildPostType_Three,
            'enmGuildPostType_Four' => self::enmGuildPostType_Four,
            'enmGuildPostType_Five' => self::enmGuildPostType_Five,
            'enmGuildPostType_SIX' => self::enmGuildPostType_SIX,
            'enmGuildPostType_Seven' => self::enmGuildPostType_Seven,
            'enmGuildPostType_Eight' => self::enmGuildPostType_Eight,
            'enmGuildPostType_Nine' => self::enmGuildPostType_Nine,
            'enmGuildPostType_Ten' => self::enmGuildPostType_Ten,
            'enmMaxGuildPostTypeCount' => self::enmMaxGuildPostTypeCount,
        );
    }
}
}