<?php
/**
 * Auto generated from smallgameserver.proto at 2022-09-14 02:40:01
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSGetInstanceListReq message
 */
class SGSGetInstanceListReq extends \ProtobufMessage
{
    /* Field index constants */
    const INSTANCETYPE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INSTANCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InstanceType::enmInstanceType_None,
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