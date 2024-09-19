<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ManageType enum
 */
final class ManageType
{
    const enmManageType_None = 0;
    const enmManageType_Add = 1;
    const enmManageType_Delete = 2;
    const enmManageType_Update = 3;
    const enmManageType_Storage = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmManageType_None' => self::enmManageType_None,
            'enmManageType_Add' => self::enmManageType_Add,
            'enmManageType_Delete' => self::enmManageType_Delete,
            'enmManageType_Update' => self::enmManageType_Update,
            'enmManageType_Storage' => self::enmManageType_Storage,
        );
    }
}
}