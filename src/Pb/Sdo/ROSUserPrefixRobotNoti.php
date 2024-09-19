<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSUserPrefixRobotNoti message
 */
class ROSUserPrefixRobotNoti extends \ProtobufMessage
{
    /* Field index constants */
    const PREFIX = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PREFIX => array(
            'name' => 'prefix',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::PREFIX] = null;
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
     * Sets value of 'prefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrefix($value)
    {
        return $this->set(self::PREFIX, $value);
    }

    /**
     * Returns value of 'prefix' property
     *
     * @return string
     */
    public function getPrefix()
    {
        $value = $this->get(self::PREFIX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'prefix' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrefix()
    {
        return $this->get(self::PREFIX) !== null;
    }
}
}