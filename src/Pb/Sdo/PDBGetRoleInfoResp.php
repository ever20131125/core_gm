<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRoleInfoResp message
 */
class PDBGetRoleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STROLEPUBLICINFO = 2;
    const STROLEPRIVATEINFO = 3;
    const STAVATARINFO = 4;
    const STROLESKILLINFO = 5;
    const STROLEITEMBUFFER = 6;
    const STHOUSEINFO = 7;
    const STROLEONLINEINFO = 8;

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
        self::STHOUSEINFO => array(
            'name' => 'stHouseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
        ),
        self::STROLEONLINEINFO => array(
            'name' => 'stRoleOnlineInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleOnlineInfo'
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
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::STROLEITEMBUFFER] = null;
        $this->values[self::STHOUSEINFO] = null;
        $this->values[self::STROLEONLINEINFO] = null;
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
     * Sets value of 'stRoleOnlineInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleOnlineInfo $value Property value
     *
     * @return null
     */
    public function setStRoleOnlineInfo(\Xnhd\Core\Pb\Sdo\RoleOnlineInfo $value=null)
    {
        return $this->set(self::STROLEONLINEINFO, $value);
    }

    /**
     * Returns value of 'stRoleOnlineInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleOnlineInfo
     */
    public function getStRoleOnlineInfo()
    {
        return $this->get(self::STROLEONLINEINFO);
    }

    /**
     * Returns true if 'stRoleOnlineInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleOnlineInfo()
    {
        return $this->get(self::STROLEONLINEINFO) !== null;
    }
}
}