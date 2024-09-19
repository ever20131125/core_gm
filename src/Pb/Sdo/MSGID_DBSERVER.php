<?php
/**
 * Auto generated from dbserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_DBSERVER enum
 */
final class MSGID_DBSERVER
{
    const MSGID_CDBS_REQ_SAVEDBDATA = 7937;
    const MSGID_DBSC_RESP_SAVEDBDATA = 40705;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CDBS_REQ_SAVEDBDATA' => self::MSGID_CDBS_REQ_SAVEDBDATA,
            'MSGID_DBSC_RESP_SAVEDBDATA' => self::MSGID_DBSC_RESP_SAVEDBDATA,
        );
    }
}
}