<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HoroscopeMathcFriendInfo message
 */
class HoroscopeMathcFriendInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDID = 1;
    const FRIENDNAME = 2;
    const ADDRESS = 3;
    const GENDER = 4;
    const HOROSCOPETYPE = 5;
    const HOROSCOPEVALUE = 6;
    const HOROSCOPEDESC = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDNAME => array(
            'name' => 'friendName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDRESS => array(
            'name' => 'address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOROSCOPETYPE => array(
            'name' => 'horoscopeType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOROSCOPEVALUE => array(
            'name' => 'horoscopeValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOROSCOPEDESC => array(
            'name' => 'horoscopeDesc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::FRIENDNAME] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::HOROSCOPETYPE] = null;
        $this->values[self::HOROSCOPEVALUE] = null;
        $this->values[self::HOROSCOPEDESC] = null;
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
     * Sets value of 'horoscopeType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHoroscopeType($value)
    {
        return $this->set(self::HOROSCOPETYPE, $value);
    }

    /**
     * Returns value of 'horoscopeType' property
     *
     * @return integer
     */
    public function getHoroscopeType()
    {
        $value = $this->get(self::HOROSCOPETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'horoscopeType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHoroscopeType()
    {
        return $this->get(self::HOROSCOPETYPE) !== null;
    }

    /**
     * Sets value of 'horoscopeValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHoroscopeValue($value)
    {
        return $this->set(self::HOROSCOPEVALUE, $value);
    }

    /**
     * Returns value of 'horoscopeValue' property
     *
     * @return integer
     */
    public function getHoroscopeValue()
    {
        $value = $this->get(self::HOROSCOPEVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'horoscopeValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHoroscopeValue()
    {
        return $this->get(self::HOROSCOPEVALUE) !== null;
    }

    /**
     * Sets value of 'horoscopeDesc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHoroscopeDesc($value)
    {
        return $this->set(self::HOROSCOPEDESC, $value);
    }

    /**
     * Returns value of 'horoscopeDesc' property
     *
     * @return string
     */
    public function getHoroscopeDesc()
    {
        $value = $this->get(self::HOROSCOPEDESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'horoscopeDesc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHoroscopeDesc()
    {
        return $this->get(self::HOROSCOPEDESC) !== null;
    }
}
}