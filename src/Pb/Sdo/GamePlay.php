<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GamePlay enum
 */
final class GamePlay
{
    const enmGamePlay_Invalid = 0;
    const enmGamePlay_DMZ = 1;
    const enmGamePlay_HEART = 3;
    const enmGamePlay_RHYTHM = 4;
    const enmGamePlay_TOUCH = 5;
    const enmGamePlay_AU = 6;
    const enmGamePlay_LW = 7;
    const enmGamePlay_DJ = 8;
    const enmGamePlay_HeartStar = 9;
    const enmGamePlay_LM = 10;
    const enmGamePlay_TT = 11;
    const enmGamePlay_LM2 = 12;
    const enmGamePlay_DROPBALL = 13;
    const enmGamePlay_RUNNINGBALL = 14;
    const enmGamePlay_Max = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGamePlay_Invalid' => self::enmGamePlay_Invalid,
            'enmGamePlay_DMZ' => self::enmGamePlay_DMZ,
            'enmGamePlay_HEART' => self::enmGamePlay_HEART,
            'enmGamePlay_RHYTHM' => self::enmGamePlay_RHYTHM,
            'enmGamePlay_TOUCH' => self::enmGamePlay_TOUCH,
            'enmGamePlay_AU' => self::enmGamePlay_AU,
            'enmGamePlay_LW' => self::enmGamePlay_LW,
            'enmGamePlay_DJ' => self::enmGamePlay_DJ,
            'enmGamePlay_HeartStar' => self::enmGamePlay_HeartStar,
            'enmGamePlay_LM' => self::enmGamePlay_LM,
            'enmGamePlay_TT' => self::enmGamePlay_TT,
            'enmGamePlay_LM2' => self::enmGamePlay_LM2,
            'enmGamePlay_DROPBALL' => self::enmGamePlay_DROPBALL,
            'enmGamePlay_RUNNINGBALL' => self::enmGamePlay_RUNNINGBALL,
            'enmGamePlay_Max' => self::enmGamePlay_Max,
        );
    }
}
}