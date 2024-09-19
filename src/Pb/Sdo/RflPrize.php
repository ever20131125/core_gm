<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RflPrize message
 */
class RflPrize extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const STATE = 2;
    const ARRITEM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEM => array(
            'name' => 'arrItem',
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
        $this->values[self::ID] = null;
        $this->values[self::STATE] = null;
        $this->values[self::ARRITEM] = array();
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Appends value to 'arrItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEM, $value);
    }

    /**
     * Clears 'arrItem' list
     *
     * @return null
     */
    public function clearArrItem()
    {
        return $this->clear(self::ARRITEM);
    }

    /**
     * Returns 'arrItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItem()
    {
        return $this->get(self::ARRITEM);
    }

    /**
     * Returns true if 'arrItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItem()
    {
        return count($this->get(self::ARRITEM)) !== 0;
    }

    /**
     * Returns 'arrItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEM));
    }

    /**
     * Returns element from 'arrItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemAt($offset)
    {
        return $this->get(self::ARRITEM, $offset);
    }

    /**
     * Returns count of 'arrItem' list
     *
     * @return int
     */
    public function getArrItemCount()
    {
        return $this->count(self::ARRITEM);
    }
}
}