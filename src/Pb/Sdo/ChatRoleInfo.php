<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChatRoleInfo message
 */
class ChatRoleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ROLENAME = 2;
    const ACCOUNTID = 3;
    const LEVEL = 4;
    const VIPLEVEL = 5;
    const TITLE = 6;
    const ZONEID = 7;
    const CHANNELID = 8;
    const UNREADCNT = 9;
    const NAMERGB = 10;
    const ROLETYPE = 11;
    const GENDER = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLENAME => array(
            'name' => 'rolename',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACCOUNTID => array(
            'name' => 'accountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIPLEVEL => array(
            'name' => 'vipLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ZONEID => array(
            'name' => 'zoneid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHANNELID => array(
            'name' => 'channelid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UNREADCNT => array(
            'name' => 'UnReadCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAMERGB => array(
            'name' => 'nameRGB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLETYPE => array(
            'name' => 'roleType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ROLENAME] = null;
        $this->values[self::ACCOUNTID] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::VIPLEVEL] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::ZONEID] = null;
        $this->values[self::CHANNELID] = null;
        $this->values[self::UNREADCNT] = null;
        $this->values[self::NAMERGB] = null;
        $this->values[self::ROLETYPE] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'rolename' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRolename($value)
    {
        return $this->set(self::ROLENAME, $value);
    }

    /**
     * Returns value of 'rolename' property
     *
     * @return string
     */
    public function getRolename()
    {
        $value = $this->get(self::ROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'rolename' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRolename()
    {
        return $this->get(self::ROLENAME) !== null;
    }

    /**
     * Sets value of 'accountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccountID($value)
    {
        return $this->set(self::ACCOUNTID, $value);
    }

    /**
     * Returns value of 'accountID' property
     *
     * @return string
     */
    public function getAccountID()
    {
        $value = $this->get(self::ACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'accountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccountID()
    {
        return $this->get(self::ACCOUNTID) !== null;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }

    /**
     * Sets value of 'vipLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVipLevel($value)
    {
        return $this->set(self::VIPLEVEL, $value);
    }

    /**
     * Returns value of 'vipLevel' property
     *
     * @return integer
     */
    public function getVipLevel()
    {
        $value = $this->get(self::VIPLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'vipLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVipLevel()
    {
        return $this->get(self::VIPLEVEL) !== null;
    }

    /**
     * Sets value of 'title' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return integer
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'title' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitle()
    {
        return $this->get(self::TITLE) !== null;
    }

    /**
     * Sets value of 'zoneid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneid($value)
    {
        return $this->set(self::ZONEID, $value);
    }

    /**
     * Returns value of 'zoneid' property
     *
     * @return integer
     */
    public function getZoneid()
    {
        $value = $this->get(self::ZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneid()
    {
        return $this->get(self::ZONEID) !== null;
    }

    /**
     * Sets value of 'channelid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChannelid($value)
    {
        return $this->set(self::CHANNELID, $value);
    }

    /**
     * Returns value of 'channelid' property
     *
     * @return integer
     */
    public function getChannelid()
    {
        $value = $this->get(self::CHANNELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'channelid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChannelid()
    {
        return $this->get(self::CHANNELID) !== null;
    }

    /**
     * Sets value of 'UnReadCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnReadCnt($value)
    {
        return $this->set(self::UNREADCNT, $value);
    }

    /**
     * Returns value of 'UnReadCnt' property
     *
     * @return integer
     */
    public function getUnReadCnt()
    {
        $value = $this->get(self::UNREADCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'UnReadCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnReadCnt()
    {
        return $this->get(self::UNREADCNT) !== null;
    }

    /**
     * Sets value of 'nameRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNameRGB($value)
    {
        return $this->set(self::NAMERGB, $value);
    }

    /**
     * Returns value of 'nameRGB' property
     *
     * @return integer
     */
    public function getNameRGB()
    {
        $value = $this->get(self::NAMERGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nameRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNameRGB()
    {
        return $this->get(self::NAMERGB) !== null;
    }

    /**
     * Sets value of 'roleType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleType($value)
    {
        return $this->set(self::ROLETYPE, $value);
    }

    /**
     * Returns value of 'roleType' property
     *
     * @return integer
     */
    public function getRoleType()
    {
        $value = $this->get(self::ROLETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleType()
    {
        return $this->get(self::ROLETYPE) !== null;
    }

    /**
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }
}
}