<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RaffleRecord message
 */
class RaffleRecord extends \ProtobufMessage
{
    /* Field index constants */
    const RAFFLECNT = 1;
    const TIMETICK = 2;
    const TIMES = 3;
    const PRIZELIST = 4;
    const BIGPRIZELIST = 5;
    const BONUSLIST = 6;
    const ARROPTION = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RAFFLECNT => array(
            'name' => 'raffleCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMETICK => array(
            'name' => 'timeTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMES => array(
            'name' => 'times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::BIGPRIZELIST => array(
            'name' => 'bigPrizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::BONUSLIST => array(
            'name' => 'bonusList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
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
        $this->values[self::RAFFLECNT] = null;
        $this->values[self::TIMETICK] = null;
        $this->values[self::TIMES] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::BIGPRIZELIST] = array();
        $this->values[self::BONUSLIST] = array();
        $this->values[self::ARROPTION] = array();
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
     * Sets value of 'raffleCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRaffleCnt($value)
    {
        return $this->set(self::RAFFLECNT, $value);
    }

    /**
     * Returns value of 'raffleCnt' property
     *
     * @return integer
     */
    public function getRaffleCnt()
    {
        $value = $this->get(self::RAFFLECNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'raffleCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRaffleCnt()
    {
        return $this->get(self::RAFFLECNT) !== null;
    }

    /**
     * Sets value of 'timeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeTick($value)
    {
        return $this->set(self::TIMETICK, $value);
    }

    /**
     * Returns value of 'timeTick' property
     *
     * @return integer
     */
    public function getTimeTick()
    {
        $value = $this->get(self::TIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeTick()
    {
        return $this->get(self::TIMETICK) !== null;
    }

    /**
     * Sets value of 'times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimes($value)
    {
        return $this->set(self::TIMES, $value);
    }

    /**
     * Returns value of 'times' property
     *
     * @return integer
     */
    public function getTimes()
    {
        $value = $this->get(self::TIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'times' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimes()
    {
        return $this->get(self::TIMES) !== null;
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendPrizeList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::PRIZELIST, $value);
    }

    /**
     * Clears 'prizeList' list
     *
     * @return null
     */
    public function clearPrizeList()
    {
        return $this->clear(self::PRIZELIST);
    }

    /**
     * Returns 'prizeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getPrizeList()
    {
        return $this->get(self::PRIZELIST);
    }

    /**
     * Returns true if 'prizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeList()
    {
        return count($this->get(self::PRIZELIST)) !== 0;
    }

    /**
     * Returns 'prizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZELIST));
    }

    /**
     * Returns element from 'prizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getPrizeListAt($offset)
    {
        return $this->get(self::PRIZELIST, $offset);
    }

    /**
     * Returns count of 'prizeList' list
     *
     * @return int
     */
    public function getPrizeListCount()
    {
        return $this->count(self::PRIZELIST);
    }

    /**
     * Appends value to 'bigPrizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendBigPrizeList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::BIGPRIZELIST, $value);
    }

    /**
     * Clears 'bigPrizeList' list
     *
     * @return null
     */
    public function clearBigPrizeList()
    {
        return $this->clear(self::BIGPRIZELIST);
    }

    /**
     * Returns 'bigPrizeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getBigPrizeList()
    {
        return $this->get(self::BIGPRIZELIST);
    }

    /**
     * Returns true if 'bigPrizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigPrizeList()
    {
        return count($this->get(self::BIGPRIZELIST)) !== 0;
    }

    /**
     * Returns 'bigPrizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getBigPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::BIGPRIZELIST));
    }

    /**
     * Returns element from 'bigPrizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getBigPrizeListAt($offset)
    {
        return $this->get(self::BIGPRIZELIST, $offset);
    }

    /**
     * Returns count of 'bigPrizeList' list
     *
     * @return int
     */
    public function getBigPrizeListCount()
    {
        return $this->count(self::BIGPRIZELIST);
    }

    /**
     * Appends value to 'bonusList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendBonusList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::BONUSLIST, $value);
    }

    /**
     * Clears 'bonusList' list
     *
     * @return null
     */
    public function clearBonusList()
    {
        return $this->clear(self::BONUSLIST);
    }

    /**
     * Returns 'bonusList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getBonusList()
    {
        return $this->get(self::BONUSLIST);
    }

    /**
     * Returns true if 'bonusList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBonusList()
    {
        return count($this->get(self::BONUSLIST)) !== 0;
    }

    /**
     * Returns 'bonusList' iterator
     *
     * @return \ArrayIterator
     */
    public function getBonusListIterator()
    {
        return new \ArrayIterator($this->get(self::BONUSLIST));
    }

    /**
     * Returns element from 'bonusList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getBonusListAt($offset)
    {
        return $this->get(self::BONUSLIST, $offset);
    }

    /**
     * Returns count of 'bonusList' list
     *
     * @return int
     */
    public function getBonusListCount()
    {
        return $this->count(self::BONUSLIST);
    }

    /**
     * Appends value to 'arrOption' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOption($value)
    {
        return $this->append(self::ARROPTION, $value);
    }

    /**
     * Clears 'arrOption' list
     *
     * @return null
     */
    public function clearArrOption()
    {
        return $this->clear(self::ARROPTION);
    }

    /**
     * Returns 'arrOption' list
     *
     * @return integer[]
     */
    public function getArrOption()
    {
        return $this->get(self::ARROPTION);
    }

    /**
     * Returns true if 'arrOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption()
    {
        return count($this->get(self::ARROPTION)) !== 0;
    }

    /**
     * Returns 'arrOption' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOptionIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION));
    }

    /**
     * Returns element from 'arrOption' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOptionAt($offset)
    {
        return $this->get(self::ARROPTION, $offset);
    }

    /**
     * Returns count of 'arrOption' list
     *
     * @return int
     */
    public function getArrOptionCount()
    {
        return $this->count(self::ARROPTION);
    }
}
}