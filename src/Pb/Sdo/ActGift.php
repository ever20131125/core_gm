<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActGift message
 */
class ActGift extends \ProtobufMessage
{
    /* Field index constants */
    const ACTID = 1;
    const ACTTYPE = 2;
    const INDEX = 3;
    const STCOST = 4;
    const STPRIZE = 5;
    const GIFTTYPE = 6;
    const TIMES = 7;
    const LIMIT = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActType::enmActType_None,
            'name' => 'actType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STCOST => array(
            'name' => 'stCost',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::STPRIZE => array(
            'name' => 'stPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::GIFTTYPE => array(
            'name' => 'giftType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMES => array(
            'name' => 'times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIMIT => array(
            'name' => 'limit',
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
        $this->values[self::ACTID] = null;
        $this->values[self::ACTTYPE] = self::$fields[self::ACTTYPE]['default'];
        $this->values[self::INDEX] = null;
        $this->values[self::STCOST] = array();
        $this->values[self::STPRIZE] = array();
        $this->values[self::GIFTTYPE] = null;
        $this->values[self::TIMES] = null;
        $this->values[self::LIMIT] = null;
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
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
    }

    /**
     * Sets value of 'actType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActType($value)
    {
        return $this->set(self::ACTTYPE, $value);
    }

    /**
     * Returns value of 'actType' property
     *
     * @return integer
     */
    public function getActType()
    {
        $value = $this->get(self::ACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActType()
    {
        return $this->get(self::ACTTYPE) !== null;
    }

    /**
     * Sets value of 'index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return integer
     */
    public function getIndex()
    {
        $value = $this->get(self::INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIndex()
    {
        return $this->get(self::INDEX) !== null;
    }

    /**
     * Appends value to 'stCost' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendStCost(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::STCOST, $value);
    }

    /**
     * Clears 'stCost' list
     *
     * @return null
     */
    public function clearStCost()
    {
        return $this->clear(self::STCOST);
    }

    /**
     * Returns 'stCost' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getStCost()
    {
        return $this->get(self::STCOST);
    }

    /**
     * Returns true if 'stCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStCost()
    {
        return count($this->get(self::STCOST)) !== 0;
    }

    /**
     * Returns 'stCost' iterator
     *
     * @return \ArrayIterator
     */
    public function getStCostIterator()
    {
        return new \ArrayIterator($this->get(self::STCOST));
    }

    /**
     * Returns element from 'stCost' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStCostAt($offset)
    {
        return $this->get(self::STCOST, $offset);
    }

    /**
     * Returns count of 'stCost' list
     *
     * @return int
     */
    public function getStCostCount()
    {
        return $this->count(self::STCOST);
    }

    /**
     * Appends value to 'stPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendStPrize(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::STPRIZE, $value);
    }

    /**
     * Clears 'stPrize' list
     *
     * @return null
     */
    public function clearStPrize()
    {
        return $this->clear(self::STPRIZE);
    }

    /**
     * Returns 'stPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getStPrize()
    {
        return $this->get(self::STPRIZE);
    }

    /**
     * Returns true if 'stPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPrize()
    {
        return count($this->get(self::STPRIZE)) !== 0;
    }

    /**
     * Returns 'stPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getStPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::STPRIZE));
    }

    /**
     * Returns element from 'stPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStPrizeAt($offset)
    {
        return $this->get(self::STPRIZE, $offset);
    }

    /**
     * Returns count of 'stPrize' list
     *
     * @return int
     */
    public function getStPrizeCount()
    {
        return $this->count(self::STPRIZE);
    }

    /**
     * Sets value of 'giftType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGiftType($value)
    {
        return $this->set(self::GIFTTYPE, $value);
    }

    /**
     * Returns value of 'giftType' property
     *
     * @return integer
     */
    public function getGiftType()
    {
        $value = $this->get(self::GIFTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'giftType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGiftType()
    {
        return $this->get(self::GIFTTYPE) !== null;
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
     * Sets value of 'limit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLimit($value)
    {
        return $this->set(self::LIMIT, $value);
    }

    /**
     * Returns value of 'limit' property
     *
     * @return integer
     */
    public function getLimit()
    {
        $value = $this->get(self::LIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'limit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLimit()
    {
        return $this->get(self::LIMIT) !== null;
    }
}
}