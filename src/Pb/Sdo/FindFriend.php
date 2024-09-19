<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FindFriend message
 */
class FindFriend extends \ProtobufMessage
{
    /* Field index constants */
    const ZONEID = 1;
    const ROLEID = 2;
    const LEVEL = 3;
    const ROLEPICID = 4;
    const BIRTHDAY = 5;
    const VALUE = 6;
    const ROLENAME = 7;
    const ACCOUNTID = 8;
    const GENDER = 9;
    const ROLEPICTYPE = 10;
    const RECENTONLINE = 11;
    const POP = 12;
    const ISATTENTION = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ZONEID => array(
            'name' => 'zoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEPICID => array(
            'name' => 'rolePicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BIRTHDAY => array(
            'name' => 'birthday',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE => array(
            'name' => 'value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLENAME => array(
            'name' => 'roleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACCOUNTID => array(
            'name' => 'accountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEPICTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PicType::enmPicType_HeadGame,
            'name' => 'rolePicType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECENTONLINE => array(
            'name' => 'recentOnline',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POP => array(
            'name' => 'pop',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISATTENTION => array(
            'name' => 'isAttention',
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
        $this->values[self::ZONEID] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::ROLEPICID] = null;
        $this->values[self::BIRTHDAY] = null;
        $this->values[self::VALUE] = null;
        $this->values[self::ROLENAME] = null;
        $this->values[self::ACCOUNTID] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::ROLEPICTYPE] = self::$fields[self::ROLEPICTYPE]['default'];
        $this->values[self::RECENTONLINE] = null;
        $this->values[self::POP] = null;
        $this->values[self::ISATTENTION] = null;
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
     * Sets value of 'zoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneID($value)
    {
        return $this->set(self::ZONEID, $value);
    }

    /**
     * Returns value of 'zoneID' property
     *
     * @return integer
     */
    public function getZoneID()
    {
        $value = $this->get(self::ZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneID()
    {
        return $this->get(self::ZONEID) !== null;
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
     * Sets value of 'rolePicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRolePicID($value)
    {
        return $this->set(self::ROLEPICID, $value);
    }

    /**
     * Returns value of 'rolePicID' property
     *
     * @return integer
     */
    public function getRolePicID()
    {
        $value = $this->get(self::ROLEPICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rolePicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRolePicID()
    {
        return $this->get(self::ROLEPICID) !== null;
    }

    /**
     * Sets value of 'birthday' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBirthday($value)
    {
        return $this->set(self::BIRTHDAY, $value);
    }

    /**
     * Returns value of 'birthday' property
     *
     * @return integer
     */
    public function getBirthday()
    {
        $value = $this->get(self::BIRTHDAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'birthday' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBirthday()
    {
        return $this->get(self::BIRTHDAY) !== null;
    }

    /**
     * Sets value of 'value' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return integer
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return $this->get(self::VALUE) !== null;
    }

    /**
     * Sets value of 'roleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoleName($value)
    {
        return $this->set(self::ROLENAME, $value);
    }

    /**
     * Returns value of 'roleName' property
     *
     * @return string
     */
    public function getRoleName()
    {
        $value = $this->get(self::ROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'roleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleName()
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

    /**
     * Sets value of 'rolePicType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRolePicType($value)
    {
        return $this->set(self::ROLEPICTYPE, $value);
    }

    /**
     * Returns value of 'rolePicType' property
     *
     * @return integer
     */
    public function getRolePicType()
    {
        $value = $this->get(self::ROLEPICTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rolePicType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRolePicType()
    {
        return $this->get(self::ROLEPICTYPE) !== null;
    }

    /**
     * Sets value of 'recentOnline' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecentOnline($value)
    {
        return $this->set(self::RECENTONLINE, $value);
    }

    /**
     * Returns value of 'recentOnline' property
     *
     * @return integer
     */
    public function getRecentOnline()
    {
        $value = $this->get(self::RECENTONLINE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recentOnline' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecentOnline()
    {
        return $this->get(self::RECENTONLINE) !== null;
    }

    /**
     * Sets value of 'pop' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPop($value)
    {
        return $this->set(self::POP, $value);
    }

    /**
     * Returns value of 'pop' property
     *
     * @return integer
     */
    public function getPop()
    {
        $value = $this->get(self::POP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pop' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPop()
    {
        return $this->get(self::POP) !== null;
    }

    /**
     * Sets value of 'isAttention' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsAttention($value)
    {
        return $this->set(self::ISATTENTION, $value);
    }

    /**
     * Returns value of 'isAttention' property
     *
     * @return boolean
     */
    public function getIsAttention()
    {
        $value = $this->get(self::ISATTENTION);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isAttention' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsAttention()
    {
        return $this->get(self::ISATTENTION) !== null;
    }
}
}