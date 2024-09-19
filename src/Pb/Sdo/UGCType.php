<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UGCType enum
 */
final class UGCType
{
    const enmUGCType_None = 0;
    const enmUGCType_AlbumPic = 1;
    const enmUGCType_HeadPic = 2;
    const enmUGCType_Voice = 3;
    const enmUGCType_Face = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUGCType_None' => self::enmUGCType_None,
            'enmUGCType_AlbumPic' => self::enmUGCType_AlbumPic,
            'enmUGCType_HeadPic' => self::enmUGCType_HeadPic,
            'enmUGCType_Voice' => self::enmUGCType_Voice,
            'enmUGCType_Face' => self::enmUGCType_Face,
        );
    }
}
}