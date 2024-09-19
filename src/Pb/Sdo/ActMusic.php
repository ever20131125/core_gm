<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActMusic message
 */
class ActMusic extends \ProtobufMessage
{
    /* Field index constants */
    const NWEEKDATE = 1;
    const MUSICID = 2;
    const SCORE = 3;
    const MYSCORE = 4;
    const TOTALSCORE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWEEKDATE => array(
            'name' => 'nWeekDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MUSICID => array(
            'name' => 'musicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCORE => array(
            'name' => 'score',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MYSCORE => array(
            'name' => 'myScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALSCORE => array(
            'name' => 'totalScore',
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
        $this->values[self::NWEEKDATE] = null;
        $this->values[self::MUSICID] = null;
        $this->values[self::SCORE] = null;
        $this->values[self::MYSCORE] = null;
        $this->values[self::TOTALSCORE] = null;
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
     * Sets value of 'nWeekDate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeekDate($value)
    {
        return $this->set(self::NWEEKDATE, $value);
    }

    /**
     * Returns value of 'nWeekDate' property
     *
     * @return integer
     */
    public function getNWeekDate()
    {
        $value = $this->get(self::NWEEKDATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeekDate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeekDate()
    {
        return $this->get(self::NWEEKDATE) !== null;
    }

    /**
     * Sets value of 'musicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMusicID($value)
    {
        return $this->set(self::MUSICID, $value);
    }

    /**
     * Returns value of 'musicID' property
     *
     * @return integer
     */
    public function getMusicID()
    {
        $value = $this->get(self::MUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'musicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMusicID()
    {
        return $this->get(self::MUSICID) !== null;
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
     * Sets value of 'myScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMyScore($value)
    {
        return $this->set(self::MYSCORE, $value);
    }

    /**
     * Returns value of 'myScore' property
     *
     * @return integer
     */
    public function getMyScore()
    {
        $value = $this->get(self::MYSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'myScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMyScore()
    {
        return $this->get(self::MYSCORE) !== null;
    }

    /**
     * Sets value of 'totalScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalScore($value)
    {
        return $this->set(self::TOTALSCORE, $value);
    }

    /**
     * Returns value of 'totalScore' property
     *
     * @return integer
     */
    public function getTotalScore()
    {
        $value = $this->get(self::TOTALSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalScore()
    {
        return $this->get(self::TOTALSCORE) !== null;
    }
}
}