<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildRoleStatus enum
 */
final class GuildRoleStatus
{
    const enmRoleStatus_Invalid = 0;
    const enmRoleStatus_Normal = 1;
    const enmRoleStatus_Exit = 2;
    const enmRoleStatus_Kickout = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoleStatus_Invalid' => self::enmRoleStatus_Invalid,
            'enmRoleStatus_Normal' => self::enmRoleStatus_Normal,
            'enmRoleStatus_Exit' => self::enmRoleStatus_Exit,
            'enmRoleStatus_Kickout' => self::enmRoleStatus_Kickout,
        );
    }
}
}