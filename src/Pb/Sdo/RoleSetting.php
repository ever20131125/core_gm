<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleSetting enum
 */
final class RoleSetting
{
    const enmRoleSetting_None = 0;
    const enmRoleSetting_RefusePrivateChat = 1;
    const enmRoleSetting_RefuseInviteDance = 2;
    const enmRoleSetting_RefuseAddFriend = 4;
    const enmRoleSetting_RefuseConfession = 8;
    const enmRoleSetting_RefuseGuildInvite = 16;
    const enmRoleSetting_NotFly = 256;
    const enmRoleSetting_NoSong = 512;
    const enmRoleSetting_NoSE = 1024;
    const enmRoleSetting_NameColor_Mask = 61440;
    const enmRoleSetting_NameColor_Rank = 4096;
    const enmRoleSetting_NameColor_Lover = 8192;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoleSetting_None' => self::enmRoleSetting_None,
            'enmRoleSetting_RefusePrivateChat' => self::enmRoleSetting_RefusePrivateChat,
            'enmRoleSetting_RefuseInviteDance' => self::enmRoleSetting_RefuseInviteDance,
            'enmRoleSetting_RefuseAddFriend' => self::enmRoleSetting_RefuseAddFriend,
            'enmRoleSetting_RefuseConfession' => self::enmRoleSetting_RefuseConfession,
            'enmRoleSetting_RefuseGuildInvite' => self::enmRoleSetting_RefuseGuildInvite,
            'enmRoleSetting_NotFly' => self::enmRoleSetting_NotFly,
            'enmRoleSetting_NoSong' => self::enmRoleSetting_NoSong,
            'enmRoleSetting_NoSE' => self::enmRoleSetting_NoSE,
            'enmRoleSetting_NameColor_Mask' => self::enmRoleSetting_NameColor_Mask,
            'enmRoleSetting_NameColor_Rank' => self::enmRoleSetting_NameColor_Rank,
            'enmRoleSetting_NameColor_Lover' => self::enmRoleSetting_NameColor_Lover,
        );
    }
}
}