<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetRaffleInfoResp message
 */
class ACTGetRaffleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ACTTYPE = 3;
    const NSTARTTIME = 4;
    const NPOOLBATCH = 5;
    const PRIZELIST = 6;
    const MYRECORD = 7;
    const OTHERSRECORD = 8;
    const STITEMCOST = 9;
    const NREFRESHCOST = 10;

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
        self::ACTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActType::enmActType_None,
            'name' => 'actType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOOLBATCH => array(
            'name' => 'nPoolBatch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RafflePrize'
        ),
        self::MYRECORD => array(
            'name' => 'myRecord',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RaffleRecord'
        ),
        self::OTHERSRECORD => array(
            'name' => 'othersRecord',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RaffleRecord'
        ),
        self::STITEMCOST => array(
            'name' => 'stItemCost',
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
        $this->values[self::ACTTYPE] = self::$fields[self::ACTTYPE]['default'];
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NPOOLBATCH] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::MYRECORD] = array();
        $this->values[self::OTHERSRECORD] = array();
        $this->values[self::STITEMCOST] = null;
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
     * Sets value of 'actType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActType($value)
    {
        return $this->set(self::ACTTYPE, $value);
    }

    /**
     * Returns value of 'actType' property
     *
     * @return integer
     */
    public function getActType()
    {
        $value = $this->get(self::ACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActType()
    {
        return $this->get(self::ACTTYPE) !== null;
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
     * Sets value of 'nPoolBatch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPoolBatch($value)
    {
        return $this->set(self::NPOOLBATCH, $value);
    }

    /**
     * Returns value of 'nPoolBatch' property
     *
     * @return integer
     */
    public function getNPoolBatch()
    {
        $value = $this->get(self::NPOOLBATCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPoolBatch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPoolBatch()
    {
        return $this->get(self::NPOOLBATCH) !== null;
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RafflePrize $value Value to append
     *
     * @return null
     */
    public function appendPrizeList(\Xnhd\Core\Pb\Sdo\RafflePrize $value)
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
     * @return \Xnhd\Core\Pb\Sdo\RafflePrize[]
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
     * @return \Xnhd\Core\Pb\Sdo\RafflePrize
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
     * Appends value to 'myRecord' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RaffleRecord $value Value to append
     *
     * @return null
     */
    public function appendMyRecord(\Xnhd\Core\Pb\Sdo\RaffleRecord $value)
    {
        return $this->append(self::MYRECORD, $value);
    }

    /**
     * Clears 'myRecord' list
     *
     * @return null
     */
    public function clearMyRecord()
    {
        return $this->clear(self::MYRECORD);
    }

    /**
     * Returns 'myRecord' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaffleRecord[]
     */
    public function getMyRecord()
    {
        return $this->get(self::MYRECORD);
    }

    /**
     * Returns true if 'myRecord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMyRecord()
    {
        return count($this->get(self::MYRECORD)) !== 0;
    }

    /**
     * Returns 'myRecord' iterator
     *
     * @return \ArrayIterator
     */
    public function getMyRecordIterator()
    {
        return new \ArrayIterator($this->get(self::MYRECORD));
    }

    /**
     * Returns element from 'myRecord' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaffleRecord
     */
    public function getMyRecordAt($offset)
    {
        return $this->get(self::MYRECORD, $offset);
    }

    /**
     * Returns count of 'myRecord' list
     *
     * @return int
     */
    public function getMyRecordCount()
    {
        return $this->count(self::MYRECORD);
    }

    /**
     * Appends value to 'othersRecord' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RaffleRecord $value Value to append
     *
     * @return null
     */
    public function appendOthersRecord(\Xnhd\Core\Pb\Sdo\RaffleRecord $value)
    {
        return $this->append(self::OTHERSRECORD, $value);
    }

    /**
     * Clears 'othersRecord' list
     *
     * @return null
     */
    public function clearOthersRecord()
    {
        return $this->clear(self::OTHERSRECORD);
    }

    /**
     * Returns 'othersRecord' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaffleRecord[]
     */
    public function getOthersRecord()
    {
        return $this->get(self::OTHERSRECORD);
    }

    /**
     * Returns true if 'othersRecord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOthersRecord()
    {
        return count($this->get(self::OTHERSRECORD)) !== 0;
    }

    /**
     * Returns 'othersRecord' iterator
     *
     * @return \ArrayIterator
     */
    public function getOthersRecordIterator()
    {
        return new \ArrayIterator($this->get(self::OTHERSRECORD));
    }

    /**
     * Returns element from 'othersRecord' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaffleRecord
     */
    public function getOthersRecordAt($offset)
    {
        return $this->get(self::OTHERSRECORD, $offset);
    }

    /**
     * Returns count of 'othersRecord' list
     *
     * @return int
     */
    public function getOthersRecordCount()
    {
        return $this->count(self::OTHERSRECORD);
    }

    /**
     * Sets value of 'stItemCost' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStItemCost(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STITEMCOST, $value);
    }

    /**
     * Returns value of 'stItemCost' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStItemCost()
    {
        return $this->get(self::STITEMCOST);
    }

    /**
     * Returns true if 'stItemCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStItemCost()
    {
        return $this->get(self::STITEMCOST) !== null;
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