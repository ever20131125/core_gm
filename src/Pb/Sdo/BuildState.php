<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BuildState enum
 */
final class BuildState
{
    const enmBuildState_Normal = 0;
    const enmBuildState_New = 1;
    const enmBuildState_Hot = 2;
    const enmBuildState_Close = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBuildState_Normal' => self::enmBuildState_Normal,
            'enmBuildState_New' => self::enmBuildState_New,
            'enmBuildState_Hot' => self::enmBuildState_Hot,
            'enmBuildState_Close' => self::enmBuildState_Close,
        );
    }
}
}