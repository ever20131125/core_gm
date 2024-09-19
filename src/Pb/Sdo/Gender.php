<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * Gender enum
 */
final class Gender
{
    const enmGender_Unknown = 0;
    const enmGender_Male = 1;
    const enmGender_Female = 2;
    const enmGender_Unisex = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGender_Unknown' => self::enmGender_Unknown,
            'enmGender_Male' => self::enmGender_Male,
            'enmGender_Female' => self::enmGender_Female,
            'enmGender_Unisex' => self::enmGender_Unisex,
        );
    }
}
}