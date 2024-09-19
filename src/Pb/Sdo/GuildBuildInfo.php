<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildBuildInfo message
 */
class GuildBuildInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const LEVEL = 2;
    const STATE = 3;
    const LASTSTARTUPDATETIME = 4;
    const LASTENDUPDATETIME = 5;
    const LASTSPEEDUPTIME = 6;
    const LASTSPEEDUPVALUE = 7;
    const UPDATEENDTIME = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'ID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'Level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'State',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTSTARTUPDATETIME => array(
            'name' => 'LastStartUpdateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTENDUPDATETIME => array(
            'name' => 'LastEndUpdateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTSPEEDUPTIME => array(
            'name' => 'LastSpeedupTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTSPEEDUPVALUE => array(
            'name' => 'LastSpeedupValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATEENDTIME => array(
            'name' => 'UpdateEndTime',
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
        $this->values[self::ID] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::STATE] = null;
        $this->values[self::LASTSTARTUPDATETIME] = null;
        $this->values[self::LASTENDUPDATETIME] = null;
        $this->values[self::LASTSPEEDUPTIME] = null;
        $this->values[self::LASTSPEEDUPVALUE] = null;
        $this->values[self::UPDATEENDTIME] = null;
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
     * Sets value of 'ID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setID($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'ID' property
     *
     * @return integer
     */
    public function getID()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasID()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'Level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'Level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }

    /**
     * Sets value of 'State' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'State' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'State' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'LastStartUpdateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastStartUpdateTime($value)
    {
        return $this->set(self::LASTSTARTUPDATETIME, $value);
    }

    /**
     * Returns value of 'LastStartUpdateTime' property
     *
     * @return integer
     */
    public function getLastStartUpdateTime()
    {
        $value = $this->get(self::LASTSTARTUPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'LastStartUpdateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastStartUpdateTime()
    {
        return $this->get(self::LASTSTARTUPDATETIME) !== null;
    }

    /**
     * Sets value of 'LastEndUpdateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastEndUpdateTime($value)
    {
        return $this->set(self::LASTENDUPDATETIME, $value);
    }

    /**
     * Returns value of 'LastEndUpdateTime' property
     *
     * @return integer
     */
    public function getLastEndUpdateTime()
    {
        $value = $this->get(self::LASTENDUPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'LastEndUpdateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastEndUpdateTime()
    {
        return $this->get(self::LASTENDUPDATETIME) !== null;
    }

    /**
     * Sets value of 'LastSpeedupTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastSpeedupTime($value)
    {
        return $this->set(self::LASTSPEEDUPTIME, $value);
    }

    /**
     * Returns value of 'LastSpeedupTime' property
     *
     * @return integer
     */
    public function getLastSpeedupTime()
    {
        $value = $this->get(self::LASTSPEEDUPTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'LastSpeedupTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastSpeedupTime()
    {
        return $this->get(self::LASTSPEEDUPTIME) !== null;
    }

    /**
     * Sets value of 'LastSpeedupValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastSpeedupValue($value)
    {
        return $this->set(self::LASTSPEEDUPVALUE, $value);
    }

    /**
     * Returns value of 'LastSpeedupValue' property
     *
     * @return integer
     */
    public function getLastSpeedupValue()
    {
        $value = $this->get(self::LASTSPEEDUPVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'LastSpeedupValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastSpeedupValue()
    {
        return $this->get(self::LASTSPEEDUPVALUE) !== null;
    }

    /**
     * Sets value of 'UpdateEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateEndTime($value)
    {
        return $this->set(self::UPDATEENDTIME, $value);
    }

    /**
     * Returns value of 'UpdateEndTime' property
     *
     * @return integer
     */
    public function getUpdateEndTime()
    {
        $value = $this->get(self::UPDATEENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'UpdateEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateEndTime()
    {
        return $this->get(self::UPDATEENDTIME) !== null;
    }
}
}