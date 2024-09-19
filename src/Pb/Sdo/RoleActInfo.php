<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleActInfo message
 */
class RoleActInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NMONTHCARDEND = 1;
    const NBLACKCARDEND = 2;
    const NMONTHCROWNEND = 3;
    const NYEARCROWNEND = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NMONTHCARDEND => array(
            'name' => 'nMonthCardEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBLACKCARDEND => array(
            'name' => 'nBlackCardEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONTHCROWNEND => array(
            'name' => 'nMonthCrownEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NYEARCROWNEND => array(
            'name' => 'nYearCrownEnd',
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
        $this->values[self::NMONTHCARDEND] = null;
        $this->values[self::NBLACKCARDEND] = null;
        $this->values[self::NMONTHCROWNEND] = null;
        $this->values[self::NYEARCROWNEND] = null;
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
     * Sets value of 'nMonthCardEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMonthCardEnd($value)
    {
        return $this->set(self::NMONTHCARDEND, $value);
    }

    /**
     * Returns value of 'nMonthCardEnd' property
     *
     * @return integer
     */
    public function getNMonthCardEnd()
    {
        $value = $this->get(self::NMONTHCARDEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMonthCardEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMonthCardEnd()
    {
        return $this->get(self::NMONTHCARDEND) !== null;
    }

    /**
     * Sets value of 'nBlackCardEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBlackCardEnd($value)
    {
        return $this->set(self::NBLACKCARDEND, $value);
    }

    /**
     * Returns value of 'nBlackCardEnd' property
     *
     * @return integer
     */
    public function getNBlackCardEnd()
    {
        $value = $this->get(self::NBLACKCARDEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBlackCardEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBlackCardEnd()
    {
        return $this->get(self::NBLACKCARDEND) !== null;
    }

    /**
     * Sets value of 'nMonthCrownEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMonthCrownEnd($value)
    {
        return $this->set(self::NMONTHCROWNEND, $value);
    }

    /**
     * Returns value of 'nMonthCrownEnd' property
     *
     * @return integer
     */
    public function getNMonthCrownEnd()
    {
        $value = $this->get(self::NMONTHCROWNEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMonthCrownEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMonthCrownEnd()
    {
        return $this->get(self::NMONTHCROWNEND) !== null;
    }

    /**
     * Sets value of 'nYearCrownEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNYearCrownEnd($value)
    {
        return $this->set(self::NYEARCROWNEND, $value);
    }

    /**
     * Returns value of 'nYearCrownEnd' property
     *
     * @return integer
     */
    public function getNYearCrownEnd()
    {
        $value = $this->get(self::NYEARCROWNEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nYearCrownEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNYearCrownEnd()
    {
        return $this->get(self::NYEARCROWNEND) !== null;
    }
}
}