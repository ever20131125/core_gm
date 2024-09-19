<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TourTaskState enum
 */
final class TourTaskState
{
    const enmTourTaskState_UnRecieve = 0;
    const enmTourTaskState_Recieved = 1;
    const enmTourTaskState_Completed = 2;
    const enmTourTaskState_PrizeGot = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTourTaskState_UnRecieve' => self::enmTourTaskState_UnRecieve,
            'enmTourTaskState_Recieved' => self::enmTourTaskState_Recieved,
            'enmTourTaskState_Completed' => self::enmTourTaskState_Completed,
            'enmTourTaskState_PrizeGot' => self::enmTourTaskState_PrizeGot,
        );
    }
}
}