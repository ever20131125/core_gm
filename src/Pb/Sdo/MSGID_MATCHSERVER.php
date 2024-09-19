<?php
/**
 * Auto generated from matchserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_MATCHSERVER enum
 */
final class MSGID_MATCHSERVER
{
    const MSGID_CMAC_REQ_MATCH = 7425;
    const MSGID_MACC_RESP_MATCH = 40193;
    const MSGID_MACC_NOTI_MATCH = 23809;
    const MSGID_CMAC_REQ_EXITTEAM = 7426;
    const MSGID_MACC_RESP_EXITTEAM = 40194;
    const MSGID_CMAC_REQ_CANCELMATCH = 7427;
    const MSGID_MACC_RESP_CANCELMATCH = 40195;
    const MSGID_MACC_NOTI_MATCHCANCEL = 23811;
    const MSGID_MACC_NOTI_MATCHSUCCESS = 23812;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CMAC_REQ_MATCH' => self::MSGID_CMAC_REQ_MATCH,
            'MSGID_MACC_RESP_MATCH' => self::MSGID_MACC_RESP_MATCH,
            'MSGID_MACC_NOTI_MATCH' => self::MSGID_MACC_NOTI_MATCH,
            'MSGID_CMAC_REQ_EXITTEAM' => self::MSGID_CMAC_REQ_EXITTEAM,
            'MSGID_MACC_RESP_EXITTEAM' => self::MSGID_MACC_RESP_EXITTEAM,
            'MSGID_CMAC_REQ_CANCELMATCH' => self::MSGID_CMAC_REQ_CANCELMATCH,
            'MSGID_MACC_RESP_CANCELMATCH' => self::MSGID_MACC_RESP_CANCELMATCH,
            'MSGID_MACC_NOTI_MATCHCANCEL' => self::MSGID_MACC_NOTI_MATCHCANCEL,
            'MSGID_MACC_NOTI_MATCHSUCCESS' => self::MSGID_MACC_NOTI_MATCHSUCCESS,
        );
    }
}
}