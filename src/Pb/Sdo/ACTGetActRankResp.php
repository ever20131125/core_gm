<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetActRankResp message
 */
class ACTGetActRankResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ACTID = 3;
    const TOTALCNT = 4;
    const ARRACTRANK = 5;
    const ARRRANKPRIZE = 6;
    const ACTSTATUS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALCNT => array(
            'name' => 'totalCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTRANK => array(
            'name' => 'arrActRank',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActRankUnit'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ACTID] = null;
        $this->values[self::TOTALCNT] = null;
        $this->values[self::ARRACTRANK] = array();
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
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
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
     * Appends value to 'arrActRank' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActRankUnit $value Value to append
     *
     * @return null
     */
    public function appendArrActRank(\Xnhd\Core\Pb\Sdo\ActRankUnit $value)
    {
        return $this->append(self::ARRACTRANK, $value);
    }

    /**
     * Clears 'arrActRank' list
     *
     * @return null
     */
    public function clearArrActRank()
    {
        return $this->clear(self::ARRACTRANK);
    }

    /**
     * Returns 'arrActRank' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActRankUnit[]
     */
    public function getArrActRank()
    {
        return $this->get(self::ARRACTRANK);
    }

    /**
     * Returns true if 'arrActRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActRank()
    {
        return count($this->get(self::ARRACTRANK)) !== 0;
    }

    /**
     * Returns 'arrActRank' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActRankIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTRANK));
    }

    /**
     * Returns element from 'arrActRank' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActRankUnit
     */
    public function getArrActRankAt($offset)
    {
        return $this->get(self::ARRACTRANK, $offset);
    }

    /**
     * Returns count of 'arrActRank' list
     *
     * @return int
     */
    public function getArrActRankCount()
    {
        return $this->count(self::ARRACTRANK);
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