<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LotEventType enum
 */
final class LotEventType
{
    const enmLotEvent_Null = 0;
    const enmLotEvent_Read = 1;
    const enmLotEvent_Write = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmLotEvent_Null' => self::enmLotEvent_Null,
            'enmLotEvent_Read' => self::enmLotEvent_Read,
            'enmLotEvent_Write' => self::enmLotEvent_Write,
        );
    }
}
}