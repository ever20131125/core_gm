<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ArenaPlayerType enum
 */
final class ArenaPlayerType
{
    const enmArenaPlayerType_Null = 0;
    const enmArenaPlayerType_Player = 1;
    const enmArenaPlayerType_NPC = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmArenaPlayerType_Null' => self::enmArenaPlayerType_Null,
            'enmArenaPlayerType_Player' => self::enmArenaPlayerType_Player,
            'enmArenaPlayerType_NPC' => self::enmArenaPlayerType_NPC,
        );
    }
}
}