<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SpriteWorkWay enum
 */
final class SpriteWorkWay
{
    const enmWorkWay_NULL = 0;
    const enmWorkWay_Conductor = 1;
    const enmWorkWay_Photographer = 2;
    const enmWorkWay_Macdaddy = 3;
    const enmWorkWay_KingOfSprite = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWorkWay_NULL' => self::enmWorkWay_NULL,
            'enmWorkWay_Conductor' => self::enmWorkWay_Conductor,
            'enmWorkWay_Photographer' => self::enmWorkWay_Photographer,
            'enmWorkWay_Macdaddy' => self::enmWorkWay_Macdaddy,
            'enmWorkWay_KingOfSprite' => self::enmWorkWay_KingOfSprite,
        );
    }
}
}