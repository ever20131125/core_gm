<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingActChestRecord message
 */
class WeddingActChestRecord extends \ProtobufMessage
{
    /* Field index constants */
    const SZROLENAME = 1;
    const NDISCOUNT = 2;
    const ITEM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NDISCOUNT => array(
            'name' => 'nDiscount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::ITEM => array(
            'name' => 'item',
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
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NDISCOUNT] = null;
        $this->values[self::ITEM] = array();
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
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
    }

    /**
     * Sets value of 'nDiscount' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setNDiscount($value)
    {
        return $this->set(self::NDISCOUNT, $value);
    }

    /**
     * Returns value of 'nDiscount' property
     *
     * @return double
     */
    public function getNDiscount()
    {
        $value = $this->get(self::NDISCOUNT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'nDiscount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDiscount()
    {
        return $this->get(self::NDISCOUNT) !== null;
    }

    /**
     * Appends value to 'item' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ITEM, $value);
    }

    /**
     * Clears 'item' list
     *
     * @return null
     */
    public function clearItem()
    {
        return $this->clear(self::ITEM);
    }

    /**
     * Returns 'item' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getItem()
    {
        return $this->get(self::ITEM);
    }

    /**
     * Returns true if 'item' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItem()
    {
        return count($this->get(self::ITEM)) !== 0;
    }

    /**
     * Returns 'item' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemIterator()
    {
        return new \ArrayIterator($this->get(self::ITEM));
    }

    /**
     * Returns element from 'item' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getItemAt($offset)
    {
        return $this->get(self::ITEM, $offset);
    }

    /**
     * Returns count of 'item' list
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->count(self::ITEM);
    }
}
}