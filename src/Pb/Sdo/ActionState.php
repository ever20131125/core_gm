<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActionState enum
 */
final class ActionState
{
    const enmActionState_Normal = 0;
    const enmActionState_Swimming = 16;
    const enmActionState_PlaceMask = 240;
    const enmActionState_ItemAction = 1;
    const enmActionState_StageAction = 2;
    const enmActionState_Vehicle = 3;
    const enmActionState_Planing = 4;
    const enmActionState_ACing = 5;
    const enmActionState_UsingItem = 6;
    const enmActionState_Busy = 255;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActionState_Normal' => self::enmActionState_Normal,
            'enmActionState_Swimming' => self::enmActionState_Swimming,
            'enmActionState_PlaceMask' => self::enmActionState_PlaceMask,
            'enmActionState_ItemAction' => self::enmActionState_ItemAction,
            'enmActionState_StageAction' => self::enmActionState_StageAction,
            'enmActionState_Vehicle' => self::enmActionState_Vehicle,
            'enmActionState_Planing' => self::enmActionState_Planing,
            'enmActionState_ACing' => self::enmActionState_ACing,
            'enmActionState_UsingItem' => self::enmActionState_UsingItem,
            'enmActionState_Busy' => self::enmActionState_Busy,
        );
    }
}
}