<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExchangeActGroup message
 */
class ExchangeActGroup extends \ProtobufMessage
{
    /* Field index constants */
    const INDEX = 1;
    const EXCHANGEINFOS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXCHANGEINFOS => array(
            'name' => 'exchangeInfos',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ExchangeActInfo'
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
        $this->values[self::INDEX] = null;
        $this->values[self::EXCHANGEINFOS] = array();
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
     * Appends value to 'exchangeInfos' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ExchangeActInfo $value Value to append
     *
     * @return null
     */
    public function appendExchangeInfos(\Xnhd\Core\Pb\Sdo\ExchangeActInfo $value)
    {
        return $this->append(self::EXCHANGEINFOS, $value);
    }

    /**
     * Clears 'exchangeInfos' list
     *
     * @return null
     */
    public function clearExchangeInfos()
    {
        return $this->clear(self::EXCHANGEINFOS);
    }

    /**
     * Returns 'exchangeInfos' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeActInfo[]
     */
    public function getExchangeInfos()
    {
        return $this->get(self::EXCHANGEINFOS);
    }

    /**
     * Returns true if 'exchangeInfos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExchangeInfos()
    {
        return count($this->get(self::EXCHANGEINFOS)) !== 0;
    }

    /**
     * Returns 'exchangeInfos' iterator
     *
     * @return \ArrayIterator
     */
    public function getExchangeInfosIterator()
    {
        return new \ArrayIterator($this->get(self::EXCHANGEINFOS));
    }

    /**
     * Returns element from 'exchangeInfos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeActInfo
     */
    public function getExchangeInfosAt($offset)
    {
        return $this->get(self::EXCHANGEINFOS, $offset);
    }

    /**
     * Returns count of 'exchangeInfos' list
     *
     * @return int
     */
    public function getExchangeInfosCount()
    {
        return $this->count(self::EXCHANGEINFOS);
    }
}
}