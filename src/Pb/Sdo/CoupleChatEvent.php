<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleChatEvent message
 */
class CoupleChatEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NDSTROLEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDSTROLEID => array(
            'name' => 'nDstRoleID',
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
        $this->values[self::NDSTROLEID] = null;
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
     * Sets value of 'nDstRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDstRoleID($value)
    {
        return $this->set(self::NDSTROLEID, $value);
    }

    /**
     * Returns value of 'nDstRoleID' property
     *
     * @return integer
     */
    public function getNDstRoleID()
    {
        $value = $this->get(self::NDSTROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDstRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDstRoleID()
    {
        return $this->get(self::NDSTROLEID) !== null;
    }
}
}