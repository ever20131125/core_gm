<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomGeneralInfo message
 */
class RoomGeneralInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROOMINSTANCEID = 2;
    const NSERVERID = 3;
    const NZONEID = 4;
    const NCHANNELID = 5;
    const NROOMID = 6;
    const SZROOMNAME = 7;
    const ROOMTYPE = 8;
    const GAMEMODE = 9;
    const GAMEPLAY = 10;
    const SOURCE = 11;
    const NOWNERID = 12;
    const ROOMSTATE = 13;
    const NMAXPLAYERCOUNT = 14;
    const NCURPLAYERCOUNT = 15;
    const NFEMALECOUNT = 16;
    const SZPASSWORD = 17;
    const ROOMOPTION = 18;
    const NSCENEID = 19;
    const NSTAGEID = 20;
    const NMUSICID = 21;
    const MUSICLEVEL = 22;
    const NMUSICSTAR = 23;
    const NHOSTID = 24;
    const HOSTGENDER = 25;
    const SZHOSTNAME = 26;
    const NMAXOBSERVERCOUNT = 27;
    const NCUROBSERVERCOUNT = 28;
    const NVALIDPLACECOUNT = 29;
    const NVALIDOBSERVECOUNT = 30;
    const BGTYPE = 31;
    const NBACKGROUNDID = 32;
    const NJOINROOMMINLEVEL = 33;
    const NJOINROOMMAXLEVEL = 34;
    const NCREATEROOMPRICE = 35;
    const NCREATEROOMTIME = 36;
    const NROOMTOPTIME = 37;
    const NTIMELIMIT = 38;
    const NLOVERID = 39;
    const LOVERGENDER = 40;
    const NLUXURY = 41;
    const ARRWEDDINGITEM = 42;
    const NOPTION = 43;
    const DEFPOSTYPE = 45;
    const MATCHKIND = 46;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSERVERID => array(
            'name' => 'nServerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHANNELID => array(
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMID => array(
            'name' => 'nRoomID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROOMNAME => array(
            'name' => 'szRoomName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_Invalid,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOWNERID => array(
            'name' => 'nOwnerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomState::enmRoomState_None,
            'name' => 'roomState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXPLAYERCOUNT => array(
            'name' => 'nMaxPlayerCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCURPLAYERCOUNT => array(
            'name' => 'nCurPlayerCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFEMALECOUNT => array(
            'name' => 'nFemaleCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZPASSWORD => array(
            'name' => 'szPassword',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ROOMOPTION => array(
            'name' => 'roomOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCENEID => array(
            'name' => 'nSceneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAGEID => array(
            'name' => 'nStageID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MUSICLEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\MusicLevel::enmMusicLevel_Easy,
            'name' => 'musicLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICSTAR => array(
            'name' => 'nMusicStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOSTGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'hostGender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZHOSTNAME => array(
            'name' => 'szHostName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NMAXOBSERVERCOUNT => array(
            'name' => 'nMaxObserverCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUROBSERVERCOUNT => array(
            'name' => 'nCurObserverCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALIDPLACECOUNT => array(
            'name' => 'nValidPlaceCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALIDOBSERVECOUNT => array(
            'name' => 'nValidObserveCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BackGroundType::enmBackGroundType_Normal,
            'name' => 'bgType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBACKGROUNDID => array(
            'name' => 'nBackgroundID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NJOINROOMMINLEVEL => array(
            'name' => 'nJoinRoomMinLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NJOINROOMMAXLEVEL => array(
            'name' => 'nJoinRoomMaxLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCREATEROOMPRICE => array(
            'name' => 'nCreateRoomPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCREATEROOMTIME => array(
            'name' => 'nCreateRoomTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMTOPTIME => array(
            'name' => 'nRoomTopTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMELIMIT => array(
            'name' => 'nTimeLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVERID => array(
            'name' => 'nLoverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'loverGender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRWEDDINGITEM => array(
            'name' => 'arrWeddingItem',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEFPOSTYPE => array(
            'name' => 'defPosType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATCHKIND => array(
            'default' => \Xnhd\Core\Pb\Sdo\MatchKind::enmMatchKind_Normal,
            'name' => 'matchKind',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::NSERVERID] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::NCHANNELID] = null;
        $this->values[self::NROOMID] = null;
        $this->values[self::SZROOMNAME] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::SOURCE] = null;
        $this->values[self::NOWNERID] = null;
        $this->values[self::ROOMSTATE] = self::$fields[self::ROOMSTATE]['default'];
        $this->values[self::NMAXPLAYERCOUNT] = null;
        $this->values[self::NCURPLAYERCOUNT] = null;
        $this->values[self::NFEMALECOUNT] = null;
        $this->values[self::SZPASSWORD] = null;
        $this->values[self::ROOMOPTION] = null;
        $this->values[self::NSCENEID] = null;
        $this->values[self::NSTAGEID] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::MUSICLEVEL] = self::$fields[self::MUSICLEVEL]['default'];
        $this->values[self::NMUSICSTAR] = null;
        $this->values[self::NHOSTID] = null;
        $this->values[self::HOSTGENDER] = self::$fields[self::HOSTGENDER]['default'];
        $this->values[self::SZHOSTNAME] = null;
        $this->values[self::NMAXOBSERVERCOUNT] = null;
        $this->values[self::NCUROBSERVERCOUNT] = null;
        $this->values[self::NVALIDPLACECOUNT] = null;
        $this->values[self::NVALIDOBSERVECOUNT] = null;
        $this->values[self::BGTYPE] = self::$fields[self::BGTYPE]['default'];
        $this->values[self::NBACKGROUNDID] = null;
        $this->values[self::NJOINROOMMINLEVEL] = null;
        $this->values[self::NJOINROOMMAXLEVEL] = null;
        $this->values[self::NCREATEROOMPRICE] = null;
        $this->values[self::NCREATEROOMTIME] = null;
        $this->values[self::NROOMTOPTIME] = null;
        $this->values[self::NTIMELIMIT] = null;
        $this->values[self::NLOVERID] = null;
        $this->values[self::LOVERGENDER] = self::$fields[self::LOVERGENDER]['default'];
        $this->values[self::NLUXURY] = null;
        $this->values[self::ARRWEDDINGITEM] = array();
        $this->values[self::NOPTION] = null;
        $this->values[self::DEFPOSTYPE] = null;
        $this->values[self::MATCHKIND] = self::$fields[self::MATCHKIND]['default'];
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nRoomInstanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomInstanceID($value)
    {
        return $this->set(self::NROOMINSTANCEID, $value);
    }

    /**
     * Returns value of 'nRoomInstanceID' property
     *
     * @return integer
     */
    public function getNRoomInstanceID()
    {
        $value = $this->get(self::NROOMINSTANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomInstanceID()
    {
        return $this->get(self::NROOMINSTANCEID) !== null;
    }

    /**
     * Sets value of 'nServerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNServerID($value)
    {
        return $this->set(self::NSERVERID, $value);
    }

    /**
     * Returns value of 'nServerID' property
     *
     * @return integer
     */
    public function getNServerID()
    {
        $value = $this->get(self::NSERVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nServerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNServerID()
    {
        return $this->get(self::NSERVERID) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Sets value of 'nChannelID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChannelID($value)
    {
        return $this->set(self::NCHANNELID, $value);
    }

    /**
     * Returns value of 'nChannelID' property
     *
     * @return integer
     */
    public function getNChannelID()
    {
        $value = $this->get(self::NCHANNELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChannelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChannelID()
    {
        return $this->get(self::NCHANNELID) !== null;
    }

    /**
     * Sets value of 'nRoomID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomID($value)
    {
        return $this->set(self::NROOMID, $value);
    }

    /**
     * Returns value of 'nRoomID' property
     *
     * @return integer
     */
    public function getNRoomID()
    {
        $value = $this->get(self::NROOMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomID()
    {
        return $this->get(self::NROOMID) !== null;
    }

    /**
     * Sets value of 'szRoomName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoomName($value)
    {
        return $this->set(self::SZROOMNAME, $value);
    }

    /**
     * Returns value of 'szRoomName' property
     *
     * @return string
     */
    public function getSzRoomName()
    {
        $value = $this->get(self::SZROOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoomName()
    {
        return $this->get(self::SZROOMNAME) !== null;
    }

    /**
     * Sets value of 'roomType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomType($value)
    {
        return $this->set(self::ROOMTYPE, $value);
    }

    /**
     * Returns value of 'roomType' property
     *
     * @return integer
     */
    public function getRoomType()
    {
        $value = $this->get(self::ROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomType()
    {
        return $this->get(self::ROOMTYPE) !== null;
    }

    /**
     * Sets value of 'gameMode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameMode($value)
    {
        return $this->set(self::GAMEMODE, $value);
    }

    /**
     * Returns value of 'gameMode' property
     *
     * @return integer
     */
    public function getGameMode()
    {
        $value = $this->get(self::GAMEMODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameMode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameMode()
    {
        return $this->get(self::GAMEMODE) !== null;
    }

    /**
     * Sets value of 'gamePlay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamePlay($value)
    {
        return $this->set(self::GAMEPLAY, $value);
    }

    /**
     * Returns value of 'gamePlay' property
     *
     * @return integer
     */
    public function getGamePlay()
    {
        $value = $this->get(self::GAMEPLAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGamePlay()
    {
        return $this->get(self::GAMEPLAY) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'nOwnerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOwnerID($value)
    {
        return $this->set(self::NOWNERID, $value);
    }

    /**
     * Returns value of 'nOwnerID' property
     *
     * @return integer
     */
    public function getNOwnerID()
    {
        $value = $this->get(self::NOWNERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOwnerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOwnerID()
    {
        return $this->get(self::NOWNERID) !== null;
    }

    /**
     * Sets value of 'roomState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomState($value)
    {
        return $this->set(self::ROOMSTATE, $value);
    }

    /**
     * Returns value of 'roomState' property
     *
     * @return integer
     */
    public function getRoomState()
    {
        $value = $this->get(self::ROOMSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomState()
    {
        return $this->get(self::ROOMSTATE) !== null;
    }

    /**
     * Sets value of 'nMaxPlayerCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxPlayerCount($value)
    {
        return $this->set(self::NMAXPLAYERCOUNT, $value);
    }

    /**
     * Returns value of 'nMaxPlayerCount' property
     *
     * @return integer
     */
    public function getNMaxPlayerCount()
    {
        $value = $this->get(self::NMAXPLAYERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxPlayerCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxPlayerCount()
    {
        return $this->get(self::NMAXPLAYERCOUNT) !== null;
    }

    /**
     * Sets value of 'nCurPlayerCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurPlayerCount($value)
    {
        return $this->set(self::NCURPLAYERCOUNT, $value);
    }

    /**
     * Returns value of 'nCurPlayerCount' property
     *
     * @return integer
     */
    public function getNCurPlayerCount()
    {
        $value = $this->get(self::NCURPLAYERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurPlayerCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurPlayerCount()
    {
        return $this->get(self::NCURPLAYERCOUNT) !== null;
    }

    /**
     * Sets value of 'nFemaleCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFemaleCount($value)
    {
        return $this->set(self::NFEMALECOUNT, $value);
    }

    /**
     * Returns value of 'nFemaleCount' property
     *
     * @return integer
     */
    public function getNFemaleCount()
    {
        $value = $this->get(self::NFEMALECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFemaleCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFemaleCount()
    {
        return $this->get(self::NFEMALECOUNT) !== null;
    }

    /**
     * Sets value of 'szPassword' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPassword($value)
    {
        return $this->set(self::SZPASSWORD, $value);
    }

    /**
     * Returns value of 'szPassword' property
     *
     * @return string
     */
    public function getSzPassword()
    {
        $value = $this->get(self::SZPASSWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPassword' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPassword()
    {
        return $this->get(self::SZPASSWORD) !== null;
    }

    /**
     * Sets value of 'roomOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomOption($value)
    {
        return $this->set(self::ROOMOPTION, $value);
    }

    /**
     * Returns value of 'roomOption' property
     *
     * @return integer
     */
    public function getRoomOption()
    {
        $value = $this->get(self::ROOMOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomOption()
    {
        return $this->get(self::ROOMOPTION) !== null;
    }

    /**
     * Sets value of 'nSceneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSceneID($value)
    {
        return $this->set(self::NSCENEID, $value);
    }

    /**
     * Returns value of 'nSceneID' property
     *
     * @return integer
     */
    public function getNSceneID()
    {
        $value = $this->get(self::NSCENEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSceneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSceneID()
    {
        return $this->get(self::NSCENEID) !== null;
    }

    /**
     * Sets value of 'nStageID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStageID($value)
    {
        return $this->set(self::NSTAGEID, $value);
    }

    /**
     * Returns value of 'nStageID' property
     *
     * @return integer
     */
    public function getNStageID()
    {
        $value = $this->get(self::NSTAGEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStageID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStageID()
    {
        return $this->get(self::NSTAGEID) !== null;
    }

    /**
     * Sets value of 'nMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicID($value)
    {
        return $this->set(self::NMUSICID, $value);
    }

    /**
     * Returns value of 'nMusicID' property
     *
     * @return integer
     */
    public function getNMusicID()
    {
        $value = $this->get(self::NMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicID()
    {
        return $this->get(self::NMUSICID) !== null;
    }

    /**
     * Sets value of 'musicLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMusicLevel($value)
    {
        return $this->set(self::MUSICLEVEL, $value);
    }

    /**
     * Returns value of 'musicLevel' property
     *
     * @return integer
     */
    public function getMusicLevel()
    {
        $value = $this->get(self::MUSICLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'musicLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMusicLevel()
    {
        return $this->get(self::MUSICLEVEL) !== null;
    }

    /**
     * Sets value of 'nMusicStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicStar($value)
    {
        return $this->set(self::NMUSICSTAR, $value);
    }

    /**
     * Returns value of 'nMusicStar' property
     *
     * @return integer
     */
    public function getNMusicStar()
    {
        $value = $this->get(self::NMUSICSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicStar()
    {
        return $this->get(self::NMUSICSTAR) !== null;
    }

    /**
     * Sets value of 'nHostID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHostID($value)
    {
        return $this->set(self::NHOSTID, $value);
    }

    /**
     * Returns value of 'nHostID' property
     *
     * @return integer
     */
    public function getNHostID()
    {
        $value = $this->get(self::NHOSTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHostID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHostID()
    {
        return $this->get(self::NHOSTID) !== null;
    }

    /**
     * Sets value of 'hostGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHostGender($value)
    {
        return $this->set(self::HOSTGENDER, $value);
    }

    /**
     * Returns value of 'hostGender' property
     *
     * @return integer
     */
    public function getHostGender()
    {
        $value = $this->get(self::HOSTGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hostGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHostGender()
    {
        return $this->get(self::HOSTGENDER) !== null;
    }

    /**
     * Sets value of 'szHostName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzHostName($value)
    {
        return $this->set(self::SZHOSTNAME, $value);
    }

    /**
     * Returns value of 'szHostName' property
     *
     * @return string
     */
    public function getSzHostName()
    {
        $value = $this->get(self::SZHOSTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szHostName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzHostName()
    {
        return $this->get(self::SZHOSTNAME) !== null;
    }

    /**
     * Sets value of 'nMaxObserverCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxObserverCount($value)
    {
        return $this->set(self::NMAXOBSERVERCOUNT, $value);
    }

    /**
     * Returns value of 'nMaxObserverCount' property
     *
     * @return integer
     */
    public function getNMaxObserverCount()
    {
        $value = $this->get(self::NMAXOBSERVERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxObserverCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxObserverCount()
    {
        return $this->get(self::NMAXOBSERVERCOUNT) !== null;
    }

    /**
     * Sets value of 'nCurObserverCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurObserverCount($value)
    {
        return $this->set(self::NCUROBSERVERCOUNT, $value);
    }

    /**
     * Returns value of 'nCurObserverCount' property
     *
     * @return integer
     */
    public function getNCurObserverCount()
    {
        $value = $this->get(self::NCUROBSERVERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurObserverCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurObserverCount()
    {
        return $this->get(self::NCUROBSERVERCOUNT) !== null;
    }

    /**
     * Sets value of 'nValidPlaceCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValidPlaceCount($value)
    {
        return $this->set(self::NVALIDPLACECOUNT, $value);
    }

    /**
     * Returns value of 'nValidPlaceCount' property
     *
     * @return integer
     */
    public function getNValidPlaceCount()
    {
        $value = $this->get(self::NVALIDPLACECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValidPlaceCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValidPlaceCount()
    {
        return $this->get(self::NVALIDPLACECOUNT) !== null;
    }

    /**
     * Sets value of 'nValidObserveCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValidObserveCount($value)
    {
        return $this->set(self::NVALIDOBSERVECOUNT, $value);
    }

    /**
     * Returns value of 'nValidObserveCount' property
     *
     * @return integer
     */
    public function getNValidObserveCount()
    {
        $value = $this->get(self::NVALIDOBSERVECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValidObserveCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValidObserveCount()
    {
        return $this->get(self::NVALIDOBSERVECOUNT) !== null;
    }

    /**
     * Sets value of 'bgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBgType($value)
    {
        return $this->set(self::BGTYPE, $value);
    }

    /**
     * Returns value of 'bgType' property
     *
     * @return integer
     */
    public function getBgType()
    {
        $value = $this->get(self::BGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bgType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBgType()
    {
        return $this->get(self::BGTYPE) !== null;
    }

    /**
     * Sets value of 'nBackgroundID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBackgroundID($value)
    {
        return $this->set(self::NBACKGROUNDID, $value);
    }

    /**
     * Returns value of 'nBackgroundID' property
     *
     * @return integer
     */
    public function getNBackgroundID()
    {
        $value = $this->get(self::NBACKGROUNDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBackgroundID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBackgroundID()
    {
        return $this->get(self::NBACKGROUNDID) !== null;
    }

    /**
     * Sets value of 'nJoinRoomMinLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNJoinRoomMinLevel($value)
    {
        return $this->set(self::NJOINROOMMINLEVEL, $value);
    }

    /**
     * Returns value of 'nJoinRoomMinLevel' property
     *
     * @return integer
     */
    public function getNJoinRoomMinLevel()
    {
        $value = $this->get(self::NJOINROOMMINLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nJoinRoomMinLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNJoinRoomMinLevel()
    {
        return $this->get(self::NJOINROOMMINLEVEL) !== null;
    }

    /**
     * Sets value of 'nJoinRoomMaxLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNJoinRoomMaxLevel($value)
    {
        return $this->set(self::NJOINROOMMAXLEVEL, $value);
    }

    /**
     * Returns value of 'nJoinRoomMaxLevel' property
     *
     * @return integer
     */
    public function getNJoinRoomMaxLevel()
    {
        $value = $this->get(self::NJOINROOMMAXLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nJoinRoomMaxLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNJoinRoomMaxLevel()
    {
        return $this->get(self::NJOINROOMMAXLEVEL) !== null;
    }

    /**
     * Sets value of 'nCreateRoomPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateRoomPrice($value)
    {
        return $this->set(self::NCREATEROOMPRICE, $value);
    }

    /**
     * Returns value of 'nCreateRoomPrice' property
     *
     * @return integer
     */
    public function getNCreateRoomPrice()
    {
        $value = $this->get(self::NCREATEROOMPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreateRoomPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateRoomPrice()
    {
        return $this->get(self::NCREATEROOMPRICE) !== null;
    }

    /**
     * Sets value of 'nCreateRoomTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateRoomTime($value)
    {
        return $this->set(self::NCREATEROOMTIME, $value);
    }

    /**
     * Returns value of 'nCreateRoomTime' property
     *
     * @return integer
     */
    public function getNCreateRoomTime()
    {
        $value = $this->get(self::NCREATEROOMTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreateRoomTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateRoomTime()
    {
        return $this->get(self::NCREATEROOMTIME) !== null;
    }

    /**
     * Sets value of 'nRoomTopTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomTopTime($value)
    {
        return $this->set(self::NROOMTOPTIME, $value);
    }

    /**
     * Returns value of 'nRoomTopTime' property
     *
     * @return integer
     */
    public function getNRoomTopTime()
    {
        $value = $this->get(self::NROOMTOPTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomTopTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomTopTime()
    {
        return $this->get(self::NROOMTOPTIME) !== null;
    }

    /**
     * Sets value of 'nTimeLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeLimit($value)
    {
        return $this->set(self::NTIMELIMIT, $value);
    }

    /**
     * Returns value of 'nTimeLimit' property
     *
     * @return integer
     */
    public function getNTimeLimit()
    {
        $value = $this->get(self::NTIMELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeLimit()
    {
        return $this->get(self::NTIMELIMIT) !== null;
    }

    /**
     * Sets value of 'nLoverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoverID($value)
    {
        return $this->set(self::NLOVERID, $value);
    }

    /**
     * Returns value of 'nLoverID' property
     *
     * @return integer
     */
    public function getNLoverID()
    {
        $value = $this->get(self::NLOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoverID()
    {
        return $this->get(self::NLOVERID) !== null;
    }

    /**
     * Sets value of 'loverGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverGender($value)
    {
        return $this->set(self::LOVERGENDER, $value);
    }

    /**
     * Returns value of 'loverGender' property
     *
     * @return integer
     */
    public function getLoverGender()
    {
        $value = $this->get(self::LOVERGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverGender()
    {
        return $this->get(self::LOVERGENDER) !== null;
    }

    /**
     * Sets value of 'nLuxury' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLuxury($value)
    {
        return $this->set(self::NLUXURY, $value);
    }

    /**
     * Returns value of 'nLuxury' property
     *
     * @return integer
     */
    public function getNLuxury()
    {
        $value = $this->get(self::NLUXURY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLuxury' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLuxury()
    {
        return $this->get(self::NLUXURY) !== null;
    }

    /**
     * Appends value to 'arrWeddingItem' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrWeddingItem($value)
    {
        return $this->append(self::ARRWEDDINGITEM, $value);
    }

    /**
     * Clears 'arrWeddingItem' list
     *
     * @return null
     */
    public function clearArrWeddingItem()
    {
        return $this->clear(self::ARRWEDDINGITEM);
    }

    /**
     * Returns 'arrWeddingItem' list
     *
     * @return integer[]
     */
    public function getArrWeddingItem()
    {
        return $this->get(self::ARRWEDDINGITEM);
    }

    /**
     * Returns true if 'arrWeddingItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWeddingItem()
    {
        return count($this->get(self::ARRWEDDINGITEM)) !== 0;
    }

    /**
     * Returns 'arrWeddingItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWeddingItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWEDDINGITEM));
    }

    /**
     * Returns element from 'arrWeddingItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrWeddingItemAt($offset)
    {
        return $this->get(self::ARRWEDDINGITEM, $offset);
    }

    /**
     * Returns count of 'arrWeddingItem' list
     *
     * @return int
     */
    public function getArrWeddingItemCount()
    {
        return $this->count(self::ARRWEDDINGITEM);
    }

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
    }

    /**
     * Sets value of 'defPosType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDefPosType($value)
    {
        return $this->set(self::DEFPOSTYPE, $value);
    }

    /**
     * Returns value of 'defPosType' property
     *
     * @return integer
     */
    public function getDefPosType()
    {
        $value = $this->get(self::DEFPOSTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'defPosType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefPosType()
    {
        return $this->get(self::DEFPOSTYPE) !== null;
    }

    /**
     * Sets value of 'matchKind' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMatchKind($value)
    {
        return $this->set(self::MATCHKIND, $value);
    }

    /**
     * Returns value of 'matchKind' property
     *
     * @return integer
     */
    public function getMatchKind()
    {
        $value = $this->get(self::MATCHKIND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'matchKind' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMatchKind()
    {
        return $this->get(self::MATCHKIND) !== null;
    }
}
}