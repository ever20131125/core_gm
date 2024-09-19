<?php
/**
 * Auto generated from event.proto at 2022-01-18 09:01:30
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BottleEvent message
 */
class BottleEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTYPE = 2;
    const NBOTTLETYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BottleEventType::enmBottleEvent_Null,
            'name' => 'nType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBOTTLETYPE => array(
            'name' => 'nBottleType',
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
        $this->values[self::NTYPE] = self::$fields[self::NTYPE]['default'];
        $this->values[self::NBOTTLETYPE] = null;
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
     * Sets value of 'nType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return integer
     */
    public function getNType()
    {
        $value = $this->get(self::NTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return $this->get(self::NTYPE) !== null;
    }

    /**
     * Sets value of 'nBottleType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBottleType($value)
    {
        return $this->set(self::NBOTTLETYPE, $value);
    }

    /**
     * Returns value of 'nBottleType' property
     *
     * @return integer
     */
    public function getNBottleType()
    {
        $value = $this->get(self::NBOTTLETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBottleType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBottleType()
    {
        return $this->get(self::NBOTTLETYPE) !== null;
    }
}
}