<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildBossState enum
 */
final class GuildBossState
{
    const enmGuildBossState_NoPK = 0;
    const enmGuildBossState_YesPK = 1;
    const enmGuildBossState_CDPK = 2;
    const enmGuildBossState_WaitPK = 16;
    const enmGuildBossState_ReadyPK = 32;
    const enmGuildBossState_PK = 64;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildBossState_NoPK' => self::enmGuildBossState_NoPK,
            'enmGuildBossState_YesPK' => self::enmGuildBossState_YesPK,
            'enmGuildBossState_CDPK' => self::enmGuildBossState_CDPK,
            'enmGuildBossState_WaitPK' => self::enmGuildBossState_WaitPK,
            'enmGuildBossState_ReadyPK' => self::enmGuildBossState_ReadyPK,
            'enmGuildBossState_PK' => self::enmGuildBossState_PK,
        );
    }
}
}