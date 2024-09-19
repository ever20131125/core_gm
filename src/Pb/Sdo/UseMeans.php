<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UseMeans enum
 */
final class UseMeans
{
    const enmUseMeans_None = 0;
    const enmUseMeans_Time = 1;
    const enmUseMeans_Count = 2;
    const enmUseMeans_Trigger = 3;
    const enmUseMeans_DayTimeProps = 4;
    const enmUseMeans_WeekTimeProps = 5;
    const enmUseMeans_MonthTimeProps = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUseMeans_None' => self::enmUseMeans_None,
            'enmUseMeans_Time' => self::enmUseMeans_Time,
            'enmUseMeans_Count' => self::enmUseMeans_Count,
            'enmUseMeans_Trigger' => self::enmUseMeans_Trigger,
            'enmUseMeans_DayTimeProps' => self::enmUseMeans_DayTimeProps,
            'enmUseMeans_WeekTimeProps' => self::enmUseMeans_WeekTimeProps,
            'enmUseMeans_MonthTimeProps' => self::enmUseMeans_MonthTimeProps,
        );
    }
}
}