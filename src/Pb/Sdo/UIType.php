<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UIType enum
 */
final class UIType
{
    const enmUIType_None = 0;
    const enmUIType_CreateRole = 1;
    const enmUIType_NewOldSel = 2;
    const enmUIType_StoreExp = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUIType_None' => self::enmUIType_None,
            'enmUIType_CreateRole' => self::enmUIType_CreateRole,
            'enmUIType_NewOldSel' => self::enmUIType_NewOldSel,
            'enmUIType_StoreExp' => self::enmUIType_StoreExp,
        );
    }
}
}