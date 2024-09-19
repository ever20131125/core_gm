<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyRankListResp message
 */
class SGSQualifyRankListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GAMEMODE = 2;
    const ROLEID = 3;
    const TOTALCNT = 4;
    const ARRRANKUNIT = 5;
    const ARRRANKPRIZE = 6;
    const ACTSTATUS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALCNT => array(
            'name' => 'totalCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRRANKUNIT => array(
            'name' => 'arrRankUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyRankUnit'
        ),
        self::ARRRANKPRIZE => array(
            'name' => 'arrRankPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RankPrize'
        ),
        self::ACTSTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_UnReceive,
            'name' => 'actStatus',
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
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::ROLEID] = null;
        $this->values[self::TOTALCNT] = null;
        $this->values[self::ARRRANKUNIT] = array();
        $this->values[self::ARRRANKPRIZE] = array();
        $this->values[self::ACTSTATUS] = self::$fields[self::ACTSTATUS]['default'];
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'totalCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalCnt($value)
    {
        return $this->set(self::TOTALCNT, $value);
    }

    /**
     * Returns value of 'totalCnt' property
     *
     * @return integer
     */
    public function getTotalCnt()
    {
        $value = $this->get(self::TOTALCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalCnt()
    {
        return $this->get(self::TOTALCNT) !== null;
    }

    /**
     * Appends value to 'arrRankUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyRankUnit $value Value to append
     *
     * @return null
     */
    public function appendArrRankUnit(\Xnhd\Core\Pb\Sdo\QualifyRankUnit $value)
    {
        return $this->append(self::ARRRANKUNIT, $value);
    }

    /**
     * Clears 'arrRankUnit' list
     *
     * @return null
     */
    public function clearArrRankUnit()
    {
        return $this->clear(self::ARRRANKUNIT);
    }

    /**
     * Returns 'arrRankUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRankUnit[]
     */
    public function getArrRankUnit()
    {
        return $this->get(self::ARRRANKUNIT);
    }

    /**
     * Returns true if 'arrRankUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRankUnit()
    {
        return count($this->get(self::ARRRANKUNIT)) !== 0;
    }

    /**
     * Returns 'arrRankUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRankUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRANKUNIT));
    }

    /**
     * Returns element from 'arrRankUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRankUnit
     */
    public function getArrRankUnitAt($offset)
    {
        return $this->get(self::ARRRANKUNIT, $offset);
    }

    /**
     * Returns count of 'arrRankUnit' list
     *
     * @return int
     */
    public function getArrRankUnitCount()
    {
        return $this->count(self::ARRRANKUNIT);
    }

    /**
     * Appends value to 'arrRankPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RankPrize $value Value to append
     *
     * @return null
     */
    public function appendArrRankPrize(\Xnhd\Core\Pb\Sdo\RankPrize $value)
    {
        return $this->append(self::ARRRANKPRIZE, $value);
    }

    /**
     * Clears 'arrRankPrize' list
     *
     * @return null
     */
    public function clearArrRankPrize()
    {
        return $this->clear(self::ARRRANKPRIZE);
    }

    /**
     * Returns 'arrRankPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RankPrize[]
     */
    public function getArrRankPrize()
    {
        return $this->get(self::ARRRANKPRIZE);
    }

    /**
     * Returns true if 'arrRankPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRankPrize()
    {
        return count($this->get(self::ARRRANKPRIZE)) !== 0;
    }

    /**
     * Returns 'arrRankPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRankPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRANKPRIZE));
    }

    /**
     * Returns element from 'arrRankPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RankPrize
     */
    public function getArrRankPrizeAt($offset)
    {
        return $this->get(self::ARRRANKPRIZE, $offset);
    }

    /**
     * Returns count of 'arrRankPrize' list
     *
     * @return int
     */
    public function getArrRankPrizeCount()
    {
        return $this->count(self::ARRRANKPRIZE);
    }

    /**
     * Sets value of 'actStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActStatus($value)
    {
        return $this->set(self::ACTSTATUS, $value);
    }

    /**
     * Returns value of 'actStatus' property
     *
     * @return integer
     */
    public function getActStatus()
    {
        $value = $this->get(self::ACTSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActStatus()
    {
        return $this->get(self::ACTSTATUS) !== null;
    }
}
}