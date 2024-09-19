<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChatGroupMemberType enum
 */
final class ChatGroupMemberType
{
    const enmChatGroupMemberType_Normal = 1;
    const enmChatGroupMemberType_Manage = 2;
    const enmChatGroupMemberType_Leader = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmChatGroupMemberType_Normal' => self::enmChatGroupMemberType_Normal,
            'enmChatGroupMemberType_Manage' => self::enmChatGroupMemberType_Manage,
            'enmChatGroupMemberType_Leader' => self::enmChatGroupMemberType_Leader,
        );
    }
}
}