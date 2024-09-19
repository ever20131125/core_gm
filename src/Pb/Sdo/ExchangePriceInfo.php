<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExchangePriceInfo message
 */
class ExchangePriceInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NMONEYPRICE = 1;
    const NSCOREPRICE = 2;
    const NGAMECOINPRICE = 3;
    const NQUALIFYCOINPRICE = 4;
    const NHOUSECOINPRICE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::NGAMECOINPRICE => array(
            'name' => 'nGameCoinPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUALIFYCOINPRICE => array(
            'name' => 'nQualifyCoinPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOUSECOINPRICE => array(
            'name' => 'nHouseCoinPrice',
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
        $this->values[self::NMONEYPRICE] = null;
        $this->values[self::NSCOREPRICE] = null;
        $this->values[self::NGAMECOINPRICE] = null;
        $this->values[self::NQUALIFYCOINPRICE] = null;
        $this->values[self::NHOUSECOINPRICE] = null;
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
     * Sets value of 'nGameCoinPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGameCoinPrice($value)
    {
        return $this->set(self::NGAMECOINPRICE, $value);
    }

    /**
     * Returns value of 'nGameCoinPrice' property
     *
     * @return integer
     */
    public function getNGameCoinPrice()
    {
        $value = $this->get(self::NGAMECOINPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGameCoinPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGameCoinPrice()
    {
        return $this->get(self::NGAMECOINPRICE) !== null;
    }

    /**
     * Sets value of 'nQualifyCoinPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQualifyCoinPrice($value)
    {
        return $this->set(self::NQUALIFYCOINPRICE, $value);
    }

    /**
     * Returns value of 'nQualifyCoinPrice' property
     *
     * @return integer
     */
    public function getNQualifyCoinPrice()
    {
        $value = $this->get(self::NQUALIFYCOINPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQualifyCoinPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQualifyCoinPrice()
    {
        return $this->get(self::NQUALIFYCOINPRICE) !== null;
    }

    /**
     * Sets value of 'nHouseCoinPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHouseCoinPrice($value)
    {
        return $this->set(self::NHOUSECOINPRICE, $value);
    }

    /**
     * Returns value of 'nHouseCoinPrice' property
     *
     * @return integer
     */
    public function getNHouseCoinPrice()
    {
        $value = $this->get(self::NHOUSECOINPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHouseCoinPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHouseCoinPrice()
    {
        return $this->get(self::NHOUSECOINPRICE) !== null;
    }
}
}