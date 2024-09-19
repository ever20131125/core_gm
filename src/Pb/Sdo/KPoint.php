<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KPoint message
 */
class KPoint extends \ProtobufMessage
{
    /* Field index constants */
    const X = 1;
    const Y = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::Y => array(
            'name' => 'y',
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
        $this->values[self::X] = null;
        $this->values[self::Y] = null;
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
     * Sets value of 'x' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setX($value)
    {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return integer
     */
    public function getX()
    {
        $value = $this->get(self::X);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'x' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasX()
    {
        return $this->get(self::X) !== null;
    }

    /**
     * Sets value of 'y' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setY($value)
    {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return integer
     */
    public function getY()
    {
        $value = $this->get(self::Y);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'y' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasY()
    {
        return $this->get(self::Y) !== null;
    }
}
}