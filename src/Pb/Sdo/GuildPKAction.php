<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildPKAction enum
 */
final class GuildPKAction
{
    const enmGuildPKAction_None = 0;
    const enmGuildPKAction_Apply = 1;
    const enmGuildPKAction_Attacker = 2;
    const enmGuildPKAction_Healer = 3;
    const enmGuildPKAction_Maker = 4;
    const enmGuildPKAction_PkReady = 5;
    const enmGuildPKAction_StartPKBoss = 11;
    const enmGuildPKAction_PKBoss = 12;
    const enmGuildPKAction_AddBossTimes = 13;
    const enmGuildPKAction_ResetBoss = 14;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildPKAction_None' => self::enmGuildPKAction_None,
            'enmGuildPKAction_Apply' => self::enmGuildPKAction_Apply,
            'enmGuildPKAction_Attacker' => self::enmGuildPKAction_Attacker,
            'enmGuildPKAction_Healer' => self::enmGuildPKAction_Healer,
            'enmGuildPKAction_Maker' => self::enmGuildPKAction_Maker,
            'enmGuildPKAction_PkReady' => self::enmGuildPKAction_PkReady,
            'enmGuildPKAction_StartPKBoss' => self::enmGuildPKAction_StartPKBoss,
            'enmGuildPKAction_PKBoss' => self::enmGuildPKAction_PKBoss,
            'enmGuildPKAction_AddBossTimes' => self::enmGuildPKAction_AddBossTimes,
            'enmGuildPKAction_ResetBoss' => self::enmGuildPKAction_ResetBoss,
        );
    }
}
}