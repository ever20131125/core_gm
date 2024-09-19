<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AmusementPlayRecord message
 */
class AmusementPlayRecord extends \ProtobufMessage
{
    /* Field index constants */
    const NPRIZED = 1;
    const NMAXPRIZED = 2;
    const NMINTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPRIZED => array(
            'name' => 'nPrized',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXPRIZED => array(
            'name' => 'nMaxPrized',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMINTIME => array(
            'name' => 'nMinTime',
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
        $this->values[self::NPRIZED] = null;
        $this->values[self::NMAXPRIZED] = null;
        $this->values[self::NMINTIME] = null;
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
     * Sets value of 'nPrized' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrized($value)
    {
        return $this->set(self::NPRIZED, $value);
    }

    /**
     * Returns value of 'nPrized' property
     *
     * @return integer
     */
    public function getNPrized()
    {
        $value = $this->get(self::NPRIZED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrized' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrized()
    {
        return $this->get(self::NPRIZED) !== null;
    }

    /**
     * Sets value of 'nMaxPrized' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxPrized($value)
    {
        return $this->set(self::NMAXPRIZED, $value);
    }

    /**
     * Returns value of 'nMaxPrized' property
     *
     * @return integer
     */
    public function getNMaxPrized()
    {
        $value = $this->get(self::NMAXPRIZED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxPrized' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxPrized()
    {
        return $this->get(self::NMAXPRIZED) !== null;
    }

    /**
     * Sets value of 'nMinTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMinTime($value)
    {
        return $this->set(self::NMINTIME, $value);
    }

    /**
     * Returns value of 'nMinTime' property
     *
     * @return integer
     */
    public function getNMinTime()
    {
        $value = $this->get(self::NMINTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMinTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMinTime()
    {
        return $this->get(self::NMINTIME) !== null;
    }
}
}