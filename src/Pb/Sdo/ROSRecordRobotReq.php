<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSRecordRobotReq message
 */
class ROSRecordRobotReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROBOTID = 1;
    const LOGS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROBOTID => array(
            'name' => 'robotid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOGS => array(
            'name' => 'logs',
            'required' => true,
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
        $this->values[self::ROBOTID] = null;
        $this->values[self::LOGS] = null;
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
     * Sets value of 'robotid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRobotid($value)
    {
        return $this->set(self::ROBOTID, $value);
    }

    /**
     * Returns value of 'robotid' property
     *
     * @return integer
     */
    public function getRobotid()
    {
        $value = $this->get(self::ROBOTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'robotid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRobotid()
    {
        return $this->get(self::ROBOTID) !== null;
    }

    /**
     * Sets value of 'logs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLogs($value)
    {
        return $this->set(self::LOGS, $value);
    }

    /**
     * Returns value of 'logs' property
     *
     * @return integer
     */
    public function getLogs()
    {
        $value = $this->get(self::LOGS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'logs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogs()
    {
        return $this->get(self::LOGS) !== null;
    }
}
}