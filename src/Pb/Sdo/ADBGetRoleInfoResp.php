<?php
/**
 * Auto generated from accountdbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ADBGetRoleInfoResp message
 */
class ADBGetRoleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STROLEPUBLICINFO = 3;
    const STROLEPRIVATEINFO = 4;
    const STAVATARINFO = 5;
    const STROLEBUFFERINFO = 6;
    const RECHARGE = 7;
    const GUILD_ID = 8;
    const GUILD_NAME = 9;
    const BAN_PLAY = 10;
    const ONLINE = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::STROLEBUFFERINFO => array(
            'name' => 'stRoleBufferInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBufferInfo'
        ),
        self::RECHARGE => array(
            'name' => 'recharge',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILD_ID => array(
            'name' => 'guild_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILD_NAME => array(
            'name' => 'guild_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BAN_PLAY => array(
            'name' => 'ban_play',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ONLINE => array(
            'name' => 'online',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::STROLEPRIVATEINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLEBUFFERINFO] = null;
        $this->values[self::RECHARGE] = null;
        $this->values[self::GUILD_ID] = null;
        $this->values[self::GUILD_NAME] = null;
        $this->values[self::BAN_PLAY] = null;
        $this->values[self::ONLINE] = null;
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
     * Sets value of 'recharge' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecharge($value)
    {
        return $this->set(self::RECHARGE, $value);
    }

    /**
     * Returns value of 'recharge' property
     *
     * @return integer
     */
    public function getRecharge()
    {
        $value = $this->get(self::RECHARGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recharge' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecharge()
    {
        return $this->get(self::RECHARGE) !== null;
    }

    /**
     * Sets value of 'guild_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildId($value)
    {
        return $this->set(self::GUILD_ID, $value);
    }

    /**
     * Returns value of 'guild_id' property
     *
     * @return integer
     */
    public function getGuildId()
    {
        $value = $this->get(self::GUILD_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guild_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildId()
    {
        return $this->get(self::GUILD_ID) !== null;
    }

    /**
     * Sets value of 'guild_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuildName($value)
    {
        return $this->set(self::GUILD_NAME, $value);
    }

    /**
     * Returns value of 'guild_name' property
     *
     * @return string
     */
    public function getGuildName()
    {
        $value = $this->get(self::GUILD_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guild_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildName()
    {
        return $this->get(self::GUILD_NAME) !== null;
    }

    /**
     * Sets value of 'ban_play' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBanPlay($value)
    {
        return $this->set(self::BAN_PLAY, $value);
    }

    /**
     * Returns value of 'ban_play' property
     *
     * @return boolean
     */
    public function getBanPlay()
    {
        $value = $this->get(self::BAN_PLAY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'ban_play' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBanPlay()
    {
        return $this->get(self::BAN_PLAY) !== null;
    }

    /**
     * Sets value of 'online' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setOnline($value)
    {
        return $this->set(self::ONLINE, $value);
    }

    /**
     * Returns value of 'online' property
     *
     * @return boolean
     */
    public function getOnline()
    {
        $value = $this->get(self::ONLINE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'online' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnline()
    {
        return $this->get(self::ONLINE) !== null;
    }
}
}