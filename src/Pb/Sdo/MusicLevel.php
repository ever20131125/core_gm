<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MusicLevel enum
 */
final class MusicLevel
{
    const enmMusicLevel_Random = 0;
    const enmMusicLevel_Easy = 1;
    const enmMusicLevel_Normal = 2;
    const enmMusicLevel_Hard = 3;
    const enmMusicLevel_Practise = 9;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMusicLevel_Random' => self::enmMusicLevel_Random,
            'enmMusicLevel_Easy' => self::enmMusicLevel_Easy,
            'enmMusicLevel_Normal' => self::enmMusicLevel_Normal,
            'enmMusicLevel_Hard' => self::enmMusicLevel_Hard,
            'enmMusicLevel_Practise' => self::enmMusicLevel_Practise,
        );
    }
}
}