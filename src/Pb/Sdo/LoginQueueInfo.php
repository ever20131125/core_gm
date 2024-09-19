<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoginQueueInfo message
 */
class LoginQueueInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NLINEUPCOUNT = 1;
    const NPLAYERCOUNT = 2;
    const NEXPECTEDTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NLINEUPCOUNT => array(
            'name' => 'nLineupCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLAYERCOUNT => array(
            'name' => 'nPlayerCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPECTEDTIME => array(
            'name' => 'nExpectedTime',
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
        $this->values[self::NLINEUPCOUNT] = null;
        $this->values[self::NPLAYERCOUNT] = null;
        $this->values[self::NEXPECTEDTIME] = null;
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
     * Sets value of 'nLineupCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLineupCount($value)
    {
        return $this->set(self::NLINEUPCOUNT, $value);
    }

    /**
     * Returns value of 'nLineupCount' property
     *
     * @return integer
     */
    public function getNLineupCount()
    {
        $value = $this->get(self::NLINEUPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLineupCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLineupCount()
    {
        return $this->get(self::NLINEUPCOUNT) !== null;
    }

    /**
     * Sets value of 'nPlayerCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlayerCount($value)
    {
        return $this->set(self::NPLAYERCOUNT, $value);
    }

    /**
     * Returns value of 'nPlayerCount' property
     *
     * @return integer
     */
    public function getNPlayerCount()
    {
        $value = $this->get(self::NPLAYERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlayerCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlayerCount()
    {
        return $this->get(self::NPLAYERCOUNT) !== null;
    }

    /**
     * Sets value of 'nExpectedTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExpectedTime($value)
    {
        return $this->set(self::NEXPECTEDTIME, $value);
    }

    /**
     * Returns value of 'nExpectedTime' property
     *
     * @return integer
     */
    public function getNExpectedTime()
    {
        $value = $this->get(self::NEXPECTEDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExpectedTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExpectedTime()
    {
        return $this->get(self::NEXPECTEDTIME) !== null;
    }
}
}