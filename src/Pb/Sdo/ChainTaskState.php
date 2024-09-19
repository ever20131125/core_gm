<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChainTaskState enum
 */
final class ChainTaskState
{
    const enmChainTaskState_UnRecieve = 0;
    const enmChainTaskState_Recieved = 1;
    const enmChainTaskState_Completed = 2;
    const enmChainTaskState_PrizeGot = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmChainTaskState_UnRecieve' => self::enmChainTaskState_UnRecieve,
            'enmChainTaskState_Recieved' => self::enmChainTaskState_Recieved,
            'enmChainTaskState_Completed' => self::enmChainTaskState_Completed,
            'enmChainTaskState_PrizeGot' => self::enmChainTaskState_PrizeGot,
        );
    }
}
}