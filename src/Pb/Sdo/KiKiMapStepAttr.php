<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KiKiMapStepAttr enum
 */
final class KiKiMapStepAttr
{
    const enmKiKiMapStepAttr_Null = 0;
    const enmKiKiMapStepAttr_Start = 1;
    const enmKiKiMapStepAttr_End = 2;
    const enmKiKiMapStepAttr_Event = 3;
    const enmKiKiMapStepAttr_SmallPrize = 4;
    const enmKiKiMapStepAttr_BigPrize = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmKiKiMapStepAttr_Null' => self::enmKiKiMapStepAttr_Null,
            'enmKiKiMapStepAttr_Start' => self::enmKiKiMapStepAttr_Start,
            'enmKiKiMapStepAttr_End' => self::enmKiKiMapStepAttr_End,
            'enmKiKiMapStepAttr_Event' => self::enmKiKiMapStepAttr_Event,
            'enmKiKiMapStepAttr_SmallPrize' => self::enmKiKiMapStepAttr_SmallPrize,
            'enmKiKiMapStepAttr_BigPrize' => self::enmKiKiMapStepAttr_BigPrize,
        );
    }
}
}