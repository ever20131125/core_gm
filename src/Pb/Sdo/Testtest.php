<?php
/**
 * Auto generated from test3.proto at 2024-12-11 05:49:09
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * Testtest message
 */
class Testtest extends \ProtobufMessage
{
    /* Field index constants */
    const NTEST1 = 1;
    const NTEST2 = 2;
    const SZTEST3 = 3;
    const SZTEST4 = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTEST1 => array(
            'name' => 'nTest1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTEST2 => array(
            'name' => 'nTest2',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZTEST3 => array(
            'name' => 'szTest3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZTEST4 => array(
            'name' => 'szTest4',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NTEST1] = null;
        $this->values[self::NTEST2] = array();
        $this->values[self::SZTEST3] = null;
        $this->values[self::SZTEST4] = null;
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
     * Sets value of 'nTest1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTest1($value)
    {
        return $this->set(self::NTEST1, $value);
    }

    /**
     * Returns value of 'nTest1' property
     *
     * @return integer
     */
    public function getNTest1()
    {
        $value = $this->get(self::NTEST1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTest1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTest1()
    {
        return $this->get(self::NTEST1) !== null;
    }

    /**
     * Appends value to 'nTest2' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNTest2($value)
    {
        return $this->append(self::NTEST2, $value);
    }

    /**
     * Clears 'nTest2' list
     *
     * @return null
     */
    public function clearNTest2()
    {
        return $this->clear(self::NTEST2);
    }

    /**
     * Returns 'nTest2' list
     *
     * @return integer[]
     */
    public function getNTest2()
    {
        return $this->get(self::NTEST2);
    }

    /**
     * Returns true if 'nTest2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTest2()
    {
        return count($this->get(self::NTEST2)) !== 0;
    }

    /**
     * Returns 'nTest2' iterator
     *
     * @return \ArrayIterator
     */
    public function getNTest2Iterator()
    {
        return new \ArrayIterator($this->get(self::NTEST2));
    }

    /**
     * Returns element from 'nTest2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNTest2At($offset)
    {
        return $this->get(self::NTEST2, $offset);
    }

    /**
     * Returns count of 'nTest2' list
     *
     * @return int
     */
    public function getNTest2Count()
    {
        return $this->count(self::NTEST2);
    }

    /**
     * Sets value of 'szTest3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTest3($value)
    {
        return $this->set(self::SZTEST3, $value);
    }

    /**
     * Returns value of 'szTest3' property
     *
     * @return string
     */
    public function getSzTest3()
    {
        $value = $this->get(self::SZTEST3);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTest3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTest3()
    {
        return $this->get(self::SZTEST3) !== null;
    }

    /**
     * Sets value of 'szTest4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTest4($value)
    {
        return $this->set(self::SZTEST4, $value);
    }

    /**
     * Returns value of 'szTest4' property
     *
     * @return string
     */
    public function getSzTest4()
    {
        $value = $this->get(self::SZTEST4);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTest4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTest4()
    {
        return $this->get(self::SZTEST4) !== null;
    }
}
}