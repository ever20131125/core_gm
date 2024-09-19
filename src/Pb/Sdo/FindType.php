<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FindType enum
 */
final class FindType
{
    const enmFindType_None = 0;
    const enmFindType_ByID = 1;
    const enmFindType_ByName = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFindType_None' => self::enmFindType_None,
            'enmFindType_ByID' => self::enmFindType_ByID,
            'enmFindType_ByName' => self::enmFindType_ByName,
        );
    }
}
}