<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemScript message
 */
class ItemScript extends \ProtobufMessage
{
    /* Field index constants */
    const SCRIPTTYPE = 1;
    const ARRVALUE1 = 2;
    const ARRVALUE2 = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCRIPTTYPE => array(
            'name' => 'scriptType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRVALUE1 => array(
            'name' => 'arrValue1',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRVALUE2 => array(
            'name' => 'arrValue2',
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
        $this->values[self::SCRIPTTYPE] = null;
        $this->values[self::ARRVALUE1] = array();
        $this->values[self::ARRVALUE2] = array();
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
     * Sets value of 'scriptType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScriptType($value)
    {
        return $this->set(self::SCRIPTTYPE, $value);
    }

    /**
     * Returns value of 'scriptType' property
     *
     * @return integer
     */
    public function getScriptType()
    {
        $value = $this->get(self::SCRIPTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scriptType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScriptType()
    {
        return $this->get(self::SCRIPTTYPE) !== null;
    }

    /**
     * Appends value to 'arrValue1' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrValue1($value)
    {
        return $this->append(self::ARRVALUE1, $value);
    }

    /**
     * Clears 'arrValue1' list
     *
     * @return null
     */
    public function clearArrValue1()
    {
        return $this->clear(self::ARRVALUE1);
    }

    /**
     * Returns 'arrValue1' list
     *
     * @return integer[]
     */
    public function getArrValue1()
    {
        return $this->get(self::ARRVALUE1);
    }

    /**
     * Returns true if 'arrValue1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrValue1()
    {
        return count($this->get(self::ARRVALUE1)) !== 0;
    }

    /**
     * Returns 'arrValue1' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrValue1Iterator()
    {
        return new \ArrayIterator($this->get(self::ARRVALUE1));
    }

    /**
     * Returns element from 'arrValue1' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrValue1At($offset)
    {
        return $this->get(self::ARRVALUE1, $offset);
    }

    /**
     * Returns count of 'arrValue1' list
     *
     * @return int
     */
    public function getArrValue1Count()
    {
        return $this->count(self::ARRVALUE1);
    }

    /**
     * Appends value to 'arrValue2' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrValue2($value)
    {
        return $this->append(self::ARRVALUE2, $value);
    }

    /**
     * Clears 'arrValue2' list
     *
     * @return null
     */
    public function clearArrValue2()
    {
        return $this->clear(self::ARRVALUE2);
    }

    /**
     * Returns 'arrValue2' list
     *
     * @return integer[]
     */
    public function getArrValue2()
    {
        return $this->get(self::ARRVALUE2);
    }

    /**
     * Returns true if 'arrValue2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrValue2()
    {
        return count($this->get(self::ARRVALUE2)) !== 0;
    }

    /**
     * Returns 'arrValue2' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrValue2Iterator()
    {
        return new \ArrayIterator($this->get(self::ARRVALUE2));
    }

    /**
     * Returns element from 'arrValue2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrValue2At($offset)
    {
        return $this->get(self::ARRVALUE2, $offset);
    }

    /**
     * Returns count of 'arrValue2' list
     *
     * @return int
     */
    public function getArrValue2Count()
    {
        return $this->count(self::ARRVALUE2);
    }
}
}