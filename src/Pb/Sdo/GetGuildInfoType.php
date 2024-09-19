<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GetGuildInfoType enum
 */
final class GetGuildInfoType
{
    const enmGetGuildInfo_Invalid = 0;
    const enmGetGuildInfo_ByIndex = 1;
    const enmGetGuildInfo_ByID = 2;
    const enmGetGuildInfo_Recommend = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGetGuildInfo_Invalid' => self::enmGetGuildInfo_Invalid,
            'enmGetGuildInfo_ByIndex' => self::enmGetGuildInfo_ByIndex,
            'enmGetGuildInfo_ByID' => self::enmGetGuildInfo_ByID,
            'enmGetGuildInfo_Recommend' => self::enmGetGuildInfo_Recommend,
        );
    }
}
}