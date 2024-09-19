<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemGained message
 */
class ItemGained extends \ProtobufMessage
{
    /* Field index constants */
    const ARRITEMBASE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
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
        $this->values[self::ARRITEMBASE] = array();
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
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
    }
}
}