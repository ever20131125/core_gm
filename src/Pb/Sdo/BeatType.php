<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BeatType enum
 */
final class BeatType
{
    const enmBeatType_Normal = 0;
    const enmBeatType_ShowTime = 1;
    const enmBeatType_FeverTime = 2;
    const enmBeatType_RestTime = 3;
    const enmBeatType_Ignore = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBeatType_Normal' => self::enmBeatType_Normal,
            'enmBeatType_ShowTime' => self::enmBeatType_ShowTime,
            'enmBeatType_FeverTime' => self::enmBeatType_FeverTime,
            'enmBeatType_RestTime' => self::enmBeatType_RestTime,
            'enmBeatType_Ignore' => self::enmBeatType_Ignore,
        );
    }
}
}