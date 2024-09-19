<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RolePicType enum
 */
final class RolePicType
{
    const enmRolePicType_HeadGame = 0;
    const enmRolePicType_HeadCustom = 1;
    const enmRolePicType_QQ = 2;
    const enmRolePicType_Photo = 3;
    const enmRolePicType_Beckoning = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRolePicType_HeadGame' => self::enmRolePicType_HeadGame,
            'enmRolePicType_HeadCustom' => self::enmRolePicType_HeadCustom,
            'enmRolePicType_QQ' => self::enmRolePicType_QQ,
            'enmRolePicType_Photo' => self::enmRolePicType_Photo,
            'enmRolePicType_Beckoning' => self::enmRolePicType_Beckoning,
        );
    }
}
}