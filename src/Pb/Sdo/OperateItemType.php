<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * OperateItemType enum
 */
final class OperateItemType
{
    const enmOperateItemType_None = 0;
    const enmOperateItemType_ItemID = 1;
    const enmOperateItemType_ItemInsID = 2;
    const enmOperateItemType_ItemType = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmOperateItemType_None' => self::enmOperateItemType_None,
            'enmOperateItemType_ItemID' => self::enmOperateItemType_ItemID,
            'enmOperateItemType_ItemInsID' => self::enmOperateItemType_ItemInsID,
            'enmOperateItemType_ItemType' => self::enmOperateItemType_ItemType,
        );
    }
}
}