<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UpdateGuildType enum
 */
final class UpdateGuildType
{
    const enmUpdateType_None = 0;
    const enmUpdateType_Contribute = 1;
    const enmUpdateType_GuildName = 2;
    const enmUpdateType_Incident = 3;
    const enmUpdateType_SetNotice = 4;
    const enmUpdateType_SetMedal = 5;
    const enmUpdateType_GuildLevelUp = 6;
    const enmUpdateType_DropGuild = 7;
    const enmUpdateType_SetPost = 8;
    const enmUpdateType_Soul = 9;
    const enmUpdateType_Square = 10;
    const enmUpdateType_God = 11;
    const enmUpdateType_Challenge = 12;
    const enmUpdateType_Reward = 13;
    const enmUpdateType_Train = 14;
    const enmUpdateType_Skill = 15;
    const enmUpdateType_Wealth = 16;
    const enmUpdateType_BuildPro = 17;
    const enmUpdateType_OpenID = 18;
    const enmUpdateType_Election = 19;
    const enmUpdateType_Opinion = 20;
    const enmUpdateType_Vote = 21;
    const enmUpdateType_ElectionEnd = 22;
    const enmUpdateType_Impeach = 23;
    const enmUpdateType_Red = 24;
    const enmUpdateType_NewRed = 25;
    const enmUpdateType_NewSummoned = 26;
    const enmUpdateType_SummonedEnd = 27;
    const enmUpdateType_CompayLevel = 28;
    const enmUpdateType_ComMemberTitle = 29;
    const enmUpdateType_CompayName = 30;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUpdateType_None' => self::enmUpdateType_None,
            'enmUpdateType_Contribute' => self::enmUpdateType_Contribute,
            'enmUpdateType_GuildName' => self::enmUpdateType_GuildName,
            'enmUpdateType_Incident' => self::enmUpdateType_Incident,
            'enmUpdateType_SetNotice' => self::enmUpdateType_SetNotice,
            'enmUpdateType_SetMedal' => self::enmUpdateType_SetMedal,
            'enmUpdateType_GuildLevelUp' => self::enmUpdateType_GuildLevelUp,
            'enmUpdateType_DropGuild' => self::enmUpdateType_DropGuild,
            'enmUpdateType_SetPost' => self::enmUpdateType_SetPost,
            'enmUpdateType_Soul' => self::enmUpdateType_Soul,
            'enmUpdateType_Square' => self::enmUpdateType_Square,
            'enmUpdateType_God' => self::enmUpdateType_God,
            'enmUpdateType_Challenge' => self::enmUpdateType_Challenge,
            'enmUpdateType_Reward' => self::enmUpdateType_Reward,
            'enmUpdateType_Train' => self::enmUpdateType_Train,
            'enmUpdateType_Skill' => self::enmUpdateType_Skill,
            'enmUpdateType_Wealth' => self::enmUpdateType_Wealth,
            'enmUpdateType_BuildPro' => self::enmUpdateType_BuildPro,
            'enmUpdateType_OpenID' => self::enmUpdateType_OpenID,
            'enmUpdateType_Election' => self::enmUpdateType_Election,
            'enmUpdateType_Opinion' => self::enmUpdateType_Opinion,
            'enmUpdateType_Vote' => self::enmUpdateType_Vote,
            'enmUpdateType_ElectionEnd' => self::enmUpdateType_ElectionEnd,
            'enmUpdateType_Impeach' => self::enmUpdateType_Impeach,
            'enmUpdateType_Red' => self::enmUpdateType_Red,
            'enmUpdateType_NewRed' => self::enmUpdateType_NewRed,
            'enmUpdateType_NewSummoned' => self::enmUpdateType_NewSummoned,
            'enmUpdateType_SummonedEnd' => self::enmUpdateType_SummonedEnd,
            'enmUpdateType_CompayLevel' => self::enmUpdateType_CompayLevel,
            'enmUpdateType_ComMemberTitle' => self::enmUpdateType_ComMemberTitle,
            'enmUpdateType_CompayName' => self::enmUpdateType_CompayName,
        );
    }
}
}