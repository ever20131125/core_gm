<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildEventType enum
 */
final class GuildEventType
{
    const enmGuildEventType_None = 0;
    const enmGuildEventType_Create = 1;
    const enmGuildEventType_Transfer = 2;
    const enmGuildEventType_CancelTransfer = 3;
    const enmGuildEventType_Transferred = 4;
    const enmGuildEventType_Depose = 5;
    const enmGuildEventType_Dissolve = 6;
    const enmGuildEventType_CancelDissolve = 7;
    const enmGuildEventType_SetApprovalType = 8;
    const enmGuildEventType_EditPost = 9;
    const enmGuildEventType_AppointOfficer = 10;
    const enmGuildEventType_Apply = 11;
    const enmGuildEventType_CancelApply = 12;
    const enmGuildEventType_AgreeApply = 13;
    const enmGuildEventType_Join = 14;
    const enmGuildEventType_ExitProactive = 15;
    const enmGuildEventType_ExitForced = 16;
    const enmGuildEventType_SetInfo = 17;
    const enmGuildEventType_SendGuildMail = 18;
    const enmGuildEventType_LevelUp = 19;
    const enmGuildEventType_Donate = 20;
    const enmGuildEventType_Worship = 21;
    const enmGuildEventType_Sign = 22;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGuildEventType_None' => self::enmGuildEventType_None,
            'enmGuildEventType_Create' => self::enmGuildEventType_Create,
            'enmGuildEventType_Transfer' => self::enmGuildEventType_Transfer,
            'enmGuildEventType_CancelTransfer' => self::enmGuildEventType_CancelTransfer,
            'enmGuildEventType_Transferred' => self::enmGuildEventType_Transferred,
            'enmGuildEventType_Depose' => self::enmGuildEventType_Depose,
            'enmGuildEventType_Dissolve' => self::enmGuildEventType_Dissolve,
            'enmGuildEventType_CancelDissolve' => self::enmGuildEventType_CancelDissolve,
            'enmGuildEventType_SetApprovalType' => self::enmGuildEventType_SetApprovalType,
            'enmGuildEventType_EditPost' => self::enmGuildEventType_EditPost,
            'enmGuildEventType_AppointOfficer' => self::enmGuildEventType_AppointOfficer,
            'enmGuildEventType_Apply' => self::enmGuildEventType_Apply,
            'enmGuildEventType_CancelApply' => self::enmGuildEventType_CancelApply,
            'enmGuildEventType_AgreeApply' => self::enmGuildEventType_AgreeApply,
            'enmGuildEventType_Join' => self::enmGuildEventType_Join,
            'enmGuildEventType_ExitProactive' => self::enmGuildEventType_ExitProactive,
            'enmGuildEventType_ExitForced' => self::enmGuildEventType_ExitForced,
            'enmGuildEventType_SetInfo' => self::enmGuildEventType_SetInfo,
            'enmGuildEventType_SendGuildMail' => self::enmGuildEventType_SendGuildMail,
            'enmGuildEventType_LevelUp' => self::enmGuildEventType_LevelUp,
            'enmGuildEventType_Donate' => self::enmGuildEventType_Donate,
            'enmGuildEventType_Worship' => self::enmGuildEventType_Worship,
            'enmGuildEventType_Sign' => self::enmGuildEventType_Sign,
        );
    }
}
}