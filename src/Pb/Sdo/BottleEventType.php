<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BottleEventType enum
 */
final class BottleEventType
{
    const enmBottleEvent_Null = 0;
    const enmBottleEvent_Get = 1;
    const enmBottleEvent_Drop = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBottleEvent_Null' => self::enmBottleEvent_Null,
            'enmBottleEvent_Get' => self::enmBottleEvent_Get,
            'enmBottleEvent_Drop' => self::enmBottleEvent_Drop,
        );
    }
}
}