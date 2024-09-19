<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBItemUpdateNoti message
 */
class PDBItemUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const ARRADDEDITEMUNIT = 3;
    const ARRUPDATEDITEMUNIT = 4;
    const ARRDELETEDITEMUNIT = 5;

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
        self::ARRADDEDITEMUNIT => array(
            'name' => 'arrAddedItemUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemUnit'
        ),
        self::ARRUPDATEDITEMUNIT => array(
            'name' => 'arrUpdatedItemUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemUnit'
        ),
        self::ARRDELETEDITEMUNIT => array(
            'name' => 'arrDeletedItemUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemUnit'
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
        $this->values[self::ARRADDEDITEMUNIT] = array();
        $this->values[self::ARRUPDATEDITEMUNIT] = array();
        $this->values[self::ARRDELETEDITEMUNIT] = array();
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
     * Appends value to 'arrAddedItemUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemUnit $value Value to append
     *
     * @return null
     */
    public function appendArrAddedItemUnit(\Xnhd\Core\Pb\Sdo\ItemUnit $value)
    {
        return $this->append(self::ARRADDEDITEMUNIT, $value);
    }

    /**
     * Clears 'arrAddedItemUnit' list
     *
     * @return null
     */
    public function clearArrAddedItemUnit()
    {
        return $this->clear(self::ARRADDEDITEMUNIT);
    }

    /**
     * Returns 'arrAddedItemUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit[]
     */
    public function getArrAddedItemUnit()
    {
        return $this->get(self::ARRADDEDITEMUNIT);
    }

    /**
     * Returns true if 'arrAddedItemUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAddedItemUnit()
    {
        return count($this->get(self::ARRADDEDITEMUNIT)) !== 0;
    }

    /**
     * Returns 'arrAddedItemUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAddedItemUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRADDEDITEMUNIT));
    }

    /**
     * Returns element from 'arrAddedItemUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit
     */
    public function getArrAddedItemUnitAt($offset)
    {
        return $this->get(self::ARRADDEDITEMUNIT, $offset);
    }

    /**
     * Returns count of 'arrAddedItemUnit' list
     *
     * @return int
     */
    public function getArrAddedItemUnitCount()
    {
        return $this->count(self::ARRADDEDITEMUNIT);
    }

    /**
     * Appends value to 'arrUpdatedItemUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemUnit $value Value to append
     *
     * @return null
     */
    public function appendArrUpdatedItemUnit(\Xnhd\Core\Pb\Sdo\ItemUnit $value)
    {
        return $this->append(self::ARRUPDATEDITEMUNIT, $value);
    }

    /**
     * Clears 'arrUpdatedItemUnit' list
     *
     * @return null
     */
    public function clearArrUpdatedItemUnit()
    {
        return $this->clear(self::ARRUPDATEDITEMUNIT);
    }

    /**
     * Returns 'arrUpdatedItemUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit[]
     */
    public function getArrUpdatedItemUnit()
    {
        return $this->get(self::ARRUPDATEDITEMUNIT);
    }

    /**
     * Returns true if 'arrUpdatedItemUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrUpdatedItemUnit()
    {
        return count($this->get(self::ARRUPDATEDITEMUNIT)) !== 0;
    }

    /**
     * Returns 'arrUpdatedItemUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrUpdatedItemUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRUPDATEDITEMUNIT));
    }

    /**
     * Returns element from 'arrUpdatedItemUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit
     */
    public function getArrUpdatedItemUnitAt($offset)
    {
        return $this->get(self::ARRUPDATEDITEMUNIT, $offset);
    }

    /**
     * Returns count of 'arrUpdatedItemUnit' list
     *
     * @return int
     */
    public function getArrUpdatedItemUnitCount()
    {
        return $this->count(self::ARRUPDATEDITEMUNIT);
    }

    /**
     * Appends value to 'arrDeletedItemUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemUnit $value Value to append
     *
     * @return null
     */
    public function appendArrDeletedItemUnit(\Xnhd\Core\Pb\Sdo\ItemUnit $value)
    {
        return $this->append(self::ARRDELETEDITEMUNIT, $value);
    }

    /**
     * Clears 'arrDeletedItemUnit' list
     *
     * @return null
     */
    public function clearArrDeletedItemUnit()
    {
        return $this->clear(self::ARRDELETEDITEMUNIT);
    }

    /**
     * Returns 'arrDeletedItemUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit[]
     */
    public function getArrDeletedItemUnit()
    {
        return $this->get(self::ARRDELETEDITEMUNIT);
    }

    /**
     * Returns true if 'arrDeletedItemUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDeletedItemUnit()
    {
        return count($this->get(self::ARRDELETEDITEMUNIT)) !== 0;
    }

    /**
     * Returns 'arrDeletedItemUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDeletedItemUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDELETEDITEMUNIT));
    }

    /**
     * Returns element from 'arrDeletedItemUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit
     */
    public function getArrDeletedItemUnitAt($offset)
    {
        return $this->get(self::ARRDELETEDITEMUNIT, $offset);
    }

    /**
     * Returns count of 'arrDeletedItemUnit' list
     *
     * @return int
     */
    public function getArrDeletedItemUnitCount()
    {
        return $this->count(self::ARRDELETEDITEMUNIT);
    }
}
}