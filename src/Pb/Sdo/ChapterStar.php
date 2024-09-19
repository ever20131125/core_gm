<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChapterStar message
 */
class ChapterStar extends \ProtobufMessage
{
    /* Field index constants */
    const ARRBOXSTATE = 1;
    const ARRSTAR = 2;
    const NCHAPTERSTAR = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRBOXSTATE => array(
            'name' => 'arrBoxState',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSTAR => array(
            'name' => 'arrStar',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHAPTERSTAR => array(
            'name' => 'nChapterstar',
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
        $this->values[self::ARRBOXSTATE] = array();
        $this->values[self::ARRSTAR] = array();
        $this->values[self::NCHAPTERSTAR] = null;
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
     * Appends value to 'arrBoxState' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBoxState($value)
    {
        return $this->append(self::ARRBOXSTATE, $value);
    }

    /**
     * Clears 'arrBoxState' list
     *
     * @return null
     */
    public function clearArrBoxState()
    {
        return $this->clear(self::ARRBOXSTATE);
    }

    /**
     * Returns 'arrBoxState' list
     *
     * @return integer[]
     */
    public function getArrBoxState()
    {
        return $this->get(self::ARRBOXSTATE);
    }

    /**
     * Returns true if 'arrBoxState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBoxState()
    {
        return count($this->get(self::ARRBOXSTATE)) !== 0;
    }

    /**
     * Returns 'arrBoxState' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBoxStateIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBOXSTATE));
    }

    /**
     * Returns element from 'arrBoxState' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBoxStateAt($offset)
    {
        return $this->get(self::ARRBOXSTATE, $offset);
    }

    /**
     * Returns count of 'arrBoxState' list
     *
     * @return int
     */
    public function getArrBoxStateCount()
    {
        return $this->count(self::ARRBOXSTATE);
    }

    /**
     * Appends value to 'arrStar' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrStar($value)
    {
        return $this->append(self::ARRSTAR, $value);
    }

    /**
     * Clears 'arrStar' list
     *
     * @return null
     */
    public function clearArrStar()
    {
        return $this->clear(self::ARRSTAR);
    }

    /**
     * Returns 'arrStar' list
     *
     * @return integer[]
     */
    public function getArrStar()
    {
        return $this->get(self::ARRSTAR);
    }

    /**
     * Returns true if 'arrStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStar()
    {
        return count($this->get(self::ARRSTAR)) !== 0;
    }

    /**
     * Returns 'arrStar' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStarIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTAR));
    }

    /**
     * Returns element from 'arrStar' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrStarAt($offset)
    {
        return $this->get(self::ARRSTAR, $offset);
    }

    /**
     * Returns count of 'arrStar' list
     *
     * @return int
     */
    public function getArrStarCount()
    {
        return $this->count(self::ARRSTAR);
    }

    /**
     * Sets value of 'nChapterstar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChapterstar($value)
    {
        return $this->set(self::NCHAPTERSTAR, $value);
    }

    /**
     * Returns value of 'nChapterstar' property
     *
     * @return integer
     */
    public function getNChapterstar()
    {
        $value = $this->get(self::NCHAPTERSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChapterstar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChapterstar()
    {
        return $this->get(self::NCHAPTERSTAR) !== null;
    }
}
}