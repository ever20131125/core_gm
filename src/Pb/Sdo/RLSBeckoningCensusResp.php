<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningCensusResp message
 */
class RLSBeckoningCensusResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SZWORD = 3;
    const ARRAVATAR = 4;
    const NWEEKLIKEME = 7;
    const NMONTHLIKEME = 8;
    const ARRLABES = 9;
    const NLIKEMETOTAL = 10;
    const NILIKETOTAL = 11;
    const NAVGMEETBECKONING = 12;
    const NUSEDDAYS = 13;
    const NLIKEDCOUNT = 14;
    const NLIKEDPROB = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZWORD => array(
            'name' => 'szWord',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRAVATAR => array(
            'name' => 'arrAvatar',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWEEKLIKEME => array(
            'name' => 'nWeekLikeMe',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONTHLIKEME => array(
            'name' => 'nMonthLikeMe',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRLABES => array(
            'name' => 'arrLabes',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIKEMETOTAL => array(
            'name' => 'nLikeMeTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NILIKETOTAL => array(
            'name' => 'nILikeTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAVGMEETBECKONING => array(
            'name' => 'nAvgMeetBeckoning',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUSEDDAYS => array(
            'name' => 'nUsedDays',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIKEDCOUNT => array(
            'name' => 'nLikedCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIKEDPROB => array(
            'name' => 'nLikedProb',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SZWORD] = null;
        $this->values[self::ARRAVATAR] = array();
        $this->values[self::NWEEKLIKEME] = null;
        $this->values[self::NMONTHLIKEME] = null;
        $this->values[self::ARRLABES] = array();
        $this->values[self::NLIKEMETOTAL] = null;
        $this->values[self::NILIKETOTAL] = null;
        $this->values[self::NAVGMEETBECKONING] = null;
        $this->values[self::NUSEDDAYS] = null;
        $this->values[self::NLIKEDCOUNT] = null;
        $this->values[self::NLIKEDPROB] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'szWord' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzWord($value)
    {
        return $this->set(self::SZWORD, $value);
    }

    /**
     * Returns value of 'szWord' property
     *
     * @return string
     */
    public function getSzWord()
    {
        $value = $this->get(self::SZWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szWord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzWord()
    {
        return $this->get(self::SZWORD) !== null;
    }

    /**
     * Appends value to 'arrAvatar' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAvatar($value)
    {
        return $this->append(self::ARRAVATAR, $value);
    }

    /**
     * Clears 'arrAvatar' list
     *
     * @return null
     */
    public function clearArrAvatar()
    {
        return $this->clear(self::ARRAVATAR);
    }

    /**
     * Returns 'arrAvatar' list
     *
     * @return integer[]
     */
    public function getArrAvatar()
    {
        return $this->get(self::ARRAVATAR);
    }

    /**
     * Returns true if 'arrAvatar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAvatar()
    {
        return count($this->get(self::ARRAVATAR)) !== 0;
    }

    /**
     * Returns 'arrAvatar' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAvatarIterator()
    {
        return new \ArrayIterator($this->get(self::ARRAVATAR));
    }

    /**
     * Returns element from 'arrAvatar' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAvatarAt($offset)
    {
        return $this->get(self::ARRAVATAR, $offset);
    }

    /**
     * Returns count of 'arrAvatar' list
     *
     * @return int
     */
    public function getArrAvatarCount()
    {
        return $this->count(self::ARRAVATAR);
    }

    /**
     * Sets value of 'nWeekLikeMe' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeekLikeMe($value)
    {
        return $this->set(self::NWEEKLIKEME, $value);
    }

    /**
     * Returns value of 'nWeekLikeMe' property
     *
     * @return integer
     */
    public function getNWeekLikeMe()
    {
        $value = $this->get(self::NWEEKLIKEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeekLikeMe' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeekLikeMe()
    {
        return $this->get(self::NWEEKLIKEME) !== null;
    }

    /**
     * Sets value of 'nMonthLikeMe' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMonthLikeMe($value)
    {
        return $this->set(self::NMONTHLIKEME, $value);
    }

    /**
     * Returns value of 'nMonthLikeMe' property
     *
     * @return integer
     */
    public function getNMonthLikeMe()
    {
        $value = $this->get(self::NMONTHLIKEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMonthLikeMe' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMonthLikeMe()
    {
        return $this->get(self::NMONTHLIKEME) !== null;
    }

    /**
     * Appends value to 'arrLabes' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrLabes($value)
    {
        return $this->append(self::ARRLABES, $value);
    }

    /**
     * Clears 'arrLabes' list
     *
     * @return null
     */
    public function clearArrLabes()
    {
        return $this->clear(self::ARRLABES);
    }

    /**
     * Returns 'arrLabes' list
     *
     * @return integer[]
     */
    public function getArrLabes()
    {
        return $this->get(self::ARRLABES);
    }

    /**
     * Returns true if 'arrLabes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLabes()
    {
        return count($this->get(self::ARRLABES)) !== 0;
    }

    /**
     * Returns 'arrLabes' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLabesIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLABES));
    }

    /**
     * Returns element from 'arrLabes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrLabesAt($offset)
    {
        return $this->get(self::ARRLABES, $offset);
    }

    /**
     * Returns count of 'arrLabes' list
     *
     * @return int
     */
    public function getArrLabesCount()
    {
        return $this->count(self::ARRLABES);
    }

    /**
     * Sets value of 'nLikeMeTotal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLikeMeTotal($value)
    {
        return $this->set(self::NLIKEMETOTAL, $value);
    }

    /**
     * Returns value of 'nLikeMeTotal' property
     *
     * @return integer
     */
    public function getNLikeMeTotal()
    {
        $value = $this->get(self::NLIKEMETOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLikeMeTotal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLikeMeTotal()
    {
        return $this->get(self::NLIKEMETOTAL) !== null;
    }

    /**
     * Sets value of 'nILikeTotal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNILikeTotal($value)
    {
        return $this->set(self::NILIKETOTAL, $value);
    }

    /**
     * Returns value of 'nILikeTotal' property
     *
     * @return integer
     */
    public function getNILikeTotal()
    {
        $value = $this->get(self::NILIKETOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nILikeTotal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNILikeTotal()
    {
        return $this->get(self::NILIKETOTAL) !== null;
    }

    /**
     * Sets value of 'nAvgMeetBeckoning' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAvgMeetBeckoning($value)
    {
        return $this->set(self::NAVGMEETBECKONING, $value);
    }

    /**
     * Returns value of 'nAvgMeetBeckoning' property
     *
     * @return integer
     */
    public function getNAvgMeetBeckoning()
    {
        $value = $this->get(self::NAVGMEETBECKONING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAvgMeetBeckoning' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAvgMeetBeckoning()
    {
        return $this->get(self::NAVGMEETBECKONING) !== null;
    }

    /**
     * Sets value of 'nUsedDays' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUsedDays($value)
    {
        return $this->set(self::NUSEDDAYS, $value);
    }

    /**
     * Returns value of 'nUsedDays' property
     *
     * @return integer
     */
    public function getNUsedDays()
    {
        $value = $this->get(self::NUSEDDAYS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUsedDays' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUsedDays()
    {
        return $this->get(self::NUSEDDAYS) !== null;
    }

    /**
     * Sets value of 'nLikedCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLikedCount($value)
    {
        return $this->set(self::NLIKEDCOUNT, $value);
    }

    /**
     * Returns value of 'nLikedCount' property
     *
     * @return integer
     */
    public function getNLikedCount()
    {
        $value = $this->get(self::NLIKEDCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLikedCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLikedCount()
    {
        return $this->get(self::NLIKEDCOUNT) !== null;
    }

    /**
     * Sets value of 'nLikedProb' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLikedProb($value)
    {
        return $this->set(self::NLIKEDPROB, $value);
    }

    /**
     * Returns value of 'nLikedProb' property
     *
     * @return integer
     */
    public function getNLikedProb()
    {
        $value = $this->get(self::NLIKEDPROB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLikedProb' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLikedProb()
    {
        return $this->get(self::NLIKEDPROB) !== null;
    }
}
}