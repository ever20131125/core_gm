<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBUseItemReq message
 */
class IDBUseItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const NTARGETID = 3;
    const ARROPERATEITEMINFO = 4;
    const BBUY = 5;
    const NTARGETID2 = 6;
    const NOPTION1 = 7;
    const NOPTION2 = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPERATEITEMINFO => array(
            'name' => 'arrOperateItemInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\OperateItemInfo'
        ),
        self::BBUY => array(
            'name' => 'bBuy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NTARGETID2 => array(
            'name' => 'nTargetID2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION1 => array(
            'name' => 'nOption1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION2 => array(
            'name' => 'nOption2',
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
        $this->values[self::SOURCE] = null;
        $this->values[self::NTARGETID] = null;
        $this->values[self::ARROPERATEITEMINFO] = array();
        $this->values[self::BBUY] = null;
        $this->values[self::NTARGETID2] = null;
        $this->values[self::NOPTION1] = null;
        $this->values[self::NOPTION2] = null;
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }

    /**
     * Appends value to 'arrOperateItemInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\OperateItemInfo $value Value to append
     *
     * @return null
     */
    public function appendArrOperateItemInfo(\Xnhd\Core\Pb\Sdo\OperateItemInfo $value)
    {
        return $this->append(self::ARROPERATEITEMINFO, $value);
    }

    /**
     * Clears 'arrOperateItemInfo' list
     *
     * @return null
     */
    public function clearArrOperateItemInfo()
    {
        return $this->clear(self::ARROPERATEITEMINFO);
    }

    /**
     * Returns 'arrOperateItemInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\OperateItemInfo[]
     */
    public function getArrOperateItemInfo()
    {
        return $this->get(self::ARROPERATEITEMINFO);
    }

    /**
     * Returns true if 'arrOperateItemInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOperateItemInfo()
    {
        return count($this->get(self::ARROPERATEITEMINFO)) !== 0;
    }

    /**
     * Returns 'arrOperateItemInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOperateItemInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPERATEITEMINFO));
    }

    /**
     * Returns element from 'arrOperateItemInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\OperateItemInfo
     */
    public function getArrOperateItemInfoAt($offset)
    {
        return $this->get(self::ARROPERATEITEMINFO, $offset);
    }

    /**
     * Returns count of 'arrOperateItemInfo' list
     *
     * @return int
     */
    public function getArrOperateItemInfoCount()
    {
        return $this->count(self::ARROPERATEITEMINFO);
    }

    /**
     * Sets value of 'bBuy' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBBuy($value)
    {
        return $this->set(self::BBUY, $value);
    }

    /**
     * Returns value of 'bBuy' property
     *
     * @return boolean
     */
    public function getBBuy()
    {
        $value = $this->get(self::BBUY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bBuy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBBuy()
    {
        return $this->get(self::BBUY) !== null;
    }

    /**
     * Sets value of 'nTargetID2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID2($value)
    {
        return $this->set(self::NTARGETID2, $value);
    }

    /**
     * Returns value of 'nTargetID2' property
     *
     * @return integer
     */
    public function getNTargetID2()
    {
        $value = $this->get(self::NTARGETID2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID2()
    {
        return $this->get(self::NTARGETID2) !== null;
    }

    /**
     * Sets value of 'nOption1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption1($value)
    {
        return $this->set(self::NOPTION1, $value);
    }

    /**
     * Returns value of 'nOption1' property
     *
     * @return integer
     */
    public function getNOption1()
    {
        $value = $this->get(self::NOPTION1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption1()
    {
        return $this->get(self::NOPTION1) !== null;
    }

    /**
     * Sets value of 'nOption2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption2($value)
    {
        return $this->set(self::NOPTION2, $value);
    }

    /**
     * Returns value of 'nOption2' property
     *
     * @return integer
     */
    public function getNOption2()
    {
        $value = $this->get(self::NOPTION2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption2()
    {
        return $this->get(self::NOPTION2) !== null;
    }
}
}