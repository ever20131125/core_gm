<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AdmireLover message
 */
class AdmireLover extends \ProtobufMessage
{
    /* Field index constants */
    const ADMIREID = 1;
    const ADMIRETYPE = 2;
    const ADMIREVALUE = 3;
    const GOODWILL = 4;
    const ROLENAME = 5;
    const ACCOUNTID = 6;
    const PICTYPE = 7;
    const ROLEPICID = 8;
    const GENDER = 9;
    const LEVEL = 10;
    const BIRTHDAY = 11;
    const HOBBY = 12;
    const CONSTELLATION = 13;
    const ADDRESS = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ADMIREID => array(
            'name' => 'admireID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADMIRETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendType::enmFriendType_None,
            'name' => 'admireType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADMIREVALUE => array(
            'name' => 'admireValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GOODWILL => array(
            'name' => 'goodwill',
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
        self::PICTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PicType::enmPicType_HeadGame,
            'name' => 'PicType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEPICID => array(
            'name' => 'rolePicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BIRTHDAY => array(
            'name' => 'birthday',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOBBY => array(
            'name' => 'hobby',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONSTELLATION => array(
            'name' => 'constellation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADDRESS => array(
            'name' => 'address',
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
        $this->values[self::ADMIREID] = null;
        $this->values[self::ADMIRETYPE] = self::$fields[self::ADMIRETYPE]['default'];
        $this->values[self::ADMIREVALUE] = null;
        $this->values[self::GOODWILL] = null;
        $this->values[self::ROLENAME] = null;
        $this->values[self::ACCOUNTID] = null;
        $this->values[self::PICTYPE] = self::$fields[self::PICTYPE]['default'];
        $this->values[self::ROLEPICID] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::LEVEL] = null;
        $this->values[self::BIRTHDAY] = null;
        $this->values[self::HOBBY] = null;
        $this->values[self::CONSTELLATION] = null;
        $this->values[self::ADDRESS] = null;
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
     * Sets value of 'admireID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAdmireID($value)
    {
        return $this->set(self::ADMIREID, $value);
    }

    /**
     * Returns value of 'admireID' property
     *
     * @return integer
     */
    public function getAdmireID()
    {
        $value = $this->get(self::ADMIREID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'admireID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdmireID()
    {
        return $this->get(self::ADMIREID) !== null;
    }

    /**
     * Sets value of 'admireType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAdmireType($value)
    {
        return $this->set(self::ADMIRETYPE, $value);
    }

    /**
     * Returns value of 'admireType' property
     *
     * @return integer
     */
    public function getAdmireType()
    {
        $value = $this->get(self::ADMIRETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'admireType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdmireType()
    {
        return $this->get(self::ADMIRETYPE) !== null;
    }

    /**
     * Sets value of 'admireValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAdmireValue($value)
    {
        return $this->set(self::ADMIREVALUE, $value);
    }

    /**
     * Returns value of 'admireValue' property
     *
     * @return integer
     */
    public function getAdmireValue()
    {
        $value = $this->get(self::ADMIREVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'admireValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdmireValue()
    {
        return $this->get(self::ADMIREVALUE) !== null;
    }

    /**
     * Sets value of 'goodwill' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGoodwill($value)
    {
        return $this->set(self::GOODWILL, $value);
    }

    /**
     * Returns value of 'goodwill' property
     *
     * @return integer
     */
    public function getGoodwill()
    {
        $value = $this->get(self::GOODWILL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'goodwill' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGoodwill()
    {
        return $this->get(self::GOODWILL) !== null;
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
     * Sets value of 'PicType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPicType($value)
    {
        return $this->set(self::PICTYPE, $value);
    }

    /**
     * Returns value of 'PicType' property
     *
     * @return integer
     */
    public function getPicType()
    {
        $value = $this->get(self::PICTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'PicType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPicType()
    {
        return $this->get(self::PICTYPE) !== null;
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
     * Sets value of 'hobby' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHobby($value)
    {
        return $this->set(self::HOBBY, $value);
    }

    /**
     * Returns value of 'hobby' property
     *
     * @return integer
     */
    public function getHobby()
    {
        $value = $this->get(self::HOBBY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hobby' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHobby()
    {
        return $this->get(self::HOBBY) !== null;
    }

    /**
     * Sets value of 'constellation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConstellation($value)
    {
        return $this->set(self::CONSTELLATION, $value);
    }

    /**
     * Returns value of 'constellation' property
     *
     * @return integer
     */
    public function getConstellation()
    {
        $value = $this->get(self::CONSTELLATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'constellation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConstellation()
    {
        return $this->get(self::CONSTELLATION) !== null;
    }

    /**
     * Sets value of 'address' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddress($value)
    {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return integer
     */
    public function getAddress()
    {
        $value = $this->get(self::ADDRESS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'address' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddress()
    {
        return $this->get(self::ADDRESS) !== null;
    }
}
}