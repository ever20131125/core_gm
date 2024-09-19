<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WorkStatusWay enum
 */
final class WorkStatusWay
{
    const enmWorkStatusWay_NULL = 0;
    const enmWorkStatusWay_Free = 1;
    const enmWorkStatusWay_Working = 2;
    const enmWorkStatusWay_Prize = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWorkStatusWay_NULL' => self::enmWorkStatusWay_NULL,
            'enmWorkStatusWay_Free' => self::enmWorkStatusWay_Free,
            'enmWorkStatusWay_Working' => self::enmWorkStatusWay_Working,
            'enmWorkStatusWay_Prize' => self::enmWorkStatusWay_Prize,
        );
    }
}
}