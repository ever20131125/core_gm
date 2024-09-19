<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BalanceResult message
 */
class BalanceResult extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPLACEID = 2;
    const NSCORE = 3;
    const NREALSCORE = 4;
    const NRANK = 5;
    const NREALRANK = 6;
    const TEAM = 7;
    const NTEAMRANK = 8;
    const NKEYCOUNT = 9;
    const NMAXCOMB = 10;
    const NMAXCPERFECT = 11;
    const NKEYSPERFECT = 12;
    const NKEYPERFECT = 13;
    const NKEYGREAT = 14;
    const NKEYGOOD = 15;
    const NKEYMISS = 16;
    const ARRKEYSUM = 17;
    const BALLCOMBO = 18;
    const BALLPERFECT = 19;
    const NBOMBCOUNT = 20;
    const NBOMBSCORE = 21;
    const NACCURACY = 22;
    const DANCEGRADE = 23;
    const NGCOINGAINED = 24;
    const NEXPGAINED = 25;
    const STBONUSITEM = 26;
    const NBASEGCOIN = 27;
    const NBASEEXP = 28;
    const NEXTRAGCOIN = 29;
    const NEXTRAEXP = 30;
    const NVIPGCOIN = 31;
    const NVIPEXP = 32;
    const ARRBONUSGCOIN = 33;
    const ARRBONUSEXP = 34;
    const BESCAPE = 35;
    const WINLOSE = 36;
    const BMVP = 37;
    const NFRIENDCNT = 38;
    const NMAXCSPERFECT = 39;
    const NCUPVALUE = 40;
    const NCOMBCOUNT = 41;

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
        self::NREALRANK => array(
            'name' => 'nRealRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTEAMRANK => array(
            'name' => 'nTeamRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEYCOUNT => array(
            'name' => 'nKeyCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::ARRKEYSUM => array(
            'name' => 'arrKeySum',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\KeySumm'
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
        self::NBOMBSCORE => array(
            'name' => 'nBombScore',
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
        self::NGCOINGAINED => array(
            'name' => 'nGCoinGained',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPGAINED => array(
            'name' => 'nExpGained',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STBONUSITEM => array(
            'name' => 'stBonusItem',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
        ),
        self::NBASEGCOIN => array(
            'name' => 'nBaseGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBASEEXP => array(
            'name' => 'nBaseExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXTRAGCOIN => array(
            'name' => 'nExtraGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXTRAEXP => array(
            'name' => 'nExtraExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVIPGCOIN => array(
            'name' => 'nVIPGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVIPEXP => array(
            'name' => 'nVIPExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBONUSGCOIN => array(
            'name' => 'arrBonusGCoin',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBONUSEXP => array(
            'name' => 'arrBonusExp',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BESCAPE => array(
            'name' => 'bEscape',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::WINLOSE => array(
            'default' => \Xnhd\Core\Pb\Sdo\WinLose::enmWinLose_Win,
            'name' => 'winLose',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BMVP => array(
            'name' => 'bMVP',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NFRIENDCNT => array(
            'name' => 'nFriendCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXCSPERFECT => array(
            'name' => 'nMaxCSPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUPVALUE => array(
            'name' => 'nCupValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOMBCOUNT => array(
            'name' => 'nCombCount',
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
        $this->values[self::NSCORE] = null;
        $this->values[self::NREALSCORE] = null;
        $this->values[self::NRANK] = null;
        $this->values[self::NREALRANK] = null;
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::NTEAMRANK] = null;
        $this->values[self::NKEYCOUNT] = null;
        $this->values[self::NMAXCOMB] = null;
        $this->values[self::NMAXCPERFECT] = null;
        $this->values[self::NKEYSPERFECT] = null;
        $this->values[self::NKEYPERFECT] = null;
        $this->values[self::NKEYGREAT] = null;
        $this->values[self::NKEYGOOD] = null;
        $this->values[self::NKEYMISS] = null;
        $this->values[self::ARRKEYSUM] = array();
        $this->values[self::BALLCOMBO] = null;
        $this->values[self::BALLPERFECT] = null;
        $this->values[self::NBOMBCOUNT] = null;
        $this->values[self::NBOMBSCORE] = null;
        $this->values[self::NACCURACY] = null;
        $this->values[self::DANCEGRADE] = self::$fields[self::DANCEGRADE]['default'];
        $this->values[self::NGCOINGAINED] = null;
        $this->values[self::NEXPGAINED] = null;
        $this->values[self::STBONUSITEM] = null;
        $this->values[self::NBASEGCOIN] = null;
        $this->values[self::NBASEEXP] = null;
        $this->values[self::NEXTRAGCOIN] = null;
        $this->values[self::NEXTRAEXP] = null;
        $this->values[self::NVIPGCOIN] = null;
        $this->values[self::NVIPEXP] = null;
        $this->values[self::ARRBONUSGCOIN] = array();
        $this->values[self::ARRBONUSEXP] = array();
        $this->values[self::BESCAPE] = null;
        $this->values[self::WINLOSE] = self::$fields[self::WINLOSE]['default'];
        $this->values[self::BMVP] = null;
        $this->values[self::NFRIENDCNT] = null;
        $this->values[self::NMAXCSPERFECT] = null;
        $this->values[self::NCUPVALUE] = null;
        $this->values[self::NCOMBCOUNT] = null;
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
     * Sets value of 'nRealRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRealRank($value)
    {
        return $this->set(self::NREALRANK, $value);
    }

    /**
     * Returns value of 'nRealRank' property
     *
     * @return integer
     */
    public function getNRealRank()
    {
        $value = $this->get(self::NREALRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRealRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRealRank()
    {
        return $this->get(self::NREALRANK) !== null;
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
     * Sets value of 'nTeamRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTeamRank($value)
    {
        return $this->set(self::NTEAMRANK, $value);
    }

    /**
     * Returns value of 'nTeamRank' property
     *
     * @return integer
     */
    public function getNTeamRank()
    {
        $value = $this->get(self::NTEAMRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTeamRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTeamRank()
    {
        return $this->get(self::NTEAMRANK) !== null;
    }

    /**
     * Sets value of 'nKeyCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeyCount($value)
    {
        return $this->set(self::NKEYCOUNT, $value);
    }

    /**
     * Returns value of 'nKeyCount' property
     *
     * @return integer
     */
    public function getNKeyCount()
    {
        $value = $this->get(self::NKEYCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeyCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeyCount()
    {
        return $this->get(self::NKEYCOUNT) !== null;
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
     * Appends value to 'arrKeySum' list
     *
     * @param \Xnhd\Core\Pb\Sdo\KeySumm $value Value to append
     *
     * @return null
     */
    public function appendArrKeySum(\Xnhd\Core\Pb\Sdo\KeySumm $value)
    {
        return $this->append(self::ARRKEYSUM, $value);
    }

    /**
     * Clears 'arrKeySum' list
     *
     * @return null
     */
    public function clearArrKeySum()
    {
        return $this->clear(self::ARRKEYSUM);
    }

    /**
     * Returns 'arrKeySum' list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeySumm[]
     */
    public function getArrKeySum()
    {
        return $this->get(self::ARRKEYSUM);
    }

    /**
     * Returns true if 'arrKeySum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrKeySum()
    {
        return count($this->get(self::ARRKEYSUM)) !== 0;
    }

    /**
     * Returns 'arrKeySum' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrKeySumIterator()
    {
        return new \ArrayIterator($this->get(self::ARRKEYSUM));
    }

    /**
     * Returns element from 'arrKeySum' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeySumm
     */
    public function getArrKeySumAt($offset)
    {
        return $this->get(self::ARRKEYSUM, $offset);
    }

    /**
     * Returns count of 'arrKeySum' list
     *
     * @return int
     */
    public function getArrKeySumCount()
    {
        return $this->count(self::ARRKEYSUM);
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
     * Sets value of 'nBombScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBombScore($value)
    {
        return $this->set(self::NBOMBSCORE, $value);
    }

    /**
     * Returns value of 'nBombScore' property
     *
     * @return integer
     */
    public function getNBombScore()
    {
        $value = $this->get(self::NBOMBSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBombScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBombScore()
    {
        return $this->get(self::NBOMBSCORE) !== null;
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
     * Sets value of 'nGCoinGained' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGCoinGained($value)
    {
        return $this->set(self::NGCOINGAINED, $value);
    }

    /**
     * Returns value of 'nGCoinGained' property
     *
     * @return integer
     */
    public function getNGCoinGained()
    {
        $value = $this->get(self::NGCOINGAINED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGCoinGained' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGCoinGained()
    {
        return $this->get(self::NGCOINGAINED) !== null;
    }

    /**
     * Sets value of 'nExpGained' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExpGained($value)
    {
        return $this->set(self::NEXPGAINED, $value);
    }

    /**
     * Returns value of 'nExpGained' property
     *
     * @return integer
     */
    public function getNExpGained()
    {
        $value = $this->get(self::NEXPGAINED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExpGained' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExpGained()
    {
        return $this->get(self::NEXPGAINED) !== null;
    }

    /**
     * Sets value of 'stBonusItem' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Property value
     *
     * @return null
     */
    public function setStBonusItem(\Xnhd\Core\Pb\Sdo\ItemGained $value=null)
    {
        return $this->set(self::STBONUSITEM, $value);
    }

    /**
     * Returns value of 'stBonusItem' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
     */
    public function getStBonusItem()
    {
        return $this->get(self::STBONUSITEM);
    }

    /**
     * Returns true if 'stBonusItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBonusItem()
    {
        return $this->get(self::STBONUSITEM) !== null;
    }

    /**
     * Sets value of 'nBaseGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBaseGCoin($value)
    {
        return $this->set(self::NBASEGCOIN, $value);
    }

    /**
     * Returns value of 'nBaseGCoin' property
     *
     * @return integer
     */
    public function getNBaseGCoin()
    {
        $value = $this->get(self::NBASEGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBaseGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBaseGCoin()
    {
        return $this->get(self::NBASEGCOIN) !== null;
    }

    /**
     * Sets value of 'nBaseExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBaseExp($value)
    {
        return $this->set(self::NBASEEXP, $value);
    }

    /**
     * Returns value of 'nBaseExp' property
     *
     * @return integer
     */
    public function getNBaseExp()
    {
        $value = $this->get(self::NBASEEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBaseExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBaseExp()
    {
        return $this->get(self::NBASEEXP) !== null;
    }

    /**
     * Sets value of 'nExtraGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExtraGCoin($value)
    {
        return $this->set(self::NEXTRAGCOIN, $value);
    }

    /**
     * Returns value of 'nExtraGCoin' property
     *
     * @return integer
     */
    public function getNExtraGCoin()
    {
        $value = $this->get(self::NEXTRAGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExtraGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExtraGCoin()
    {
        return $this->get(self::NEXTRAGCOIN) !== null;
    }

    /**
     * Sets value of 'nExtraExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExtraExp($value)
    {
        return $this->set(self::NEXTRAEXP, $value);
    }

    /**
     * Returns value of 'nExtraExp' property
     *
     * @return integer
     */
    public function getNExtraExp()
    {
        $value = $this->get(self::NEXTRAEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExtraExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExtraExp()
    {
        return $this->get(self::NEXTRAEXP) !== null;
    }

    /**
     * Sets value of 'nVIPGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVIPGCoin($value)
    {
        return $this->set(self::NVIPGCOIN, $value);
    }

    /**
     * Returns value of 'nVIPGCoin' property
     *
     * @return integer
     */
    public function getNVIPGCoin()
    {
        $value = $this->get(self::NVIPGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVIPGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVIPGCoin()
    {
        return $this->get(self::NVIPGCOIN) !== null;
    }

    /**
     * Sets value of 'nVIPExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVIPExp($value)
    {
        return $this->set(self::NVIPEXP, $value);
    }

    /**
     * Returns value of 'nVIPExp' property
     *
     * @return integer
     */
    public function getNVIPExp()
    {
        $value = $this->get(self::NVIPEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVIPExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVIPExp()
    {
        return $this->get(self::NVIPEXP) !== null;
    }

    /**
     * Appends value to 'arrBonusGCoin' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBonusGCoin($value)
    {
        return $this->append(self::ARRBONUSGCOIN, $value);
    }

    /**
     * Clears 'arrBonusGCoin' list
     *
     * @return null
     */
    public function clearArrBonusGCoin()
    {
        return $this->clear(self::ARRBONUSGCOIN);
    }

    /**
     * Returns 'arrBonusGCoin' list
     *
     * @return integer[]
     */
    public function getArrBonusGCoin()
    {
        return $this->get(self::ARRBONUSGCOIN);
    }

    /**
     * Returns true if 'arrBonusGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBonusGCoin()
    {
        return count($this->get(self::ARRBONUSGCOIN)) !== 0;
    }

    /**
     * Returns 'arrBonusGCoin' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBonusGCoinIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBONUSGCOIN));
    }

    /**
     * Returns element from 'arrBonusGCoin' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBonusGCoinAt($offset)
    {
        return $this->get(self::ARRBONUSGCOIN, $offset);
    }

    /**
     * Returns count of 'arrBonusGCoin' list
     *
     * @return int
     */
    public function getArrBonusGCoinCount()
    {
        return $this->count(self::ARRBONUSGCOIN);
    }

    /**
     * Appends value to 'arrBonusExp' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBonusExp($value)
    {
        return $this->append(self::ARRBONUSEXP, $value);
    }

    /**
     * Clears 'arrBonusExp' list
     *
     * @return null
     */
    public function clearArrBonusExp()
    {
        return $this->clear(self::ARRBONUSEXP);
    }

    /**
     * Returns 'arrBonusExp' list
     *
     * @return integer[]
     */
    public function getArrBonusExp()
    {
        return $this->get(self::ARRBONUSEXP);
    }

    /**
     * Returns true if 'arrBonusExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBonusExp()
    {
        return count($this->get(self::ARRBONUSEXP)) !== 0;
    }

    /**
     * Returns 'arrBonusExp' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBonusExpIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBONUSEXP));
    }

    /**
     * Returns element from 'arrBonusExp' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBonusExpAt($offset)
    {
        return $this->get(self::ARRBONUSEXP, $offset);
    }

    /**
     * Returns count of 'arrBonusExp' list
     *
     * @return int
     */
    public function getArrBonusExpCount()
    {
        return $this->count(self::ARRBONUSEXP);
    }

    /**
     * Sets value of 'bEscape' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBEscape($value)
    {
        return $this->set(self::BESCAPE, $value);
    }

    /**
     * Returns value of 'bEscape' property
     *
     * @return boolean
     */
    public function getBEscape()
    {
        $value = $this->get(self::BESCAPE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bEscape' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBEscape()
    {
        return $this->get(self::BESCAPE) !== null;
    }

    /**
     * Sets value of 'winLose' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWinLose($value)
    {
        return $this->set(self::WINLOSE, $value);
    }

    /**
     * Returns value of 'winLose' property
     *
     * @return integer
     */
    public function getWinLose()
    {
        $value = $this->get(self::WINLOSE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'winLose' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWinLose()
    {
        return $this->get(self::WINLOSE) !== null;
    }

    /**
     * Sets value of 'bMVP' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBMVP($value)
    {
        return $this->set(self::BMVP, $value);
    }

    /**
     * Returns value of 'bMVP' property
     *
     * @return boolean
     */
    public function getBMVP()
    {
        $value = $this->get(self::BMVP);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bMVP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBMVP()
    {
        return $this->get(self::BMVP) !== null;
    }

    /**
     * Sets value of 'nFriendCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFriendCnt($value)
    {
        return $this->set(self::NFRIENDCNT, $value);
    }

    /**
     * Returns value of 'nFriendCnt' property
     *
     * @return integer
     */
    public function getNFriendCnt()
    {
        $value = $this->get(self::NFRIENDCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFriendCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFriendCnt()
    {
        return $this->get(self::NFRIENDCNT) !== null;
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

    /**
     * Sets value of 'nCupValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupValue($value)
    {
        return $this->set(self::NCUPVALUE, $value);
    }

    /**
     * Returns value of 'nCupValue' property
     *
     * @return integer
     */
    public function getNCupValue()
    {
        $value = $this->get(self::NCUPVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupValue()
    {
        return $this->get(self::NCUPVALUE) !== null;
    }

    /**
     * Sets value of 'nCombCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCombCount($value)
    {
        return $this->set(self::NCOMBCOUNT, $value);
    }

    /**
     * Returns value of 'nCombCount' property
     *
     * @return integer
     */
    public function getNCombCount()
    {
        $value = $this->get(self::NCOMBCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCombCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCombCount()
    {
        return $this->get(self::NCOMBCOUNT) !== null;
    }
}
}