<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * DeskGeneralInfo message
 */
class DeskGeneralInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NDESKINDEX = 1;
    const NROOMID = 5;
    const ROOMTYPE = 7;
    const SOURCE = 10;
    const ROOMSTATE = 12;
    const NMAXPLAYERCOUNT = 13;
    const NCURPLAYERCOUNT = 14;
    const SZPASSWORD = 16;
    const ROOMOPTION = 17;
    const NHOSTID = 23;
    const NMAXOBSERVERCOUNT = 28;
    const NCUROBSERVERCOUNT = 29;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NDESKINDEX => array(
            'default' => -1,
            'name' => 'nDeskIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMID => array(
            'name' => 'nRoomID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_CreateRoom,
            'name' => 'source',
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
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::NDESKINDEX] = self::$fields[self::NDESKINDEX]['default'];
        $this->values[self::NROOMID] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::ROOMSTATE] = self::$fields[self::ROOMSTATE]['default'];
        $this->values[self::NMAXPLAYERCOUNT] = null;
        $this->values[self::NCURPLAYERCOUNT] = null;
        $this->values[self::SZPASSWORD] = null;
        $this->values[self::ROOMOPTION] = null;
        $this->values[self::NHOSTID] = null;
        $this->values[self::NMAXOBSERVERCOUNT] = null;
        $this->values[self::NCUROBSERVERCOUNT] = null;
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
     * Sets value of 'nDeskIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDeskIndex($value)
    {
        return $this->set(self::NDESKINDEX, $value);
    }

    /**
     * Returns value of 'nDeskIndex' property
     *
     * @return integer
     */
    public function getNDeskIndex()
    {
        $value = $this->get(self::NDESKINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDeskIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDeskIndex()
    {
        return $this->get(self::NDESKINDEX) !== null;
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
}
}