<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBMergeBoardUpdateNoti message
 */
class IDBMergeBoardUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRUPDATEITEMINFO = 2;
    const ARRADDITEMINFO = 3;
    const ARRDELITEMINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRUPDATEITEMINFO => array(
            'name' => 'arrUpdateItemInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemMerge'
        ),
        self::ARRADDITEMINFO => array(
            'name' => 'arrAddItemInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemMerge'
        ),
        self::ARRDELITEMINFO => array(
            'name' => 'arrDelItemInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemMerge'
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
        $this->values[self::ARRUPDATEITEMINFO] = array();
        $this->values[self::ARRADDITEMINFO] = array();
        $this->values[self::ARRDELITEMINFO] = array();
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
     * Appends value to 'arrUpdateItemInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemMerge $value Value to append
     *
     * @return null
     */
    public function appendArrUpdateItemInfo(\Xnhd\Core\Pb\Sdo\ItemMerge $value)
    {
        return $this->append(self::ARRUPDATEITEMINFO, $value);
    }

    /**
     * Clears 'arrUpdateItemInfo' list
     *
     * @return null
     */
    public function clearArrUpdateItemInfo()
    {
        return $this->clear(self::ARRUPDATEITEMINFO);
    }

    /**
     * Returns 'arrUpdateItemInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge[]
     */
    public function getArrUpdateItemInfo()
    {
        return $this->get(self::ARRUPDATEITEMINFO);
    }

    /**
     * Returns true if 'arrUpdateItemInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrUpdateItemInfo()
    {
        return count($this->get(self::ARRUPDATEITEMINFO)) !== 0;
    }

    /**
     * Returns 'arrUpdateItemInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrUpdateItemInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRUPDATEITEMINFO));
    }

    /**
     * Returns element from 'arrUpdateItemInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge
     */
    public function getArrUpdateItemInfoAt($offset)
    {
        return $this->get(self::ARRUPDATEITEMINFO, $offset);
    }

    /**
     * Returns count of 'arrUpdateItemInfo' list
     *
     * @return int
     */
    public function getArrUpdateItemInfoCount()
    {
        return $this->count(self::ARRUPDATEITEMINFO);
    }

    /**
     * Appends value to 'arrAddItemInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemMerge $value Value to append
     *
     * @return null
     */
    public function appendArrAddItemInfo(\Xnhd\Core\Pb\Sdo\ItemMerge $value)
    {
        return $this->append(self::ARRADDITEMINFO, $value);
    }

    /**
     * Clears 'arrAddItemInfo' list
     *
     * @return null
     */
    public function clearArrAddItemInfo()
    {
        return $this->clear(self::ARRADDITEMINFO);
    }

    /**
     * Returns 'arrAddItemInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge[]
     */
    public function getArrAddItemInfo()
    {
        return $this->get(self::ARRADDITEMINFO);
    }

    /**
     * Returns true if 'arrAddItemInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAddItemInfo()
    {
        return count($this->get(self::ARRADDITEMINFO)) !== 0;
    }

    /**
     * Returns 'arrAddItemInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAddItemInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRADDITEMINFO));
    }

    /**
     * Returns element from 'arrAddItemInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge
     */
    public function getArrAddItemInfoAt($offset)
    {
        return $this->get(self::ARRADDITEMINFO, $offset);
    }

    /**
     * Returns count of 'arrAddItemInfo' list
     *
     * @return int
     */
    public function getArrAddItemInfoCount()
    {
        return $this->count(self::ARRADDITEMINFO);
    }

    /**
     * Appends value to 'arrDelItemInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemMerge $value Value to append
     *
     * @return null
     */
    public function appendArrDelItemInfo(\Xnhd\Core\Pb\Sdo\ItemMerge $value)
    {
        return $this->append(self::ARRDELITEMINFO, $value);
    }

    /**
     * Clears 'arrDelItemInfo' list
     *
     * @return null
     */
    public function clearArrDelItemInfo()
    {
        return $this->clear(self::ARRDELITEMINFO);
    }

    /**
     * Returns 'arrDelItemInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge[]
     */
    public function getArrDelItemInfo()
    {
        return $this->get(self::ARRDELITEMINFO);
    }

    /**
     * Returns true if 'arrDelItemInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDelItemInfo()
    {
        return count($this->get(self::ARRDELITEMINFO)) !== 0;
    }

    /**
     * Returns 'arrDelItemInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDelItemInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDELITEMINFO));
    }

    /**
     * Returns element from 'arrDelItemInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge
     */
    public function getArrDelItemInfoAt($offset)
    {
        return $this->get(self::ARRDELITEMINFO, $offset);
    }

    /**
     * Returns count of 'arrDelItemInfo' list
     *
     * @return int
     */
    public function getArrDelItemInfoCount()
    {
        return $this->count(self::ARRDELITEMINFO);
    }
}
}