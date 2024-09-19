<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSCreateRoleResp message
 */
class COSCreateRoleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STROLEPUBLICINFO = 3;
    const STROLEPRIVATEINFO = 4;
    const STROLEATTRINFO = 5;
    const STAVATARINFO = 6;
    const STROLESKILLINFO = 7;
    const STROLEITEMBUFFER = 8;
    const STROLECHANNELINFO = 9;
    const STCHANNELDETAILINFO = 10;
    const NSELECT = 11;
    const STHOUSEINFO = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
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
        self::STROLEATTRINFO => array(
            'name' => 'stRoleAttrInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleAttrInfo'
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
        self::NSELECT => array(
            'name' => 'nSelect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STHOUSEINFO => array(
            'name' => 'stHouseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
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
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::STROLEPRIVATEINFO] = null;
        $this->values[self::STROLEATTRINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::STROLEITEMBUFFER] = null;
        $this->values[self::STROLECHANNELINFO] = null;
        $this->values[self::STCHANNELDETAILINFO] = null;
        $this->values[self::NSELECT] = null;
        $this->values[self::STHOUSEINFO] = null;
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
     * Sets value of 'stRoleAttrInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleAttrInfo $value Property value
     *
     * @return null
     */
    public function setStRoleAttrInfo(\Xnhd\Core\Pb\Sdo\RoleAttrInfo $value=null)
    {
        return $this->set(self::STROLEATTRINFO, $value);
    }

    /**
     * Returns value of 'stRoleAttrInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleAttrInfo
     */
    public function getStRoleAttrInfo()
    {
        return $this->get(self::STROLEATTRINFO);
    }

    /**
     * Returns true if 'stRoleAttrInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleAttrInfo()
    {
        return $this->get(self::STROLEATTRINFO) !== null;
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
     * Sets value of 'nSelect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect($value)
    {
        return $this->set(self::NSELECT, $value);
    }

    /**
     * Returns value of 'nSelect' property
     *
     * @return integer
     */
    public function getNSelect()
    {
        $value = $this->get(self::NSELECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect()
    {
        return $this->get(self::NSELECT) !== null;
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
}
}