<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActModule enum
 */
final class ActModule
{
    const enmActModule_None = 0;
    const enmActModule_Pay = 1;
    const enmActModule_Active = 2;
    const enmActModule_GM = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActModule_None' => self::enmActModule_None,
            'enmActModule_Pay' => self::enmActModule_Pay,
            'enmActModule_Active' => self::enmActModule_Active,
            'enmActModule_GM' => self::enmActModule_GM,
        );
    }
}
}