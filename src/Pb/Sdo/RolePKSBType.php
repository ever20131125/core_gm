<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RolePKSBType enum
 */
final class RolePKSBType
{
    const enmRolePKSBType_Skill_Super = 3;
    const enmRolePKSBType_Horm_Normal = 1;
    const enmRolePKSBType_Horm_High = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRolePKSBType_Skill_Super' => self::enmRolePKSBType_Skill_Super,
            'enmRolePKSBType_Horm_Normal' => self::enmRolePKSBType_Horm_Normal,
            'enmRolePKSBType_Horm_High' => self::enmRolePKSBType_Horm_High,
        );
    }
}
}