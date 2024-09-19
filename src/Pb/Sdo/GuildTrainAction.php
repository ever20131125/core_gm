<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildTrainAction enum
 */
final class GuildTrainAction
{
    const enmGuildTrainAction_None = 0;
    const enmGuildTrainAction_Create = 1;
    const enmGuildTrainAction_Join = 2;
    const enmGuildTrainAction_Exist = 3;
    const enmGuildTrainAction_Kick = 4;
    const enmGuildTrainAction_SetPwd = 5;
    const enmGuildBossRoomAction_Create = 11;
    const enmGuildBossRoomAction_Join = 12;
    const enmGuildBossRoomAction_Exist = 13;
    const enmGuildBossRoomAction_Ready = 14;
    const enmGuildBossRoomAction_Kick = 15;
    const enmGuildBossRoomAction_ResetCD = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildTrainAction_None' => self::enmGuildTrainAction_None,
            'enmGuildTrainAction_Create' => self::enmGuildTrainAction_Create,
            'enmGuildTrainAction_Join' => self::enmGuildTrainAction_Join,
            'enmGuildTrainAction_Exist' => self::enmGuildTrainAction_Exist,
            'enmGuildTrainAction_Kick' => self::enmGuildTrainAction_Kick,
            'enmGuildTrainAction_SetPwd' => self::enmGuildTrainAction_SetPwd,
            'enmGuildBossRoomAction_Create' => self::enmGuildBossRoomAction_Create,
            'enmGuildBossRoomAction_Join' => self::enmGuildBossRoomAction_Join,
            'enmGuildBossRoomAction_Exist' => self::enmGuildBossRoomAction_Exist,
            'enmGuildBossRoomAction_Ready' => self::enmGuildBossRoomAction_Ready,
            'enmGuildBossRoomAction_Kick' => self::enmGuildBossRoomAction_Kick,
            'enmGuildBossRoomAction_ResetCD' => self::enmGuildBossRoomAction_ResetCD,
        );
    }
}
}