<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomListInfo message
 */
class RoomListInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROOMINSTANCEID = 1;
    const NROOMID = 2;
    const SZROOMNAME = 3;
    const ROOMTYPE = 4;
    const BLOCKED = 5;
    const GAMEMODE = 6;
    const GAMEPLAY = 7;
    const ROOMSTATE = 8;
    const NCURPLAYERCOUNT = 9;
    const NMAXPLAYERCOUNT = 10;
    const NCUROBSERVERCOUNT = 11;
    const NMAXOBSERVERCOUNT = 12;
    const NFEMALECOUNT = 13;
    const NVALIDPLACECOUNT = 14;
    const NCREATEROOMPRICE = 15;
    const NCREATEROOMTIME = 16;
    const NROOMTOPTIME = 17;
    const ROOMOPTION = 18;
    const SZROLENAME = 19;
    const NOPTION = 20;
    const NHOSTID = 21;
    const NHOSTLOVERID = 22;
    const NLUXURY = 23;
    const BGTYPE = 24;
    const NROOMLIMITTIME = 25;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
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
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLOCKED => array(
            'name' => 'bLocked',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        self::ROOMSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomState::enmRoomState_None,
            'name' => 'roomState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCURPLAYERCOUNT => array(
            'name' => 'nCurPlayerCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXPLAYERCOUNT => array(
            'name' => 'nMaxPlayerCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUROBSERVERCOUNT => array(
            'name' => 'nCurObserverCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXOBSERVERCOUNT => array(
            'name' => 'nMaxObserverCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFEMALECOUNT => array(
            'name' => 'nFemaleCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALIDPLACECOUNT => array(
            'name' => 'nValidPlaceCount',
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
        self::ROOMOPTION => array(
            'name' => 'roomOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOSTLOVERID => array(
            'name' => 'nHostLoverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BackGroundType::enmBackGroundType_Normal,
            'name' => 'bgType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMLIMITTIME => array(
            'name' => 'nRoomLimitTime',
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
        $this->values[self::NROOMID] = null;
        $this->values[self::SZROOMNAME] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::BLOCKED] = null;
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::ROOMSTATE] = self::$fields[self::ROOMSTATE]['default'];
        $this->values[self::NCURPLAYERCOUNT] = null;
        $this->values[self::NMAXPLAYERCOUNT] = null;
        $this->values[self::NCUROBSERVERCOUNT] = null;
        $this->values[self::NMAXOBSERVERCOUNT] = null;
        $this->values[self::NFEMALECOUNT] = null;
        $this->values[self::NVALIDPLACECOUNT] = null;
        $this->values[self::NCREATEROOMPRICE] = null;
        $this->values[self::NCREATEROOMTIME] = null;
        $this->values[self::NROOMTOPTIME] = null;
        $this->values[self::ROOMOPTION] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NOPTION] = null;
        $this->values[self::NHOSTID] = null;
        $this->values[self::NHOSTLOVERID] = null;
        $this->values[self::NLUXURY] = null;
        $this->values[self::BGTYPE] = self::$fields[self::BGTYPE]['default'];
        $this->values[self::NROOMLIMITTIME] = null;
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
     * Sets value of 'bLocked' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBLocked($value)
    {
        return $this->set(self::BLOCKED, $value);
    }

    /**
     * Returns value of 'bLocked' property
     *
     * @return boolean
     */
    public function getBLocked()
    {
        $value = $this->get(self::BLOCKED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bLocked' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBLocked()
    {
        return $this->get(self::BLOCKED) !== null;
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
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
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
     * Sets value of 'nHostLoverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHostLoverID($value)
    {
        return $this->set(self::NHOSTLOVERID, $value);
    }

    /**
     * Returns value of 'nHostLoverID' property
     *
     * @return integer
     */
    public function getNHostLoverID()
    {
        $value = $this->get(self::NHOSTLOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHostLoverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHostLoverID()
    {
        return $this->get(self::NHOSTLOVERID) !== null;
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
     * Sets value of 'nRoomLimitTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomLimitTime($value)
    {
        return $this->set(self::NROOMLIMITTIME, $value);
    }

    /**
     * Returns value of 'nRoomLimitTime' property
     *
     * @return integer
     */
    public function getNRoomLimitTime()
    {
        $value = $this->get(self::NROOMLIMITTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomLimitTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomLimitTime()
    {
        return $this->get(self::NROOMLIMITTIME) !== null;
    }
}
}