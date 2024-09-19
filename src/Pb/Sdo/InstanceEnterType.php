<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InstanceEnterType enum
 */
final class InstanceEnterType
{
    const enmInstanceEnterType_Single = 0;
    const enmInstanceEnterType_Team = 1;
    const enmInstanceEnterType_Match = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmInstanceEnterType_Single' => self::enmInstanceEnterType_Single,
            'enmInstanceEnterType_Team' => self::enmInstanceEnterType_Team,
            'enmInstanceEnterType_Match' => self::enmInstanceEnterType_Match,
        );
    }
}
}