<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VehicleState enum
 */
final class VehicleState
{
    const enmVehicleState_Normal = 0;
    const enmVehicleState_Reserve = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmVehicleState_Normal' => self::enmVehicleState_Normal,
            'enmVehicleState_Reserve' => self::enmVehicleState_Reserve,
        );
    }
}
}