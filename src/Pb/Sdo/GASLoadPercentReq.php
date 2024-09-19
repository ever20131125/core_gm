<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASLoadPercentReq message
 */
class GASLoadPercentReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPERCENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPERCENT => array(
            'name' => 'nPercent',
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
        $this->values[self::NPERCENT] = null;
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
     * Sets value of 'nPercent' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPercent($value)
    {
        return $this->set(self::NPERCENT, $value);
    }

    /**
     * Returns value of 'nPercent' property
     *
     * @return integer
     */
    public function getNPercent()
    {
        $value = $this->get(self::NPERCENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPercent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPercent()
    {
        return $this->get(self::NPERCENT) !== null;
    }
}
}