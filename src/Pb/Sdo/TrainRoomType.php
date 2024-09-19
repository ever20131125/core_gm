<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TrainRoomType enum
 */
final class TrainRoomType
{
    const enmTrainRoomType_System = 0;
    const enmTrainRoomType_Person = 1;
    const enmTrainRoomType_Boss = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTrainRoomType_System' => self::enmTrainRoomType_System,
            'enmTrainRoomType_Person' => self::enmTrainRoomType_Person,
            'enmTrainRoomType_Boss' => self::enmTrainRoomType_Boss,
        );
    }
}
}