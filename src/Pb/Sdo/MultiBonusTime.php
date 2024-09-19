<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MultiBonusTime message
 */
class MultiBonusTime extends \ProtobufMessage
{
    /* Field index constants */
    const NZONEID = 1;
    const NACTTIMESTART = 2;
    const NACTTIMEEND = 3;
    const NTODAYTIMESTART = 4;
    const NTODAYTIMEEND = 5;
    const NMULTIEXP = 6;
    const NMULTIGCOIN = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTTIMESTART => array(
            'name' => 'nActTimeStart',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTTIMEEND => array(
            'name' => 'nActTimeEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTODAYTIMESTART => array(
            'name' => 'nTodayTimeStart',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTODAYTIMEEND => array(
            'name' => 'nTodayTimeEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMULTIEXP => array(
            'name' => 'nMultiExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMULTIGCOIN => array(
            'name' => 'nMultiGCoin',
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
        $this->values[self::NZONEID] = null;
        $this->values[self::NACTTIMESTART] = null;
        $this->values[self::NACTTIMEEND] = null;
        $this->values[self::NTODAYTIMESTART] = null;
        $this->values[self::NTODAYTIMEEND] = null;
        $this->values[self::NMULTIEXP] = null;
        $this->values[self::NMULTIGCOIN] = null;
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
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Sets value of 'nActTimeStart' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActTimeStart($value)
    {
        return $this->set(self::NACTTIMESTART, $value);
    }

    /**
     * Returns value of 'nActTimeStart' property
     *
     * @return integer
     */
    public function getNActTimeStart()
    {
        $value = $this->get(self::NACTTIMESTART);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActTimeStart' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActTimeStart()
    {
        return $this->get(self::NACTTIMESTART) !== null;
    }

    /**
     * Sets value of 'nActTimeEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActTimeEnd($value)
    {
        return $this->set(self::NACTTIMEEND, $value);
    }

    /**
     * Returns value of 'nActTimeEnd' property
     *
     * @return integer
     */
    public function getNActTimeEnd()
    {
        $value = $this->get(self::NACTTIMEEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActTimeEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActTimeEnd()
    {
        return $this->get(self::NACTTIMEEND) !== null;
    }

    /**
     * Sets value of 'nTodayTimeStart' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTodayTimeStart($value)
    {
        return $this->set(self::NTODAYTIMESTART, $value);
    }

    /**
     * Returns value of 'nTodayTimeStart' property
     *
     * @return integer
     */
    public function getNTodayTimeStart()
    {
        $value = $this->get(self::NTODAYTIMESTART);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTodayTimeStart' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTodayTimeStart()
    {
        return $this->get(self::NTODAYTIMESTART) !== null;
    }

    /**
     * Sets value of 'nTodayTimeEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTodayTimeEnd($value)
    {
        return $this->set(self::NTODAYTIMEEND, $value);
    }

    /**
     * Returns value of 'nTodayTimeEnd' property
     *
     * @return integer
     */
    public function getNTodayTimeEnd()
    {
        $value = $this->get(self::NTODAYTIMEEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTodayTimeEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTodayTimeEnd()
    {
        return $this->get(self::NTODAYTIMEEND) !== null;
    }

    /**
     * Sets value of 'nMultiExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMultiExp($value)
    {
        return $this->set(self::NMULTIEXP, $value);
    }

    /**
     * Returns value of 'nMultiExp' property
     *
     * @return integer
     */
    public function getNMultiExp()
    {
        $value = $this->get(self::NMULTIEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMultiExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMultiExp()
    {
        return $this->get(self::NMULTIEXP) !== null;
    }

    /**
     * Sets value of 'nMultiGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMultiGCoin($value)
    {
        return $this->set(self::NMULTIGCOIN, $value);
    }

    /**
     * Returns value of 'nMultiGCoin' property
     *
     * @return integer
     */
    public function getNMultiGCoin()
    {
        $value = $this->get(self::NMULTIGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMultiGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMultiGCoin()
    {
        return $this->get(self::NMULTIGCOIN) !== null;
    }
}
}