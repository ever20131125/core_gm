<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleDataType enum
 */
final class RoleDataType
{
    const enmRoleData_None = 0;
    const enmItemDB_RoleName = 1;
    const enmItemDB_FaceID = 2;
    const enmItemDB_UseTheme = 4;
    const enmItemDB_ShowTheme = 8;
    const enmItemDB_HeadFrame = 16;
    const enmItemDB_Title = 32;
    const enmItemDB_Avatar = 64;
    const enmItemDB_CrownEnd = 128;
    const enmItemDB_BufferInfo = 256;
    const enmRoleDB_NameRGB = 1;
    const enmRoleDB_Birthday = 2;
    const enmRoleDB_City = 4;
    const enmRoleDB_Voice = 8;
    const enmRoleDB_Word = 16;
    const enmRoleDB_MyLabel = 32;
    const enmRoleDB_FavLabel = 64;
    const enmRoleDB_HeadPic = 128;
    const enmRoleDB_Setting = 256;
    const enmRoleDB_LastLogoutTime = 512;
    const enmRoleDB_TotalLoginCount = 1024;
    const enmRoleDB_TotalOnlineTime = 2048;
    const enmRoleDB_TodayLoginCount = 4096;
    const enmRoleDB_TodayOnlineTime = 8192;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoleData_None' => self::enmRoleData_None,
            'enmItemDB_RoleName' => self::enmItemDB_RoleName,
            'enmItemDB_FaceID' => self::enmItemDB_FaceID,
            'enmItemDB_UseTheme' => self::enmItemDB_UseTheme,
            'enmItemDB_ShowTheme' => self::enmItemDB_ShowTheme,
            'enmItemDB_HeadFrame' => self::enmItemDB_HeadFrame,
            'enmItemDB_Title' => self::enmItemDB_Title,
            'enmItemDB_Avatar' => self::enmItemDB_Avatar,
            'enmItemDB_CrownEnd' => self::enmItemDB_CrownEnd,
            'enmItemDB_BufferInfo' => self::enmItemDB_BufferInfo,
            'enmRoleDB_NameRGB' => self::enmRoleDB_NameRGB,
            'enmRoleDB_Birthday' => self::enmRoleDB_Birthday,
            'enmRoleDB_City' => self::enmRoleDB_City,
            'enmRoleDB_Voice' => self::enmRoleDB_Voice,
            'enmRoleDB_Word' => self::enmRoleDB_Word,
            'enmRoleDB_MyLabel' => self::enmRoleDB_MyLabel,
            'enmRoleDB_FavLabel' => self::enmRoleDB_FavLabel,
            'enmRoleDB_HeadPic' => self::enmRoleDB_HeadPic,
            'enmRoleDB_Setting' => self::enmRoleDB_Setting,
            'enmRoleDB_LastLogoutTime' => self::enmRoleDB_LastLogoutTime,
            'enmRoleDB_TotalLoginCount' => self::enmRoleDB_TotalLoginCount,
            'enmRoleDB_TotalOnlineTime' => self::enmRoleDB_TotalOnlineTime,
            'enmRoleDB_TodayLoginCount' => self::enmRoleDB_TodayLoginCount,
            'enmRoleDB_TodayOnlineTime' => self::enmRoleDB_TodayOnlineTime,
        );
    }
}
}