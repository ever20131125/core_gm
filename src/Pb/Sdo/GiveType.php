<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GiveType enum
 */
final class GiveType
{
    const enmGiveType_None = 0;
    const enmGiveType_Normal = 1;
    const enmGiveType_Askfor = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGiveType_None' => self::enmGiveType_None,
            'enmGiveType_Normal' => self::enmGiveType_Normal,
            'enmGiveType_Askfor' => self::enmGiveType_Askfor,
        );
    }
}
}