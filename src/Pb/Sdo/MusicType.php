<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MusicType enum
 */
final class MusicType
{
    const enmMusicType_Mask = 3840;
    const enmMusicType_New = 256;
    const enmMusicType_Level = 512;
    const enmMusicType_Star = 768;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMusicType_Mask' => self::enmMusicType_Mask,
            'enmMusicType_New' => self::enmMusicType_New,
            'enmMusicType_Level' => self::enmMusicType_Level,
            'enmMusicType_Star' => self::enmMusicType_Star,
        );
    }
}
}