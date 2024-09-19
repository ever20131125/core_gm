<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleType enum
 */
final class RoleType
{
    const enmRoleType_Normal = 0;
    const enmRoleType_KS_Robot = 1;
    const enmRoleType_XN_Robot = 2;
    const enmRoleType_NoSDK = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoleType_Normal' => self::enmRoleType_Normal,
            'enmRoleType_KS_Robot' => self::enmRoleType_KS_Robot,
            'enmRoleType_XN_Robot' => self::enmRoleType_XN_Robot,
            'enmRoleType_NoSDK' => self::enmRoleType_NoSDK,
        );
    }
}
}