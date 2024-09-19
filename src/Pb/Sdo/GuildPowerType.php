<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildPowerType enum
 */
final class GuildPowerType
{
    const enmGuildPowerType_Invalid = 0;
    const enmGuildPowerType_EditPost = 1;
    const enmGuildPowerType_Appoint = 2;
    const enmGuildPowerType_Recruit = 4;
    const enmGuildPowerType_Expulsion = 8;
    const enmGuildPowerType_SetInfo = 16;
    const enmGuildPowerType_TeamBattle = 32;
    const enmGuildPowerType_UpdateBuilding = 64;
    const enmGuildPowerType_SendGuildMail = 128;
    const enmGuildPowerType_Count = 8;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildPowerType_Invalid' => self::enmGuildPowerType_Invalid,
            'enmGuildPowerType_EditPost' => self::enmGuildPowerType_EditPost,
            'enmGuildPowerType_Appoint' => self::enmGuildPowerType_Appoint,
            'enmGuildPowerType_Recruit' => self::enmGuildPowerType_Recruit,
            'enmGuildPowerType_Expulsion' => self::enmGuildPowerType_Expulsion,
            'enmGuildPowerType_SetInfo' => self::enmGuildPowerType_SetInfo,
            'enmGuildPowerType_TeamBattle' => self::enmGuildPowerType_TeamBattle,
            'enmGuildPowerType_UpdateBuilding' => self::enmGuildPowerType_UpdateBuilding,
            'enmGuildPowerType_SendGuildMail' => self::enmGuildPowerType_SendGuildMail,
            'enmGuildPowerType_Count' => self::enmGuildPowerType_Count,
        );
    }
}
}