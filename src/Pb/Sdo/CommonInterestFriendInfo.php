<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CommonInterestFriendInfo message
 */
class CommonInterestFriendInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDID = 1;
    const COMMONCOUNT = 2;
    const COMMONLABEL = 3;
    const FRIENDNAME = 4;
    const GENDER = 5;
    const LEVEL = 6;
    const PERSONALITYLABEL = 7;
    const BIRTHYEAR = 8;
    const ADDRESS = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMONCOUNT => array(
            'name' => 'commonCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMONLABEL => array(
            'name' => 'commonLabel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDNAME => array(
            'name' => 'friendName',
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
        self::PERSONALITYLABEL => array(
            'name' => 'personalityLabel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BIRTHYEAR => array(
            'name' => 'birthYear',
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::COMMONCOUNT] = null;
        $this->values[self::COMMONLABEL] = null;
        $this->values[self::FRIENDNAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::LEVEL] = null;
        $this->values[self::PERSONALITYLABEL] = null;
        $this->values[self::BIRTHYEAR] = null;
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
     * Sets value of 'friendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendID($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendID' property
     *
     * @return integer
     */
    public function getFriendID()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Sets value of 'commonCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommonCount($value)
    {
        return $this->set(self::COMMONCOUNT, $value);
    }

    /**
     * Returns value of 'commonCount' property
     *
     * @return integer
     */
    public function getCommonCount()
    {
        $value = $this->get(self::COMMONCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'commonCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommonCount()
    {
        return $this->get(self::COMMONCOUNT) !== null;
    }

    /**
     * Sets value of 'commonLabel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommonLabel($value)
    {
        return $this->set(self::COMMONLABEL, $value);
    }

    /**
     * Returns value of 'commonLabel' property
     *
     * @return integer
     */
    public function getCommonLabel()
    {
        $value = $this->get(self::COMMONLABEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'commonLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommonLabel()
    {
        return $this->get(self::COMMONLABEL) !== null;
    }

    /**
     * Sets value of 'friendName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendName($value)
    {
        return $this->set(self::FRIENDNAME, $value);
    }

    /**
     * Returns value of 'friendName' property
     *
     * @return string
     */
    public function getFriendName()
    {
        $value = $this->get(self::FRIENDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendName()
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
     * Sets value of 'personalityLabel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPersonalityLabel($value)
    {
        return $this->set(self::PERSONALITYLABEL, $value);
    }

    /**
     * Returns value of 'personalityLabel' property
     *
     * @return integer
     */
    public function getPersonalityLabel()
    {
        $value = $this->get(self::PERSONALITYLABEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'personalityLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPersonalityLabel()
    {
        return $this->get(self::PERSONALITYLABEL) !== null;
    }

    /**
     * Sets value of 'birthYear' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBirthYear($value)
    {
        return $this->set(self::BIRTHYEAR, $value);
    }

    /**
     * Returns value of 'birthYear' property
     *
     * @return integer
     */
    public function getBirthYear()
    {
        $value = $this->get(self::BIRTHYEAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'birthYear' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBirthYear()
    {
        return $this->get(self::BIRTHYEAR) !== null;
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