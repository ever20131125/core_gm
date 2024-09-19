<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AddDestType enum
 */
final class AddDestType
{
    const enmAddDestType_None = 0;
    const enmAddDestType_ByID = 1;
    const enmAddDestType_ByName = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAddDestType_None' => self::enmAddDestType_None,
            'enmAddDestType_ByID' => self::enmAddDestType_ByID,
            'enmAddDestType_ByName' => self::enmAddDestType_ByName,
        );
    }
}
}