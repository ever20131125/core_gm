<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChatType enum
 */
final class ChatType
{
    const enmChatGroupType_Multi_Custom = 1;
    const enmChatGroupType_Multi_Private = 2;
    const enmChatGroupType_Multi_Current = 3;
    const enmChatGroupType_Multi_ChatGroup = 4;
    const enmChatGroupType_Multi_Channel = 5;
    const enmChatGroupType_Multi_Room = 6;
    const enmChatGroupType_Multi_Guild = 7;
    const enmChatGroupType_Multi_Friend = 8;
    const enmChatGroupType_Multi_Lover = 9;
    const enmChatGroupType_Multi_Master = 10;
    const enmChatGroupType_Multi_Wedding = 11;
    const enmChatGroupType_Multi_City = 12;
    const enmChatGroupType_Multi_Hall = 13;
    const enmChatGroupType_Multi_House = 14;
    const enmChatGroupType_Multi_CoupleHouse = 15;
    const enmChatType_Broad_Wedding_MC = 100;
    const enmChatType_Broad_EffectCard = 101;
    const enmChatType_Broad_LoverBigSpeaker = 102;
    const enmChatType_Broad_LoverSmallSpeaker = 103;
    const enmChatType_Broad_BigSpeaker = 104;
    const enmChatType_Broad_SmallSpeaker = 105;
    const enmChatType_Broad_ZoneSpeaker = 106;
    const enmChatType_Broad_UltimateSpeaker = 107;
    const enmChatType_Broad_MiddleSpeaker = 108;
    const enmChatType_Broad_SystemVertical = 109;
    const enmChatType_Broad_SystemHorizontal = 110;
    const enmChatType_Broad_System_V_and_H = 111;
    const enmChatType_Broad_SystemVertical_CZ = 112;
    const enmChatType_Broad_SystemHorizontal_CZ = 113;
    const enmChatType_Broad_System_V_and_H_CZ = 114;
    const enmChatType_Broad_SystemVertical_AZ = 115;
    const enmChatType_Broad_SystemHorizontal_AZ = 116;
    const enmChatType_Broad_System_V_and_H_AZ = 117;
    const enmChatType_Broad_SystemSigle = 118;
    const enmChatType_Broad_SystemZone = 119;
    const enmChatType_Broad_SystemPlat = 120;
    const enmChatGroupType_SysMsg_Common = 1000;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmChatGroupType_Multi_Custom' => self::enmChatGroupType_Multi_Custom,
            'enmChatGroupType_Multi_Private' => self::enmChatGroupType_Multi_Private,
            'enmChatGroupType_Multi_Current' => self::enmChatGroupType_Multi_Current,
            'enmChatGroupType_Multi_ChatGroup' => self::enmChatGroupType_Multi_ChatGroup,
            'enmChatGroupType_Multi_Channel' => self::enmChatGroupType_Multi_Channel,
            'enmChatGroupType_Multi_Room' => self::enmChatGroupType_Multi_Room,
            'enmChatGroupType_Multi_Guild' => self::enmChatGroupType_Multi_Guild,
            'enmChatGroupType_Multi_Friend' => self::enmChatGroupType_Multi_Friend,
            'enmChatGroupType_Multi_Lover' => self::enmChatGroupType_Multi_Lover,
            'enmChatGroupType_Multi_Master' => self::enmChatGroupType_Multi_Master,
            'enmChatGroupType_Multi_Wedding' => self::enmChatGroupType_Multi_Wedding,
            'enmChatGroupType_Multi_City' => self::enmChatGroupType_Multi_City,
            'enmChatGroupType_Multi_Hall' => self::enmChatGroupType_Multi_Hall,
            'enmChatGroupType_Multi_House' => self::enmChatGroupType_Multi_House,
            'enmChatGroupType_Multi_CoupleHouse' => self::enmChatGroupType_Multi_CoupleHouse,
            'enmChatType_Broad_Wedding_MC' => self::enmChatType_Broad_Wedding_MC,
            'enmChatType_Broad_EffectCard' => self::enmChatType_Broad_EffectCard,
            'enmChatType_Broad_LoverBigSpeaker' => self::enmChatType_Broad_LoverBigSpeaker,
            'enmChatType_Broad_LoverSmallSpeaker' => self::enmChatType_Broad_LoverSmallSpeaker,
            'enmChatType_Broad_BigSpeaker' => self::enmChatType_Broad_BigSpeaker,
            'enmChatType_Broad_SmallSpeaker' => self::enmChatType_Broad_SmallSpeaker,
            'enmChatType_Broad_ZoneSpeaker' => self::enmChatType_Broad_ZoneSpeaker,
            'enmChatType_Broad_UltimateSpeaker' => self::enmChatType_Broad_UltimateSpeaker,
            'enmChatType_Broad_MiddleSpeaker' => self::enmChatType_Broad_MiddleSpeaker,
            'enmChatType_Broad_SystemVertical' => self::enmChatType_Broad_SystemVertical,
            'enmChatType_Broad_SystemHorizontal' => self::enmChatType_Broad_SystemHorizontal,
            'enmChatType_Broad_System_V_and_H' => self::enmChatType_Broad_System_V_and_H,
            'enmChatType_Broad_SystemVertical_CZ' => self::enmChatType_Broad_SystemVertical_CZ,
            'enmChatType_Broad_SystemHorizontal_CZ' => self::enmChatType_Broad_SystemHorizontal_CZ,
            'enmChatType_Broad_System_V_and_H_CZ' => self::enmChatType_Broad_System_V_and_H_CZ,
            'enmChatType_Broad_SystemVertical_AZ' => self::enmChatType_Broad_SystemVertical_AZ,
            'enmChatType_Broad_SystemHorizontal_AZ' => self::enmChatType_Broad_SystemHorizontal_AZ,
            'enmChatType_Broad_System_V_and_H_AZ' => self::enmChatType_Broad_System_V_and_H_AZ,
            'enmChatType_Broad_SystemSigle' => self::enmChatType_Broad_SystemSigle,
            'enmChatType_Broad_SystemZone' => self::enmChatType_Broad_SystemZone,
            'enmChatType_Broad_SystemPlat' => self::enmChatType_Broad_SystemPlat,
            'enmChatGroupType_SysMsg_Common' => self::enmChatGroupType_SysMsg_Common,
        );
    }
}
}