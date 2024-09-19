<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TaskState enum
 */
final class TaskState
{
    const enmTaskState_UnRecieve = 0;
    const enmTaskState_Recieved = 1;
    const enmTaskState_Completed = 2;
    const enmTaskState_PrizeGot = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTaskState_UnRecieve' => self::enmTaskState_UnRecieve,
            'enmTaskState_Recieved' => self::enmTaskState_Recieved,
            'enmTaskState_Completed' => self::enmTaskState_Completed,
            'enmTaskState_PrizeGot' => self::enmTaskState_PrizeGot,
        );
    }
}
}