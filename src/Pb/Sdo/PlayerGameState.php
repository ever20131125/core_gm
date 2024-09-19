<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlayerGameState enum
 */
final class PlayerGameState
{
    const enmPlayerGameState_None = 0;
    const enmPlayerGameState_Playing = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPlayerGameState_None' => self::enmPlayerGameState_None,
            'enmPlayerGameState_Playing' => self::enmPlayerGameState_Playing,
        );
    }
}
}