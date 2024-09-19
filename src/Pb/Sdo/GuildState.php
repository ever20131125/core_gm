<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildState enum
 */
final class GuildState
{
    const enmGuildState_Normal = 0;
    const enmGuildState_Disbanding = 1;
    const enmGuildState_LockForLackingMoney = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildState_Normal' => self::enmGuildState_Normal,
            'enmGuildState_Disbanding' => self::enmGuildState_Disbanding,
            'enmGuildState_LockForLackingMoney' => self::enmGuildState_LockForLackingMoney,
        );
    }
}
}