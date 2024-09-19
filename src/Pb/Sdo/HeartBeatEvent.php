<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HeartBeatEvent message
 */
class HeartBeatEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ONLINETYPE = 2;
    const NCURHEARTBEATTIME = 3;
    const NLASTHEARTBEATTIME = 4;
    const CURROOMTYPE = 5;
    const LASTROOMTYPE = 6;
    const NCURFLOORID = 7;
    const NLASTFLOORID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLINETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\OnlineType::enmOnlineType_HeartBeat,
            'name' => 'onlineType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCURHEARTBEATTIME => array(
            'name' => 'nCurHeartBeatTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTHEARTBEATTIME => array(
            'name' => 'nLastHeartBeatTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'curRoomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'lastRoomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCURFLOORID => array(
            'name' => 'nCurFloorID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTFLOORID => array(
            'name' => 'nLastFloorID',
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
        $this->values[self::ONLINETYPE] = self::$fields[self::ONLINETYPE]['default'];
        $this->values[self::NCURHEARTBEATTIME] = null;
        $this->values[self::NLASTHEARTBEATTIME] = null;
        $this->values[self::CURROOMTYPE] = self::$fields[self::CURROOMTYPE]['default'];
        $this->values[self::LASTROOMTYPE] = self::$fields[self::LASTROOMTYPE]['default'];
        $this->values[self::NCURFLOORID] = null;
        $this->values[self::NLASTFLOORID] = null;
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
     * Sets value of 'onlineType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineType($value)
    {
        return $this->set(self::ONLINETYPE, $value);
    }

    /**
     * Returns value of 'onlineType' property
     *
     * @return integer
     */
    public function getOnlineType()
    {
        $value = $this->get(self::ONLINETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlineType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineType()
    {
        return $this->get(self::ONLINETYPE) !== null;
    }

    /**
     * Sets value of 'nCurHeartBeatTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurHeartBeatTime($value)
    {
        return $this->set(self::NCURHEARTBEATTIME, $value);
    }

    /**
     * Returns value of 'nCurHeartBeatTime' property
     *
     * @return integer
     */
    public function getNCurHeartBeatTime()
    {
        $value = $this->get(self::NCURHEARTBEATTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurHeartBeatTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurHeartBeatTime()
    {
        return $this->get(self::NCURHEARTBEATTIME) !== null;
    }

    /**
     * Sets value of 'nLastHeartBeatTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastHeartBeatTime($value)
    {
        return $this->set(self::NLASTHEARTBEATTIME, $value);
    }

    /**
     * Returns value of 'nLastHeartBeatTime' property
     *
     * @return integer
     */
    public function getNLastHeartBeatTime()
    {
        $value = $this->get(self::NLASTHEARTBEATTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastHeartBeatTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastHeartBeatTime()
    {
        return $this->get(self::NLASTHEARTBEATTIME) !== null;
    }

    /**
     * Sets value of 'curRoomType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurRoomType($value)
    {
        return $this->set(self::CURROOMTYPE, $value);
    }

    /**
     * Returns value of 'curRoomType' property
     *
     * @return integer
     */
    public function getCurRoomType()
    {
        $value = $this->get(self::CURROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curRoomType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurRoomType()
    {
        return $this->get(self::CURROOMTYPE) !== null;
    }

    /**
     * Sets value of 'lastRoomType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRoomType($value)
    {
        return $this->set(self::LASTROOMTYPE, $value);
    }

    /**
     * Returns value of 'lastRoomType' property
     *
     * @return integer
     */
    public function getLastRoomType()
    {
        $value = $this->get(self::LASTROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastRoomType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastRoomType()
    {
        return $this->get(self::LASTROOMTYPE) !== null;
    }

    /**
     * Sets value of 'nCurFloorID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurFloorID($value)
    {
        return $this->set(self::NCURFLOORID, $value);
    }

    /**
     * Returns value of 'nCurFloorID' property
     *
     * @return integer
     */
    public function getNCurFloorID()
    {
        $value = $this->get(self::NCURFLOORID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurFloorID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurFloorID()
    {
        return $this->get(self::NCURFLOORID) !== null;
    }

    /**
     * Sets value of 'nLastFloorID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastFloorID($value)
    {
        return $this->set(self::NLASTFLOORID, $value);
    }

    /**
     * Returns value of 'nLastFloorID' property
     *
     * @return integer
     */
    public function getNLastFloorID()
    {
        $value = $this->get(self::NLASTFLOORID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastFloorID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastFloorID()
    {
        return $this->get(self::NLASTFLOORID) !== null;
    }
}
}