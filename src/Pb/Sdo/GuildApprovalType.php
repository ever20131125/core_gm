<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildApprovalType enum
 */
final class GuildApprovalType
{
    const enmApprovalType_Invalid = 0;
    const enmApprovalType_Review = 1;
    const enmApprovalType_Reject = 2;
    const enmApprovalType_Level = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmApprovalType_Invalid' => self::enmApprovalType_Invalid,
            'enmApprovalType_Review' => self::enmApprovalType_Review,
            'enmApprovalType_Reject' => self::enmApprovalType_Reject,
            'enmApprovalType_Level' => self::enmApprovalType_Level,
        );
    }
}
}