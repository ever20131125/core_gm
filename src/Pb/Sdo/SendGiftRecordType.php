<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SendGiftRecordType enum
 */
final class SendGiftRecordType
{
    const enmSendGiftRecordType_Send = 0;
    const enmSendGiftRecordType_Recv = 1;
    const enmSendGiftRecordType_All = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSendGiftRecordType_Send' => self::enmSendGiftRecordType_Send,
            'enmSendGiftRecordType_Recv' => self::enmSendGiftRecordType_Recv,
            'enmSendGiftRecordType_All' => self::enmSendGiftRecordType_All,
        );
    }
}
}