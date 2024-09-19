<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GiveEvent message
 */
class GiveEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NGIVEID = 1;
    const NRECEIVEID = 2;
    const ARRITEMBASE = 3;
    const NMONEYPRICE = 4;
    const NSCOREPRICE = 5;
    const NGCOINPRICE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGIVEID => array(
            'name' => 'nGiveID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRECEIVEID => array(
            'name' => 'nReceiveID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NMONEYPRICE => array(
            'name' => 'nMoneyPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCOREPRICE => array(
            'name' => 'nScorePrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGCOINPRICE => array(
            'name' => 'nGCoinPrice',
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
        $this->values[self::NGIVEID] = null;
        $this->values[self::NRECEIVEID] = null;
        $this->values[self::ARRITEMBASE] = array();
        $this->values[self::NMONEYPRICE] = null;
        $this->values[self::NSCOREPRICE] = null;
        $this->values[self::NGCOINPRICE] = null;
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
     * Sets value of 'nGiveID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGiveID($value)
    {
        return $this->set(self::NGIVEID, $value);
    }

    /**
     * Returns value of 'nGiveID' property
     *
     * @return integer
     */
    public function getNGiveID()
    {
        $value = $this->get(self::NGIVEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGiveID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGiveID()
    {
        return $this->get(self::NGIVEID) !== null;
    }

    /**
     * Sets value of 'nReceiveID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNReceiveID($value)
    {
        return $this->set(self::NRECEIVEID, $value);
    }

    /**
     * Returns value of 'nReceiveID' property
     *
     * @return integer
     */
    public function getNReceiveID()
    {
        $value = $this->get(self::NRECEIVEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nReceiveID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNReceiveID()
    {
        return $this->get(self::NRECEIVEID) !== null;
    }

    /**
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
    }

    /**
     * Sets value of 'nMoneyPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoneyPrice($value)
    {
        return $this->set(self::NMONEYPRICE, $value);
    }

    /**
     * Returns value of 'nMoneyPrice' property
     *
     * @return integer
     */
    public function getNMoneyPrice()
    {
        $value = $this->get(self::NMONEYPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoneyPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoneyPrice()
    {
        return $this->get(self::NMONEYPRICE) !== null;
    }

    /**
     * Sets value of 'nScorePrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScorePrice($value)
    {
        return $this->set(self::NSCOREPRICE, $value);
    }

    /**
     * Returns value of 'nScorePrice' property
     *
     * @return integer
     */
    public function getNScorePrice()
    {
        $value = $this->get(self::NSCOREPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScorePrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScorePrice()
    {
        return $this->get(self::NSCOREPRICE) !== null;
    }

    /**
     * Sets value of 'nGCoinPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGCoinPrice($value)
    {
        return $this->set(self::NGCOINPRICE, $value);
    }

    /**
     * Returns value of 'nGCoinPrice' property
     *
     * @return integer
     */
    public function getNGCoinPrice()
    {
        $value = $this->get(self::NGCOINPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGCoinPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGCoinPrice()
    {
        return $this->get(self::NGCOINPRICE) !== null;
    }
}
}