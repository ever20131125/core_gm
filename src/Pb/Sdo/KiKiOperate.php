<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KiKiOperate enum
 */
final class KiKiOperate
{
    const enmKiKiOperate_Null = 0;
    const enmKiKiOperate_Dice = 1;
    const enmKiKiOperate_WishDice = 2;
    const enmKiKiOperate_MoveTo = 3;
    const enmKiKiOperate_ResetMap = 4;
    const enmKiKiOperate_ResetPos = 5;
    const enmKiKiOperate_NextLayer = 6;
    const enmKiKiOperate_WalkFinish = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmKiKiOperate_Null' => self::enmKiKiOperate_Null,
            'enmKiKiOperate_Dice' => self::enmKiKiOperate_Dice,
            'enmKiKiOperate_WishDice' => self::enmKiKiOperate_WishDice,
            'enmKiKiOperate_MoveTo' => self::enmKiKiOperate_MoveTo,
            'enmKiKiOperate_ResetMap' => self::enmKiKiOperate_ResetMap,
            'enmKiKiOperate_ResetPos' => self::enmKiKiOperate_ResetPos,
            'enmKiKiOperate_NextLayer' => self::enmKiKiOperate_NextLayer,
            'enmKiKiOperate_WalkFinish' => self::enmKiKiOperate_WalkFinish,
        );
    }
}
}