<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ZoneState enum
 */
final class ZoneState
{
    const enmZoneState_Normal = 0;
    const enmZoneState_Test = 1;
    const enmZoneState_Stop = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmZoneState_Normal' => self::enmZoneState_Normal,
            'enmZoneState_Test' => self::enmZoneState_Test,
            'enmZoneState_Stop' => self::enmZoneState_Stop,
        );
    }
}
}