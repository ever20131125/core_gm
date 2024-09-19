<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleInfoType enum
 */
final class RoleInfoType
{
    const enmRoleInfoType_None = 0;
    const enmRoleInfoType_Public = 1;
    const enmRoleInfoType_Private = 2;
    const enmRoleInfoType_Avatar = 4;
    const enmRoleInfoType_Skill = 8;
    const enmRoleInfoType_Online = 16;
    const enmRoleInfoType_ItemBuf = 32;
    const enmRoleInfoType_HouseInfo = 64;
    const enmRoleInfoType_TitleInfo = 128;
    const enmRoleInfoType_Person = 256;
    const enmRoleInfoType_CoupleHouseInfo = 512;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoleInfoType_None' => self::enmRoleInfoType_None,
            'enmRoleInfoType_Public' => self::enmRoleInfoType_Public,
            'enmRoleInfoType_Private' => self::enmRoleInfoType_Private,
            'enmRoleInfoType_Avatar' => self::enmRoleInfoType_Avatar,
            'enmRoleInfoType_Skill' => self::enmRoleInfoType_Skill,
            'enmRoleInfoType_Online' => self::enmRoleInfoType_Online,
            'enmRoleInfoType_ItemBuf' => self::enmRoleInfoType_ItemBuf,
            'enmRoleInfoType_HouseInfo' => self::enmRoleInfoType_HouseInfo,
            'enmRoleInfoType_TitleInfo' => self::enmRoleInfoType_TitleInfo,
            'enmRoleInfoType_Person' => self::enmRoleInfoType_Person,
            'enmRoleInfoType_CoupleHouseInfo' => self::enmRoleInfoType_CoupleHouseInfo,
        );
    }
}
}