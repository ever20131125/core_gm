<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlaceState enum
 */
final class PlaceState
{
    const enmPlaceState_None = 0;
    const enmPlaceState_Normal = 1;
    const enmPlaceState_Locked = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPlaceState_None' => self::enmPlaceState_None,
            'enmPlaceState_Normal' => self::enmPlaceState_Normal,
            'enmPlaceState_Locked' => self::enmPlaceState_Locked,
        );
    }
}
}