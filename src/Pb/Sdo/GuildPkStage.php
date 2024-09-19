<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildPkStage enum
 */
final class GuildPkStage
{
    const enmGuildPkStage_None = 0;
    const enmGuildPkStage_Apply = 1;
    const enmGuildPkStage_Parpare = 2;
    const enmGuildPkStage_Countdown = 3;
    const enmGuildPkStage_PK = 4;
    const enmGuildPkStage_Prize = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildPkStage_None' => self::enmGuildPkStage_None,
            'enmGuildPkStage_Apply' => self::enmGuildPkStage_Apply,
            'enmGuildPkStage_Parpare' => self::enmGuildPkStage_Parpare,
            'enmGuildPkStage_Countdown' => self::enmGuildPkStage_Countdown,
            'enmGuildPkStage_PK' => self::enmGuildPkStage_PK,
            'enmGuildPkStage_Prize' => self::enmGuildPkStage_Prize,
        );
    }
}
}