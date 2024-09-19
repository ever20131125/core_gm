<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSLoginNoti message
 */
class COSLoginNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NZONEID = 2;
    const NBANREASON = 3;
    const NBANENDTIME = 4;
    const ARRDATA = 5;
    const NSERVERTIME = 6;
    const BHASROLE = 7;
    const STROLEPUBLICINFO = 8;
    const STROLEPRIVATEINFO = 9;
    const STAVATARINFO = 10;
    const STROLESKILLINFO = 11;
    const STROLEITEMBUFFER = 12;
    const STROLECHANNELINFO = 13;
    const STCHANNELDETAILINFO = 14;
    const STHOUSEINFO = 15;
    const NRELOGIN = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBANREASON => array(
            'name' => 'nBanReason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBANENDTIME => array(
            'name' => 'nBanEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDATA => array(
            'name' => 'arrData',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSERVERTIME => array(
            'name' => 'nServerTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BHASROLE => array(
            'name' => 'bHasRole',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STROLEPRIVATEINFO => array(
            'name' => 'stRolePrivateInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePrivateInfo'
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
        self::STROLEITEMBUFFER => array(
            'name' => 'stRoleItemBuffer',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleItemBuffer'
        ),
        self::STROLECHANNELINFO => array(
            'name' => 'stRoleChannelInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleChannelInfo'
        ),
        self::STCHANNELDETAILINFO => array(
            'name' => 'stChannelDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ChannelDetailInfo'
        ),
        self::STHOUSEINFO => array(
            'name' => 'stHouseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
        ),
        self::NRELOGIN => array(
            'name' => 'nRelogin',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::NBANREASON] = null;
        $this->values[self::NBANENDTIME] = null;
        $this->values[self::ARRDATA] = array();
        $this->values[self::NSERVERTIME] = null;
        $this->values[self::BHASROLE] = null;
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::STROLEPRIVATEINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::STROLEITEMBUFFER] = null;
        $this->values[self::STROLECHANNELINFO] = null;
        $this->values[self::STCHANNELDETAILINFO] = null;
        $this->values[self::STHOUSEINFO] = null;
        $this->values[self::NRELOGIN] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'nBanReason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBanReason($value)
    {
        return $this->set(self::NBANREASON, $value);
    }

    /**
     * Returns value of 'nBanReason' property
     *
     * @return integer
     */
    public function getNBanReason()
    {
        $value = $this->get(self::NBANREASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBanReason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBanReason()
    {
        return $this->get(self::NBANREASON) !== null;
    }

    /**
     * Sets value of 'nBanEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBanEndTime($value)
    {
        return $this->set(self::NBANENDTIME, $value);
    }

    /**
     * Returns value of 'nBanEndTime' property
     *
     * @return integer
     */
    public function getNBanEndTime()
    {
        $value = $this->get(self::NBANENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBanEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBanEndTime()
    {
        return $this->get(self::NBANENDTIME) !== null;
    }

    /**
     * Appends value to 'arrData' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrData($value)
    {
        return $this->append(self::ARRDATA, $value);
    }

    /**
     * Clears 'arrData' list
     *
     * @return null
     */
    public function clearArrData()
    {
        return $this->clear(self::ARRDATA);
    }

    /**
     * Returns 'arrData' list
     *
     * @return integer[]
     */
    public function getArrData()
    {
        return $this->get(self::ARRDATA);
    }

    /**
     * Returns true if 'arrData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrData()
    {
        return count($this->get(self::ARRDATA)) !== 0;
    }

    /**
     * Returns 'arrData' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDataIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDATA));
    }

    /**
     * Returns element from 'arrData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDataAt($offset)
    {
        return $this->get(self::ARRDATA, $offset);
    }

    /**
     * Returns count of 'arrData' list
     *
     * @return int
     */
    public function getArrDataCount()
    {
        return $this->count(self::ARRDATA);
    }

    /**
     * Sets value of 'nServerTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNServerTime($value)
    {
        return $this->set(self::NSERVERTIME, $value);
    }

    /**
     * Returns value of 'nServerTime' property
     *
     * @return integer
     */
    public function getNServerTime()
    {
        $value = $this->get(self::NSERVERTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nServerTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNServerTime()
    {
        return $this->get(self::NSERVERTIME) !== null;
    }

    /**
     * Sets value of 'bHasRole' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBHasRole($value)
    {
        return $this->set(self::BHASROLE, $value);
    }

    /**
     * Returns value of 'bHasRole' property
     *
     * @return boolean
     */
    public function getBHasRole()
    {
        $value = $this->get(self::BHASROLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bHasRole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBHasRole()
    {
        return $this->get(self::BHASROLE) !== null;
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
     * Sets value of 'stRolePrivateInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePrivateInfo $value Property value
     *
     * @return null
     */
    public function setStRolePrivateInfo(\Xnhd\Core\Pb\Sdo\RolePrivateInfo $value=null)
    {
        return $this->set(self::STROLEPRIVATEINFO, $value);
    }

    /**
     * Returns value of 'stRolePrivateInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePrivateInfo
     */
    public function getStRolePrivateInfo()
    {
        return $this->get(self::STROLEPRIVATEINFO);
    }

    /**
     * Returns true if 'stRolePrivateInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePrivateInfo()
    {
        return $this->get(self::STROLEPRIVATEINFO) !== null;
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
     * Sets value of 'stRoleItemBuffer' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleItemBuffer $value Property value
     *
     * @return null
     */
    public function setStRoleItemBuffer(\Xnhd\Core\Pb\Sdo\RoleItemBuffer $value=null)
    {
        return $this->set(self::STROLEITEMBUFFER, $value);
    }

    /**
     * Returns value of 'stRoleItemBuffer' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleItemBuffer
     */
    public function getStRoleItemBuffer()
    {
        return $this->get(self::STROLEITEMBUFFER);
    }

    /**
     * Returns true if 'stRoleItemBuffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleItemBuffer()
    {
        return $this->get(self::STROLEITEMBUFFER) !== null;
    }

    /**
     * Sets value of 'stRoleChannelInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleChannelInfo $value Property value
     *
     * @return null
     */
    public function setStRoleChannelInfo(\Xnhd\Core\Pb\Sdo\RoleChannelInfo $value=null)
    {
        return $this->set(self::STROLECHANNELINFO, $value);
    }

    /**
     * Returns value of 'stRoleChannelInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleChannelInfo
     */
    public function getStRoleChannelInfo()
    {
        return $this->get(self::STROLECHANNELINFO);
    }

    /**
     * Returns true if 'stRoleChannelInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleChannelInfo()
    {
        return $this->get(self::STROLECHANNELINFO) !== null;
    }

    /**
     * Sets value of 'stChannelDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ChannelDetailInfo $value Property value
     *
     * @return null
     */
    public function setStChannelDetailInfo(\Xnhd\Core\Pb\Sdo\ChannelDetailInfo $value=null)
    {
        return $this->set(self::STCHANNELDETAILINFO, $value);
    }

    /**
     * Returns value of 'stChannelDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ChannelDetailInfo
     */
    public function getStChannelDetailInfo()
    {
        return $this->get(self::STCHANNELDETAILINFO);
    }

    /**
     * Returns true if 'stChannelDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStChannelDetailInfo()
    {
        return $this->get(self::STCHANNELDETAILINFO) !== null;
    }

    /**
     * Sets value of 'stHouseInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDetailInfo $value Property value
     *
     * @return null
     */
    public function setStHouseInfo(\Xnhd\Core\Pb\Sdo\HouseDetailInfo $value=null)
    {
        return $this->set(self::STHOUSEINFO, $value);
    }

    /**
     * Returns value of 'stHouseInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDetailInfo
     */
    public function getStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO);
    }

    /**
     * Returns true if 'stHouseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO) !== null;
    }

    /**
     * Sets value of 'nRelogin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRelogin($value)
    {
        return $this->set(self::NRELOGIN, $value);
    }

    /**
     * Returns value of 'nRelogin' property
     *
     * @return integer
     */
    public function getNRelogin()
    {
        $value = $this->get(self::NRELOGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRelogin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRelogin()
    {
        return $this->get(self::NRELOGIN) !== null;
    }
}
}