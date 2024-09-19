<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RefreshReason enum
 */
final class RefreshReason
{
    const enmRefreshReason_Normal = 0;
    const enmRefreshReason_Bomb = 1;
    const enmRefreshReason_Empty = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRefreshReason_Normal' => self::enmRefreshReason_Normal,
            'enmRefreshReason_Bomb' => self::enmRefreshReason_Bomb,
            'enmRefreshReason_Empty' => self::enmRefreshReason_Empty,
        );
    }
}
}