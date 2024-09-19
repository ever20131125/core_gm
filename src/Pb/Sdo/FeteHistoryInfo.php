<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FeteHistoryInfo message
 */
class FeteHistoryInfo extends \ProtobufMessage
{
    /* Field index constants */
    const LOSTCOUNT = 1;
    const WINCOUNT = 2;
    const GAMECOUNT = 3;
    const RANK = 4;
    const SCORE = 5;
    const SEASON = 6;
    const GRADE = 7;
    const RECORDTIME = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOSTCOUNT => array(
            'name' => 'lostCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WINCOUNT => array(
            'name' => 'winCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMECOUNT => array(
            'name' => 'gameCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCORE => array(
            'name' => 'score',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEASON => array(
            'name' => 'season',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GRADE => array(
            'name' => 'grade',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECORDTIME => array(
            'name' => 'recordTime',
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
        $this->values[self::LOSTCOUNT] = null;
        $this->values[self::WINCOUNT] = null;
        $this->values[self::GAMECOUNT] = null;
        $this->values[self::RANK] = null;
        $this->values[self::SCORE] = null;
        $this->values[self::SEASON] = null;
        $this->values[self::GRADE] = null;
        $this->values[self::RECORDTIME] = null;
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
     * Sets value of 'lostCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLostCount($value)
    {
        return $this->set(self::LOSTCOUNT, $value);
    }

    /**
     * Returns value of 'lostCount' property
     *
     * @return integer
     */
    public function getLostCount()
    {
        $value = $this->get(self::LOSTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lostCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLostCount()
    {
        return $this->get(self::LOSTCOUNT) !== null;
    }

    /**
     * Sets value of 'winCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWinCount($value)
    {
        return $this->set(self::WINCOUNT, $value);
    }

    /**
     * Returns value of 'winCount' property
     *
     * @return integer
     */
    public function getWinCount()
    {
        $value = $this->get(self::WINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'winCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWinCount()
    {
        return $this->get(self::WINCOUNT) !== null;
    }

    /**
     * Sets value of 'gameCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameCount($value)
    {
        return $this->set(self::GAMECOUNT, $value);
    }

    /**
     * Returns value of 'gameCount' property
     *
     * @return integer
     */
    public function getGameCount()
    {
        $value = $this->get(self::GAMECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameCount()
    {
        return $this->get(self::GAMECOUNT) !== null;
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
     * Sets value of 'score' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScore($value)
    {
        return $this->set(self::SCORE, $value);
    }

    /**
     * Returns value of 'score' property
     *
     * @return integer
     */
    public function getScore()
    {
        $value = $this->get(self::SCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'score' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScore()
    {
        return $this->get(self::SCORE) !== null;
    }

    /**
     * Sets value of 'season' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSeason($value)
    {
        return $this->set(self::SEASON, $value);
    }

    /**
     * Returns value of 'season' property
     *
     * @return integer
     */
    public function getSeason()
    {
        $value = $this->get(self::SEASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'season' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSeason()
    {
        return $this->get(self::SEASON) !== null;
    }

    /**
     * Sets value of 'grade' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGrade($value)
    {
        return $this->set(self::GRADE, $value);
    }

    /**
     * Returns value of 'grade' property
     *
     * @return integer
     */
    public function getGrade()
    {
        $value = $this->get(self::GRADE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'grade' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGrade()
    {
        return $this->get(self::GRADE) !== null;
    }

    /**
     * Sets value of 'recordTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecordTime($value)
    {
        return $this->set(self::RECORDTIME, $value);
    }

    /**
     * Returns value of 'recordTime' property
     *
     * @return integer
     */
    public function getRecordTime()
    {
        $value = $this->get(self::RECORDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recordTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecordTime()
    {
        return $this->get(self::RECORDTIME) !== null;
    }
}
}