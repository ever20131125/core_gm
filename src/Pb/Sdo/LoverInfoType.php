<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoverInfoType enum
 */
final class LoverInfoType
{
    const enmLoverInfoType_None = 0;
    const enmLoverInfoType_LoverType = 1;
    const enmLoverInfoType_LoverLevel = 2;
    const enmLoverInfoType_TotalInitimate = 4;
    const enmLoverInfoType_TodayInitimate = 8;
    const enmLoverInfoType_ConfressTime = 16;
    const enmLoverInfoType_MarryTime = 32;
    const enmLoverInfoType_CouplesSkills = 64;
    const enmLoverInfoType_AddSkills = 128;
    const enmLoverInfoType_CurShill = 256;
    const enmLoverInfoType_Nickname = 512;
    const enmLoverInfoType_Declaration = 1024;
    const enmLoverInfoType_Skill = 2048;
    const enmLoverInfoType_AddMarriage = 4096;
    const enmLoverInfoType_DeleteMarriage = 8192;
    const enmLoverInfoType_FriendshipLevel = 16384;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmLoverInfoType_None' => self::enmLoverInfoType_None,
            'enmLoverInfoType_LoverType' => self::enmLoverInfoType_LoverType,
            'enmLoverInfoType_LoverLevel' => self::enmLoverInfoType_LoverLevel,
            'enmLoverInfoType_TotalInitimate' => self::enmLoverInfoType_TotalInitimate,
            'enmLoverInfoType_TodayInitimate' => self::enmLoverInfoType_TodayInitimate,
            'enmLoverInfoType_ConfressTime' => self::enmLoverInfoType_ConfressTime,
            'enmLoverInfoType_MarryTime' => self::enmLoverInfoType_MarryTime,
            'enmLoverInfoType_CouplesSkills' => self::enmLoverInfoType_CouplesSkills,
            'enmLoverInfoType_AddSkills' => self::enmLoverInfoType_AddSkills,
            'enmLoverInfoType_CurShill' => self::enmLoverInfoType_CurShill,
            'enmLoverInfoType_Nickname' => self::enmLoverInfoType_Nickname,
            'enmLoverInfoType_Declaration' => self::enmLoverInfoType_Declaration,
            'enmLoverInfoType_Skill' => self::enmLoverInfoType_Skill,
            'enmLoverInfoType_AddMarriage' => self::enmLoverInfoType_AddMarriage,
            'enmLoverInfoType_DeleteMarriage' => self::enmLoverInfoType_DeleteMarriage,
            'enmLoverInfoType_FriendshipLevel' => self::enmLoverInfoType_FriendshipLevel,
        );
    }
}
}