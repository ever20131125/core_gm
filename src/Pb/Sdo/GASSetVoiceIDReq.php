<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASSetVoiceIDReq message
 */
class GASSetVoiceIDReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NVOICEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVOICEID => array(
            'name' => 'nVoiceID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NVOICEID] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nVoiceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVoiceID($value)
    {
        return $this->set(self::NVOICEID, $value);
    }

    /**
     * Returns value of 'nVoiceID' property
     *
     * @return integer
     */
    public function getNVoiceID()
    {
        $value = $this->get(self::NVOICEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVoiceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVoiceID()
    {
        return $this->get(self::NVOICEID) !== null;
    }
}
}