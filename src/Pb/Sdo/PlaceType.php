<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlaceType enum
 */
final class PlaceType
{
    const enmPlaceType_None = 0;
    const enmPlaceType_Play = 1;
    const enmPlaceType_Observer = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPlaceType_None' => self::enmPlaceType_None,
            'enmPlaceType_Play' => self::enmPlaceType_Play,
            'enmPlaceType_Observer' => self::enmPlaceType_Observer,
        );
    }
}
}