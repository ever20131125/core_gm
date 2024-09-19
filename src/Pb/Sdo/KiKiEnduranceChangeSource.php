<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KiKiEnduranceChangeSource enum
 */
final class KiKiEnduranceChangeSource
{
    const enmKiKiEnduranceChangeSource_NULL = 0;
    const enmKiKiEnduranceChangeSource_Dice = 1;
    const enmKiKiEnduranceChangeSource_DanceFail = 2;
    const enmKiKiEnduranceChangeSource_TriggerEvent = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmKiKiEnduranceChangeSource_NULL' => self::enmKiKiEnduranceChangeSource_NULL,
            'enmKiKiEnduranceChangeSource_Dice' => self::enmKiKiEnduranceChangeSource_Dice,
            'enmKiKiEnduranceChangeSource_DanceFail' => self::enmKiKiEnduranceChangeSource_DanceFail,
            'enmKiKiEnduranceChangeSource_TriggerEvent' => self::enmKiKiEnduranceChangeSource_TriggerEvent,
        );
    }
}
}