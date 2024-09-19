<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GamePlayFixup enum
 */
final class GamePlayFixup
{
    const enmGamePlayFixup_None = 0;
    const enmGamePlayFixup_DROPBALL = 1;
    const enmGamePlayFixup_HeartStar = 2;
    const enmGamePlayFixup_AU = 4;
    const enmGamePlayFixup_LM = 8;
    const enmGamePlayFixup_Touch = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGamePlayFixup_None' => self::enmGamePlayFixup_None,
            'enmGamePlayFixup_DROPBALL' => self::enmGamePlayFixup_DROPBALL,
            'enmGamePlayFixup_HeartStar' => self::enmGamePlayFixup_HeartStar,
            'enmGamePlayFixup_AU' => self::enmGamePlayFixup_AU,
            'enmGamePlayFixup_LM' => self::enmGamePlayFixup_LM,
            'enmGamePlayFixup_Touch' => self::enmGamePlayFixup_Touch,
        );
    }
}
}