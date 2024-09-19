<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetRaffleInfoResp message
 */
class IDBGetRaffleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const RAFFLEID = 3;
    const NSTARTTIME = 4;
    const NENDTIME = 5;
    const PRIZELIST = 6;
    const STONECOST = 7;
    const STTENCOST = 8;
    const NSHOWAVATAR = 9;
    const NSTARVALUE = 10;
    const NSTARMAX = 11;
    const NBUYID = 12;
    const STTENBONUS = 13;
    const NREFRESHCOST = 20;

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
        self::RAFFLEID => array(
            'name' => 'raffleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RaffleItem'
        ),
        self::STONECOST => array(
            'name' => 'stOneCost',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::STTENCOST => array(
            'name' => 'stTenCost',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NSHOWAVATAR => array(
            'name' => 'nShowAvatar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARVALUE => array(
            'name' => 'nStarValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARMAX => array(
            'name' => 'nStarMax',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBUYID => array(
            'name' => 'nBuyID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STTENBONUS => array(
            'name' => 'stTenBonus',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NREFRESHCOST => array(
            'name' => 'nRefreshCost',
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
        $this->values[self::RAFFLEID] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::STONECOST] = null;
        $this->values[self::STTENCOST] = null;
        $this->values[self::NSHOWAVATAR] = null;
        $this->values[self::NSTARVALUE] = null;
        $this->values[self::NSTARMAX] = null;
        $this->values[self::NBUYID] = null;
        $this->values[self::STTENBONUS] = null;
        $this->values[self::NREFRESHCOST] = null;
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
     * Sets value of 'raffleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRaffleID($value)
    {
        return $this->set(self::RAFFLEID, $value);
    }

    /**
     * Returns value of 'raffleID' property
     *
     * @return integer
     */
    public function getRaffleID()
    {
        $value = $this->get(self::RAFFLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'raffleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRaffleID()
    {
        return $this->get(self::RAFFLEID) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RaffleItem $value Value to append
     *
     * @return null
     */
    public function appendPrizeList(\Xnhd\Core\Pb\Sdo\RaffleItem $value)
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
     * @return \Xnhd\Core\Pb\Sdo\RaffleItem[]
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
     * @return \Xnhd\Core\Pb\Sdo\RaffleItem
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

    /**
     * Sets value of 'stOneCost' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStOneCost(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STONECOST, $value);
    }

    /**
     * Returns value of 'stOneCost' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStOneCost()
    {
        return $this->get(self::STONECOST);
    }

    /**
     * Returns true if 'stOneCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStOneCost()
    {
        return $this->get(self::STONECOST) !== null;
    }

    /**
     * Sets value of 'stTenCost' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStTenCost(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STTENCOST, $value);
    }

    /**
     * Returns value of 'stTenCost' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStTenCost()
    {
        return $this->get(self::STTENCOST);
    }

    /**
     * Returns true if 'stTenCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTenCost()
    {
        return $this->get(self::STTENCOST) !== null;
    }

    /**
     * Sets value of 'nShowAvatar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShowAvatar($value)
    {
        return $this->set(self::NSHOWAVATAR, $value);
    }

    /**
     * Returns value of 'nShowAvatar' property
     *
     * @return integer
     */
    public function getNShowAvatar()
    {
        $value = $this->get(self::NSHOWAVATAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShowAvatar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShowAvatar()
    {
        return $this->get(self::NSHOWAVATAR) !== null;
    }

    /**
     * Sets value of 'nStarValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStarValue($value)
    {
        return $this->set(self::NSTARVALUE, $value);
    }

    /**
     * Returns value of 'nStarValue' property
     *
     * @return integer
     */
    public function getNStarValue()
    {
        $value = $this->get(self::NSTARVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStarValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStarValue()
    {
        return $this->get(self::NSTARVALUE) !== null;
    }

    /**
     * Sets value of 'nStarMax' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStarMax($value)
    {
        return $this->set(self::NSTARMAX, $value);
    }

    /**
     * Returns value of 'nStarMax' property
     *
     * @return integer
     */
    public function getNStarMax()
    {
        $value = $this->get(self::NSTARMAX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStarMax' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStarMax()
    {
        return $this->get(self::NSTARMAX) !== null;
    }

    /**
     * Sets value of 'nBuyID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBuyID($value)
    {
        return $this->set(self::NBUYID, $value);
    }

    /**
     * Returns value of 'nBuyID' property
     *
     * @return integer
     */
    public function getNBuyID()
    {
        $value = $this->get(self::NBUYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBuyID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBuyID()
    {
        return $this->get(self::NBUYID) !== null;
    }

    /**
     * Sets value of 'stTenBonus' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStTenBonus(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STTENBONUS, $value);
    }

    /**
     * Returns value of 'stTenBonus' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStTenBonus()
    {
        return $this->get(self::STTENBONUS);
    }

    /**
     * Returns true if 'stTenBonus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTenBonus()
    {
        return $this->get(self::STTENBONUS) !== null;
    }

    /**
     * Sets value of 'nRefreshCost' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRefreshCost($value)
    {
        return $this->set(self::NREFRESHCOST, $value);
    }

    /**
     * Returns value of 'nRefreshCost' property
     *
     * @return integer
     */
    public function getNRefreshCost()
    {
        $value = $this->get(self::NREFRESHCOST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRefreshCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRefreshCost()
    {
        return $this->get(self::NREFRESHCOST) !== null;
    }
}
}