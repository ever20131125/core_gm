<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FeteInfo message
 */
class FeteInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PERIOD = 1;
    const TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PERIOD => array(
            'name' => 'period',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TimePeriod'
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::PERIOD] = null;
        $this->values[self::TYPE] = null;
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
     * Sets value of 'period' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TimePeriod $value Property value
     *
     * @return null
     */
    public function setPeriod(\Xnhd\Core\Pb\Sdo\TimePeriod $value=null)
    {
        return $this->set(self::PERIOD, $value);
    }

    /**
     * Returns value of 'period' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TimePeriod
     */
    public function getPeriod()
    {
        return $this->get(self::PERIOD);
    }

    /**
     * Returns true if 'period' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPeriod()
    {
        return $this->get(self::PERIOD) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }
}
}