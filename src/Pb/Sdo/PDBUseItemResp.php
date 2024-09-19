<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUseItemResp message
 */
class PDBUseItemResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SOURCE = 3;
    const NTARGETID = 4;
    const ARROPERATEITEMINFO = 5;
    const ARRADDEDITEMBASE = 6;
    const SZTRANSID = 7;
    const NPRICE = 8;

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
        self::ARRADDEDITEMBASE => array(
            'name' => 'arrAddedItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::SZTRANSID => array(
            'name' => 'szTransID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NPRICE => array(
            'name' => 'nPrice',
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
        $this->values[self::SOURCE] = null;
        $this->values[self::NTARGETID] = null;
        $this->values[self::ARROPERATEITEMINFO] = array();
        $this->values[self::ARRADDEDITEMBASE] = array();
        $this->values[self::SZTRANSID] = null;
        $this->values[self::NPRICE] = null;
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
     * Appends value to 'arrAddedItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrAddedItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRADDEDITEMBASE, $value);
    }

    /**
     * Clears 'arrAddedItemBase' list
     *
     * @return null
     */
    public function clearArrAddedItemBase()
    {
        return $this->clear(self::ARRADDEDITEMBASE);
    }

    /**
     * Returns 'arrAddedItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrAddedItemBase()
    {
        return $this->get(self::ARRADDEDITEMBASE);
    }

    /**
     * Returns true if 'arrAddedItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAddedItemBase()
    {
        return count($this->get(self::ARRADDEDITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrAddedItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAddedItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRADDEDITEMBASE));
    }

    /**
     * Returns element from 'arrAddedItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrAddedItemBaseAt($offset)
    {
        return $this->get(self::ARRADDEDITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrAddedItemBase' list
     *
     * @return int
     */
    public function getArrAddedItemBaseCount()
    {
        return $this->count(self::ARRADDEDITEMBASE);
    }

    /**
     * Sets value of 'szTransID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTransID($value)
    {
        return $this->set(self::SZTRANSID, $value);
    }

    /**
     * Returns value of 'szTransID' property
     *
     * @return string
     */
    public function getSzTransID()
    {
        $value = $this->get(self::SZTRANSID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTransID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTransID()
    {
        return $this->get(self::SZTRANSID) !== null;
    }

    /**
     * Sets value of 'nPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrice($value)
    {
        return $this->set(self::NPRICE, $value);
    }

    /**
     * Returns value of 'nPrice' property
     *
     * @return integer
     */
    public function getNPrice()
    {
        $value = $this->get(self::NPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrice()
    {
        return $this->get(self::NPRICE) !== null;
    }
}
}