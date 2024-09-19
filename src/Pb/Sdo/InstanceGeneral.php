<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InstanceGeneral message
 */
class InstanceGeneral extends \ProtobufMessage
{
    /* Field index constants */
    const NINSTANCEID = 1;
    const NROOMID = 2;
    const SZROOMNAME = 3;
    const INSTANCETYPE = 4;
    const NMAXPLAYERCOUNT = 5;
    const NCURPLAYERCOUNT = 6;
    const NMAXOBSERVERCOUNT = 7;
    const NCUROBSERVERCOUNT = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NINSTANCEID => array(
            'name' => 'nInstanceID',
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
        self::INSTANCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InstanceType::enmInstanceType_Dance,
            'name' => 'instanceType',
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
        $this->values[self::NINSTANCEID] = null;
        $this->values[self::NROOMID] = null;
        $this->values[self::SZROOMNAME] = null;
        $this->values[self::INSTANCETYPE] = self::$fields[self::INSTANCETYPE]['default'];
        $this->values[self::NMAXPLAYERCOUNT] = null;
        $this->values[self::NCURPLAYERCOUNT] = null;
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
     * Sets value of 'nInstanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNInstanceID($value)
    {
        return $this->set(self::NINSTANCEID, $value);
    }

    /**
     * Returns value of 'nInstanceID' property
     *
     * @return integer
     */
    public function getNInstanceID()
    {
        $value = $this->get(self::NINSTANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNInstanceID()
    {
        return $this->get(self::NINSTANCEID) !== null;
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
     * Sets value of 'instanceType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInstanceType($value)
    {
        return $this->set(self::INSTANCETYPE, $value);
    }

    /**
     * Returns value of 'instanceType' property
     *
     * @return integer
     */
    public function getInstanceType()
    {
        $value = $this->get(self::INSTANCETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'instanceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInstanceType()
    {
        return $this->get(self::INSTANCETYPE) !== null;
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