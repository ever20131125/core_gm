<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SpriteFeedWay enum
 */
final class SpriteFeedWay
{
    const enmSpriteStrongWayNull = 0;
    const enmGrowthWay = 1;
    const enmPhysicalWay = 2;
    const enmMoodWay = 3;
    const enmFeedWay_Count = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSpriteStrongWayNull' => self::enmSpriteStrongWayNull,
            'enmGrowthWay' => self::enmGrowthWay,
            'enmPhysicalWay' => self::enmPhysicalWay,
            'enmMoodWay' => self::enmMoodWay,
            'enmFeedWay_Count' => self::enmFeedWay_Count,
        );
    }
}
}