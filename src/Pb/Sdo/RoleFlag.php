<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleFlag enum
 */
final class RoleFlag
{
    const enmRoleFlag_Mask_Base = 1;
    const enmRoleFlag_Rotate_Age = 2;
    const enmRoleFlag_Rotate_Area = 3;
    const enmRoleFlag_Rotate_HomePage = 4;
    const enmRoleFlag_Rotate_BirthDay = 5;
    const enmRoleFlag_Rotate_CurPlace = 6;
    const enmRoleFlag_Rotate_Constellation = 7;
    const enmRoleFlag_OpenForAll = 8;
    const enmRoleFlag_OpenForFriend = 9;
    const enmRoleFlag_OpenForAll2 = 16;
    const enmRoleFlag_Close = 17;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoleFlag_Mask_Base' => self::enmRoleFlag_Mask_Base,
            'enmRoleFlag_Rotate_Age' => self::enmRoleFlag_Rotate_Age,
            'enmRoleFlag_Rotate_Area' => self::enmRoleFlag_Rotate_Area,
            'enmRoleFlag_Rotate_HomePage' => self::enmRoleFlag_Rotate_HomePage,
            'enmRoleFlag_Rotate_BirthDay' => self::enmRoleFlag_Rotate_BirthDay,
            'enmRoleFlag_Rotate_CurPlace' => self::enmRoleFlag_Rotate_CurPlace,
            'enmRoleFlag_Rotate_Constellation' => self::enmRoleFlag_Rotate_Constellation,
            'enmRoleFlag_OpenForAll' => self::enmRoleFlag_OpenForAll,
            'enmRoleFlag_OpenForFriend' => self::enmRoleFlag_OpenForFriend,
            'enmRoleFlag_OpenForAll2' => self::enmRoleFlag_OpenForAll2,
            'enmRoleFlag_Close' => self::enmRoleFlag_Close,
        );
    }
}
}