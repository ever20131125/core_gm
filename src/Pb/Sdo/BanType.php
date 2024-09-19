<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BanType enum
 */
final class BanType
{
    const enmBanType_None = 0;
    const enmBanType_RoleID = 1;
    const enmBanType_Account = 2;
    const enmBanType_Chat = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBanType_None' => self::enmBanType_None,
            'enmBanType_RoleID' => self::enmBanType_RoleID,
            'enmBanType_Account' => self::enmBanType_Account,
            'enmBanType_Chat' => self::enmBanType_Chat,
        );
    }
}
}