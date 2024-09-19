<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExchangeActInfo message
 */
class ExchangeActInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ITEMUSE = 2;
    const ITEMGET = 3;
    const USETIMES = 4;
    const TOTALTIMES = 5;

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
        self::ITEMGET => array(
            'name' => 'itemGet',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::USETIMES => array(
            'name' => 'useTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALTIMES => array(
            'name' => 'totalTimes',
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
        $this->values[self::ITEMGET] = array();
        $this->values[self::USETIMES] = null;
        $this->values[self::TOTALTIMES] = null;
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
     * Appends value to 'itemGet' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendItemGet(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ITEMGET, $value);
    }

    /**
     * Clears 'itemGet' list
     *
     * @return null
     */
    public function clearItemGet()
    {
        return $this->clear(self::ITEMGET);
    }

    /**
     * Returns 'itemGet' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getItemGet()
    {
        return $this->get(self::ITEMGET);
    }

    /**
     * Returns true if 'itemGet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemGet()
    {
        return count($this->get(self::ITEMGET)) !== 0;
    }

    /**
     * Returns 'itemGet' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemGetIterator()
    {
        return new \ArrayIterator($this->get(self::ITEMGET));
    }

    /**
     * Returns element from 'itemGet' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getItemGetAt($offset)
    {
        return $this->get(self::ITEMGET, $offset);
    }

    /**
     * Returns count of 'itemGet' list
     *
     * @return int
     */
    public function getItemGetCount()
    {
        return $this->count(self::ITEMGET);
    }

    /**
     * Sets value of 'useTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUseTimes($value)
    {
        return $this->set(self::USETIMES, $value);
    }

    /**
     * Returns value of 'useTimes' property
     *
     * @return integer
     */
    public function getUseTimes()
    {
        $value = $this->get(self::USETIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'useTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUseTimes()
    {
        return $this->get(self::USETIMES) !== null;
    }

    /**
     * Sets value of 'totalTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalTimes($value)
    {
        return $this->set(self::TOTALTIMES, $value);
    }

    /**
     * Returns value of 'totalTimes' property
     *
     * @return integer
     */
    public function getTotalTimes()
    {
        $value = $this->get(self::TOTALTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalTimes()
    {
        return $this->get(self::TOTALTIMES) !== null;
    }
}
}