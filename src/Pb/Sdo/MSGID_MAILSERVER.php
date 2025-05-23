<?php
/**
 * Auto generated from mailserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_MAILSERVER enum
 */
final class MSGID_MAILSERVER
{
    const MSGID_CMAI_REQ_SENDMAIL = 6913;
    const MSGID_MAIC_RESP_SENDMAIL = 39681;
    const MSGID_CMAI_REQ_GETMAILLIST = 6914;
    const MSGID_MAIC_RESP_GETMAILLIST = 39682;
    const MSGID_CMAI_REQ_GETMAILDETAIL = 6915;
    const MSGID_MAIC_RESP_GETMAILDETAIL = 39683;
    const MSGID_CMAI_REQ_RECEIVEMAIL = 6916;
    const MSGID_MAIC_RESP_RECEIVEMAIL = 39684;
    const MSGID_CMAI_REQ_DELETEMAIL = 6917;
    const MSGID_MAIC_RESP_DELETEMAIL = 39685;
    const MSGID_MAIC_NOTI_MAILUPDATE = 23302;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CMAI_REQ_SENDMAIL' => self::MSGID_CMAI_REQ_SENDMAIL,
            'MSGID_MAIC_RESP_SENDMAIL' => self::MSGID_MAIC_RESP_SENDMAIL,
            'MSGID_CMAI_REQ_GETMAILLIST' => self::MSGID_CMAI_REQ_GETMAILLIST,
            'MSGID_MAIC_RESP_GETMAILLIST' => self::MSGID_MAIC_RESP_GETMAILLIST,
            'MSGID_CMAI_REQ_GETMAILDETAIL' => self::MSGID_CMAI_REQ_GETMAILDETAIL,
            'MSGID_MAIC_RESP_GETMAILDETAIL' => self::MSGID_MAIC_RESP_GETMAILDETAIL,
            'MSGID_CMAI_REQ_RECEIVEMAIL' => self::MSGID_CMAI_REQ_RECEIVEMAIL,
            'MSGID_MAIC_RESP_RECEIVEMAIL' => self::MSGID_MAIC_RESP_RECEIVEMAIL,
            'MSGID_CMAI_REQ_DELETEMAIL' => self::MSGID_CMAI_REQ_DELETEMAIL,
            'MSGID_MAIC_RESP_DELETEMAIL' => self::MSGID_MAIC_RESP_DELETEMAIL,
            'MSGID_MAIC_NOTI_MAILUPDATE' => self::MSGID_MAIC_NOTI_MAILUPDATE,
        );
    }
}
}