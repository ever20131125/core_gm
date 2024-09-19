<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildActType enum
 */
final class GuildActType
{
    const enmGuildActType_Null = 0;
    const enmGuildActType_GuildDonateRankList = 1;
    const enmGuildActType_GetGuildDonatePrize = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildActType_Null' => self::enmGuildActType_Null,
            'enmGuildActType_GuildDonateRankList' => self::enmGuildActType_GuildDonateRankList,
            'enmGuildActType_GetGuildDonatePrize' => self::enmGuildActType_GetGuildDonatePrize,
        );
    }
}
}