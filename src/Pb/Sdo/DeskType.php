<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * DeskType enum
 */
final class DeskType
{
    const enmDeskType_None = 0;
    const enmDeskType_DrawGuess = 1;
    const enmDeskType_Max = 32;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmDeskType_None' => self::enmDeskType_None,
            'enmDeskType_DrawGuess' => self::enmDeskType_DrawGuess,
            'enmDeskType_Max' => self::enmDeskType_Max,
        );
    }
}
}