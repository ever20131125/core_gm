<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CommonDef enum
 */
final class CommonDef
{
    const enmTimeOneDay = 86400;
    const enmTimeThreeDay = 259200;
    const enmTimeOneWeek = 604800;
    const enmTimeOneMonth = 2592000;
    const enmTimeForever = 2147483647;
    const enmMaxItemLevel = 100;
    const enmMaxItemRank = 10;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTimeOneDay' => self::enmTimeOneDay,
            'enmTimeThreeDay' => self::enmTimeThreeDay,
            'enmTimeOneWeek' => self::enmTimeOneWeek,
            'enmTimeOneMonth' => self::enmTimeOneMonth,
            'enmTimeForever' => self::enmTimeForever,
            'enmMaxItemLevel' => self::enmMaxItemLevel,
            'enmMaxItemRank' => self::enmMaxItemRank,
        );
    }
}
}