<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PicType enum
 */
final class PicType
{
    const enmPicType_HeadGame = 0;
    const enmPicType_HeadPhoto = 1;
    const enmPicType_Photo = 2;
    const enmPicType_Beckoning = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPicType_HeadGame' => self::enmPicType_HeadGame,
            'enmPicType_HeadPhoto' => self::enmPicType_HeadPhoto,
            'enmPicType_Photo' => self::enmPicType_Photo,
            'enmPicType_Beckoning' => self::enmPicType_Beckoning,
        );
    }
}
}