<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_ROLEDBSERVER enum
 */
final class MSGID_ROLEDBSERVER
{
    const MSGID_CRDB_REQ_GETROLEINFO = 3073;
    const MSGID_RDBC_RESP_GETROLEINFO = 35841;
    const MSGID_CRDB_REQ_UPDATEROLEINFO = 3074;
    const MSGID_RDBC_RESP_UPDATEROLEINFO = 35842;
    const MSGID_RDBC_NOTI_ROLEINFOUPDATE = 19458;
    const MSGID_CRDB_REQ_GETROLEPIC = 3089;
    const MSGID_RDBC_RESP_GETROLEPIC = 35857;
    const MSGID_CRDB_REQ_ADDROLEPIC = 3090;
    const MSGID_RDBC_RESP_ADDROLEPIC = 35858;
    const MSGID_RDBC_NOTI_ADDROLEPIC = 19474;
    const MSGID_CRDB_REQ_REMOVEROLEPIC = 3091;
    const MSGID_RDBC_RESP_REMOVEROLEPIC = 35859;
    const MSGID_CRDB_REQ_GMUPDATEFILESTATE = 3092;
    const MSGID_RDBC_RESP_GMUPDATEFILESTATE = 35860;
    const MSGID_RDBC_NOTI_UPDATEFILESTATE = 19476;
    const MSGID_CRDB_REQ_BRANCHGUIDE = 3093;
    const MSGID_RDBC_RESP_BRANCHGUIDE = 35861;
    const MSGID_CRDB_REQ_TIPOFF = 3104;
    const MSGID_RDBC_RESP_TIPOFF = 35872;
    const MSGID_CRDB_REQ_GETTIPOFFINFO = 3105;
    const MSGID_RDBC_RESP_GETTIPOFFINFO = 35873;
    const MSGID_CRDB_REQ_GETBETIPOFFLIST = 3106;
    const MSGID_RDBC_RESP_GETBETIPOFFLIST = 35874;
    const MSGID_CRDB_REQ_DEALWITHTIPOFF = 3107;
    const MSGID_RDBC_RESP_DEALWITHTIPOFF = 35875;
    const MSGID_CRDB_REQ_GETTIPOFFLIST = 3108;
    const MSGID_RDBC_RESP_GETTIPOFFLIST = 35876;
    const MSGID_CRDB_REQ_GMCLOSEGUIDE = 3232;
    const MSGID_RDBC_RESP_GMCLOSEGUIDE = 36000;
    const MSGID_CRDB_REQ_GETROLEGMINFO = 3233;
    const MSGID_RDBC_RESP_GETROLEGMINFO = 36001;
    const MSGID_CRDB_REQ_GMRESETROLEWORD = 3234;
    const MSGID_RDBC_RESP_GMRESETROLEWORD = 36002;
    const MSGID_CRDB_REQ_GMRESETROLEHEAD = 3235;
    const MSGID_RDBC_RESP_GMRESETROLEHEAD = 36003;
    const MSGID_CRDB_REQ_GMCLEARROLEREDIS = 3236;
    const MSGID_RDBC_RESP_GMCLEARROLEREDIS = 36004;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CRDB_REQ_GETROLEINFO' => self::MSGID_CRDB_REQ_GETROLEINFO,
            'MSGID_RDBC_RESP_GETROLEINFO' => self::MSGID_RDBC_RESP_GETROLEINFO,
            'MSGID_CRDB_REQ_UPDATEROLEINFO' => self::MSGID_CRDB_REQ_UPDATEROLEINFO,
            'MSGID_RDBC_RESP_UPDATEROLEINFO' => self::MSGID_RDBC_RESP_UPDATEROLEINFO,
            'MSGID_RDBC_NOTI_ROLEINFOUPDATE' => self::MSGID_RDBC_NOTI_ROLEINFOUPDATE,
            'MSGID_CRDB_REQ_GETROLEPIC' => self::MSGID_CRDB_REQ_GETROLEPIC,
            'MSGID_RDBC_RESP_GETROLEPIC' => self::MSGID_RDBC_RESP_GETROLEPIC,
            'MSGID_CRDB_REQ_ADDROLEPIC' => self::MSGID_CRDB_REQ_ADDROLEPIC,
            'MSGID_RDBC_RESP_ADDROLEPIC' => self::MSGID_RDBC_RESP_ADDROLEPIC,
            'MSGID_RDBC_NOTI_ADDROLEPIC' => self::MSGID_RDBC_NOTI_ADDROLEPIC,
            'MSGID_CRDB_REQ_REMOVEROLEPIC' => self::MSGID_CRDB_REQ_REMOVEROLEPIC,
            'MSGID_RDBC_RESP_REMOVEROLEPIC' => self::MSGID_RDBC_RESP_REMOVEROLEPIC,
            'MSGID_CRDB_REQ_GMUPDATEFILESTATE' => self::MSGID_CRDB_REQ_GMUPDATEFILESTATE,
            'MSGID_RDBC_RESP_GMUPDATEFILESTATE' => self::MSGID_RDBC_RESP_GMUPDATEFILESTATE,
            'MSGID_RDBC_NOTI_UPDATEFILESTATE' => self::MSGID_RDBC_NOTI_UPDATEFILESTATE,
            'MSGID_CRDB_REQ_BRANCHGUIDE' => self::MSGID_CRDB_REQ_BRANCHGUIDE,
            'MSGID_RDBC_RESP_BRANCHGUIDE' => self::MSGID_RDBC_RESP_BRANCHGUIDE,
            'MSGID_CRDB_REQ_TIPOFF' => self::MSGID_CRDB_REQ_TIPOFF,
            'MSGID_RDBC_RESP_TIPOFF' => self::MSGID_RDBC_RESP_TIPOFF,
            'MSGID_CRDB_REQ_GETTIPOFFINFO' => self::MSGID_CRDB_REQ_GETTIPOFFINFO,
            'MSGID_RDBC_RESP_GETTIPOFFINFO' => self::MSGID_RDBC_RESP_GETTIPOFFINFO,
            'MSGID_CRDB_REQ_GETBETIPOFFLIST' => self::MSGID_CRDB_REQ_GETBETIPOFFLIST,
            'MSGID_RDBC_RESP_GETBETIPOFFLIST' => self::MSGID_RDBC_RESP_GETBETIPOFFLIST,
            'MSGID_CRDB_REQ_DEALWITHTIPOFF' => self::MSGID_CRDB_REQ_DEALWITHTIPOFF,
            'MSGID_RDBC_RESP_DEALWITHTIPOFF' => self::MSGID_RDBC_RESP_DEALWITHTIPOFF,
            'MSGID_CRDB_REQ_GETTIPOFFLIST' => self::MSGID_CRDB_REQ_GETTIPOFFLIST,
            'MSGID_RDBC_RESP_GETTIPOFFLIST' => self::MSGID_RDBC_RESP_GETTIPOFFLIST,
            'MSGID_CRDB_REQ_GMCLOSEGUIDE' => self::MSGID_CRDB_REQ_GMCLOSEGUIDE,
            'MSGID_RDBC_RESP_GMCLOSEGUIDE' => self::MSGID_RDBC_RESP_GMCLOSEGUIDE,
            'MSGID_CRDB_REQ_GETROLEGMINFO' => self::MSGID_CRDB_REQ_GETROLEGMINFO,
            'MSGID_RDBC_RESP_GETROLEGMINFO' => self::MSGID_RDBC_RESP_GETROLEGMINFO,
            'MSGID_CRDB_REQ_GMRESETROLEWORD' => self::MSGID_CRDB_REQ_GMRESETROLEWORD,
            'MSGID_RDBC_RESP_GMRESETROLEWORD' => self::MSGID_RDBC_RESP_GMRESETROLEWORD,
            'MSGID_CRDB_REQ_GMRESETROLEHEAD' => self::MSGID_CRDB_REQ_GMRESETROLEHEAD,
            'MSGID_RDBC_RESP_GMRESETROLEHEAD' => self::MSGID_RDBC_RESP_GMRESETROLEHEAD,
            'MSGID_CRDB_REQ_GMCLEARROLEREDIS' => self::MSGID_CRDB_REQ_GMCLEARROLEREDIS,
            'MSGID_RDBC_RESP_GMCLEARROLEREDIS' => self::MSGID_RDBC_RESP_GMCLEARROLEREDIS,
        );
    }
}
}