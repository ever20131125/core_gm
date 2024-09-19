<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWearKeepsakeReq message
 */
class RLSWearKeepsakeReq extends \ProtobufMessage
{
    /* Field index constants */
    const NKEEPSAKEID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NKEEPSAKEID => array(
            'name' => 'nKeepsakeID',
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
        $this->values[self::NKEEPSAKEID] = null;
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
     * Sets value of 'nKeepsakeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeepsakeID($value)
    {
        return $this->set(self::NKEEPSAKEID, $value);
    }

    /**
     * Returns value of 'nKeepsakeID' property
     *
     * @return integer
     */
    public function getNKeepsakeID()
    {
        $value = $this->get(self::NKEEPSAKEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeepsakeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeepsakeID()
    {
        return $this->get(self::NKEEPSAKEID) !== null;
    }
}
}