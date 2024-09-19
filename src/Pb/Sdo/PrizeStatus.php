<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PrizeStatus enum
 */
final class PrizeStatus
{
    const enmPrizeStatus_NULL = 0;
    const enmPrizeStatus_UnReceive = 1;
    const enmPrizeStatus_Sent = 2;
    const enmPrizeStatus_Received = 3;
    const enmPrizeStatus_Locked = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPrizeStatus_NULL' => self::enmPrizeStatus_NULL,
            'enmPrizeStatus_UnReceive' => self::enmPrizeStatus_UnReceive,
            'enmPrizeStatus_Sent' => self::enmPrizeStatus_Sent,
            'enmPrizeStatus_Received' => self::enmPrizeStatus_Received,
            'enmPrizeStatus_Locked' => self::enmPrizeStatus_Locked,
        );
    }
}
}