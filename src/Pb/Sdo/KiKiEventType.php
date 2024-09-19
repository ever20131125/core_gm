<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KiKiEventType enum
 */
final class KiKiEventType
{
    const enmKiKiEventType_Null = 0;
    const enmKiKiEventType_GetWishDices = 1;
    const enmKiKiEventType_Forward = 2;
    const enmKiKiEventType_Backward = 3;
    const enmKiKiEventType_GetCommonDices = 4;
    const enmKiKiEventType_Stay = 5;
    const enmKiKiEventType_ReduceEndurance = 6;
    const enmKiKiEventType_IncreaseEndurance = 7;
    const enmKiKiEventType_DanceVS = 8;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmKiKiEventType_Null' => self::enmKiKiEventType_Null,
            'enmKiKiEventType_GetWishDices' => self::enmKiKiEventType_GetWishDices,
            'enmKiKiEventType_Forward' => self::enmKiKiEventType_Forward,
            'enmKiKiEventType_Backward' => self::enmKiKiEventType_Backward,
            'enmKiKiEventType_GetCommonDices' => self::enmKiKiEventType_GetCommonDices,
            'enmKiKiEventType_Stay' => self::enmKiKiEventType_Stay,
            'enmKiKiEventType_ReduceEndurance' => self::enmKiKiEventType_ReduceEndurance,
            'enmKiKiEventType_IncreaseEndurance' => self::enmKiKiEventType_IncreaseEndurance,
            'enmKiKiEventType_DanceVS' => self::enmKiKiEventType_DanceVS,
        );
    }
}
}