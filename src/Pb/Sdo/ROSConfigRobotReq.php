<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSConfigRobotReq message
 */
class ROSConfigRobotReq extends \ProtobufMessage
{
    /* Field index constants */
    const VERSION = 1;
    const ROBOTNAME = 2;
    const ROBOTPWD = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VERSION => array(
            'name' => 'version',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROBOTNAME => array(
            'name' => 'robotname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ROBOTPWD => array(
            'name' => 'robotpwd',
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
        $this->values[self::VERSION] = null;
        $this->values[self::ROBOTNAME] = null;
        $this->values[self::ROBOTPWD] = null;
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
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVersion()
    {
        return $this->get(self::VERSION) !== null;
    }

    /**
     * Sets value of 'robotname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRobotname($value)
    {
        return $this->set(self::ROBOTNAME, $value);
    }

    /**
     * Returns value of 'robotname' property
     *
     * @return string
     */
    public function getRobotname()
    {
        $value = $this->get(self::ROBOTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'robotname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRobotname()
    {
        return $this->get(self::ROBOTNAME) !== null;
    }

    /**
     * Sets value of 'robotpwd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRobotpwd($value)
    {
        return $this->set(self::ROBOTPWD, $value);
    }

    /**
     * Returns value of 'robotpwd' property
     *
     * @return string
     */
    public function getRobotpwd()
    {
        $value = $this->get(self::ROBOTPWD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'robotpwd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRobotpwd()
    {
        return $this->get(self::ROBOTPWD) !== null;
    }
}
}