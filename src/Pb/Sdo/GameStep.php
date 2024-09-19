<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameStep enum
 */
final class GameStep
{
    const enmGameStep_None = 0;
    const enmGameStep_Loading = 1;
    const enmGameStep_Play = 2;
    const enmGameStep_Flop = 3;
    const enmGameStep_Movie = 4;
    const enmGameStep_Count = 5;
    const enmGameStep_Analytic = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGameStep_None' => self::enmGameStep_None,
            'enmGameStep_Loading' => self::enmGameStep_Loading,
            'enmGameStep_Play' => self::enmGameStep_Play,
            'enmGameStep_Flop' => self::enmGameStep_Flop,
            'enmGameStep_Movie' => self::enmGameStep_Movie,
            'enmGameStep_Count' => self::enmGameStep_Count,
            'enmGameStep_Analytic' => self::enmGameStep_Analytic,
        );
    }
}
}