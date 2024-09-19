<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TLabel message
 */
class TLabel extends \ProtobufMessage
{
    /* Field index constants */
    const LOWLABEL = 1;
    const HIGHLABEL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOWLABEL => array(
            'name' => 'lowLabel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HIGHLABEL => array(
            'name' => 'highLabel',
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
        $this->values[self::LOWLABEL] = null;
        $this->values[self::HIGHLABEL] = null;
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
     * Sets value of 'lowLabel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLowLabel($value)
    {
        return $this->set(self::LOWLABEL, $value);
    }

    /**
     * Returns value of 'lowLabel' property
     *
     * @return integer
     */
    public function getLowLabel()
    {
        $value = $this->get(self::LOWLABEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lowLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLowLabel()
    {
        return $this->get(self::LOWLABEL) !== null;
    }

    /**
     * Sets value of 'highLabel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHighLabel($value)
    {
        return $this->set(self::HIGHLABEL, $value);
    }

    /**
     * Returns value of 'highLabel' property
     *
     * @return integer
     */
    public function getHighLabel()
    {
        $value = $this->get(self::HIGHLABEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'highLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHighLabel()
    {
        return $this->get(self::HIGHLABEL) !== null;
    }
}
}