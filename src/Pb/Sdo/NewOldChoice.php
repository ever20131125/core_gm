<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * NewOldChoice enum
 */
final class NewOldChoice
{
    const enmNewOld_None = 0;
    const enmNewOld_New = 1;
    const enmNewOld_Old = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmNewOld_None' => self::enmNewOld_None,
            'enmNewOld_New' => self::enmNewOld_New,
            'enmNewOld_Old' => self::enmNewOld_Old,
        );
    }
}
}