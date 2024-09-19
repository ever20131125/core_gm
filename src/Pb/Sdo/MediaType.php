<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MediaType enum
 */
final class MediaType
{
    const enmMediaType_Invalid = 0;
    const enmMediaType_Text = 1;
    const enmMediaType_Pic = 2;
    const enmMediaType_Video = 3;
    const enmMediaType_Sound = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMediaType_Invalid' => self::enmMediaType_Invalid,
            'enmMediaType_Text' => self::enmMediaType_Text,
            'enmMediaType_Pic' => self::enmMediaType_Pic,
            'enmMediaType_Video' => self::enmMediaType_Video,
            'enmMediaType_Sound' => self::enmMediaType_Sound,
        );
    }
}
}