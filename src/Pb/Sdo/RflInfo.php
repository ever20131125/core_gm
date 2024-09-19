<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RflInfo message
 */
class RflInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const HASPRIZE = 2;
    const ARRPRIZE = 3;
    const ARRGORAFFLEUSE = 4;
    const ARRREFRESHUSE = 5;
    const CANREFRESH = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HASPRIZE => array(
            'name' => 'hasPrize',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RflPrize'
        ),
        self::ARRGORAFFLEUSE => array(
            'name' => 'arrGoRaffleUse',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::ARRREFRESHUSE => array(
            'name' => 'arrRefreshUse',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::CANREFRESH => array(
            'name' => 'canRefresh',
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
        $this->values[self::TYPE] = null;
        $this->values[self::HASPRIZE] = null;
        $this->values[self::ARRPRIZE] = array();
        $this->values[self::ARRGORAFFLEUSE] = array();
        $this->values[self::ARRREFRESHUSE] = array();
        $this->values[self::CANREFRESH] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'hasPrize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHasPrize($value)
    {
        return $this->set(self::HASPRIZE, $value);
    }

    /**
     * Returns value of 'hasPrize' property
     *
     * @return integer
     */
    public function getHasPrize()
    {
        $value = $this->get(self::HASPRIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hasPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasPrize()
    {
        return $this->get(self::HASPRIZE) !== null;
    }

    /**
     * Appends value to 'arrPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RflPrize $value Value to append
     *
     * @return null
     */
    public function appendArrPrize(\Xnhd\Core\Pb\Sdo\RflPrize $value)
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
     * @return \Xnhd\Core\Pb\Sdo\RflPrize[]
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
     * @return \Xnhd\Core\Pb\Sdo\RflPrize
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
     * Appends value to 'arrGoRaffleUse' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrGoRaffleUse(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRGORAFFLEUSE, $value);
    }

    /**
     * Clears 'arrGoRaffleUse' list
     *
     * @return null
     */
    public function clearArrGoRaffleUse()
    {
        return $this->clear(self::ARRGORAFFLEUSE);
    }

    /**
     * Returns 'arrGoRaffleUse' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrGoRaffleUse()
    {
        return $this->get(self::ARRGORAFFLEUSE);
    }

    /**
     * Returns true if 'arrGoRaffleUse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoRaffleUse()
    {
        return count($this->get(self::ARRGORAFFLEUSE)) !== 0;
    }

    /**
     * Returns 'arrGoRaffleUse' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoRaffleUseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGORAFFLEUSE));
    }

    /**
     * Returns element from 'arrGoRaffleUse' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrGoRaffleUseAt($offset)
    {
        return $this->get(self::ARRGORAFFLEUSE, $offset);
    }

    /**
     * Returns count of 'arrGoRaffleUse' list
     *
     * @return int
     */
    public function getArrGoRaffleUseCount()
    {
        return $this->count(self::ARRGORAFFLEUSE);
    }

    /**
     * Appends value to 'arrRefreshUse' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrRefreshUse(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRREFRESHUSE, $value);
    }

    /**
     * Clears 'arrRefreshUse' list
     *
     * @return null
     */
    public function clearArrRefreshUse()
    {
        return $this->clear(self::ARRREFRESHUSE);
    }

    /**
     * Returns 'arrRefreshUse' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrRefreshUse()
    {
        return $this->get(self::ARRREFRESHUSE);
    }

    /**
     * Returns true if 'arrRefreshUse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRefreshUse()
    {
        return count($this->get(self::ARRREFRESHUSE)) !== 0;
    }

    /**
     * Returns 'arrRefreshUse' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRefreshUseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRREFRESHUSE));
    }

    /**
     * Returns element from 'arrRefreshUse' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrRefreshUseAt($offset)
    {
        return $this->get(self::ARRREFRESHUSE, $offset);
    }

    /**
     * Returns count of 'arrRefreshUse' list
     *
     * @return int
     */
    public function getArrRefreshUseCount()
    {
        return $this->count(self::ARRREFRESHUSE);
    }

    /**
     * Sets value of 'canRefresh' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCanRefresh($value)
    {
        return $this->set(self::CANREFRESH, $value);
    }

    /**
     * Returns value of 'canRefresh' property
     *
     * @return integer
     */
    public function getCanRefresh()
    {
        $value = $this->get(self::CANREFRESH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'canRefresh' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCanRefresh()
    {
        return $this->get(self::CANREFRESH) !== null;
    }
}
}