<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UseItemLimit enum
 */
final class UseItemLimit
{
    const enmUseItemLimit_RoleLevel = 1;
    const enmUseItemLimit_VIPLevel = 2;
    const enmUseItemLimit_LoverLevel = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUseItemLimit_RoleLevel' => self::enmUseItemLimit_RoleLevel,
            'enmUseItemLimit_VIPLevel' => self::enmUseItemLimit_VIPLevel,
            'enmUseItemLimit_LoverLevel' => self::enmUseItemLimit_LoverLevel,
        );
    }
}
}