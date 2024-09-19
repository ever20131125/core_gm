<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleGeneralInfo message
 */
class RoleGeneralInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STROLEPUBLICINFO = 1;
    const ONLINESTATE = 2;
    const NOFFLINETIME = 3;
    const NCHANNELID = 4;
    const NROOMINSTANCEID = 5;
    const ROOMTYPE = 6;
    const NROOMID = 7;
    const ROOMSTATE = 8;
    const ACSTATE = 9;
    const NTEAMID = 10;
    const FLASTLONGITUDE = 11;
    const FLASTLATITUDE = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::ONLINESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\OnlineState::enmOnlineState_Normal,
            'name' => 'onlineState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOFFLINETIME => array(
            'name' => 'nOfflineTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHANNELID => array(
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
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMID => array(
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
        self::ACSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActionState::enmActionState_Normal,
            'name' => 'acState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTEAMID => array(
            'name' => 'nTeamID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FLASTLONGITUDE => array(
            'name' => 'fLastLongitude',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::FLASTLATITUDE => array(
            'name' => 'fLastLatitude',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
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
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::ONLINESTATE] = self::$fields[self::ONLINESTATE]['default'];
        $this->values[self::NOFFLINETIME] = null;
        $this->values[self::NCHANNELID] = null;
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::NROOMID] = null;
        $this->values[self::ROOMSTATE] = self::$fields[self::ROOMSTATE]['default'];
        $this->values[self::ACSTATE] = self::$fields[self::ACSTATE]['default'];
        $this->values[self::NTEAMID] = null;
        $this->values[self::FLASTLONGITUDE] = null;
        $this->values[self::FLASTLATITUDE] = null;
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
     * Sets value of 'stRolePublicInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO);
    }

    /**
     * Returns true if 'stRolePublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO) !== null;
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
     * Sets value of 'nOfflineTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOfflineTime($value)
    {
        return $this->set(self::NOFFLINETIME, $value);
    }

    /**
     * Returns value of 'nOfflineTime' property
     *
     * @return integer
     */
    public function getNOfflineTime()
    {
        $value = $this->get(self::NOFFLINETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOfflineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOfflineTime()
    {
        return $this->get(self::NOFFLINETIME) !== null;
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

    /**
     * Sets value of 'acState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAcState($value)
    {
        return $this->set(self::ACSTATE, $value);
    }

    /**
     * Returns value of 'acState' property
     *
     * @return integer
     */
    public function getAcState()
    {
        $value = $this->get(self::ACSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'acState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAcState()
    {
        return $this->get(self::ACSTATE) !== null;
    }

    /**
     * Sets value of 'nTeamID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTeamID($value)
    {
        return $this->set(self::NTEAMID, $value);
    }

    /**
     * Returns value of 'nTeamID' property
     *
     * @return integer
     */
    public function getNTeamID()
    {
        $value = $this->get(self::NTEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTeamID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTeamID()
    {
        return $this->get(self::NTEAMID) !== null;
    }

    /**
     * Sets value of 'fLastLongitude' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setFLastLongitude($value)
    {
        return $this->set(self::FLASTLONGITUDE, $value);
    }

    /**
     * Returns value of 'fLastLongitude' property
     *
     * @return double
     */
    public function getFLastLongitude()
    {
        $value = $this->get(self::FLASTLONGITUDE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'fLastLongitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFLastLongitude()
    {
        return $this->get(self::FLASTLONGITUDE) !== null;
    }

    /**
     * Sets value of 'fLastLatitude' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setFLastLatitude($value)
    {
        return $this->set(self::FLASTLATITUDE, $value);
    }

    /**
     * Returns value of 'fLastLatitude' property
     *
     * @return double
     */
    public function getFLastLatitude()
    {
        $value = $this->get(self::FLASTLATITUDE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'fLastLatitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFLastLatitude()
    {
        return $this->get(self::FLASTLATITUDE) !== null;
    }
}
}