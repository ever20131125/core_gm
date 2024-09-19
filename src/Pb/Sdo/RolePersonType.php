<?php
/**
 * Auto generated from define.proto at 2021-10-26 06:02:43
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RolePersonType enum
 */
final class RolePersonType
{
    const enmRolePerson_None = 0;
    const enmRolePerson_Gender = 1;
    const enmRolePerson_RoleName = 2;
    const enmRolePerson_Birthday = 4;
    const enmRolePerson_City = 8;
    const enmRolePerson_Voice = 16;
    const enmRolePerson_Word = 32;
    const enmRolePerson_Head = 64;
    const enmRolePerson_FaceSlot = 128;
    const enmRolePerson_Setting = 256;
    const enmRolePerson_QQ = 512;
    const enmRolePerson_NameRGB = 1024;
    const enmRolePerson_Tel = 2048;
    const enmRolePerson_MyLabel = 4096;
    const enmRolePerson_FavLabel = 8192;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRolePerson_None' => self::enmRolePerson_None,
            'enmRolePerson_Gender' => self::enmRolePerson_Gender,
            'enmRolePerson_RoleName' => self::enmRolePerson_RoleName,
            'enmRolePerson_Birthday' => self::enmRolePerson_Birthday,
            'enmRolePerson_City' => self::enmRolePerson_City,
            'enmRolePerson_Voice' => self::enmRolePerson_Voice,
            'enmRolePerson_Word' => self::enmRolePerson_Word,
            'enmRolePerson_Head' => self::enmRolePerson_Head,
            'enmRolePerson_FaceSlot' => self::enmRolePerson_FaceSlot,
            'enmRolePerson_Setting' => self::enmRolePerson_Setting,
            'enmRolePerson_QQ' => self::enmRolePerson_QQ,
            'enmRolePerson_NameRGB' => self::enmRolePerson_NameRGB,
            'enmRolePerson_Tel' => self::enmRolePerson_Tel,
            'enmRolePerson_MyLabel' => self::enmRolePerson_MyLabel,
            'enmRolePerson_FavLabel' => self::enmRolePerson_FavLabel,
        );
    }
}
}