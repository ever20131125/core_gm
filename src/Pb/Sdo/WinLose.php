<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WinLose enum
 */
final class WinLose
{
    const enmWinLose_Draw = 0;
    const enmWinLose_Win = 1;
    const enmWinLose_Lose = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWinLose_Draw' => self::enmWinLose_Draw,
            'enmWinLose_Win' => self::enmWinLose_Win,
            'enmWinLose_Lose' => self::enmWinLose_Lose,
        );
    }
}
}