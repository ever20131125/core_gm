<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomDeleteReason enum
 */
final class RoomDeleteReason
{
    const enmDeletedReason_Normal = 0;
    const enmDeletedReason_Unknown = 1;
    const enmDeletedReason_TimeOut = 2;
    const enmDeletedReason_NotEnoughItem = 3;
    const enmDeletedReason_NoPlayer = 4;
    const enmDeletedReason_GSDown = 5;
    const enmDeletedReason_CSDown = 6;
    const enmDeletedReason_GSDataNotUpdate = 7;
    const enmDeletedReason_GSDataError = 8;
    const enmDeletedReason_StroyEnd = 9;
    const enmDeletedReason_UpdateStateFailed = 10;
    const enmDeletedReason_BossPKEnd = 11;
    const enmDeletedReason_BreakUp = 12;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmDeletedReason_Normal' => self::enmDeletedReason_Normal,
            'enmDeletedReason_Unknown' => self::enmDeletedReason_Unknown,
            'enmDeletedReason_TimeOut' => self::enmDeletedReason_TimeOut,
            'enmDeletedReason_NotEnoughItem' => self::enmDeletedReason_NotEnoughItem,
            'enmDeletedReason_NoPlayer' => self::enmDeletedReason_NoPlayer,
            'enmDeletedReason_GSDown' => self::enmDeletedReason_GSDown,
            'enmDeletedReason_CSDown' => self::enmDeletedReason_CSDown,
            'enmDeletedReason_GSDataNotUpdate' => self::enmDeletedReason_GSDataNotUpdate,
            'enmDeletedReason_GSDataError' => self::enmDeletedReason_GSDataError,
            'enmDeletedReason_StroyEnd' => self::enmDeletedReason_StroyEnd,
            'enmDeletedReason_UpdateStateFailed' => self::enmDeletedReason_UpdateStateFailed,
            'enmDeletedReason_BossPKEnd' => self::enmDeletedReason_BossPKEnd,
            'enmDeletedReason_BreakUp' => self::enmDeletedReason_BreakUp,
        );
    }
}
}