<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleAlbumDayType enum
 */
final class CoupleAlbumDayType
{
    const enmCoupleAlbumEvent_None = 0;
    const enmCoupleAlbumEvent_Day = 1;
    const enmCoupleAlbumEvent_Couple = 2;
    const enmCoupleAlbumEvent_Wedding = 3;
    const enmCoupleAlbumEvent_Diary = 4;
    const enmCoupleAlbumEvent_Again_Wedding = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCoupleAlbumEvent_None' => self::enmCoupleAlbumEvent_None,
            'enmCoupleAlbumEvent_Day' => self::enmCoupleAlbumEvent_Day,
            'enmCoupleAlbumEvent_Couple' => self::enmCoupleAlbumEvent_Couple,
            'enmCoupleAlbumEvent_Wedding' => self::enmCoupleAlbumEvent_Wedding,
            'enmCoupleAlbumEvent_Diary' => self::enmCoupleAlbumEvent_Diary,
            'enmCoupleAlbumEvent_Again_Wedding' => self::enmCoupleAlbumEvent_Again_Wedding,
        );
    }
}
}