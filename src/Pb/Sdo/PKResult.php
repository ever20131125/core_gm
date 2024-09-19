<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PKResult enum
 */
final class PKResult
{
    const enmPKResult_None = 0;
    const enmPKResult_AttackerWin = 1;
    const enmPKResult_AttackerLost = 2;
    const enmPKResult_Draw = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPKResult_None' => self::enmPKResult_None,
            'enmPKResult_AttackerWin' => self::enmPKResult_AttackerWin,
            'enmPKResult_AttackerLost' => self::enmPKResult_AttackerLost,
            'enmPKResult_Draw' => self::enmPKResult_Draw,
        );
    }
}
}