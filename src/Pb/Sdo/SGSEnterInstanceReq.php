<?php
/**
 * Auto generated from smallgameserver.proto at 2022-09-14 02:40:01
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSEnterInstanceReq message
 */
class SGSEnterInstanceReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const INSTANCETYPE = 2;
    const NMATCHROOMID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INSTANCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InstanceType::enmInstanceType_None,
            'name' => 'instanceType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATCHROOMID => array(
            'default' => -1,
            'name' => 'nMatchRoomID',
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
        $this->values[self::NMATCHROOMID] = self::$fields[self::NMATCHROOMID]['default'];
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

    /**
     * Sets value of 'nMatchRoomID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchRoomID($value)
    {
        return $this->set(self::NMATCHROOMID, $value);
    }

    /**
     * Returns value of 'nMatchRoomID' property
     *
     * @return integer
     */
    public function getNMatchRoomID()
    {
        $value = $this->get(self::NMATCHROOMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchRoomID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchRoomID()
    {
        return $this->get(self::NMATCHROOMID) !== null;
    }
}
}