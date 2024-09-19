<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleOnlineInfo message
 */
class RoleOnlineInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ONLINESTATE = 2;
    const NCHANNELID = 3;
    const NROOMINSTANCEID = 5;
    const ROOMTYPE = 6;
    const NROOMID = 7;
    const ROOMSTATE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLINESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\OnlineState::enmOnlineState_Normal,
            'name' => 'onlineState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHANNELID => array(
            'default' => -1,
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMID => array(
            'default' => -1,
            'name' => 'nRoomID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomState::enmRoomState_None,
            'name' => 'roomState',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ONLINESTATE] = self::$fields[self::ONLINESTATE]['default'];
        $this->values[self::NCHANNELID] = self::$fields[self::NCHANNELID]['default'];
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::NROOMID] = self::$fields[self::NROOMID]['default'];
        $this->values[self::ROOMSTATE] = self::$fields[self::ROOMSTATE]['default'];
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'onlineState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineState($value)
    {
        return $this->set(self::ONLINESTATE, $value);
    }

    /**
     * Returns value of 'onlineState' property
     *
     * @return integer
     */
    public function getOnlineState()
    {
        $value = $this->get(self::ONLINESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlineState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineState()
    {
        return $this->get(self::ONLINESTATE) !== null;
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
}
}