<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UpdateMarriageType enum
 */
final class UpdateMarriageType
{
    const enmUpdateMarriageType_None = 0;
    const enmUpdateMarriageType_Nick = 1;
    const enmUpdateMarriageType_Declaration = 2;
    const enmUpdateMarriageType_Item = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUpdateMarriageType_None' => self::enmUpdateMarriageType_None,
            'enmUpdateMarriageType_Nick' => self::enmUpdateMarriageType_Nick,
            'enmUpdateMarriageType_Declaration' => self::enmUpdateMarriageType_Declaration,
            'enmUpdateMarriageType_Item' => self::enmUpdateMarriageType_Item,
        );
    }
}
}