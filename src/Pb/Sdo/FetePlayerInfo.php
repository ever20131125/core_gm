<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FetePlayerInfo message
 */
class FetePlayerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const SCORE = 2;
    const GRADE = 3;
    const RECORDTIME = 4;
    const RANK = 5;
    const LOSTCOUNT = 6;
    const WINCOUNT = 7;
    const GAMECOUNT = 8;
    const LOSTTOTALCOUNT = 9;
    const WINTOTALCOUNT = 10;
    const GAMETOTALCOUNT = 11;
    const CONTINUEWIN = 12;
    const MAXSCORE = 13;
    const MAXRANK = 14;
    const MAXCONTINUEWIN = 15;
    const GENINFO = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCORE => array(
            'name' => 'score',
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
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::LOSTTOTALCOUNT => array(
            'name' => 'lostTotalCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WINTOTALCOUNT => array(
            'name' => 'winTotalCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMETOTALCOUNT => array(
            'name' => 'gameTotalCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTINUEWIN => array(
            'name' => 'continueWin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXSCORE => array(
            'name' => 'maxScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXRANK => array(
            'name' => 'maxRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXCONTINUEWIN => array(
            'name' => 'maxContinueWin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENINFO => array(
            'name' => 'genInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
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
        $this->values[self::SCORE] = null;
        $this->values[self::GRADE] = null;
        $this->values[self::RECORDTIME] = null;
        $this->values[self::RANK] = null;
        $this->values[self::LOSTCOUNT] = null;
        $this->values[self::WINCOUNT] = null;
        $this->values[self::GAMECOUNT] = null;
        $this->values[self::LOSTTOTALCOUNT] = null;
        $this->values[self::WINTOTALCOUNT] = null;
        $this->values[self::GAMETOTALCOUNT] = null;
        $this->values[self::CONTINUEWIN] = null;
        $this->values[self::MAXSCORE] = null;
        $this->values[self::MAXRANK] = null;
        $this->values[self::MAXCONTINUEWIN] = null;
        $this->values[self::GENINFO] = null;
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
     * Sets value of 'roleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleid($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleid' property
     *
     * @return integer
     */
    public function getRoleid()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleid()
    {
        return $this->get(self::ROLEID) !== null;
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
     * Sets value of 'lostTotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLostTotalCount($value)
    {
        return $this->set(self::LOSTTOTALCOUNT, $value);
    }

    /**
     * Returns value of 'lostTotalCount' property
     *
     * @return integer
     */
    public function getLostTotalCount()
    {
        $value = $this->get(self::LOSTTOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lostTotalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLostTotalCount()
    {
        return $this->get(self::LOSTTOTALCOUNT) !== null;
    }

    /**
     * Sets value of 'winTotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWinTotalCount($value)
    {
        return $this->set(self::WINTOTALCOUNT, $value);
    }

    /**
     * Returns value of 'winTotalCount' property
     *
     * @return integer
     */
    public function getWinTotalCount()
    {
        $value = $this->get(self::WINTOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'winTotalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWinTotalCount()
    {
        return $this->get(self::WINTOTALCOUNT) !== null;
    }

    /**
     * Sets value of 'gameTotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameTotalCount($value)
    {
        return $this->set(self::GAMETOTALCOUNT, $value);
    }

    /**
     * Returns value of 'gameTotalCount' property
     *
     * @return integer
     */
    public function getGameTotalCount()
    {
        $value = $this->get(self::GAMETOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameTotalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameTotalCount()
    {
        return $this->get(self::GAMETOTALCOUNT) !== null;
    }

    /**
     * Sets value of 'continueWin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContinueWin($value)
    {
        return $this->set(self::CONTINUEWIN, $value);
    }

    /**
     * Returns value of 'continueWin' property
     *
     * @return integer
     */
    public function getContinueWin()
    {
        $value = $this->get(self::CONTINUEWIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'continueWin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContinueWin()
    {
        return $this->get(self::CONTINUEWIN) !== null;
    }

    /**
     * Sets value of 'maxScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxScore($value)
    {
        return $this->set(self::MAXSCORE, $value);
    }

    /**
     * Returns value of 'maxScore' property
     *
     * @return integer
     */
    public function getMaxScore()
    {
        $value = $this->get(self::MAXSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxScore()
    {
        return $this->get(self::MAXSCORE) !== null;
    }

    /**
     * Sets value of 'maxRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxRank($value)
    {
        return $this->set(self::MAXRANK, $value);
    }

    /**
     * Returns value of 'maxRank' property
     *
     * @return integer
     */
    public function getMaxRank()
    {
        $value = $this->get(self::MAXRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxRank()
    {
        return $this->get(self::MAXRANK) !== null;
    }

    /**
     * Sets value of 'maxContinueWin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxContinueWin($value)
    {
        return $this->set(self::MAXCONTINUEWIN, $value);
    }

    /**
     * Returns value of 'maxContinueWin' property
     *
     * @return integer
     */
    public function getMaxContinueWin()
    {
        $value = $this->get(self::MAXCONTINUEWIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxContinueWin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxContinueWin()
    {
        return $this->get(self::MAXCONTINUEWIN) !== null;
    }

    /**
     * Sets value of 'genInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setGenInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::GENINFO, $value);
    }

    /**
     * Returns value of 'genInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getGenInfo()
    {
        return $this->get(self::GENINFO);
    }

    /**
     * Returns true if 'genInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGenInfo()
    {
        return $this->get(self::GENINFO) !== null;
    }
}
}