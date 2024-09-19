<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleMatchStatus message
 */
class RoleMatchStatus extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPLACEID = 2;
    const TEAM = 3;
    const NSCORE = 4;
    const NREALSCORE = 5;
    const NRANK = 6;
    const NRANKINTEAM = 7;
    const BALIVE = 8;
    const ARRMATCHBUF = 9;
    const NMAXCOMB = 10;
    const NMAXCPERFECT = 11;
    const NKEYSPERFECT = 12;
    const NKEYPERFECT = 13;
    const NKEYGREAT = 14;
    const NKEYGOOD = 15;
    const NKEYMISS = 16;
    const BALLCOMBO = 17;
    const BALLPERFECT = 18;
    const NBOMBCOUNT = 19;
    const NACCURACY = 20;
    const DANCEGRADE = 21;
    const NMAXCSPERFECT = 22;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLACEID => array(
            'name' => 'nPlaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NREALSCORE => array(
            'name' => 'nRealScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANK => array(
            'name' => 'nRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANKINTEAM => array(
            'name' => 'nRankInTeam',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BALIVE => array(
            'name' => 'bAlive',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ARRMATCHBUF => array(
            'name' => 'arrMatchBuf',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BufferInfo'
        ),
        self::NMAXCOMB => array(
            'name' => 'nMaxComb',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXCPERFECT => array(
            'name' => 'nMaxCPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEYSPERFECT => array(
            'name' => 'nKeySPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEYPERFECT => array(
            'name' => 'nKeyPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEYGREAT => array(
            'name' => 'nKeyGreat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEYGOOD => array(
            'name' => 'nKeyGood',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEYMISS => array(
            'name' => 'nKeyMiss',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BALLCOMBO => array(
            'name' => 'bAllCombo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BALLPERFECT => array(
            'name' => 'bAllPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NBOMBCOUNT => array(
            'name' => 'nBombCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACCURACY => array(
            'name' => 'nAccuracy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DANCEGRADE => array(
            'default' => \Xnhd\Core\Pb\Sdo\DanceGrade::enmDanceGrade_E,
            'name' => 'danceGrade',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXCSPERFECT => array(
            'name' => 'nMaxCSPerfect',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NPLACEID] = null;
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::NSCORE] = null;
        $this->values[self::NREALSCORE] = null;
        $this->values[self::NRANK] = null;
        $this->values[self::NRANKINTEAM] = null;
        $this->values[self::BALIVE] = null;
        $this->values[self::ARRMATCHBUF] = array();
        $this->values[self::NMAXCOMB] = null;
        $this->values[self::NMAXCPERFECT] = null;
        $this->values[self::NKEYSPERFECT] = null;
        $this->values[self::NKEYPERFECT] = null;
        $this->values[self::NKEYGREAT] = null;
        $this->values[self::NKEYGOOD] = null;
        $this->values[self::NKEYMISS] = null;
        $this->values[self::BALLCOMBO] = null;
        $this->values[self::BALLPERFECT] = null;
        $this->values[self::NBOMBCOUNT] = null;
        $this->values[self::NACCURACY] = null;
        $this->values[self::DANCEGRADE] = self::$fields[self::DANCEGRADE]['default'];
        $this->values[self::NMAXCSPERFECT] = null;
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
     * Sets value of 'nPlaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlaceID($value)
    {
        return $this->set(self::NPLACEID, $value);
    }

    /**
     * Returns value of 'nPlaceID' property
     *
     * @return integer
     */
    public function getNPlaceID()
    {
        $value = $this->get(self::NPLACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlaceID()
    {
        return $this->get(self::NPLACEID) !== null;
    }

    /**
     * Sets value of 'team' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTeam($value)
    {
        return $this->set(self::TEAM, $value);
    }

    /**
     * Returns value of 'team' property
     *
     * @return integer
     */
    public function getTeam()
    {
        $value = $this->get(self::TEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'team' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTeam()
    {
        return $this->get(self::TEAM) !== null;
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'nRealScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRealScore($value)
    {
        return $this->set(self::NREALSCORE, $value);
    }

    /**
     * Returns value of 'nRealScore' property
     *
     * @return integer
     */
    public function getNRealScore()
    {
        $value = $this->get(self::NREALSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRealScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRealScore()
    {
        return $this->get(self::NREALSCORE) !== null;
    }

    /**
     * Sets value of 'nRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRank($value)
    {
        return $this->set(self::NRANK, $value);
    }

    /**
     * Returns value of 'nRank' property
     *
     * @return integer
     */
    public function getNRank()
    {
        $value = $this->get(self::NRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRank()
    {
        return $this->get(self::NRANK) !== null;
    }

    /**
     * Sets value of 'nRankInTeam' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRankInTeam($value)
    {
        return $this->set(self::NRANKINTEAM, $value);
    }

    /**
     * Returns value of 'nRankInTeam' property
     *
     * @return integer
     */
    public function getNRankInTeam()
    {
        $value = $this->get(self::NRANKINTEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRankInTeam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRankInTeam()
    {
        return $this->get(self::NRANKINTEAM) !== null;
    }

    /**
     * Sets value of 'bAlive' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBAlive($value)
    {
        return $this->set(self::BALIVE, $value);
    }

    /**
     * Returns value of 'bAlive' property
     *
     * @return boolean
     */
    public function getBAlive()
    {
        $value = $this->get(self::BALIVE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bAlive' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAlive()
    {
        return $this->get(self::BALIVE) !== null;
    }

    /**
     * Appends value to 'arrMatchBuf' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BufferInfo $value Value to append
     *
     * @return null
     */
    public function appendArrMatchBuf(\Xnhd\Core\Pb\Sdo\BufferInfo $value)
    {
        return $this->append(self::ARRMATCHBUF, $value);
    }

    /**
     * Clears 'arrMatchBuf' list
     *
     * @return null
     */
    public function clearArrMatchBuf()
    {
        return $this->clear(self::ARRMATCHBUF);
    }

    /**
     * Returns 'arrMatchBuf' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BufferInfo[]
     */
    public function getArrMatchBuf()
    {
        return $this->get(self::ARRMATCHBUF);
    }

    /**
     * Returns true if 'arrMatchBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMatchBuf()
    {
        return count($this->get(self::ARRMATCHBUF)) !== 0;
    }

    /**
     * Returns 'arrMatchBuf' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMatchBufIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMATCHBUF));
    }

    /**
     * Returns element from 'arrMatchBuf' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BufferInfo
     */
    public function getArrMatchBufAt($offset)
    {
        return $this->get(self::ARRMATCHBUF, $offset);
    }

    /**
     * Returns count of 'arrMatchBuf' list
     *
     * @return int
     */
    public function getArrMatchBufCount()
    {
        return $this->count(self::ARRMATCHBUF);
    }

    /**
     * Sets value of 'nMaxComb' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxComb($value)
    {
        return $this->set(self::NMAXCOMB, $value);
    }

    /**
     * Returns value of 'nMaxComb' property
     *
     * @return integer
     */
    public function getNMaxComb()
    {
        $value = $this->get(self::NMAXCOMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxComb' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxComb()
    {
        return $this->get(self::NMAXCOMB) !== null;
    }

    /**
     * Sets value of 'nMaxCPerfect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxCPerfect($value)
    {
        return $this->set(self::NMAXCPERFECT, $value);
    }

    /**
     * Returns value of 'nMaxCPerfect' property
     *
     * @return integer
     */
    public function getNMaxCPerfect()
    {
        $value = $this->get(self::NMAXCPERFECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxCPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxCPerfect()
    {
        return $this->get(self::NMAXCPERFECT) !== null;
    }

    /**
     * Sets value of 'nKeySPerfect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeySPerfect($value)
    {
        return $this->set(self::NKEYSPERFECT, $value);
    }

    /**
     * Returns value of 'nKeySPerfect' property
     *
     * @return integer
     */
    public function getNKeySPerfect()
    {
        $value = $this->get(self::NKEYSPERFECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeySPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeySPerfect()
    {
        return $this->get(self::NKEYSPERFECT) !== null;
    }

    /**
     * Sets value of 'nKeyPerfect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeyPerfect($value)
    {
        return $this->set(self::NKEYPERFECT, $value);
    }

    /**
     * Returns value of 'nKeyPerfect' property
     *
     * @return integer
     */
    public function getNKeyPerfect()
    {
        $value = $this->get(self::NKEYPERFECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeyPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeyPerfect()
    {
        return $this->get(self::NKEYPERFECT) !== null;
    }

    /**
     * Sets value of 'nKeyGreat' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeyGreat($value)
    {
        return $this->set(self::NKEYGREAT, $value);
    }

    /**
     * Returns value of 'nKeyGreat' property
     *
     * @return integer
     */
    public function getNKeyGreat()
    {
        $value = $this->get(self::NKEYGREAT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeyGreat' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeyGreat()
    {
        return $this->get(self::NKEYGREAT) !== null;
    }

    /**
     * Sets value of 'nKeyGood' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeyGood($value)
    {
        return $this->set(self::NKEYGOOD, $value);
    }

    /**
     * Returns value of 'nKeyGood' property
     *
     * @return integer
     */
    public function getNKeyGood()
    {
        $value = $this->get(self::NKEYGOOD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeyGood' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeyGood()
    {
        return $this->get(self::NKEYGOOD) !== null;
    }

    /**
     * Sets value of 'nKeyMiss' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeyMiss($value)
    {
        return $this->set(self::NKEYMISS, $value);
    }

    /**
     * Returns value of 'nKeyMiss' property
     *
     * @return integer
     */
    public function getNKeyMiss()
    {
        $value = $this->get(self::NKEYMISS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeyMiss' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeyMiss()
    {
        return $this->get(self::NKEYMISS) !== null;
    }

    /**
     * Sets value of 'bAllCombo' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBAllCombo($value)
    {
        return $this->set(self::BALLCOMBO, $value);
    }

    /**
     * Returns value of 'bAllCombo' property
     *
     * @return boolean
     */
    public function getBAllCombo()
    {
        $value = $this->get(self::BALLCOMBO);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bAllCombo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAllCombo()
    {
        return $this->get(self::BALLCOMBO) !== null;
    }

    /**
     * Sets value of 'bAllPerfect' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBAllPerfect($value)
    {
        return $this->set(self::BALLPERFECT, $value);
    }

    /**
     * Returns value of 'bAllPerfect' property
     *
     * @return boolean
     */
    public function getBAllPerfect()
    {
        $value = $this->get(self::BALLPERFECT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bAllPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAllPerfect()
    {
        return $this->get(self::BALLPERFECT) !== null;
    }

    /**
     * Sets value of 'nBombCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBombCount($value)
    {
        return $this->set(self::NBOMBCOUNT, $value);
    }

    /**
     * Returns value of 'nBombCount' property
     *
     * @return integer
     */
    public function getNBombCount()
    {
        $value = $this->get(self::NBOMBCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBombCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBombCount()
    {
        return $this->get(self::NBOMBCOUNT) !== null;
    }

    /**
     * Sets value of 'nAccuracy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAccuracy($value)
    {
        return $this->set(self::NACCURACY, $value);
    }

    /**
     * Returns value of 'nAccuracy' property
     *
     * @return integer
     */
    public function getNAccuracy()
    {
        $value = $this->get(self::NACCURACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAccuracy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAccuracy()
    {
        return $this->get(self::NACCURACY) !== null;
    }

    /**
     * Sets value of 'danceGrade' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDanceGrade($value)
    {
        return $this->set(self::DANCEGRADE, $value);
    }

    /**
     * Returns value of 'danceGrade' property
     *
     * @return integer
     */
    public function getDanceGrade()
    {
        $value = $this->get(self::DANCEGRADE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'danceGrade' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDanceGrade()
    {
        return $this->get(self::DANCEGRADE) !== null;
    }

    /**
     * Sets value of 'nMaxCSPerfect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxCSPerfect($value)
    {
        return $this->set(self::NMAXCSPERFECT, $value);
    }

    /**
     * Returns value of 'nMaxCSPerfect' property
     *
     * @return integer
     */
    public function getNMaxCSPerfect()
    {
        $value = $this->get(self::NMAXCSPERFECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxCSPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxCSPerfect()
    {
        return $this->get(self::NMAXCSPERFECT) !== null;
    }
}
}