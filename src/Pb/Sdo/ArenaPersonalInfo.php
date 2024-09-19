<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ArenaPersonalInfo message
 */
class ArenaPersonalInfo extends \ProtobufMessage
{
    /* Field index constants */
    const CHALLENGETIMES = 1;
    const BUYCHANCETIMES = 2;
    const CDTIME = 3;
    const TODAYVICTORYTIMES = 4;
    const TODAYVICTORYPRIZERECORD = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHALLENGETIMES => array(
            'name' => 'challengeTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUYCHANCETIMES => array(
            'name' => 'buyChanceTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDTIME => array(
            'name' => 'cdtime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TODAYVICTORYTIMES => array(
            'name' => 'todayVictoryTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TODAYVICTORYPRIZERECORD => array(
            'name' => 'todayVictoryPrizeRecord',
            'repeated' => true,
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
        $this->values[self::CHALLENGETIMES] = null;
        $this->values[self::BUYCHANCETIMES] = null;
        $this->values[self::CDTIME] = null;
        $this->values[self::TODAYVICTORYTIMES] = null;
        $this->values[self::TODAYVICTORYPRIZERECORD] = array();
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
     * Sets value of 'challengeTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChallengeTimes($value)
    {
        return $this->set(self::CHALLENGETIMES, $value);
    }

    /**
     * Returns value of 'challengeTimes' property
     *
     * @return integer
     */
    public function getChallengeTimes()
    {
        $value = $this->get(self::CHALLENGETIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'challengeTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChallengeTimes()
    {
        return $this->get(self::CHALLENGETIMES) !== null;
    }

    /**
     * Sets value of 'buyChanceTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBuyChanceTimes($value)
    {
        return $this->set(self::BUYCHANCETIMES, $value);
    }

    /**
     * Returns value of 'buyChanceTimes' property
     *
     * @return integer
     */
    public function getBuyChanceTimes()
    {
        $value = $this->get(self::BUYCHANCETIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'buyChanceTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuyChanceTimes()
    {
        return $this->get(self::BUYCHANCETIMES) !== null;
    }

    /**
     * Sets value of 'cdtime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCdtime($value)
    {
        return $this->set(self::CDTIME, $value);
    }

    /**
     * Returns value of 'cdtime' property
     *
     * @return integer
     */
    public function getCdtime()
    {
        $value = $this->get(self::CDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cdtime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCdtime()
    {
        return $this->get(self::CDTIME) !== null;
    }

    /**
     * Sets value of 'todayVictoryTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTodayVictoryTimes($value)
    {
        return $this->set(self::TODAYVICTORYTIMES, $value);
    }

    /**
     * Returns value of 'todayVictoryTimes' property
     *
     * @return integer
     */
    public function getTodayVictoryTimes()
    {
        $value = $this->get(self::TODAYVICTORYTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'todayVictoryTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTodayVictoryTimes()
    {
        return $this->get(self::TODAYVICTORYTIMES) !== null;
    }

    /**
     * Appends value to 'todayVictoryPrizeRecord' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendTodayVictoryPrizeRecord($value)
    {
        return $this->append(self::TODAYVICTORYPRIZERECORD, $value);
    }

    /**
     * Clears 'todayVictoryPrizeRecord' list
     *
     * @return null
     */
    public function clearTodayVictoryPrizeRecord()
    {
        return $this->clear(self::TODAYVICTORYPRIZERECORD);
    }

    /**
     * Returns 'todayVictoryPrizeRecord' list
     *
     * @return integer[]
     */
    public function getTodayVictoryPrizeRecord()
    {
        return $this->get(self::TODAYVICTORYPRIZERECORD);
    }

    /**
     * Returns true if 'todayVictoryPrizeRecord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTodayVictoryPrizeRecord()
    {
        return count($this->get(self::TODAYVICTORYPRIZERECORD)) !== 0;
    }

    /**
     * Returns 'todayVictoryPrizeRecord' iterator
     *
     * @return \ArrayIterator
     */
    public function getTodayVictoryPrizeRecordIterator()
    {
        return new \ArrayIterator($this->get(self::TODAYVICTORYPRIZERECORD));
    }

    /**
     * Returns element from 'todayVictoryPrizeRecord' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTodayVictoryPrizeRecordAt($offset)
    {
        return $this->get(self::TODAYVICTORYPRIZERECORD, $offset);
    }

    /**
     * Returns count of 'todayVictoryPrizeRecord' list
     *
     * @return int
     */
    public function getTodayVictoryPrizeRecordCount()
    {
        return $this->count(self::TODAYVICTORYPRIZERECORD);
    }
}
}