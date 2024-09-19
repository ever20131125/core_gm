<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FindLover message
 */
class FindLover extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ROLENAME = 2;
    const ACCOUNTID = 3;
    const PICTYPE = 4;
    const ROLEPICID = 5;
    const GENDER = 6;
    const LEVEL = 7;
    const BIRTHDAY = 8;
    const HOBBY = 9;
    const CONSTELLATION = 10;
    const ADDRESS = 11;
    const FRIENDVALUE = 12;
    const PROFICIENCY = 13;
    const ONSTATE = 14;
    const MATCHRATE = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
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
        self::FRIENDVALUE => array(
            'name' => 'friendValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROFICIENCY => array(
            'name' => 'proficiency',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONSTATE => array(
            'name' => 'onState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATCHRATE => array(
            'name' => 'matchRate',
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
        $this->values[self::PICTYPE] = self::$fields[self::PICTYPE]['default'];
        $this->values[self::ROLEPICID] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::LEVEL] = null;
        $this->values[self::BIRTHDAY] = null;
        $this->values[self::HOBBY] = null;
        $this->values[self::CONSTELLATION] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::FRIENDVALUE] = null;
        $this->values[self::PROFICIENCY] = null;
        $this->values[self::ONSTATE] = null;
        $this->values[self::MATCHRATE] = null;
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

    /**
     * Sets value of 'friendValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendValue($value)
    {
        return $this->set(self::FRIENDVALUE, $value);
    }

    /**
     * Returns value of 'friendValue' property
     *
     * @return integer
     */
    public function getFriendValue()
    {
        $value = $this->get(self::FRIENDVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendValue()
    {
        return $this->get(self::FRIENDVALUE) !== null;
    }

    /**
     * Sets value of 'proficiency' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProficiency($value)
    {
        return $this->set(self::PROFICIENCY, $value);
    }

    /**
     * Returns value of 'proficiency' property
     *
     * @return integer
     */
    public function getProficiency()
    {
        $value = $this->get(self::PROFICIENCY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'proficiency' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProficiency()
    {
        return $this->get(self::PROFICIENCY) !== null;
    }

    /**
     * Sets value of 'onState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnState($value)
    {
        return $this->set(self::ONSTATE, $value);
    }

    /**
     * Returns value of 'onState' property
     *
     * @return integer
     */
    public function getOnState()
    {
        $value = $this->get(self::ONSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnState()
    {
        return $this->get(self::ONSTATE) !== null;
    }

    /**
     * Sets value of 'matchRate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMatchRate($value)
    {
        return $this->set(self::MATCHRATE, $value);
    }

    /**
     * Returns value of 'matchRate' property
     *
     * @return integer
     */
    public function getMatchRate()
    {
        $value = $this->get(self::MATCHRATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'matchRate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMatchRate()
    {
        return $this->get(self::MATCHRATE) !== null;
    }
}
}