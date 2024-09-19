<?php
/**
 * Auto generated from authserver.proto at 2021-12-31 01:50:41
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_AUTHSERVER enum
 */
final class MSGID_AUTHSERVER
{
    const MSGID_CAUS_REQ_GETAUTHINFO = 257;
    const MSGID_AUSC_RESP_GETAUTHINFO = 33025;
    const MSGID_CAUS_REQ_PUSHAUTHINFO = 258;
    const MSGID_AUSC_RESP_PUSHAUTHINFO = 33026;
    const MSGID_CAUS_REQ_GENERATELOGINSESSION = 259;
    const MSGID_AUSC_RESP_GENERATELOGINSESSION = 33027;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CAUS_REQ_GETAUTHINFO' => self::MSGID_CAUS_REQ_GETAUTHINFO,
            'MSGID_AUSC_RESP_GETAUTHINFO' => self::MSGID_AUSC_RESP_GETAUTHINFO,
            'MSGID_CAUS_REQ_PUSHAUTHINFO' => self::MSGID_CAUS_REQ_PUSHAUTHINFO,
            'MSGID_AUSC_RESP_PUSHAUTHINFO' => self::MSGID_AUSC_RESP_PUSHAUTHINFO,
            'MSGID_CAUS_REQ_GENERATELOGINSESSION' => self::MSGID_CAUS_REQ_GENERATELOGINSESSION,
            'MSGID_AUSC_RESP_GENERATELOGINSESSION' => self::MSGID_AUSC_RESP_GENERATELOGINSESSION,
        );
    }
}
}