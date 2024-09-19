<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * EnterRoomInfo message
 */
class EnterRoomInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STROLECONNECTINFO = 2;
    const STROLEPUBLICINFO = 3;
    const STAVATARINFO = 4;
    const STROLESKILLINFO = 5;
    const STROLEBUFFERINFO = 6;
    const STROLEROOMGENERALINFO = 7;
    const NCHANNELID = 11;
    const STROLEGUILDINFO = 12;
    const STROLELOVERINFO = 13;
    const ARRROLEFRIENDINFO = 14;
    const STHOUSEDETAILINFO = 15;
    const ARRMP3ID = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLECONNECTINFO => array(
            'name' => 'stRoleConnectInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleConnectInfo'
        ),
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::STROLESKILLINFO => array(
            'name' => 'stRoleSkillInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleSkillInfo'
        ),
        self::STROLEBUFFERINFO => array(
            'name' => 'stRoleBufferInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBufferInfo'
        ),
        self::STROLEROOMGENERALINFO => array(
            'name' => 'stRoleRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo'
        ),
        self::NCHANNELID => array(
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEGUILDINFO => array(
            'name' => 'stRoleGuildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGuildInfo'
        ),
        self::STROLELOVERINFO => array(
            'name' => 'stRoleLoverInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleLoverInfo'
        ),
        self::ARRROLEFRIENDINFO => array(
            'name' => 'arrRoleFriendInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleFriendInfo'
        ),
        self::STHOUSEDETAILINFO => array(
            'name' => 'stHouseDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
        ),
        self::ARRMP3ID => array(
            'name' => 'arrMp3ID',
            'repeated' => true,
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
        $this->values[self::STROLECONNECTINFO] = null;
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::STROLEBUFFERINFO] = null;
        $this->values[self::STROLEROOMGENERALINFO] = null;
        $this->values[self::NCHANNELID] = null;
        $this->values[self::STROLEGUILDINFO] = null;
        $this->values[self::STROLELOVERINFO] = null;
        $this->values[self::ARRROLEFRIENDINFO] = array();
        $this->values[self::STHOUSEDETAILINFO] = null;
        $this->values[self::ARRMP3ID] = array();
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
     * Sets value of 'stRoleConnectInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleConnectInfo $value Property value
     *
     * @return null
     */
    public function setStRoleConnectInfo(\Xnhd\Core\Pb\Sdo\RoleConnectInfo $value=null)
    {
        return $this->set(self::STROLECONNECTINFO, $value);
    }

    /**
     * Returns value of 'stRoleConnectInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleConnectInfo
     */
    public function getStRoleConnectInfo()
    {
        return $this->get(self::STROLECONNECTINFO);
    }

    /**
     * Returns true if 'stRoleConnectInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleConnectInfo()
    {
        return $this->get(self::STROLECONNECTINFO) !== null;
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
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }

    /**
     * Sets value of 'stRoleSkillInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleSkillInfo $value Property value
     *
     * @return null
     */
    public function setStRoleSkillInfo(\Xnhd\Core\Pb\Sdo\RoleSkillInfo $value=null)
    {
        return $this->set(self::STROLESKILLINFO, $value);
    }

    /**
     * Returns value of 'stRoleSkillInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleSkillInfo
     */
    public function getStRoleSkillInfo()
    {
        return $this->get(self::STROLESKILLINFO);
    }

    /**
     * Returns true if 'stRoleSkillInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleSkillInfo()
    {
        return $this->get(self::STROLESKILLINFO) !== null;
    }

    /**
     * Sets value of 'stRoleBufferInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleBufferInfo $value Property value
     *
     * @return null
     */
    public function setStRoleBufferInfo(\Xnhd\Core\Pb\Sdo\RoleBufferInfo $value=null)
    {
        return $this->set(self::STROLEBUFFERINFO, $value);
    }

    /**
     * Returns value of 'stRoleBufferInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBufferInfo
     */
    public function getStRoleBufferInfo()
    {
        return $this->get(self::STROLEBUFFERINFO);
    }

    /**
     * Returns true if 'stRoleBufferInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleBufferInfo()
    {
        return $this->get(self::STROLEBUFFERINFO) !== null;
    }

    /**
     * Sets value of 'stRoleRoomGeneralInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoleRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value=null)
    {
        return $this->set(self::STROLEROOMGENERALINFO, $value);
    }

    /**
     * Returns value of 'stRoleRoomGeneralInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo
     */
    public function getStRoleRoomGeneralInfo()
    {
        return $this->get(self::STROLEROOMGENERALINFO);
    }

    /**
     * Returns true if 'stRoleRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleRoomGeneralInfo()
    {
        return $this->get(self::STROLEROOMGENERALINFO) !== null;
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
     * Sets value of 'stRoleGuildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGuildInfo $value Property value
     *
     * @return null
     */
    public function setStRoleGuildInfo(\Xnhd\Core\Pb\Sdo\RoleGuildInfo $value=null)
    {
        return $this->set(self::STROLEGUILDINFO, $value);
    }

    /**
     * Returns value of 'stRoleGuildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInfo
     */
    public function getStRoleGuildInfo()
    {
        return $this->get(self::STROLEGUILDINFO);
    }

    /**
     * Returns true if 'stRoleGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleGuildInfo()
    {
        return $this->get(self::STROLEGUILDINFO) !== null;
    }

    /**
     * Sets value of 'stRoleLoverInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleLoverInfo $value Property value
     *
     * @return null
     */
    public function setStRoleLoverInfo(\Xnhd\Core\Pb\Sdo\RoleLoverInfo $value=null)
    {
        return $this->set(self::STROLELOVERINFO, $value);
    }

    /**
     * Returns value of 'stRoleLoverInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleLoverInfo
     */
    public function getStRoleLoverInfo()
    {
        return $this->get(self::STROLELOVERINFO);
    }

    /**
     * Returns true if 'stRoleLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleLoverInfo()
    {
        return $this->get(self::STROLELOVERINFO) !== null;
    }

    /**
     * Appends value to 'arrRoleFriendInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleFriendInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleFriendInfo(\Xnhd\Core\Pb\Sdo\RoleFriendInfo $value)
    {
        return $this->append(self::ARRROLEFRIENDINFO, $value);
    }

    /**
     * Clears 'arrRoleFriendInfo' list
     *
     * @return null
     */
    public function clearArrRoleFriendInfo()
    {
        return $this->clear(self::ARRROLEFRIENDINFO);
    }

    /**
     * Returns 'arrRoleFriendInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleFriendInfo[]
     */
    public function getArrRoleFriendInfo()
    {
        return $this->get(self::ARRROLEFRIENDINFO);
    }

    /**
     * Returns true if 'arrRoleFriendInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleFriendInfo()
    {
        return count($this->get(self::ARRROLEFRIENDINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleFriendInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleFriendInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEFRIENDINFO));
    }

    /**
     * Returns element from 'arrRoleFriendInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleFriendInfo
     */
    public function getArrRoleFriendInfoAt($offset)
    {
        return $this->get(self::ARRROLEFRIENDINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleFriendInfo' list
     *
     * @return int
     */
    public function getArrRoleFriendInfoCount()
    {
        return $this->count(self::ARRROLEFRIENDINFO);
    }

    /**
     * Sets value of 'stHouseDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDetailInfo $value Property value
     *
     * @return null
     */
    public function setStHouseDetailInfo(\Xnhd\Core\Pb\Sdo\HouseDetailInfo $value=null)
    {
        return $this->set(self::STHOUSEDETAILINFO, $value);
    }

    /**
     * Returns value of 'stHouseDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDetailInfo
     */
    public function getStHouseDetailInfo()
    {
        return $this->get(self::STHOUSEDETAILINFO);
    }

    /**
     * Returns true if 'stHouseDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHouseDetailInfo()
    {
        return $this->get(self::STHOUSEDETAILINFO) !== null;
    }

    /**
     * Appends value to 'arrMp3ID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMp3ID($value)
    {
        return $this->append(self::ARRMP3ID, $value);
    }

    /**
     * Clears 'arrMp3ID' list
     *
     * @return null
     */
    public function clearArrMp3ID()
    {
        return $this->clear(self::ARRMP3ID);
    }

    /**
     * Returns 'arrMp3ID' list
     *
     * @return integer[]
     */
    public function getArrMp3ID()
    {
        return $this->get(self::ARRMP3ID);
    }

    /**
     * Returns true if 'arrMp3ID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMp3ID()
    {
        return count($this->get(self::ARRMP3ID)) !== 0;
    }

    /**
     * Returns 'arrMp3ID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMp3IDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMP3ID));
    }

    /**
     * Returns element from 'arrMp3ID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMp3IDAt($offset)
    {
        return $this->get(self::ARRMP3ID, $offset);
    }

    /**
     * Returns count of 'arrMp3ID' list
     *
     * @return int
     */
    public function getArrMp3IDCount()
    {
        return $this->count(self::ARRMP3ID);
    }
}
}