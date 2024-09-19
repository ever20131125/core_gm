<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ConcertType enum
 */
final class ConcertType
{
    const enmConcertType_Invalid = 0;
    const enmConcertType_Mini = 1;
    const enmConcertType_Medium = 2;
    const enmConcertType_Big = 3;
    const enmConcertType_Count = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmConcertType_Invalid' => self::enmConcertType_Invalid,
            'enmConcertType_Mini' => self::enmConcertType_Mini,
            'enmConcertType_Medium' => self::enmConcertType_Medium,
            'enmConcertType_Big' => self::enmConcertType_Big,
            'enmConcertType_Count' => self::enmConcertType_Count,
        );
    }
}
}