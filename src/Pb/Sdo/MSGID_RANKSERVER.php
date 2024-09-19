<?php
/**
 * Auto generated from rankserver.proto at 2022-08-17 12:02:07
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_RANKSERVER enum
 */
final class MSGID_RANKSERVER
{
    const MSGID_CRAS_REQ_GETRANK = 3841;
    const MSGID_RASC_RESP_GETRANK = 36609;
    const MSGID_CRAS_REQ_GETALLRANK = 3842;
    const MSGID_RASC_RESP_GETALLRANK = 36610;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CRAS_REQ_GETRANK' => self::MSGID_CRAS_REQ_GETRANK,
            'MSGID_RASC_RESP_GETRANK' => self::MSGID_RASC_RESP_GETRANK,
            'MSGID_CRAS_REQ_GETALLRANK' => self::MSGID_CRAS_REQ_GETALLRANK,
            'MSGID_RASC_RESP_GETALLRANK' => self::MSGID_RASC_RESP_GETALLRANK,
        );
    }
}
}