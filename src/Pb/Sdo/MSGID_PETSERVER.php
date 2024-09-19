<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_PETSERVER enum
 */
final class MSGID_PETSERVER
{
    const MSGID_CPES_REQ_CHANGENAME = 6145;
    const MSGID_PESC_RESP_CHANGENAME = 38913;
    const MSGID_CPES_REQ_SMASHEGG = 6146;
    const MSGID_PESC_RESP_SMASHEGG = 38914;
    const MSGID_CPES_REQ_GETSPRITEINFO = 6147;
    const MSGID_PESC_RESP_GETSPRITEINFO = 38915;
    const MSGID_CPES_REQ_FEEDSPRITE = 6148;
    const MSGID_PESC_RESP_FEEDSPRITE = 38916;
    const MSGID_PESC_NOTI_SPRITEINFOCHANGE = 23809;
    const MSGID_CPES_REQ_CARRYSPRITE = 6149;
    const MSGID_PESC_RESP_CARRYSPRITE = 38917;
    const MSGID_CPES_REQ_UPGRADERARITY = 6150;
    const MSGID_PESC_RESP_UPGRADERARITY = 38918;
    const MSGID_CPES_REQ_GETFEEDSTATUS = 6151;
    const MSGID_PESC_RESP_GETFEEDSTATUS = 38919;
    const MSGID_CPES_REQ_CHANGEMEDALSTATUS = 6152;
    const MSGID_PESC_RESP_CHANGEMEDALSTATUS = 38920;
    const MSGID_CPES_REQ_GETCARRIEDSPRITE = 6153;
    const MSGID_PESC_RESP_GETCARRIEDSPRITE = 38921;
    const MSGID_CPES_REQ_CLEARCOLDTIME = 6154;
    const MSGID_PESC_RESP_CLEARCOLDTIME = 38922;
    const MSGID_CPES_REQ_COMPOSITE = 6155;
    const MSGID_PESC_RESP_COMPOSITE = 38923;
    const MSGID_CPES_REQ_ACHIEVEMENT = 6156;
    const MSGID_PESC_RESP_ACHIEVEMENT = 38924;
    const MSGID_CPES_REQ_STARTWORK = 6157;
    const MSGID_PESC_RESP_STARTWORK = 38925;
    const MSGID_CPES_REQ_GETWORKSTATUS = 6158;
    const MSGID_PESC_RESP_GETWORKSTATUS = 38926;
    const MSGID_CPES_REQ_GETWORKREWARD = 6159;
    const MSGID_PESC_RESP_GETWORKREWARD = 38927;
    const MSGID_CPES_REQ_CHANGEHORSESTATUS = 6160;
    const MSGID_PESC_RESP_CHANGEHORSESTATUS = 38928;
    const MSGID_CPES_REQ_CHANGEHOSTTITLE = 6161;
    const MSGID_PESC_RESP_CHANGEHOSTTITLE = 38929;
    const MSGID_PESC_NOTI_SPRITEINFOCHANGEINSCENE = 23810;
    const MSGID_CPES_REQ_GMCOPYSPRITE = 6162;
    const MSGID_PESC_RESP_GMCOPYSPRITE = 38930;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CPES_REQ_CHANGENAME' => self::MSGID_CPES_REQ_CHANGENAME,
            'MSGID_PESC_RESP_CHANGENAME' => self::MSGID_PESC_RESP_CHANGENAME,
            'MSGID_CPES_REQ_SMASHEGG' => self::MSGID_CPES_REQ_SMASHEGG,
            'MSGID_PESC_RESP_SMASHEGG' => self::MSGID_PESC_RESP_SMASHEGG,
            'MSGID_CPES_REQ_GETSPRITEINFO' => self::MSGID_CPES_REQ_GETSPRITEINFO,
            'MSGID_PESC_RESP_GETSPRITEINFO' => self::MSGID_PESC_RESP_GETSPRITEINFO,
            'MSGID_CPES_REQ_FEEDSPRITE' => self::MSGID_CPES_REQ_FEEDSPRITE,
            'MSGID_PESC_RESP_FEEDSPRITE' => self::MSGID_PESC_RESP_FEEDSPRITE,
            'MSGID_PESC_NOTI_SPRITEINFOCHANGE' => self::MSGID_PESC_NOTI_SPRITEINFOCHANGE,
            'MSGID_CPES_REQ_CARRYSPRITE' => self::MSGID_CPES_REQ_CARRYSPRITE,
            'MSGID_PESC_RESP_CARRYSPRITE' => self::MSGID_PESC_RESP_CARRYSPRITE,
            'MSGID_CPES_REQ_UPGRADERARITY' => self::MSGID_CPES_REQ_UPGRADERARITY,
            'MSGID_PESC_RESP_UPGRADERARITY' => self::MSGID_PESC_RESP_UPGRADERARITY,
            'MSGID_CPES_REQ_GETFEEDSTATUS' => self::MSGID_CPES_REQ_GETFEEDSTATUS,
            'MSGID_PESC_RESP_GETFEEDSTATUS' => self::MSGID_PESC_RESP_GETFEEDSTATUS,
            'MSGID_CPES_REQ_CHANGEMEDALSTATUS' => self::MSGID_CPES_REQ_CHANGEMEDALSTATUS,
            'MSGID_PESC_RESP_CHANGEMEDALSTATUS' => self::MSGID_PESC_RESP_CHANGEMEDALSTATUS,
            'MSGID_CPES_REQ_GETCARRIEDSPRITE' => self::MSGID_CPES_REQ_GETCARRIEDSPRITE,
            'MSGID_PESC_RESP_GETCARRIEDSPRITE' => self::MSGID_PESC_RESP_GETCARRIEDSPRITE,
            'MSGID_CPES_REQ_CLEARCOLDTIME' => self::MSGID_CPES_REQ_CLEARCOLDTIME,
            'MSGID_PESC_RESP_CLEARCOLDTIME' => self::MSGID_PESC_RESP_CLEARCOLDTIME,
            'MSGID_CPES_REQ_COMPOSITE' => self::MSGID_CPES_REQ_COMPOSITE,
            'MSGID_PESC_RESP_COMPOSITE' => self::MSGID_PESC_RESP_COMPOSITE,
            'MSGID_CPES_REQ_ACHIEVEMENT' => self::MSGID_CPES_REQ_ACHIEVEMENT,
            'MSGID_PESC_RESP_ACHIEVEMENT' => self::MSGID_PESC_RESP_ACHIEVEMENT,
            'MSGID_CPES_REQ_STARTWORK' => self::MSGID_CPES_REQ_STARTWORK,
            'MSGID_PESC_RESP_STARTWORK' => self::MSGID_PESC_RESP_STARTWORK,
            'MSGID_CPES_REQ_GETWORKSTATUS' => self::MSGID_CPES_REQ_GETWORKSTATUS,
            'MSGID_PESC_RESP_GETWORKSTATUS' => self::MSGID_PESC_RESP_GETWORKSTATUS,
            'MSGID_CPES_REQ_GETWORKREWARD' => self::MSGID_CPES_REQ_GETWORKREWARD,
            'MSGID_PESC_RESP_GETWORKREWARD' => self::MSGID_PESC_RESP_GETWORKREWARD,
            'MSGID_CPES_REQ_CHANGEHORSESTATUS' => self::MSGID_CPES_REQ_CHANGEHORSESTATUS,
            'MSGID_PESC_RESP_CHANGEHORSESTATUS' => self::MSGID_PESC_RESP_CHANGEHORSESTATUS,
            'MSGID_CPES_REQ_CHANGEHOSTTITLE' => self::MSGID_CPES_REQ_CHANGEHOSTTITLE,
            'MSGID_PESC_RESP_CHANGEHOSTTITLE' => self::MSGID_PESC_RESP_CHANGEHOSTTITLE,
            'MSGID_PESC_NOTI_SPRITEINFOCHANGEINSCENE' => self::MSGID_PESC_NOTI_SPRITEINFOCHANGEINSCENE,
            'MSGID_CPES_REQ_GMCOPYSPRITE' => self::MSGID_CPES_REQ_GMCOPYSPRITE,
            'MSGID_PESC_RESP_GMCOPYSPRITE' => self::MSGID_PESC_RESP_GMCOPYSPRITE,
        );
    }
}
}