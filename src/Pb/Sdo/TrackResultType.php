<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TrackResultType enum
 */
final class TrackResultType
{
    const enmTrackResultType_Stay = 0;
    const enmTrackResultType_ToChannel = 1;
    const enmTrackResultType_ToRoom = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTrackResultType_Stay' => self::enmTrackResultType_Stay,
            'enmTrackResultType_ToChannel' => self::enmTrackResultType_ToChannel,
            'enmTrackResultType_ToRoom' => self::enmTrackResultType_ToRoom,
        );
    }
}
}