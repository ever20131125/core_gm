<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PKState enum
 */
final class PKState
{
    const enmPKState_None = 0;
    const enmPKState_PK = 1;
    const enmPKState_BePK = 2;
    const enmPKState_Free = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPKState_None' => self::enmPKState_None,
            'enmPKState_PK' => self::enmPKState_PK,
            'enmPKState_BePK' => self::enmPKState_BePK,
            'enmPKState_Free' => self::enmPKState_Free,
        );
    }
}
}