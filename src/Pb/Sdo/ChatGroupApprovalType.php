<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChatGroupApprovalType enum
 */
final class ChatGroupApprovalType
{
    const enmChatGroupApprovalType_Public = 1;
    const enmChatGroupApprovalType_Verify = 2;
    const enmChatGroupApprovalType_Search = 3;
    const enmChatGroupApprovalType_Private = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmChatGroupApprovalType_Public' => self::enmChatGroupApprovalType_Public,
            'enmChatGroupApprovalType_Verify' => self::enmChatGroupApprovalType_Verify,
            'enmChatGroupApprovalType_Search' => self::enmChatGroupApprovalType_Search,
            'enmChatGroupApprovalType_Private' => self::enmChatGroupApprovalType_Private,
        );
    }
}
}