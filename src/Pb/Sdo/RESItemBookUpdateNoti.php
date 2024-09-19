<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESItemBookUpdateNoti message
 */
class RESItemBookUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRITEMID = 2;
    const ARRSCORE = 3;
    const ARRPRIZE = 4;
    const BOOKSCORE = 5;
    const BOOKLEVEL = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
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
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PrizeCond'
        ),
        self::BOOKSCORE => array(
            'name' => 'bookScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BOOKLEVEL => array(
            'name' => 'bookLevel',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRITEMID] = array();
        $this->values[self::ARRSCORE] = array();
        $this->values[self::ARRPRIZE] = array();
        $this->values[self::BOOKSCORE] = null;
        $this->values[self::BOOKLEVEL] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
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
     * Appends value to 'arrPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PrizeCond $value Value to append
     *
     * @return null
     */
    public function appendArrPrize(\Xnhd\Core\Pb\Sdo\PrizeCond $value)
    {
        return $this->append(self::ARRPRIZE, $value);
    }

    /**
     * Clears 'arrPrize' list
     *
     * @return null
     */
    public function clearArrPrize()
    {
        return $this->clear(self::ARRPRIZE);
    }

    /**
     * Returns 'arrPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond[]
     */
    public function getArrPrize()
    {
        return $this->get(self::ARRPRIZE);
    }

    /**
     * Returns true if 'arrPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrize()
    {
        return count($this->get(self::ARRPRIZE)) !== 0;
    }

    /**
     * Returns 'arrPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZE));
    }

    /**
     * Returns element from 'arrPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond
     */
    public function getArrPrizeAt($offset)
    {
        return $this->get(self::ARRPRIZE, $offset);
    }

    /**
     * Returns count of 'arrPrize' list
     *
     * @return int
     */
    public function getArrPrizeCount()
    {
        return $this->count(self::ARRPRIZE);
    }

    /**
     * Sets value of 'bookScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBookScore($value)
    {
        return $this->set(self::BOOKSCORE, $value);
    }

    /**
     * Returns value of 'bookScore' property
     *
     * @return integer
     */
    public function getBookScore()
    {
        $value = $this->get(self::BOOKSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bookScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBookScore()
    {
        return $this->get(self::BOOKSCORE) !== null;
    }

    /**
     * Sets value of 'bookLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBookLevel($value)
    {
        return $this->set(self::BOOKLEVEL, $value);
    }

    /**
     * Returns value of 'bookLevel' property
     *
     * @return integer
     */
    public function getBookLevel()
    {
        $value = $this->get(self::BOOKLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bookLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBookLevel()
    {
        return $this->get(self::BOOKLEVEL) !== null;
    }
}
}