<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoverTaskState enum
 */
final class LoverTaskState
{
    const enmLoverTaskState_UnReceive = 0;
    const enmLoverTaskState_Received = 1;
    const enmLoverTaskState_Completed = 2;
    const enmLoverTaskState_PrizeGot = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmLoverTaskState_UnReceive' => self::enmLoverTaskState_UnReceive,
            'enmLoverTaskState_Received' => self::enmLoverTaskState_Received,
            'enmLoverTaskState_Completed' => self::enmLoverTaskState_Completed,
            'enmLoverTaskState_PrizeGot' => self::enmLoverTaskState_PrizeGot,
        );
    }
}
}