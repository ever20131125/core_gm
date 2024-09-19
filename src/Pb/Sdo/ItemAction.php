<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemAction enum
 */
final class ItemAction
{
    const enmItemAction_None = 0;
    const enmItemAction_LevelUp = 1;
    const enmItemAction_RankUp = 2;
    const enmItemAction_Decom = 3;
    const enmItemAction_Compose = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmItemAction_None' => self::enmItemAction_None,
            'enmItemAction_LevelUp' => self::enmItemAction_LevelUp,
            'enmItemAction_RankUp' => self::enmItemAction_RankUp,
            'enmItemAction_Decom' => self::enmItemAction_Decom,
            'enmItemAction_Compose' => self::enmItemAction_Compose,
        );
    }
}
}