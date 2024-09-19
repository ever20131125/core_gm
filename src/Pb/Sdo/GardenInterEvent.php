<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GardenInterEvent message
 */
class GardenInterEvent extends \ProtobufMessage
{
    /* Field index constants */
    const SERIALNUM = 1;
    const EVENTTIME = 2;
    const NROLEID = 3;
    const TYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERIALNUM => array(
            'name' => 'serialNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENTTIME => array(
            'name' => 'eventTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::SERIALNUM] = null;
        $this->values[self::EVENTTIME] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::TYPE] = null;
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
     * Sets value of 'serialNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSerialNum($value)
    {
        return $this->set(self::SERIALNUM, $value);
    }

    /**
     * Returns value of 'serialNum' property
     *
     * @return integer
     */
    public function getSerialNum()
    {
        $value = $this->get(self::SERIALNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'serialNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSerialNum()
    {
        return $this->get(self::SERIALNUM) !== null;
    }

    /**
     * Sets value of 'eventTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventTime($value)
    {
        return $this->set(self::EVENTTIME, $value);
    }

    /**
     * Returns value of 'eventTime' property
     *
     * @return integer
     */
    public function getEventTime()
    {
        $value = $this->get(self::EVENTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'eventTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventTime()
    {
        return $this->get(self::EVENTTIME) !== null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }
}
}