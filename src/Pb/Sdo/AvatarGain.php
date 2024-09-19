<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AvatarGain message
 */
class AvatarGain extends \ProtobufMessage
{
    /* Field index constants */
    const NSUITID = 1;
    const ARRITEMID = 2;
    const ARRSCORE = 3;
    const STATE = 4;
    const ARRSTAR = 5;
    const NSTAR = 6;
    const SZCOMMENT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSUITID => array(
            'name' => 'nSuitID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMID => array(
            'name' => 'arrItemID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSCORE => array(
            'name' => 'arrScore',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_UnReceive,
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSTAR => array(
            'name' => 'arrStar',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAR => array(
            'name' => 'nStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCOMMENT => array(
            'name' => 'szComment',
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
        $this->values[self::NSUITID] = null;
        $this->values[self::ARRITEMID] = array();
        $this->values[self::ARRSCORE] = array();
        $this->values[self::STATE] = self::$fields[self::STATE]['default'];
        $this->values[self::ARRSTAR] = array();
        $this->values[self::NSTAR] = null;
        $this->values[self::SZCOMMENT] = null;
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
     * Sets value of 'nSuitID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSuitID($value)
    {
        return $this->set(self::NSUITID, $value);
    }

    /**
     * Returns value of 'nSuitID' property
     *
     * @return integer
     */
    public function getNSuitID()
    {
        $value = $this->get(self::NSUITID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSuitID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSuitID()
    {
        return $this->get(self::NSUITID) !== null;
    }

    /**
     * Appends value to 'arrItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemID($value)
    {
        return $this->append(self::ARRITEMID, $value);
    }

    /**
     * Clears 'arrItemID' list
     *
     * @return null
     */
    public function clearArrItemID()
    {
        return $this->clear(self::ARRITEMID);
    }

    /**
     * Returns 'arrItemID' list
     *
     * @return integer[]
     */
    public function getArrItemID()
    {
        return $this->get(self::ARRITEMID);
    }

    /**
     * Returns true if 'arrItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemID()
    {
        return count($this->get(self::ARRITEMID)) !== 0;
    }

    /**
     * Returns 'arrItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMID));
    }

    /**
     * Returns element from 'arrItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemIDAt($offset)
    {
        return $this->get(self::ARRITEMID, $offset);
    }

    /**
     * Returns count of 'arrItemID' list
     *
     * @return int
     */
    public function getArrItemIDCount()
    {
        return $this->count(self::ARRITEMID);
    }

    /**
     * Appends value to 'arrScore' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrScore($value)
    {
        return $this->append(self::ARRSCORE, $value);
    }

    /**
     * Clears 'arrScore' list
     *
     * @return null
     */
    public function clearArrScore()
    {
        return $this->clear(self::ARRSCORE);
    }

    /**
     * Returns 'arrScore' list
     *
     * @return integer[]
     */
    public function getArrScore()
    {
        return $this->get(self::ARRSCORE);
    }

    /**
     * Returns true if 'arrScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrScore()
    {
        return count($this->get(self::ARRSCORE)) !== 0;
    }

    /**
     * Returns 'arrScore' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrScoreIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSCORE));
    }

    /**
     * Returns element from 'arrScore' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrScoreAt($offset)
    {
        return $this->get(self::ARRSCORE, $offset);
    }

    /**
     * Returns count of 'arrScore' list
     *
     * @return int
     */
    public function getArrScoreCount()
    {
        return $this->count(self::ARRSCORE);
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
     * Sets value of 'nStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStar($value)
    {
        return $this->set(self::NSTAR, $value);
    }

    /**
     * Returns value of 'nStar' property
     *
     * @return integer
     */
    public function getNStar()
    {
        $value = $this->get(self::NSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStar()
    {
        return $this->get(self::NSTAR) !== null;
    }

    /**
     * Sets value of 'szComment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzComment($value)
    {
        return $this->set(self::SZCOMMENT, $value);
    }

    /**
     * Returns value of 'szComment' property
     *
     * @return string
     */
    public function getSzComment()
    {
        $value = $this->get(self::SZCOMMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szComment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzComment()
    {
        return $this->get(self::SZCOMMENT) !== null;
    }
}
}