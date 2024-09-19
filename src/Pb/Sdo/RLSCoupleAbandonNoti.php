<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleAbandonNoti message
 */
class RLSCoupleAbandonNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NRAISEID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NRAISEID => array(
            'name' => 'nRaiseID',
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
        $this->values[self::NRAISEID] = null;
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
     * Sets value of 'nRaiseID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaiseID($value)
    {
        return $this->set(self::NRAISEID, $value);
    }

    /**
     * Returns value of 'nRaiseID' property
     *
     * @return integer
     */
    public function getNRaiseID()
    {
        $value = $this->get(self::NRAISEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaiseID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaiseID()
    {
        return $this->get(self::NRAISEID) !== null;
    }
}
}