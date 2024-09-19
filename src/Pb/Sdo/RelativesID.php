<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RelativesID enum
 */
final class RelativesID
{
    const enmRelativesID_None = 0;
    const enmRelativesID_Default = 10;
    const enmRelativesID_Customer = 99990;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRelativesID_None' => self::enmRelativesID_None,
            'enmRelativesID_Default' => self::enmRelativesID_Default,
            'enmRelativesID_Customer' => self::enmRelativesID_Customer,
        );
    }
}
}