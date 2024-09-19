<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WorkStatus message
 */
class WorkStatus extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const UUID = 2;
    const WORKWAY = 3;
    const RANK = 4;
    const STATUS = 5;
    const MAXWORKTIMESPEYDAY = 6;
    const REMAINDWORKTIMES = 7;
    const WORKOVERTIME = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WORKWAY => array(
            'name' => 'workWay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXWORKTIMESPEYDAY => array(
            'name' => 'maxWorkTimesPeyDay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMAINDWORKTIMES => array(
            'name' => 'remaindWorkTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WORKOVERTIME => array(
            'name' => 'workOverTime',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::UUID] = null;
        $this->values[self::WORKWAY] = null;
        $this->values[self::RANK] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::MAXWORKTIMESPEYDAY] = null;
        $this->values[self::REMAINDWORKTIMES] = null;
        $this->values[self::WORKOVERTIME] = null;
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
     * Sets value of 'roleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleId($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleId' property
     *
     * @return integer
     */
    public function getRoleId()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleId()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'uuid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return integer
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }

    /**
     * Sets value of 'workWay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWorkWay($value)
    {
        return $this->set(self::WORKWAY, $value);
    }

    /**
     * Returns value of 'workWay' property
     *
     * @return integer
     */
    public function getWorkWay()
    {
        $value = $this->get(self::WORKWAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'workWay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWorkWay()
    {
        return $this->get(self::WORKWAY) !== null;
    }

    /**
     * Sets value of 'rank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRank($value)
    {
        return $this->set(self::RANK, $value);
    }

    /**
     * Returns value of 'rank' property
     *
     * @return integer
     */
    public function getRank()
    {
        $value = $this->get(self::RANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRank()
    {
        return $this->get(self::RANK) !== null;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Sets value of 'maxWorkTimesPeyDay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxWorkTimesPeyDay($value)
    {
        return $this->set(self::MAXWORKTIMESPEYDAY, $value);
    }

    /**
     * Returns value of 'maxWorkTimesPeyDay' property
     *
     * @return integer
     */
    public function getMaxWorkTimesPeyDay()
    {
        $value = $this->get(self::MAXWORKTIMESPEYDAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxWorkTimesPeyDay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxWorkTimesPeyDay()
    {
        return $this->get(self::MAXWORKTIMESPEYDAY) !== null;
    }

    /**
     * Sets value of 'remaindWorkTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRemaindWorkTimes($value)
    {
        return $this->set(self::REMAINDWORKTIMES, $value);
    }

    /**
     * Returns value of 'remaindWorkTimes' property
     *
     * @return integer
     */
    public function getRemaindWorkTimes()
    {
        $value = $this->get(self::REMAINDWORKTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'remaindWorkTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemaindWorkTimes()
    {
        return $this->get(self::REMAINDWORKTIMES) !== null;
    }

    /**
     * Sets value of 'workOverTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWorkOverTime($value)
    {
        return $this->set(self::WORKOVERTIME, $value);
    }

    /**
     * Returns value of 'workOverTime' property
     *
     * @return integer
     */
    public function getWorkOverTime()
    {
        $value = $this->get(self::WORKOVERTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'workOverTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWorkOverTime()
    {
        return $this->get(self::WORKOVERTIME) !== null;
    }
}
}