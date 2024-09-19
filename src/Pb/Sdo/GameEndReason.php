<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameEndReason enum
 */
final class GameEndReason
{
    const enmGameEndReason_Normal = 0;
    const enmGameEndReason_LoadTimeOut = 1;
    const enmGameEndReason_AnalyticTimeOut = 2;
    const enmGameEndReason_Exit = 3;
    const enmGameEndReason_Unknown = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGameEndReason_Normal' => self::enmGameEndReason_Normal,
            'enmGameEndReason_LoadTimeOut' => self::enmGameEndReason_LoadTimeOut,
            'enmGameEndReason_AnalyticTimeOut' => self::enmGameEndReason_AnalyticTimeOut,
            'enmGameEndReason_Exit' => self::enmGameEndReason_Exit,
            'enmGameEndReason_Unknown' => self::enmGameEndReason_Unknown,
        );
    }
}
}