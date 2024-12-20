<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_RECORDSERVER enum
 */
final class MSGID_RECORDSERVER
{
    const MSGID_CRES_REQ_GETITEMBOOK = 7169;
    const MSGID_RESC_RESP_GETITEMBOOK = 39937;
    const MSGID_RESC_NOTI_ITEMBOOKUPDATE = 23553;
    const MSGID_CRES_REQ_FAVOURITEM = 7170;
    const MSGID_RESC_RESP_FAVOURITEM = 39938;
    const MSGID_CRES_REQ_CANCELFAVOURITEM = 7171;
    const MSGID_RESC_RESP_CANCELFAVOURITEM = 39939;
    const MSGID_CRES_REQ_GETITEMFAVOUR = 7172;
    const MSGID_RESC_RESP_GETITEMFAVOUR = 39940;
    const MSGID_CRES_REQ_GETTITLELIST = 7173;
    const MSGID_RESC_RESP_GETTITLELIST = 39941;
    const MSGID_CRES_REQ_ACTION = 7184;
    const MSGID_RESC_RESP_ACTION = 39952;
    const MSGID_RESC_NOTI_ACTION = 23568;
    const MSGID_CRES_REQ_GETACTIONLIST = 7185;
    const MSGID_RESC_RESP_GETACTIONLIST = 39953;
    const MSGID_CRES_REQ_GETACTIONINFO = 7186;
    const MSGID_RESC_RESP_GETACTIONINFO = 39954;
    const MSGID_CRES_REQ_GETPRIZEINFO = 7200;
    const MSGID_RESC_RESP_GETPRIZEINFO = 39968;
    const MSGID_RESC_NOTI_PRIZEINFOUPDATE = 23584;
    const MSGID_CRES_REQ_RECEIVEPRIZE = 7201;
    const MSGID_RESC_RESP_RECEIVEPRIZE = 39969;
    const MSGID_CRES_REQ_QUALIFYINFO = 7216;
    const MSGID_RESC_RESP_QUALIFYINFO = 39984;
    const MSGID_RESC_NOTI_QUALIFYINFO = 23600;
    const MSGID_CRES_REQ_QUALIFYMUSIC = 7217;
    const MSGID_RESC_RESP_QUALIFYMUSIC = 39985;
    const MSGID_CRES_REQ_ADDQUALIFYPOINT = 7218;
    const MSGID_RESC_RESP_ADDQUALIFYPOINT = 39986;
    const MSGID_CRES_REQ_ADDPROFICIENCY = 7219;
    const MSGID_RESC_RESP_ADDPROFICIENCY = 39987;
    const MSGID_RESC_NOTI_PROFICIENCYUPDATE = 23603;
    const MSGID_CRES_REQ_QUALIFYSTATISTIC = 7220;
    const MSGID_RESC_RESP_QUALIFYSTATISTIC = 39988;
    const MSGID_CRES_REQ_QUALIFYHISTORY = 7221;
    const MSGID_RESC_RESP_QUALIFYHISTORY = 39989;
    const MSGID_CRES_REQ_DANCEHISTORY = 7223;
    const MSGID_RESC_RESP_DANCEHISTORY = 39991;
    const MSGID_CRES_REQ_GETMATCHDETAILLIST = 7224;
    const MSGID_RESC_RESP_GETMATCHDETAILLIST = 39992;
    const MSGID_CRES_REQ_FAVDANCEHISTORY = 7225;
    const MSGID_RESC_RESP_FAVDANCEHISTORY = 39993;
    const MSGID_CRES_REQ_GETDANCEFAVHISTORY = 7226;
    const MSGID_RESC_RESP_GETDANCEFAVHISTORY = 39994;
    const MSGID_CRES_REQ_REMOVEDANCEFAVHISTORY = 7227;
    const MSGID_RESC_RESP_REMOVEDANCEFAVHISTORY = 39995;
    const MSGID_CRES_REQ_GETMUSICLIST = 7232;
    const MSGID_RESC_RESP_GETMUSICLIST = 40000;
    const MSGID_RESC_NOTI_UPDATEMUSICLIST = 23616;
    const MSGID_CRES_REQ_LIKEMUSIC = 7233;
    const MSGID_RESC_RESP_LIKEMUSIC = 40001;
    const MSGID_RESC_NOTI_MUSICCUPINFO = 23106;
    const MSGID_CRES_REQ_GMQUALIFYINFO = 7328;
    const MSGID_RESC_RESP_GMQUALIFYINFO = 40096;
    const MSGID_CRES_REQ_GMSETQUALIFYINFO = 7329;
    const MSGID_RESC_RESP_GMSETQUALIFYINFO = 40097;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CRES_REQ_GETITEMBOOK' => self::MSGID_CRES_REQ_GETITEMBOOK,
            'MSGID_RESC_RESP_GETITEMBOOK' => self::MSGID_RESC_RESP_GETITEMBOOK,
            'MSGID_RESC_NOTI_ITEMBOOKUPDATE' => self::MSGID_RESC_NOTI_ITEMBOOKUPDATE,
            'MSGID_CRES_REQ_FAVOURITEM' => self::MSGID_CRES_REQ_FAVOURITEM,
            'MSGID_RESC_RESP_FAVOURITEM' => self::MSGID_RESC_RESP_FAVOURITEM,
            'MSGID_CRES_REQ_CANCELFAVOURITEM' => self::MSGID_CRES_REQ_CANCELFAVOURITEM,
            'MSGID_RESC_RESP_CANCELFAVOURITEM' => self::MSGID_RESC_RESP_CANCELFAVOURITEM,
            'MSGID_CRES_REQ_GETITEMFAVOUR' => self::MSGID_CRES_REQ_GETITEMFAVOUR,
            'MSGID_RESC_RESP_GETITEMFAVOUR' => self::MSGID_RESC_RESP_GETITEMFAVOUR,
            'MSGID_CRES_REQ_GETTITLELIST' => self::MSGID_CRES_REQ_GETTITLELIST,
            'MSGID_RESC_RESP_GETTITLELIST' => self::MSGID_RESC_RESP_GETTITLELIST,
            'MSGID_CRES_REQ_ACTION' => self::MSGID_CRES_REQ_ACTION,
            'MSGID_RESC_RESP_ACTION' => self::MSGID_RESC_RESP_ACTION,
            'MSGID_RESC_NOTI_ACTION' => self::MSGID_RESC_NOTI_ACTION,
            'MSGID_CRES_REQ_GETACTIONLIST' => self::MSGID_CRES_REQ_GETACTIONLIST,
            'MSGID_RESC_RESP_GETACTIONLIST' => self::MSGID_RESC_RESP_GETACTIONLIST,
            'MSGID_CRES_REQ_GETACTIONINFO' => self::MSGID_CRES_REQ_GETACTIONINFO,
            'MSGID_RESC_RESP_GETACTIONINFO' => self::MSGID_RESC_RESP_GETACTIONINFO,
            'MSGID_CRES_REQ_GETPRIZEINFO' => self::MSGID_CRES_REQ_GETPRIZEINFO,
            'MSGID_RESC_RESP_GETPRIZEINFO' => self::MSGID_RESC_RESP_GETPRIZEINFO,
            'MSGID_RESC_NOTI_PRIZEINFOUPDATE' => self::MSGID_RESC_NOTI_PRIZEINFOUPDATE,
            'MSGID_CRES_REQ_RECEIVEPRIZE' => self::MSGID_CRES_REQ_RECEIVEPRIZE,
            'MSGID_RESC_RESP_RECEIVEPRIZE' => self::MSGID_RESC_RESP_RECEIVEPRIZE,
            'MSGID_CRES_REQ_QUALIFYINFO' => self::MSGID_CRES_REQ_QUALIFYINFO,
            'MSGID_RESC_RESP_QUALIFYINFO' => self::MSGID_RESC_RESP_QUALIFYINFO,
            'MSGID_RESC_NOTI_QUALIFYINFO' => self::MSGID_RESC_NOTI_QUALIFYINFO,
            'MSGID_CRES_REQ_QUALIFYMUSIC' => self::MSGID_CRES_REQ_QUALIFYMUSIC,
            'MSGID_RESC_RESP_QUALIFYMUSIC' => self::MSGID_RESC_RESP_QUALIFYMUSIC,
            'MSGID_CRES_REQ_ADDQUALIFYPOINT' => self::MSGID_CRES_REQ_ADDQUALIFYPOINT,
            'MSGID_RESC_RESP_ADDQUALIFYPOINT' => self::MSGID_RESC_RESP_ADDQUALIFYPOINT,
            'MSGID_CRES_REQ_ADDPROFICIENCY' => self::MSGID_CRES_REQ_ADDPROFICIENCY,
            'MSGID_RESC_RESP_ADDPROFICIENCY' => self::MSGID_RESC_RESP_ADDPROFICIENCY,
            'MSGID_RESC_NOTI_PROFICIENCYUPDATE' => self::MSGID_RESC_NOTI_PROFICIENCYUPDATE,
            'MSGID_CRES_REQ_QUALIFYSTATISTIC' => self::MSGID_CRES_REQ_QUALIFYSTATISTIC,
            'MSGID_RESC_RESP_QUALIFYSTATISTIC' => self::MSGID_RESC_RESP_QUALIFYSTATISTIC,
            'MSGID_CRES_REQ_QUALIFYHISTORY' => self::MSGID_CRES_REQ_QUALIFYHISTORY,
            'MSGID_RESC_RESP_QUALIFYHISTORY' => self::MSGID_RESC_RESP_QUALIFYHISTORY,
            'MSGID_CRES_REQ_DANCEHISTORY' => self::MSGID_CRES_REQ_DANCEHISTORY,
            'MSGID_RESC_RESP_DANCEHISTORY' => self::MSGID_RESC_RESP_DANCEHISTORY,
            'MSGID_CRES_REQ_GETMATCHDETAILLIST' => self::MSGID_CRES_REQ_GETMATCHDETAILLIST,
            'MSGID_RESC_RESP_GETMATCHDETAILLIST' => self::MSGID_RESC_RESP_GETMATCHDETAILLIST,
            'MSGID_CRES_REQ_FAVDANCEHISTORY' => self::MSGID_CRES_REQ_FAVDANCEHISTORY,
            'MSGID_RESC_RESP_FAVDANCEHISTORY' => self::MSGID_RESC_RESP_FAVDANCEHISTORY,
            'MSGID_CRES_REQ_GETDANCEFAVHISTORY' => self::MSGID_CRES_REQ_GETDANCEFAVHISTORY,
            'MSGID_RESC_RESP_GETDANCEFAVHISTORY' => self::MSGID_RESC_RESP_GETDANCEFAVHISTORY,
            'MSGID_CRES_REQ_REMOVEDANCEFAVHISTORY' => self::MSGID_CRES_REQ_REMOVEDANCEFAVHISTORY,
            'MSGID_RESC_RESP_REMOVEDANCEFAVHISTORY' => self::MSGID_RESC_RESP_REMOVEDANCEFAVHISTORY,
            'MSGID_CRES_REQ_GETMUSICLIST' => self::MSGID_CRES_REQ_GETMUSICLIST,
            'MSGID_RESC_RESP_GETMUSICLIST' => self::MSGID_RESC_RESP_GETMUSICLIST,
            'MSGID_RESC_NOTI_UPDATEMUSICLIST' => self::MSGID_RESC_NOTI_UPDATEMUSICLIST,
            'MSGID_CRES_REQ_LIKEMUSIC' => self::MSGID_CRES_REQ_LIKEMUSIC,
            'MSGID_RESC_RESP_LIKEMUSIC' => self::MSGID_RESC_RESP_LIKEMUSIC,
            'MSGID_RESC_NOTI_MUSICCUPINFO' => self::MSGID_RESC_NOTI_MUSICCUPINFO,
            'MSGID_CRES_REQ_GMQUALIFYINFO' => self::MSGID_CRES_REQ_GMQUALIFYINFO,
            'MSGID_RESC_RESP_GMQUALIFYINFO' => self::MSGID_RESC_RESP_GMQUALIFYINFO,
            'MSGID_CRES_REQ_GMSETQUALIFYINFO' => self::MSGID_CRES_REQ_GMSETQUALIFYINFO,
            'MSGID_RESC_RESP_GMSETQUALIFYINFO' => self::MSGID_RESC_RESP_GMSETQUALIFYINFO,
        );
    }
}
}