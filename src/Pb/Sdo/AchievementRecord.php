<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AchievementRecord message
 */
class AchievementRecord extends \ProtobufMessage
{
    /* Field index constants */
    const ARRITEM = 1;
    const NTIME = 2;
    const BPRIZED = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRITEM => array(
            'name' => 'arrItem',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NTIME => array(
            'name' => 'nTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BPRIZED => array(
            'name' => 'bPrized',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::ARRITEM] = array();
        $this->values[self::NTIME] = null;
        $this->values[self::BPRIZED] = null;
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

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }

    /**
     * Sets value of 'bPrized' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBPrized($value)
    {
        return $this->set(self::BPRIZED, $value);
    }

    /**
     * Returns value of 'bPrized' property
     *
     * @return boolean
     */
    public function getBPrized()
    {
        $value = $this->get(self::BPRIZED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bPrized' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBPrized()
    {
        return $this->get(self::BPRIZED) !== null;
    }
}
}