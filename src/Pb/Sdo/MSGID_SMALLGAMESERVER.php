<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MSGID_SMALLGAMESERVER enum
 */
final class MSGID_SMALLGAMESERVER
{
    const MSGID_CSGS_REQ_CREATETEAM = 5120;
    const MSGID_SGSC_RESP_CREATETEAM = 37888;
    const MSGID_CSGS_REQ_LEAVETEAM = 5121;
    const MSGID_SGSC_RESP_LEAVETEAM = 37889;
    const MSGID_SGSC_NOTI_LEAVETEAM = 21505;
    const MSGID_CSGS_REQ_INVITETEAM = 5122;
    const MSGID_SGSC_RESP_INVITETEAM = 37890;
    const MSGID_SGSC_NOTI_INVITETEAM = 21506;
    const MSGID_CSGS_REQ_ANSWERINVITETEAM = 5123;
    const MSGID_SGSC_RESP_ANSWERINVITETEAM = 37891;
    const MSGID_SGSC_NOTI_JOINTEAM = 21507;
    const MSGID_CSGS_REQ_KICKTEAM = 5137;
    const MSGID_SGSC_RESP_KICKTEAM = 37905;
    const MSGID_CSGS_REQ_ASKCHANGEPOS = 5124;
    const MSGID_SGSC_RESP_ASKCHANGEPOS = 37892;
    const MSGID_SGSC_NOTI_ASKCHANGEPOS = 21508;
    const MSGID_CSGS_REQ_ANSWERCHANGEPOS = 5125;
    const MSGID_SGSC_RESP_ANSWERCHANGEPOS = 37893;
    const MSGID_SGSC_NOTI_CHANGEPOS = 21509;
    const MSGID_CSGS_REQ_SETMATCHPARAM = 5126;
    const MSGID_SGSC_RESP_SETMATCHPARAM = 37894;
    const MSGID_SGSC_NOTI_SETMATCHPARAM = 21510;
    const MSGID_CSGS_REQ_MATCH = 5127;
    const MSGID_SGSC_RESP_MATCH = 37895;
    const MSGID_SGSC_NOTI_MATCH = 21511;
    const MSGID_CSGS_REQ_CANCELMATCH = 5128;
    const MSGID_SGSC_RESP_CANCELMATCH = 37896;
    const MSGID_SGSC_NOTI_CANCELMATCH = 21512;
    const MSGID_SGSC_NOTI_MATCHSUCCESS = 21513;
    const MSGID_SGSC_NOTI_STARTBANMUSIC = 21514;
    const MSGID_CSGS_REQ_BANMUSIC = 5131;
    const MSGID_SGSC_RESP_BANMUSIC = 37899;
    const MSGID_SGSC_NOTI_BANMUSIC = 21515;
    const MSGID_SGSC_NOTI_MUSICSELECTED = 21516;
    const MSGID_CSGS_REQ_SELECTSKILL = 5133;
    const MSGID_SGSC_RESP_SELECTSKILL = 37901;
    const MSGID_CSGS_REQ_SELECTFIGHTPOS = 5134;
    const MSGID_SGSC_RESP_SELECTFIGHTPOS = 37902;
    const MSGID_SGSC_NOTI_SELECTFIGHTPOS = 21518;
    const MSGID_CSGS_REQ_STARTAMUSEMENT = 5136;
    const MSGID_SGSC_RESP_STARTAMUSEMENT = 37904;
    const MSGID_SGSC_NOTI_STARTAMUSEMENT = 21520;
    const MSGID_SGSC_NOTI_AMUSEMENTPLAY = 21521;
    const MSGID_CSGS_REQ_EXITAMUSEMENT = 5139;
    const MSGID_SGSC_RESP_EXITAMUSEMENT = 37907;
    const MSGID_CSGS_REQ_RENEWAMUSEMENT = 5140;
    const MSGID_SGSC_RESP_RENEWAMUSEMENT = 37908;
    const MSGID_SGSC_NOTI_RENEWAMUSEMENT = 21524;
    const MSGID_CSGS_REQ_ENTERINSTANCEROOM = 5141;
    const MSGID_SGSC_RESP_ENTERINSTANCEROOM = 37909;
    const MSGID_SGSC_NOTI_ENTERINSTANCEROOM = 21525;
    const MSGID_CSGS_REQ_GETINSTANCEROOMLIST = 5142;
    const MSGID_SGSC_RESP_GETINSTANCEROOMLIST = 37910;
    const MSGID_CSGS_REQ_EXITINSTANCEROOM = 5143;
    const MSGID_SGSC_RESP_EXITINSTANCEROOM = 37911;
    const MSGID_SGSC_NOTI_EXITINSTANCEROOM = 21527;
    const MSGID_CSGS_REQ_DOACTION = 5144;
    const MSGID_SGSC_RESP_DOACTION = 37912;
    const MSGID_SGSC_NOTI_DOACTION = 21528;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MSGID_CSGS_REQ_CREATETEAM' => self::MSGID_CSGS_REQ_CREATETEAM,
            'MSGID_SGSC_RESP_CREATETEAM' => self::MSGID_SGSC_RESP_CREATETEAM,
            'MSGID_CSGS_REQ_LEAVETEAM' => self::MSGID_CSGS_REQ_LEAVETEAM,
            'MSGID_SGSC_RESP_LEAVETEAM' => self::MSGID_SGSC_RESP_LEAVETEAM,
            'MSGID_SGSC_NOTI_LEAVETEAM' => self::MSGID_SGSC_NOTI_LEAVETEAM,
            'MSGID_CSGS_REQ_INVITETEAM' => self::MSGID_CSGS_REQ_INVITETEAM,
            'MSGID_SGSC_RESP_INVITETEAM' => self::MSGID_SGSC_RESP_INVITETEAM,
            'MSGID_SGSC_NOTI_INVITETEAM' => self::MSGID_SGSC_NOTI_INVITETEAM,
            'MSGID_CSGS_REQ_ANSWERINVITETEAM' => self::MSGID_CSGS_REQ_ANSWERINVITETEAM,
            'MSGID_SGSC_RESP_ANSWERINVITETEAM' => self::MSGID_SGSC_RESP_ANSWERINVITETEAM,
            'MSGID_SGSC_NOTI_JOINTEAM' => self::MSGID_SGSC_NOTI_JOINTEAM,
            'MSGID_CSGS_REQ_KICKTEAM' => self::MSGID_CSGS_REQ_KICKTEAM,
            'MSGID_SGSC_RESP_KICKTEAM' => self::MSGID_SGSC_RESP_KICKTEAM,
            'MSGID_CSGS_REQ_ASKCHANGEPOS' => self::MSGID_CSGS_REQ_ASKCHANGEPOS,
            'MSGID_SGSC_RESP_ASKCHANGEPOS' => self::MSGID_SGSC_RESP_ASKCHANGEPOS,
            'MSGID_SGSC_NOTI_ASKCHANGEPOS' => self::MSGID_SGSC_NOTI_ASKCHANGEPOS,
            'MSGID_CSGS_REQ_ANSWERCHANGEPOS' => self::MSGID_CSGS_REQ_ANSWERCHANGEPOS,
            'MSGID_SGSC_RESP_ANSWERCHANGEPOS' => self::MSGID_SGSC_RESP_ANSWERCHANGEPOS,
            'MSGID_SGSC_NOTI_CHANGEPOS' => self::MSGID_SGSC_NOTI_CHANGEPOS,
            'MSGID_CSGS_REQ_SETMATCHPARAM' => self::MSGID_CSGS_REQ_SETMATCHPARAM,
            'MSGID_SGSC_RESP_SETMATCHPARAM' => self::MSGID_SGSC_RESP_SETMATCHPARAM,
            'MSGID_SGSC_NOTI_SETMATCHPARAM' => self::MSGID_SGSC_NOTI_SETMATCHPARAM,
            'MSGID_CSGS_REQ_MATCH' => self::MSGID_CSGS_REQ_MATCH,
            'MSGID_SGSC_RESP_MATCH' => self::MSGID_SGSC_RESP_MATCH,
            'MSGID_SGSC_NOTI_MATCH' => self::MSGID_SGSC_NOTI_MATCH,
            'MSGID_CSGS_REQ_CANCELMATCH' => self::MSGID_CSGS_REQ_CANCELMATCH,
            'MSGID_SGSC_RESP_CANCELMATCH' => self::MSGID_SGSC_RESP_CANCELMATCH,
            'MSGID_SGSC_NOTI_CANCELMATCH' => self::MSGID_SGSC_NOTI_CANCELMATCH,
            'MSGID_SGSC_NOTI_MATCHSUCCESS' => self::MSGID_SGSC_NOTI_MATCHSUCCESS,
            'MSGID_SGSC_NOTI_STARTBANMUSIC' => self::MSGID_SGSC_NOTI_STARTBANMUSIC,
            'MSGID_CSGS_REQ_BANMUSIC' => self::MSGID_CSGS_REQ_BANMUSIC,
            'MSGID_SGSC_RESP_BANMUSIC' => self::MSGID_SGSC_RESP_BANMUSIC,
            'MSGID_SGSC_NOTI_BANMUSIC' => self::MSGID_SGSC_NOTI_BANMUSIC,
            'MSGID_SGSC_NOTI_MUSICSELECTED' => self::MSGID_SGSC_NOTI_MUSICSELECTED,
            'MSGID_CSGS_REQ_SELECTSKILL' => self::MSGID_CSGS_REQ_SELECTSKILL,
            'MSGID_SGSC_RESP_SELECTSKILL' => self::MSGID_SGSC_RESP_SELECTSKILL,
            'MSGID_CSGS_REQ_SELECTFIGHTPOS' => self::MSGID_CSGS_REQ_SELECTFIGHTPOS,
            'MSGID_SGSC_RESP_SELECTFIGHTPOS' => self::MSGID_SGSC_RESP_SELECTFIGHTPOS,
            'MSGID_SGSC_NOTI_SELECTFIGHTPOS' => self::MSGID_SGSC_NOTI_SELECTFIGHTPOS,
            'MSGID_CSGS_REQ_STARTAMUSEMENT' => self::MSGID_CSGS_REQ_STARTAMUSEMENT,
            'MSGID_SGSC_RESP_STARTAMUSEMENT' => self::MSGID_SGSC_RESP_STARTAMUSEMENT,
            'MSGID_SGSC_NOTI_STARTAMUSEMENT' => self::MSGID_SGSC_NOTI_STARTAMUSEMENT,
            'MSGID_SGSC_NOTI_AMUSEMENTPLAY' => self::MSGID_SGSC_NOTI_AMUSEMENTPLAY,
            'MSGID_CSGS_REQ_EXITAMUSEMENT' => self::MSGID_CSGS_REQ_EXITAMUSEMENT,
            'MSGID_SGSC_RESP_EXITAMUSEMENT' => self::MSGID_SGSC_RESP_EXITAMUSEMENT,
            'MSGID_CSGS_REQ_RENEWAMUSEMENT' => self::MSGID_CSGS_REQ_RENEWAMUSEMENT,
            'MSGID_SGSC_RESP_RENEWAMUSEMENT' => self::MSGID_SGSC_RESP_RENEWAMUSEMENT,
            'MSGID_SGSC_NOTI_RENEWAMUSEMENT' => self::MSGID_SGSC_NOTI_RENEWAMUSEMENT,
            'MSGID_CSGS_REQ_ENTERINSTANCEROOM' => self::MSGID_CSGS_REQ_ENTERINSTANCEROOM,
            'MSGID_SGSC_RESP_ENTERINSTANCEROOM' => self::MSGID_SGSC_RESP_ENTERINSTANCEROOM,
            'MSGID_SGSC_NOTI_ENTERINSTANCEROOM' => self::MSGID_SGSC_NOTI_ENTERINSTANCEROOM,
            'MSGID_CSGS_REQ_GETINSTANCEROOMLIST' => self::MSGID_CSGS_REQ_GETINSTANCEROOMLIST,
            'MSGID_SGSC_RESP_GETINSTANCEROOMLIST' => self::MSGID_SGSC_RESP_GETINSTANCEROOMLIST,
            'MSGID_CSGS_REQ_EXITINSTANCEROOM' => self::MSGID_CSGS_REQ_EXITINSTANCEROOM,
            'MSGID_SGSC_RESP_EXITINSTANCEROOM' => self::MSGID_SGSC_RESP_EXITINSTANCEROOM,
            'MSGID_SGSC_NOTI_EXITINSTANCEROOM' => self::MSGID_SGSC_NOTI_EXITINSTANCEROOM,
            'MSGID_CSGS_REQ_DOACTION' => self::MSGID_CSGS_REQ_DOACTION,
            'MSGID_SGSC_RESP_DOACTION' => self::MSGID_SGSC_RESP_DOACTION,
            'MSGID_SGSC_NOTI_DOACTION' => self::MSGID_SGSC_NOTI_DOACTION,
        );
    }
}
}