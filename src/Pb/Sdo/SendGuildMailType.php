<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SendGuildMailType enum
 */
final class SendGuildMailType
{
    const enmSendGuildMailType_Invalid = 0;
    const enmSendGuildMailType_All = 1;
    const enmSendGuildMailType_ByID = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSendGuildMailType_Invalid' => self::enmSendGuildMailType_Invalid,
            'enmSendGuildMailType_All' => self::enmSendGuildMailType_All,
            'enmSendGuildMailType_ByID' => self::enmSendGuildMailType_ByID,
        );
    }
}
}