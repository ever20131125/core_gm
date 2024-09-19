<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * OfflineEvent message
 */
class OfflineEvent extends \ProtobufMessage
{
    /* Field index constants */
    const LOGOUTREASON = 1;
    const NROLEID = 2;
    const NLOGINTIME = 3;
    const NLOGOUTTIME = 4;
    const NROOMINSTANCEID = 5;
    const NTEAMID = 6;
    const NMATCHROOMID = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOGOUTREASON => array(
            'default' => \Xnhd\Core\Pb\Sdo\LogoutReason::enmLogoutReason_Normal,
            'name' => 'logoutReason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOGINTIME => array(
            'name' => 'nLoginTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOGOUTTIME => array(
            'name' => 'nLogoutTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTEAMID => array(
            'name' => 'nTeamID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATCHROOMID => array(
            'name' => 'nMatchRoomID',
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
        $this->values[self::LOGOUTREASON] = self::$fields[self::LOGOUTREASON]['default'];
        $this->values[self::NROLEID] = null;
        $this->values[self::NLOGINTIME] = null;
        $this->values[self::NLOGOUTTIME] = null;
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::NTEAMID] = null;
        $this->values[self::NMATCHROOMID] = null;
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
     * Sets value of 'logoutReason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLogoutReason($value)
    {
        return $this->set(self::LOGOUTREASON, $value);
    }

    /**
     * Returns value of 'logoutReason' property
     *
     * @return integer
     */
    public function getLogoutReason()
    {
        $value = $this->get(self::LOGOUTREASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'logoutReason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogoutReason()
    {
        return $this->get(self::LOGOUTREASON) !== null;
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
     * Sets value of 'nLoginTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoginTime($value)
    {
        return $this->set(self::NLOGINTIME, $value);
    }

    /**
     * Returns value of 'nLoginTime' property
     *
     * @return integer
     */
    public function getNLoginTime()
    {
        $value = $this->get(self::NLOGINTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoginTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoginTime()
    {
        return $this->get(self::NLOGINTIME) !== null;
    }

    /**
     * Sets value of 'nLogoutTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLogoutTime($value)
    {
        return $this->set(self::NLOGOUTTIME, $value);
    }

    /**
     * Returns value of 'nLogoutTime' property
     *
     * @return integer
     */
    public function getNLogoutTime()
    {
        $value = $this->get(self::NLOGOUTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLogoutTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLogoutTime()
    {
        return $this->get(self::NLOGOUTTIME) !== null;
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
     * Sets value of 'nMatchRoomID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchRoomID($value)
    {
        return $this->set(self::NMATCHROOMID, $value);
    }

    /**
     * Returns value of 'nMatchRoomID' property
     *
     * @return integer
     */
    public function getNMatchRoomID()
    {
        $value = $this->get(self::NMATCHROOMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchRoomID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchRoomID()
    {
        return $this->get(self::NMATCHROOMID) !== null;
    }
}
}