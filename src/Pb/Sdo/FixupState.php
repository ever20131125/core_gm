<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FixupState enum
 */
final class FixupState
{
    const enmFixupState_None = 0;
    const enmFixupState_Waiting = 1;
    const enmFixupState_CD = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFixupState_None' => self::enmFixupState_None,
            'enmFixupState_Waiting' => self::enmFixupState_Waiting,
            'enmFixupState_CD' => self::enmFixupState_CD,
        );
    }
}
}