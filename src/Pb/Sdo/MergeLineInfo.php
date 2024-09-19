<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MergeLineInfo message
 */
class MergeLineInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SECTION = 1;
    const ARRACTIVE = 2;
    const ARRELEMENT = 3;
    const ARRLINEPRIZE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SECTION => array(
            'name' => 'section',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTIVE => array(
            'name' => 'arrActive',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ARRELEMENT => array(
            'name' => 'arrElement',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRLINEPRIZE => array(
            'name' => 'arrLinePrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\LinePrize'
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
        $this->values[self::SECTION] = null;
        $this->values[self::ARRACTIVE] = array();
        $this->values[self::ARRELEMENT] = array();
        $this->values[self::ARRLINEPRIZE] = array();
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
     * Sets value of 'section' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSection($value)
    {
        return $this->set(self::SECTION, $value);
    }

    /**
     * Returns value of 'section' property
     *
     * @return integer
     */
    public function getSection()
    {
        $value = $this->get(self::SECTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'section' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSection()
    {
        return $this->get(self::SECTION) !== null;
    }

    /**
     * Appends value to 'arrActive' list
     *
     * @param boolean $value Value to append
     *
     * @return null
     */
    public function appendArrActive($value)
    {
        return $this->append(self::ARRACTIVE, $value);
    }

    /**
     * Clears 'arrActive' list
     *
     * @return null
     */
    public function clearArrActive()
    {
        return $this->clear(self::ARRACTIVE);
    }

    /**
     * Returns 'arrActive' list
     *
     * @return boolean[]
     */
    public function getArrActive()
    {
        return $this->get(self::ARRACTIVE);
    }

    /**
     * Returns true if 'arrActive' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActive()
    {
        return count($this->get(self::ARRACTIVE)) !== 0;
    }

    /**
     * Returns 'arrActive' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActiveIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTIVE));
    }

    /**
     * Returns element from 'arrActive' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return boolean
     */
    public function getArrActiveAt($offset)
    {
        return $this->get(self::ARRACTIVE, $offset);
    }

    /**
     * Returns count of 'arrActive' list
     *
     * @return int
     */
    public function getArrActiveCount()
    {
        return $this->count(self::ARRACTIVE);
    }

    /**
     * Appends value to 'arrElement' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrElement($value)
    {
        return $this->append(self::ARRELEMENT, $value);
    }

    /**
     * Clears 'arrElement' list
     *
     * @return null
     */
    public function clearArrElement()
    {
        return $this->clear(self::ARRELEMENT);
    }

    /**
     * Returns 'arrElement' list
     *
     * @return integer[]
     */
    public function getArrElement()
    {
        return $this->get(self::ARRELEMENT);
    }

    /**
     * Returns true if 'arrElement' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrElement()
    {
        return count($this->get(self::ARRELEMENT)) !== 0;
    }

    /**
     * Returns 'arrElement' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrElementIterator()
    {
        return new \ArrayIterator($this->get(self::ARRELEMENT));
    }

    /**
     * Returns element from 'arrElement' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrElementAt($offset)
    {
        return $this->get(self::ARRELEMENT, $offset);
    }

    /**
     * Returns count of 'arrElement' list
     *
     * @return int
     */
    public function getArrElementCount()
    {
        return $this->count(self::ARRELEMENT);
    }

    /**
     * Appends value to 'arrLinePrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\LinePrize $value Value to append
     *
     * @return null
     */
    public function appendArrLinePrize(\Xnhd\Core\Pb\Sdo\LinePrize $value)
    {
        return $this->append(self::ARRLINEPRIZE, $value);
    }

    /**
     * Clears 'arrLinePrize' list
     *
     * @return null
     */
    public function clearArrLinePrize()
    {
        return $this->clear(self::ARRLINEPRIZE);
    }

    /**
     * Returns 'arrLinePrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\LinePrize[]
     */
    public function getArrLinePrize()
    {
        return $this->get(self::ARRLINEPRIZE);
    }

    /**
     * Returns true if 'arrLinePrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLinePrize()
    {
        return count($this->get(self::ARRLINEPRIZE)) !== 0;
    }

    /**
     * Returns 'arrLinePrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLinePrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLINEPRIZE));
    }

    /**
     * Returns element from 'arrLinePrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\LinePrize
     */
    public function getArrLinePrizeAt($offset)
    {
        return $this->get(self::ARRLINEPRIZE, $offset);
    }

    /**
     * Returns count of 'arrLinePrize' list
     *
     * @return int
     */
    public function getArrLinePrizeCount()
    {
        return $this->count(self::ARRLINEPRIZE);
    }
}
}