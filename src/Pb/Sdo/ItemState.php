<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemState enum
 */
final class ItemState
{
    const enmItemState_Own_Normal = 0;
    const enmItemState_Own_Placed = 1;
    const enmItemState_Own_Mask = 255;
    const enmItemState_Use_Trans = 256;
    const enmItemState_New = 268435456;
    const enmItemState_Use_Mask = 65280;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmItemState_Own_Normal' => self::enmItemState_Own_Normal,
            'enmItemState_Own_Placed' => self::enmItemState_Own_Placed,
            'enmItemState_Own_Mask' => self::enmItemState_Own_Mask,
            'enmItemState_Use_Trans' => self::enmItemState_Use_Trans,
            'enmItemState_New' => self::enmItemState_New,
            'enmItemState_Use_Mask' => self::enmItemState_Use_Mask,
        );
    }
}
}