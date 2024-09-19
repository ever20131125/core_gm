<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IndulgeLevel enum
 */
final class IndulgeLevel
{
    const enmIndulgeLevel_None = 0;
    const enmIndulgeLevel_Remind = 1;
    const enmIndulgeLevel_Tired = 2;
    const enmIndulgeLevel_Unhealthy = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmIndulgeLevel_None' => self::enmIndulgeLevel_None,
            'enmIndulgeLevel_Remind' => self::enmIndulgeLevel_Remind,
            'enmIndulgeLevel_Tired' => self::enmIndulgeLevel_Tired,
            'enmIndulgeLevel_Unhealthy' => self::enmIndulgeLevel_Unhealthy,
        );
    }
}
}