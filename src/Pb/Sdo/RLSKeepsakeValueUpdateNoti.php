<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSKeepsakeValueUpdateNoti message
 */
class RLSKeepsakeValueUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NKEEPSAKEVALUE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NKEEPSAKEVALUE => array(
            'name' => 'nKeepsakeValue',
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
        $this->values[self::NKEEPSAKEVALUE] = null;
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
     * Sets value of 'nKeepsakeValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeepsakeValue($value)
    {
        return $this->set(self::NKEEPSAKEVALUE, $value);
    }

    /**
     * Returns value of 'nKeepsakeValue' property
     *
     * @return integer
     */
    public function getNKeepsakeValue()
    {
        $value = $this->get(self::NKEEPSAKEVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeepsakeValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeepsakeValue()
    {
        return $this->get(self::NKEEPSAKEVALUE) !== null;
    }
}
}