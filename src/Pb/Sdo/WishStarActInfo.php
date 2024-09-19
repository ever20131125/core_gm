<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WishStarActInfo message
 */
class WishStarActInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ITEMUSE = 2;
    const HASLIGHTED = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMUSE => array(
            'name' => 'itemUse',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::HASLIGHTED => array(
            'name' => 'hasLighted',
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
        $this->values[self::ID] = null;
        $this->values[self::ITEMUSE] = array();
        $this->values[self::HASLIGHTED] = null;
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
     * Appends value to 'itemUse' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendItemUse(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ITEMUSE, $value);
    }

    /**
     * Clears 'itemUse' list
     *
     * @return null
     */
    public function clearItemUse()
    {
        return $this->clear(self::ITEMUSE);
    }

    /**
     * Returns 'itemUse' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getItemUse()
    {
        return $this->get(self::ITEMUSE);
    }

    /**
     * Returns true if 'itemUse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemUse()
    {
        return count($this->get(self::ITEMUSE)) !== 0;
    }

    /**
     * Returns 'itemUse' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemUseIterator()
    {
        return new \ArrayIterator($this->get(self::ITEMUSE));
    }

    /**
     * Returns element from 'itemUse' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getItemUseAt($offset)
    {
        return $this->get(self::ITEMUSE, $offset);
    }

    /**
     * Returns count of 'itemUse' list
     *
     * @return int
     */
    public function getItemUseCount()
    {
        return $this->count(self::ITEMUSE);
    }

    /**
     * Sets value of 'hasLighted' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHasLighted($value)
    {
        return $this->set(self::HASLIGHTED, $value);
    }

    /**
     * Returns value of 'hasLighted' property
     *
     * @return integer
     */
    public function getHasLighted()
    {
        $value = $this->get(self::HASLIGHTED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hasLighted' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasLighted()
    {
        return $this->get(self::HASLIGHTED) !== null;
    }
}
}