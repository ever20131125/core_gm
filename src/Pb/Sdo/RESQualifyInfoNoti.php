<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESQualifyInfoNoti message
 */
class RESQualifyInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const GAMEMODE = 2;
    const WINLOSE = 3;
    const STOLDINFO = 4;
    const STNEWINFO = 5;
    const NDANCERANK = 6;
    const NRANKPOINT = 7;
    const NTITLEBONUSPOINT = 8;
    const NCARDBONUSPOINT = 9;
    const NCWINCOUNT = 10;
    const NCWINBONUSPOINT = 11;
    const NACBONUSPOINT = 12;
    const NAPBONUSPOINT = 13;
    const PRIZELIST = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Normal,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WINLOSE => array(
            'default' => \Xnhd\Core\Pb\Sdo\WinLose::enmWinLose_Win,
            'name' => 'winLose',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STOLDINFO => array(
            'name' => 'stOldInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyRole'
        ),
        self::STNEWINFO => array(
            'name' => 'stNewInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyRole'
        ),
        self::NDANCERANK => array(
            'name' => 'nDanceRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANKPOINT => array(
            'name' => 'nRankPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTITLEBONUSPOINT => array(
            'name' => 'nTitleBonusPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCARDBONUSPOINT => array(
            'name' => 'nCardBonusPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCWINCOUNT => array(
            'name' => 'nCWinCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCWINBONUSPOINT => array(
            'name' => 'nCWinBonusPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACBONUSPOINT => array(
            'name' => 'nACBonusPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAPBONUSPOINT => array(
            'name' => 'nAPBonusPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::WINLOSE] = self::$fields[self::WINLOSE]['default'];
        $this->values[self::STOLDINFO] = null;
        $this->values[self::STNEWINFO] = null;
        $this->values[self::NDANCERANK] = null;
        $this->values[self::NRANKPOINT] = null;
        $this->values[self::NTITLEBONUSPOINT] = null;
        $this->values[self::NCARDBONUSPOINT] = null;
        $this->values[self::NCWINCOUNT] = null;
        $this->values[self::NCWINBONUSPOINT] = null;
        $this->values[self::NACBONUSPOINT] = null;
        $this->values[self::NAPBONUSPOINT] = null;
        $this->values[self::PRIZELIST] = array();
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
     * Sets value of 'gameMode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameMode($value)
    {
        return $this->set(self::GAMEMODE, $value);
    }

    /**
     * Returns value of 'gameMode' property
     *
     * @return integer
     */
    public function getGameMode()
    {
        $value = $this->get(self::GAMEMODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameMode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameMode()
    {
        return $this->get(self::GAMEMODE) !== null;
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
     * Sets value of 'stOldInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyRole $value Property value
     *
     * @return null
     */
    public function setStOldInfo(\Xnhd\Core\Pb\Sdo\QualifyRole $value=null)
    {
        return $this->set(self::STOLDINFO, $value);
    }

    /**
     * Returns value of 'stOldInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRole
     */
    public function getStOldInfo()
    {
        return $this->get(self::STOLDINFO);
    }

    /**
     * Returns true if 'stOldInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStOldInfo()
    {
        return $this->get(self::STOLDINFO) !== null;
    }

    /**
     * Sets value of 'stNewInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyRole $value Property value
     *
     * @return null
     */
    public function setStNewInfo(\Xnhd\Core\Pb\Sdo\QualifyRole $value=null)
    {
        return $this->set(self::STNEWINFO, $value);
    }

    /**
     * Returns value of 'stNewInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRole
     */
    public function getStNewInfo()
    {
        return $this->get(self::STNEWINFO);
    }

    /**
     * Returns true if 'stNewInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStNewInfo()
    {
        return $this->get(self::STNEWINFO) !== null;
    }

    /**
     * Sets value of 'nDanceRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDanceRank($value)
    {
        return $this->set(self::NDANCERANK, $value);
    }

    /**
     * Returns value of 'nDanceRank' property
     *
     * @return integer
     */
    public function getNDanceRank()
    {
        $value = $this->get(self::NDANCERANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDanceRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDanceRank()
    {
        return $this->get(self::NDANCERANK) !== null;
    }

    /**
     * Sets value of 'nRankPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRankPoint($value)
    {
        return $this->set(self::NRANKPOINT, $value);
    }

    /**
     * Returns value of 'nRankPoint' property
     *
     * @return integer
     */
    public function getNRankPoint()
    {
        $value = $this->get(self::NRANKPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRankPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRankPoint()
    {
        return $this->get(self::NRANKPOINT) !== null;
    }

    /**
     * Sets value of 'nTitleBonusPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTitleBonusPoint($value)
    {
        return $this->set(self::NTITLEBONUSPOINT, $value);
    }

    /**
     * Returns value of 'nTitleBonusPoint' property
     *
     * @return integer
     */
    public function getNTitleBonusPoint()
    {
        $value = $this->get(self::NTITLEBONUSPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTitleBonusPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTitleBonusPoint()
    {
        return $this->get(self::NTITLEBONUSPOINT) !== null;
    }

    /**
     * Sets value of 'nCardBonusPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCardBonusPoint($value)
    {
        return $this->set(self::NCARDBONUSPOINT, $value);
    }

    /**
     * Returns value of 'nCardBonusPoint' property
     *
     * @return integer
     */
    public function getNCardBonusPoint()
    {
        $value = $this->get(self::NCARDBONUSPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCardBonusPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCardBonusPoint()
    {
        return $this->get(self::NCARDBONUSPOINT) !== null;
    }

    /**
     * Sets value of 'nCWinCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCWinCount($value)
    {
        return $this->set(self::NCWINCOUNT, $value);
    }

    /**
     * Returns value of 'nCWinCount' property
     *
     * @return integer
     */
    public function getNCWinCount()
    {
        $value = $this->get(self::NCWINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCWinCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCWinCount()
    {
        return $this->get(self::NCWINCOUNT) !== null;
    }

    /**
     * Sets value of 'nCWinBonusPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCWinBonusPoint($value)
    {
        return $this->set(self::NCWINBONUSPOINT, $value);
    }

    /**
     * Returns value of 'nCWinBonusPoint' property
     *
     * @return integer
     */
    public function getNCWinBonusPoint()
    {
        $value = $this->get(self::NCWINBONUSPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCWinBonusPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCWinBonusPoint()
    {
        return $this->get(self::NCWINBONUSPOINT) !== null;
    }

    /**
     * Sets value of 'nACBonusPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNACBonusPoint($value)
    {
        return $this->set(self::NACBONUSPOINT, $value);
    }

    /**
     * Returns value of 'nACBonusPoint' property
     *
     * @return integer
     */
    public function getNACBonusPoint()
    {
        $value = $this->get(self::NACBONUSPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nACBonusPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNACBonusPoint()
    {
        return $this->get(self::NACBONUSPOINT) !== null;
    }

    /**
     * Sets value of 'nAPBonusPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAPBonusPoint($value)
    {
        return $this->set(self::NAPBONUSPOINT, $value);
    }

    /**
     * Returns value of 'nAPBonusPoint' property
     *
     * @return integer
     */
    public function getNAPBonusPoint()
    {
        $value = $this->get(self::NAPBONUSPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAPBonusPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAPBonusPoint()
    {
        return $this->get(self::NAPBONUSPOINT) !== null;
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendPrizeList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::PRIZELIST, $value);
    }

    /**
     * Clears 'prizeList' list
     *
     * @return null
     */
    public function clearPrizeList()
    {
        return $this->clear(self::PRIZELIST);
    }

    /**
     * Returns 'prizeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getPrizeList()
    {
        return $this->get(self::PRIZELIST);
    }

    /**
     * Returns true if 'prizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeList()
    {
        return count($this->get(self::PRIZELIST)) !== 0;
    }

    /**
     * Returns 'prizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZELIST));
    }

    /**
     * Returns element from 'prizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getPrizeListAt($offset)
    {
        return $this->get(self::PRIZELIST, $offset);
    }

    /**
     * Returns count of 'prizeList' list
     *
     * @return int
     */
    public function getPrizeListCount()
    {
        return $this->count(self::PRIZELIST);
    }
}
}