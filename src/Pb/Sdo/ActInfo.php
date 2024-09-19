<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActInfo message
 */
class ActInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ACTID = 1;
    const ACTTYPE = 2;
    const ARRPRIZE = 3;
    const ARREXCHANGE = 4;
    const STLIMIT = 5;

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
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PrizeCond'
        ),
        self::ARREXCHANGE => array(
            'name' => 'arrExchange',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ExchangeCond'
        ),
        self::STLIMIT => array(
            'name' => 'stLimit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ExchangeLimit'
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
        $this->values[self::ARRPRIZE] = array();
        $this->values[self::ARREXCHANGE] = array();
        $this->values[self::STLIMIT] = array();
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
     * Appends value to 'arrExchange' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ExchangeCond $value Value to append
     *
     * @return null
     */
    public function appendArrExchange(\Xnhd\Core\Pb\Sdo\ExchangeCond $value)
    {
        return $this->append(self::ARREXCHANGE, $value);
    }

    /**
     * Clears 'arrExchange' list
     *
     * @return null
     */
    public function clearArrExchange()
    {
        return $this->clear(self::ARREXCHANGE);
    }

    /**
     * Returns 'arrExchange' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeCond[]
     */
    public function getArrExchange()
    {
        return $this->get(self::ARREXCHANGE);
    }

    /**
     * Returns true if 'arrExchange' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrExchange()
    {
        return count($this->get(self::ARREXCHANGE)) !== 0;
    }

    /**
     * Returns 'arrExchange' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrExchangeIterator()
    {
        return new \ArrayIterator($this->get(self::ARREXCHANGE));
    }

    /**
     * Returns element from 'arrExchange' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeCond
     */
    public function getArrExchangeAt($offset)
    {
        return $this->get(self::ARREXCHANGE, $offset);
    }

    /**
     * Returns count of 'arrExchange' list
     *
     * @return int
     */
    public function getArrExchangeCount()
    {
        return $this->count(self::ARREXCHANGE);
    }

    /**
     * Appends value to 'stLimit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ExchangeLimit $value Value to append
     *
     * @return null
     */
    public function appendStLimit(\Xnhd\Core\Pb\Sdo\ExchangeLimit $value)
    {
        return $this->append(self::STLIMIT, $value);
    }

    /**
     * Clears 'stLimit' list
     *
     * @return null
     */
    public function clearStLimit()
    {
        return $this->clear(self::STLIMIT);
    }

    /**
     * Returns 'stLimit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeLimit[]
     */
    public function getStLimit()
    {
        return $this->get(self::STLIMIT);
    }

    /**
     * Returns true if 'stLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStLimit()
    {
        return count($this->get(self::STLIMIT)) !== 0;
    }

    /**
     * Returns 'stLimit' iterator
     *
     * @return \ArrayIterator
     */
    public function getStLimitIterator()
    {
        return new \ArrayIterator($this->get(self::STLIMIT));
    }

    /**
     * Returns element from 'stLimit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeLimit
     */
    public function getStLimitAt($offset)
    {
        return $this->get(self::STLIMIT, $offset);
    }

    /**
     * Returns count of 'stLimit' list
     *
     * @return int
     */
    public function getStLimitCount()
    {
        return $this->count(self::STLIMIT);
    }
}
}