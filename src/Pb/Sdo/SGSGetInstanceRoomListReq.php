<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSGetInstanceRoomListReq message
 */
class SGSGetInstanceRoomListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const INSTANCETYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INSTANCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InstanceType::enmInstanceType_Dance,
            'name' => 'instanceType',
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
        $this->values[self::INSTANCETYPE] = self::$fields[self::INSTANCETYPE]['default'];
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
     * Sets value of 'instanceType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInstanceType($value)
    {
        return $this->set(self::INSTANCETYPE, $value);
    }

    /**
     * Returns value of 'instanceType' property
     *
     * @return integer
     */
    public function getInstanceType()
    {
        $value = $this->get(self::INSTANCETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'instanceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInstanceType()
    {
        return $this->get(self::INSTANCETYPE) !== null;
    }
}
}