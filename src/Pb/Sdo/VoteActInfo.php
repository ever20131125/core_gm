<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VoteActInfo message
 */
class VoteActInfo extends \ProtobufMessage
{
    /* Field index constants */
    const INDEX = 1;
    const TYPE = 2;
    const PRESTARTTIME = 3;
    const SIGNSTARTTIME = 4;
    const VOTESTARTTIME = 5;
    const VOTEENDTIME = 6;
    const DISAPPEARTIME = 7;
    const IFSIGNEDIN = 8;
    const SIGNEDINPLAYERSCOUNT = 9;
    const ZONEID = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRESTARTTIME => array(
            'name' => 'preStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNSTARTTIME => array(
            'name' => 'signStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VOTESTARTTIME => array(
            'name' => 'voteStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VOTEENDTIME => array(
            'name' => 'voteEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DISAPPEARTIME => array(
            'name' => 'disappearTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IFSIGNEDIN => array(
            'name' => 'ifSignedIn',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNEDINPLAYERSCOUNT => array(
            'name' => 'signedInPlayersCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ZONEID => array(
            'name' => 'zoneID',
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
        $this->values[self::INDEX] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::PRESTARTTIME] = null;
        $this->values[self::SIGNSTARTTIME] = null;
        $this->values[self::VOTESTARTTIME] = null;
        $this->values[self::VOTEENDTIME] = null;
        $this->values[self::DISAPPEARTIME] = null;
        $this->values[self::IFSIGNEDIN] = null;
        $this->values[self::SIGNEDINPLAYERSCOUNT] = null;
        $this->values[self::ZONEID] = null;
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
     * Sets value of 'index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return integer
     */
    public function getIndex()
    {
        $value = $this->get(self::INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIndex()
    {
        return $this->get(self::INDEX) !== null;
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

    /**
     * Sets value of 'preStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPreStartTime($value)
    {
        return $this->set(self::PRESTARTTIME, $value);
    }

    /**
     * Returns value of 'preStartTime' property
     *
     * @return integer
     */
    public function getPreStartTime()
    {
        $value = $this->get(self::PRESTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'preStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPreStartTime()
    {
        return $this->get(self::PRESTARTTIME) !== null;
    }

    /**
     * Sets value of 'signStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSignStartTime($value)
    {
        return $this->set(self::SIGNSTARTTIME, $value);
    }

    /**
     * Returns value of 'signStartTime' property
     *
     * @return integer
     */
    public function getSignStartTime()
    {
        $value = $this->get(self::SIGNSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'signStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignStartTime()
    {
        return $this->get(self::SIGNSTARTTIME) !== null;
    }

    /**
     * Sets value of 'voteStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoteStartTime($value)
    {
        return $this->set(self::VOTESTARTTIME, $value);
    }

    /**
     * Returns value of 'voteStartTime' property
     *
     * @return integer
     */
    public function getVoteStartTime()
    {
        $value = $this->get(self::VOTESTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voteStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoteStartTime()
    {
        return $this->get(self::VOTESTARTTIME) !== null;
    }

    /**
     * Sets value of 'voteEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoteEndTime($value)
    {
        return $this->set(self::VOTEENDTIME, $value);
    }

    /**
     * Returns value of 'voteEndTime' property
     *
     * @return integer
     */
    public function getVoteEndTime()
    {
        $value = $this->get(self::VOTEENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voteEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoteEndTime()
    {
        return $this->get(self::VOTEENDTIME) !== null;
    }

    /**
     * Sets value of 'disappearTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDisappearTime($value)
    {
        return $this->set(self::DISAPPEARTIME, $value);
    }

    /**
     * Returns value of 'disappearTime' property
     *
     * @return integer
     */
    public function getDisappearTime()
    {
        $value = $this->get(self::DISAPPEARTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'disappearTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisappearTime()
    {
        return $this->get(self::DISAPPEARTIME) !== null;
    }

    /**
     * Sets value of 'ifSignedIn' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIfSignedIn($value)
    {
        return $this->set(self::IFSIGNEDIN, $value);
    }

    /**
     * Returns value of 'ifSignedIn' property
     *
     * @return integer
     */
    public function getIfSignedIn()
    {
        $value = $this->get(self::IFSIGNEDIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ifSignedIn' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIfSignedIn()
    {
        return $this->get(self::IFSIGNEDIN) !== null;
    }

    /**
     * Sets value of 'signedInPlayersCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSignedInPlayersCount($value)
    {
        return $this->set(self::SIGNEDINPLAYERSCOUNT, $value);
    }

    /**
     * Returns value of 'signedInPlayersCount' property
     *
     * @return integer
     */
    public function getSignedInPlayersCount()
    {
        $value = $this->get(self::SIGNEDINPLAYERSCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'signedInPlayersCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignedInPlayersCount()
    {
        return $this->get(self::SIGNEDINPLAYERSCOUNT) !== null;
    }

    /**
     * Sets value of 'zoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneID($value)
    {
        return $this->set(self::ZONEID, $value);
    }

    /**
     * Returns value of 'zoneID' property
     *
     * @return integer
     */
    public function getZoneID()
    {
        $value = $this->get(self::ZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneID()
    {
        return $this->get(self::ZONEID) !== null;
    }
}
}