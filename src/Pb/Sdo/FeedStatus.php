<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FeedStatus message
 */
class FeedStatus extends \ProtobufMessage
{
    /* Field index constants */
    const SRCROLEID = 1;
    const DSTROLEID = 2;
    const UUID = 3;
    const FEEDTYPE = 4;
    const NEXTFEEDTIME = 5;
    const FEEDTIMES = 6;
    const MAXFEEDTIMESPERDAY = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SRCROLEID => array(
            'name' => 'srcRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DSTROLEID => array(
            'name' => 'dstRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FEEDTYPE => array(
            'name' => 'feedType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXTFEEDTIME => array(
            'name' => 'nextFeedTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FEEDTIMES => array(
            'name' => 'FeedTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXFEEDTIMESPERDAY => array(
            'name' => 'MaxFeedTimesPerDay',
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
        $this->values[self::SRCROLEID] = null;
        $this->values[self::DSTROLEID] = null;
        $this->values[self::UUID] = null;
        $this->values[self::FEEDTYPE] = null;
        $this->values[self::NEXTFEEDTIME] = null;
        $this->values[self::FEEDTIMES] = null;
        $this->values[self::MAXFEEDTIMESPERDAY] = null;
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
     * Sets value of 'srcRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSrcRoleId($value)
    {
        return $this->set(self::SRCROLEID, $value);
    }

    /**
     * Returns value of 'srcRoleId' property
     *
     * @return integer
     */
    public function getSrcRoleId()
    {
        $value = $this->get(self::SRCROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'srcRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSrcRoleId()
    {
        return $this->get(self::SRCROLEID) !== null;
    }

    /**
     * Sets value of 'dstRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDstRoleId($value)
    {
        return $this->set(self::DSTROLEID, $value);
    }

    /**
     * Returns value of 'dstRoleId' property
     *
     * @return integer
     */
    public function getDstRoleId()
    {
        $value = $this->get(self::DSTROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dstRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDstRoleId()
    {
        return $this->get(self::DSTROLEID) !== null;
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
     * Sets value of 'feedType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFeedType($value)
    {
        return $this->set(self::FEEDTYPE, $value);
    }

    /**
     * Returns value of 'feedType' property
     *
     * @return integer
     */
    public function getFeedType()
    {
        $value = $this->get(self::FEEDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'feedType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedType()
    {
        return $this->get(self::FEEDTYPE) !== null;
    }

    /**
     * Sets value of 'nextFeedTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNextFeedTime($value)
    {
        return $this->set(self::NEXTFEEDTIME, $value);
    }

    /**
     * Returns value of 'nextFeedTime' property
     *
     * @return integer
     */
    public function getNextFeedTime()
    {
        $value = $this->get(self::NEXTFEEDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nextFeedTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNextFeedTime()
    {
        return $this->get(self::NEXTFEEDTIME) !== null;
    }

    /**
     * Sets value of 'FeedTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFeedTimes($value)
    {
        return $this->set(self::FEEDTIMES, $value);
    }

    /**
     * Returns value of 'FeedTimes' property
     *
     * @return integer
     */
    public function getFeedTimes()
    {
        $value = $this->get(self::FEEDTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'FeedTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedTimes()
    {
        return $this->get(self::FEEDTIMES) !== null;
    }

    /**
     * Sets value of 'MaxFeedTimesPerDay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxFeedTimesPerDay($value)
    {
        return $this->set(self::MAXFEEDTIMESPERDAY, $value);
    }

    /**
     * Returns value of 'MaxFeedTimesPerDay' property
     *
     * @return integer
     */
    public function getMaxFeedTimesPerDay()
    {
        $value = $this->get(self::MAXFEEDTIMESPERDAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'MaxFeedTimesPerDay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxFeedTimesPerDay()
    {
        return $this->get(self::MAXFEEDTIMESPERDAY) !== null;
    }
}
}