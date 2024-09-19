<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * DivorceType enum
 */
final class DivorceType
{
    const enmDivorceType_None = 0;
    const enmDivorceType_Peace = 1;
    const enmDivorceType_Force = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmDivorceType_None' => self::enmDivorceType_None,
            'enmDivorceType_Peace' => self::enmDivorceType_Peace,
            'enmDivorceType_Force' => self::enmDivorceType_Force,
        );
    }
}
}