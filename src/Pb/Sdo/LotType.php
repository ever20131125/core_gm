<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LotType enum
 */
final class LotType
{
    const enmLotType_Friend = 1;
    const enmLotType_Marriage = 2;
    const enmLotType_Wish = 3;
    const enmLotType_Bless = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmLotType_Friend' => self::enmLotType_Friend,
            'enmLotType_Marriage' => self::enmLotType_Marriage,
            'enmLotType_Wish' => self::enmLotType_Wish,
            'enmLotType_Bless' => self::enmLotType_Bless,
        );
    }
}
}