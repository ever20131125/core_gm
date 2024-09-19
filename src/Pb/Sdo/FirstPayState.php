<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FirstPayState enum
 */
final class FirstPayState
{
    const enmFirstPayState_Received = 0;
    const enmFirstPayState_Completed = 1;
    const enmFirstPayState_PrizeGot = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFirstPayState_Received' => self::enmFirstPayState_Received,
            'enmFirstPayState_Completed' => self::enmFirstPayState_Completed,
            'enmFirstPayState_PrizeGot' => self::enmFirstPayState_PrizeGot,
        );
    }
}
}