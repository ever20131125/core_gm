<?php
/**
 * Auto generated from complex.proto at 2022-10-19 11:07:41
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActInfoUpdate message
 */
class ActInfoUpdate extends \ProtobufMessage
{
    /* Field index constants */
    const ACTID = 1;
    const ACTTYPE = 2;
    const ARRACTCOND = 3;
    const ARREXCHANGECOND = 4;

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
        self::ARRACTCOND => array(
            'name' => 'arrActCond',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PrizeCond'
        ),
        self::ARREXCHANGECOND => array(
            'name' => 'arrExchangeCond',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ExchangeCond'
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
        $this->values[self::ARRACTCOND] = array();
        $this->values[self::ARREXCHANGECOND] = array();
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
     * Appends value to 'arrActCond' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PrizeCond $value Value to append
     *
     * @return null
     */
    public function appendArrActCond(\Xnhd\Core\Pb\Sdo\PrizeCond $value)
    {
        return $this->append(self::ARRACTCOND, $value);
    }

    /**
     * Clears 'arrActCond' list
     *
     * @return null
     */
    public function clearArrActCond()
    {
        return $this->clear(self::ARRACTCOND);
    }

    /**
     * Returns 'arrActCond' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond[]
     */
    public function getArrActCond()
    {
        return $this->get(self::ARRACTCOND);
    }

    /**
     * Returns true if 'arrActCond' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActCond()
    {
        return count($this->get(self::ARRACTCOND)) !== 0;
    }

    /**
     * Returns 'arrActCond' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActCondIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTCOND));
    }

    /**
     * Returns element from 'arrActCond' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond
     */
    public function getArrActCondAt($offset)
    {
        return $this->get(self::ARRACTCOND, $offset);
    }

    /**
     * Returns count of 'arrActCond' list
     *
     * @return int
     */
    public function getArrActCondCount()
    {
        return $this->count(self::ARRACTCOND);
    }

    /**
     * Appends value to 'arrExchangeCond' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ExchangeCond $value Value to append
     *
     * @return null
     */
    public function appendArrExchangeCond(\Xnhd\Core\Pb\Sdo\ExchangeCond $value)
    {
        return $this->append(self::ARREXCHANGECOND, $value);
    }

    /**
     * Clears 'arrExchangeCond' list
     *
     * @return null
     */
    public function clearArrExchangeCond()
    {
        return $this->clear(self::ARREXCHANGECOND);
    }

    /**
     * Returns 'arrExchangeCond' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeCond[]
     */
    public function getArrExchangeCond()
    {
        return $this->get(self::ARREXCHANGECOND);
    }

    /**
     * Returns true if 'arrExchangeCond' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrExchangeCond()
    {
        return count($this->get(self::ARREXCHANGECOND)) !== 0;
    }

    /**
     * Returns 'arrExchangeCond' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrExchangeCondIterator()
    {
        return new \ArrayIterator($this->get(self::ARREXCHANGECOND));
    }

    /**
     * Returns element from 'arrExchangeCond' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeCond
     */
    public function getArrExchangeCondAt($offset)
    {
        return $this->get(self::ARREXCHANGECOND, $offset);
    }

    /**
     * Returns count of 'arrExchangeCond' list
     *
     * @return int
     */
    public function getArrExchangeCondCount()
    {
        return $this->count(self::ARREXCHANGECOND);
    }
}
}