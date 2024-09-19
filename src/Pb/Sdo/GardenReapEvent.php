<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GardenReapEvent message
 */
class GardenReapEvent extends \ProtobufMessage
{
    /* Field index constants */
    const SERIALNUM = 1;
    const EVENTTIME = 2;
    const SEEDID = 3;
    const FRUITID = 4;
    const FRUITNUM = 5;
    const ISTREASURE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERIALNUM => array(
            'name' => 'serialNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENTTIME => array(
            'name' => 'eventTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEEDID => array(
            'name' => 'seedId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRUITID => array(
            'name' => 'fruitId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRUITNUM => array(
            'name' => 'fruitNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISTREASURE => array(
            'name' => 'isTreasure',
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
        $this->values[self::SERIALNUM] = null;
        $this->values[self::EVENTTIME] = null;
        $this->values[self::SEEDID] = null;
        $this->values[self::FRUITID] = null;
        $this->values[self::FRUITNUM] = null;
        $this->values[self::ISTREASURE] = null;
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
     * Sets value of 'serialNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSerialNum($value)
    {
        return $this->set(self::SERIALNUM, $value);
    }

    /**
     * Returns value of 'serialNum' property
     *
     * @return integer
     */
    public function getSerialNum()
    {
        $value = $this->get(self::SERIALNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'serialNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSerialNum()
    {
        return $this->get(self::SERIALNUM) !== null;
    }

    /**
     * Sets value of 'eventTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventTime($value)
    {
        return $this->set(self::EVENTTIME, $value);
    }

    /**
     * Returns value of 'eventTime' property
     *
     * @return integer
     */
    public function getEventTime()
    {
        $value = $this->get(self::EVENTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'eventTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventTime()
    {
        return $this->get(self::EVENTTIME) !== null;
    }

    /**
     * Sets value of 'seedId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSeedId($value)
    {
        return $this->set(self::SEEDID, $value);
    }

    /**
     * Returns value of 'seedId' property
     *
     * @return integer
     */
    public function getSeedId()
    {
        $value = $this->get(self::SEEDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'seedId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSeedId()
    {
        return $this->get(self::SEEDID) !== null;
    }

    /**
     * Sets value of 'fruitId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFruitId($value)
    {
        return $this->set(self::FRUITID, $value);
    }

    /**
     * Returns value of 'fruitId' property
     *
     * @return integer
     */
    public function getFruitId()
    {
        $value = $this->get(self::FRUITID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fruitId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFruitId()
    {
        return $this->get(self::FRUITID) !== null;
    }

    /**
     * Sets value of 'fruitNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFruitNum($value)
    {
        return $this->set(self::FRUITNUM, $value);
    }

    /**
     * Returns value of 'fruitNum' property
     *
     * @return integer
     */
    public function getFruitNum()
    {
        $value = $this->get(self::FRUITNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fruitNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFruitNum()
    {
        return $this->get(self::FRUITNUM) !== null;
    }

    /**
     * Sets value of 'isTreasure' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsTreasure($value)
    {
        return $this->set(self::ISTREASURE, $value);
    }

    /**
     * Returns value of 'isTreasure' property
     *
     * @return boolean
     */
    public function getIsTreasure()
    {
        $value = $this->get(self::ISTREASURE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isTreasure' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsTreasure()
    {
        return $this->get(self::ISTREASURE) !== null;
    }
}
}