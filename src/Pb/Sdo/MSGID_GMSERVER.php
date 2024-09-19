<?php
/**
 * Auto generated from gmserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_GMSERVER enum
 */
final class MSGID_GMSERVER
{
    const MSGID_CGMS_REQ_SERVERCONTROL = 1025;
    const MSGID_GMSC_RESP_SERVERCONTROL = 33793;
    const MSGID_CGMS_REQ_VERSION = 1026;
    const MSGID_GMSC_RESP_VERSION = 33794;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CGMS_REQ_SERVERCONTROL' => self::MSGID_CGMS_REQ_SERVERCONTROL,
            'MSGID_GMSC_RESP_SERVERCONTROL' => self::MSGID_GMSC_RESP_SERVERCONTROL,
            'MSGID_CGMS_REQ_VERSION' => self::MSGID_CGMS_REQ_VERSION,
            'MSGID_GMSC_RESP_VERSION' => self::MSGID_GMSC_RESP_VERSION,
        );
    }
}
}