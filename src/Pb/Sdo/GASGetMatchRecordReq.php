<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetMatchRecordReq message
 */
class GASGetMatchRecordReq extends \ProtobufMessage
{
    /* Field index constants */
    const DANCEID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DANCEID => array(
            'name' => 'danceID',
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
        $this->values[self::DANCEID] = null;
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
     * Sets value of 'danceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDanceID($value)
    {
        return $this->set(self::DANCEID, $value);
    }

    /**
     * Returns value of 'danceID' property
     *
     * @return integer
     */
    public function getDanceID()
    {
        $value = $this->get(self::DANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'danceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDanceID()
    {
        return $this->get(self::DANCEID) !== null;
    }
}
}