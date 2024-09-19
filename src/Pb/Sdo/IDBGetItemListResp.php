<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetItemListResp message
 */
class IDBGetItemListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const BAGTYPE = 3;
    const NCAPLIMIT = 4;
    const ARRITEMUNIT = 5;
    const NOPENSLOTCNT = 6;
    const ARROPENSLOTCOST = 7;

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
        self::BAGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BagType::enmBagType_Normal,
            'name' => 'bagType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCAPLIMIT => array(
            'name' => 'nCapLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMUNIT => array(
            'name' => 'arrItemUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemUnit'
        ),
        self::NOPENSLOTCNT => array(
            'name' => 'nOpenSlotCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPENSLOTCOST => array(
            'name' => 'arrOpenSlotCost',
            'repeated' => true,
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
        $this->values[self::BAGTYPE] = self::$fields[self::BAGTYPE]['default'];
        $this->values[self::NCAPLIMIT] = null;
        $this->values[self::ARRITEMUNIT] = array();
        $this->values[self::NOPENSLOTCNT] = null;
        $this->values[self::ARROPENSLOTCOST] = array();
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
     * Sets value of 'bagType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBagType($value)
    {
        return $this->set(self::BAGTYPE, $value);
    }

    /**
     * Returns value of 'bagType' property
     *
     * @return integer
     */
    public function getBagType()
    {
        $value = $this->get(self::BAGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bagType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBagType()
    {
        return $this->get(self::BAGTYPE) !== null;
    }

    /**
     * Sets value of 'nCapLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCapLimit($value)
    {
        return $this->set(self::NCAPLIMIT, $value);
    }

    /**
     * Returns value of 'nCapLimit' property
     *
     * @return integer
     */
    public function getNCapLimit()
    {
        $value = $this->get(self::NCAPLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCapLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCapLimit()
    {
        return $this->get(self::NCAPLIMIT) !== null;
    }

    /**
     * Appends value to 'arrItemUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemUnit $value Value to append
     *
     * @return null
     */
    public function appendArrItemUnit(\Xnhd\Core\Pb\Sdo\ItemUnit $value)
    {
        return $this->append(self::ARRITEMUNIT, $value);
    }

    /**
     * Clears 'arrItemUnit' list
     *
     * @return null
     */
    public function clearArrItemUnit()
    {
        return $this->clear(self::ARRITEMUNIT);
    }

    /**
     * Returns 'arrItemUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit[]
     */
    public function getArrItemUnit()
    {
        return $this->get(self::ARRITEMUNIT);
    }

    /**
     * Returns true if 'arrItemUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemUnit()
    {
        return count($this->get(self::ARRITEMUNIT)) !== 0;
    }

    /**
     * Returns 'arrItemUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMUNIT));
    }

    /**
     * Returns element from 'arrItemUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit
     */
    public function getArrItemUnitAt($offset)
    {
        return $this->get(self::ARRITEMUNIT, $offset);
    }

    /**
     * Returns count of 'arrItemUnit' list
     *
     * @return int
     */
    public function getArrItemUnitCount()
    {
        return $this->count(self::ARRITEMUNIT);
    }

    /**
     * Sets value of 'nOpenSlotCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOpenSlotCnt($value)
    {
        return $this->set(self::NOPENSLOTCNT, $value);
    }

    /**
     * Returns value of 'nOpenSlotCnt' property
     *
     * @return integer
     */
    public function getNOpenSlotCnt()
    {
        $value = $this->get(self::NOPENSLOTCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOpenSlotCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOpenSlotCnt()
    {
        return $this->get(self::NOPENSLOTCNT) !== null;
    }

    /**
     * Appends value to 'arrOpenSlotCost' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOpenSlotCost($value)
    {
        return $this->append(self::ARROPENSLOTCOST, $value);
    }

    /**
     * Clears 'arrOpenSlotCost' list
     *
     * @return null
     */
    public function clearArrOpenSlotCost()
    {
        return $this->clear(self::ARROPENSLOTCOST);
    }

    /**
     * Returns 'arrOpenSlotCost' list
     *
     * @return integer[]
     */
    public function getArrOpenSlotCost()
    {
        return $this->get(self::ARROPENSLOTCOST);
    }

    /**
     * Returns true if 'arrOpenSlotCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOpenSlotCost()
    {
        return count($this->get(self::ARROPENSLOTCOST)) !== 0;
    }

    /**
     * Returns 'arrOpenSlotCost' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOpenSlotCostIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPENSLOTCOST));
    }

    /**
     * Returns element from 'arrOpenSlotCost' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOpenSlotCostAt($offset)
    {
        return $this->get(self::ARROPENSLOTCOST, $offset);
    }

    /**
     * Returns count of 'arrOpenSlotCost' list
     *
     * @return int
     */
    public function getArrOpenSlotCostCount()
    {
        return $this->count(self::ARROPENSLOTCOST);
    }
}
}