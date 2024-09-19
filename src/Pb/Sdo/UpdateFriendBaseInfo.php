<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UpdateFriendBaseInfo message
 */
class UpdateFriendBaseInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ACCOUNTID = 1;
    const FRIENDNAME = 2;
    const GENDER = 3;
    const LEVEL = 4;
    const BIRTHDAY = 6;
    const ADDRESS = 7;
    const LABEL = 8;
    const FRIENDTYPE = 9;
    const FRIENDSHIPLEVEL = 10;
    const OPTION = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACCOUNTID => array(
            'name' => 'accountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FRIENDNAME => array(
            'name' => 'friendname',
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
        self::BIRTHDAY => array(
            'name' => 'birthday',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADDRESS => array(
            'name' => 'address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LABEL => array(
            'name' => 'label',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendType::enmFriendType_None,
            'name' => 'friendType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDSHIPLEVEL => array(
            'name' => 'friendshipLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTION => array(
            'name' => 'option',
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
        $this->values[self::ACCOUNTID] = null;
        $this->values[self::FRIENDNAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::LEVEL] = null;
        $this->values[self::BIRTHDAY] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::LABEL] = null;
        $this->values[self::FRIENDTYPE] = self::$fields[self::FRIENDTYPE]['default'];
        $this->values[self::FRIENDSHIPLEVEL] = null;
        $this->values[self::OPTION] = null;
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
     * Sets value of 'friendname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendname($value)
    {
        return $this->set(self::FRIENDNAME, $value);
    }

    /**
     * Returns value of 'friendname' property
     *
     * @return string
     */
    public function getFriendname()
    {
        $value = $this->get(self::FRIENDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendname()
    {
        return $this->get(self::FRIENDNAME) !== null;
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
     * Sets value of 'label' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLabel($value)
    {
        return $this->set(self::LABEL, $value);
    }

    /**
     * Returns value of 'label' property
     *
     * @return integer
     */
    public function getLabel()
    {
        $value = $this->get(self::LABEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'label' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabel()
    {
        return $this->get(self::LABEL) !== null;
    }

    /**
     * Sets value of 'friendType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendType($value)
    {
        return $this->set(self::FRIENDTYPE, $value);
    }

    /**
     * Returns value of 'friendType' property
     *
     * @return integer
     */
    public function getFriendType()
    {
        $value = $this->get(self::FRIENDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendType()
    {
        return $this->get(self::FRIENDTYPE) !== null;
    }

    /**
     * Sets value of 'friendshipLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendshipLevel($value)
    {
        return $this->set(self::FRIENDSHIPLEVEL, $value);
    }

    /**
     * Returns value of 'friendshipLevel' property
     *
     * @return integer
     */
    public function getFriendshipLevel()
    {
        $value = $this->get(self::FRIENDSHIPLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendshipLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendshipLevel()
    {
        return $this->get(self::FRIENDSHIPLEVEL) !== null;
    }

    /**
     * Sets value of 'option' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption($value)
    {
        return $this->set(self::OPTION, $value);
    }

    /**
     * Returns value of 'option' property
     *
     * @return integer
     */
    public function getOption()
    {
        $value = $this->get(self::OPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption()
    {
        return $this->get(self::OPTION) !== null;
    }
}
}