<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExchangeCond message
 */
class ExchangeCond extends \ProtobufMessage
{
    /* Field index constants */
    const NINDEX = 1;
    const STCOST = 2;
    const STPRIZE = 3;
    const NCURTIMES = 4;
    const NMAXTIMES = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NINDEX => array(
            'name' => 'nIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STCOST => array(
            'name' => 'stCost',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::STPRIZE => array(
            'name' => 'stPrize',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NCURTIMES => array(
            'name' => 'nCurTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXTIMES => array(
            'name' => 'nMaxTimes',
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
        $this->values[self::NINDEX] = null;
        $this->values[self::STCOST] = null;
        $this->values[self::STPRIZE] = null;
        $this->values[self::NCURTIMES] = null;
        $this->values[self::NMAXTIMES] = null;
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
     * Sets value of 'nIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIndex($value)
    {
        return $this->set(self::NINDEX, $value);
    }

    /**
     * Returns value of 'nIndex' property
     *
     * @return integer
     */
    public function getNIndex()
    {
        $value = $this->get(self::NINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIndex()
    {
        return $this->get(self::NINDEX) !== null;
    }

    /**
     * Sets value of 'stCost' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStCost(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STCOST, $value);
    }

    /**
     * Returns value of 'stCost' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
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
        return $this->get(self::STCOST) !== null;
    }

    /**
     * Sets value of 'stPrize' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStPrize(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STPRIZE, $value);
    }

    /**
     * Returns value of 'stPrize' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
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
        return $this->get(self::STPRIZE) !== null;
    }

    /**
     * Sets value of 'nCurTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurTimes($value)
    {
        return $this->set(self::NCURTIMES, $value);
    }

    /**
     * Returns value of 'nCurTimes' property
     *
     * @return integer
     */
    public function getNCurTimes()
    {
        $value = $this->get(self::NCURTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurTimes()
    {
        return $this->get(self::NCURTIMES) !== null;
    }

    /**
     * Sets value of 'nMaxTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxTimes($value)
    {
        return $this->set(self::NMAXTIMES, $value);
    }

    /**
     * Returns value of 'nMaxTimes' property
     *
     * @return integer
     */
    public function getNMaxTimes()
    {
        $value = $this->get(self::NMAXTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxTimes()
    {
        return $this->get(self::NMAXTIMES) !== null;
    }
}
}