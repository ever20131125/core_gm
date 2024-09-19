<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RecommendInfo message
 */
class RecommendInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ROLENAME = 2;
    const ACCOUNTID = 3;
    const GENDER = 4;
    const LEVEL = 5;
    const PICTYPE = 6;
    const ROLEPICID = 7;
    const CITY = 8;
    const LASTLOGOUTTIME = 9;

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
        self::PICTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PicType::enmPicType_HeadGame,
            'name' => 'picType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEPICID => array(
            'name' => 'rolePicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTLOGOUTTIME => array(
            'name' => 'lastLogoutTime',
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
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::LEVEL] = null;
        $this->values[self::PICTYPE] = self::$fields[self::PICTYPE]['default'];
        $this->values[self::ROLEPICID] = null;
        $this->values[self::CITY] = null;
        $this->values[self::LASTLOGOUTTIME] = null;
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
     * Sets value of 'picType' property
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
     * Returns value of 'picType' property
     *
     * @return integer
     */
    public function getPicType()
    {
        $value = $this->get(self::PICTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'picType' property is set, false otherwise
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
     * Sets value of 'city' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return integer
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'city' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCity()
    {
        return $this->get(self::CITY) !== null;
    }

    /**
     * Sets value of 'lastLogoutTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastLogoutTime($value)
    {
        return $this->set(self::LASTLOGOUTTIME, $value);
    }

    /**
     * Returns value of 'lastLogoutTime' property
     *
     * @return integer
     */
    public function getLastLogoutTime()
    {
        $value = $this->get(self::LASTLOGOUTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastLogoutTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastLogoutTime()
    {
        return $this->get(self::LASTLOGOUTTIME) !== null;
    }
}
}