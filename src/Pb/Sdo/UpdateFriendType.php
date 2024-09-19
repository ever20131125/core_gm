<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UpdateFriendType enum
 */
final class UpdateFriendType
{
    const enmUpdateFriendType_None = 0;
    const enmUpdateFriendType_AccountID = 1;
    const enmUpdateFriendType_FriendName = 2;
    const enmUpdateFriendType_Gender = 4;
    const enmUpdateFriendType_Level = 8;
    const enmUpdateFriendType_RoleFlag = 16;
    const enmUpdateFriendType_Birthday = 32;
    const enmUpdateFriendType_Address = 64;
    const enmUpdateFriendType_Label = 128;
    const enmUpdateFriendType_FriendType = 256;
    const enmUpdateFriendType_FriendshipLevel = 512;
    const enmUpdateFriendType_FriendNickName = 1024;
    const enmUpdateFriendType_GroupID = 2048;
    const enmUpdateFriendType_Establish = 4096;
    const enmUpdateFriendType_RelativesID = 8192;
    const enmUpdateFriendType_RelativesName = 16384;
    const enmUpdateFriendType_Rank = 32768;
    const enmUpdateFriendType_Liking = 65536;
    const enmUpdateFriendType_PicType = 131072;
    const enmUpdateFriendType_PicID = 262144;
    const enmUpdateFriendType_Proficiency = 524288;
    const enmUpdateFriendType_Social = 1048576;
    const enmUpdateFriendType_Pop = 2097152;
    const enmUpdateFriendType_LastLogoutTime = 4194304;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUpdateFriendType_None' => self::enmUpdateFriendType_None,
            'enmUpdateFriendType_AccountID' => self::enmUpdateFriendType_AccountID,
            'enmUpdateFriendType_FriendName' => self::enmUpdateFriendType_FriendName,
            'enmUpdateFriendType_Gender' => self::enmUpdateFriendType_Gender,
            'enmUpdateFriendType_Level' => self::enmUpdateFriendType_Level,
            'enmUpdateFriendType_RoleFlag' => self::enmUpdateFriendType_RoleFlag,
            'enmUpdateFriendType_Birthday' => self::enmUpdateFriendType_Birthday,
            'enmUpdateFriendType_Address' => self::enmUpdateFriendType_Address,
            'enmUpdateFriendType_Label' => self::enmUpdateFriendType_Label,
            'enmUpdateFriendType_FriendType' => self::enmUpdateFriendType_FriendType,
            'enmUpdateFriendType_FriendshipLevel' => self::enmUpdateFriendType_FriendshipLevel,
            'enmUpdateFriendType_FriendNickName' => self::enmUpdateFriendType_FriendNickName,
            'enmUpdateFriendType_GroupID' => self::enmUpdateFriendType_GroupID,
            'enmUpdateFriendType_Establish' => self::enmUpdateFriendType_Establish,
            'enmUpdateFriendType_RelativesID' => self::enmUpdateFriendType_RelativesID,
            'enmUpdateFriendType_RelativesName' => self::enmUpdateFriendType_RelativesName,
            'enmUpdateFriendType_Rank' => self::enmUpdateFriendType_Rank,
            'enmUpdateFriendType_Liking' => self::enmUpdateFriendType_Liking,
            'enmUpdateFriendType_PicType' => self::enmUpdateFriendType_PicType,
            'enmUpdateFriendType_PicID' => self::enmUpdateFriendType_PicID,
            'enmUpdateFriendType_Proficiency' => self::enmUpdateFriendType_Proficiency,
            'enmUpdateFriendType_Social' => self::enmUpdateFriendType_Social,
            'enmUpdateFriendType_Pop' => self::enmUpdateFriendType_Pop,
            'enmUpdateFriendType_LastLogoutTime' => self::enmUpdateFriendType_LastLogoutTime,
        );
    }
}
}