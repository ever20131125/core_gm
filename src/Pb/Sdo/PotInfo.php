<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PotInfo message
 */
class PotInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const SEEDID = 2;
    const RIPETIMESTAMP = 3;
    const ISTREASURE = 4;
    const SHORTAGENUM = 5;
    const FRUITID = 6;
    const WATERCOUNTDOWNTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEEDID => array(
            'name' => 'seedId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RIPETIMESTAMP => array(
            'name' => 'ripeTimestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISTREASURE => array(
            'name' => 'isTreasure',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SHORTAGENUM => array(
            'name' => 'shortageNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRUITID => array(
            'name' => 'fruitId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WATERCOUNTDOWNTIME => array(
            'name' => 'waterCountdownTime',
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
        $this->values[self::ID] = null;
        $this->values[self::SEEDID] = null;
        $this->values[self::RIPETIMESTAMP] = null;
        $this->values[self::ISTREASURE] = null;
        $this->values[self::SHORTAGENUM] = null;
        $this->values[self::FRUITID] = null;
        $this->values[self::WATERCOUNTDOWNTIME] = null;
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
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
     * Sets value of 'ripeTimestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRipeTimestamp($value)
    {
        return $this->set(self::RIPETIMESTAMP, $value);
    }

    /**
     * Returns value of 'ripeTimestamp' property
     *
     * @return integer
     */
    public function getRipeTimestamp()
    {
        $value = $this->get(self::RIPETIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ripeTimestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRipeTimestamp()
    {
        return $this->get(self::RIPETIMESTAMP) !== null;
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

    /**
     * Sets value of 'shortageNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShortageNum($value)
    {
        return $this->set(self::SHORTAGENUM, $value);
    }

    /**
     * Returns value of 'shortageNum' property
     *
     * @return integer
     */
    public function getShortageNum()
    {
        $value = $this->get(self::SHORTAGENUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'shortageNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShortageNum()
    {
        return $this->get(self::SHORTAGENUM) !== null;
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
     * Sets value of 'waterCountdownTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWaterCountdownTime($value)
    {
        return $this->set(self::WATERCOUNTDOWNTIME, $value);
    }

    /**
     * Returns value of 'waterCountdownTime' property
     *
     * @return integer
     */
    public function getWaterCountdownTime()
    {
        $value = $this->get(self::WATERCOUNTDOWNTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'waterCountdownTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWaterCountdownTime()
    {
        return $this->get(self::WATERCOUNTDOWNTIME) !== null;
    }
}
}