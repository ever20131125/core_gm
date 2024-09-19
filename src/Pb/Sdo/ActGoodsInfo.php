<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActGoodsInfo message
 */
class ActGoodsInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const NACTTYPE = 2;
    const NDISCOUNTRATE = 3;
    const NBUYSALELIMIT = 4;
    const NBUYSALECUR = 5;
    const NSTARTTIME = 6;
    const NENDTIME = 7;
    const ARRGOODSPRICEINFO = 10;
    const NNOSHOWBUY = 11;
    const ITEMGENDER = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTTYPE => array(
            'name' => 'nActType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDISCOUNTRATE => array(
            'name' => 'nDiscountrate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBUYSALELIMIT => array(
            'name' => 'nBuySaleLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBUYSALECUR => array(
            'name' => 'nBuySaleCur',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'default' => 0,
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'default' => 0,
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSPRICEINFO => array(
            'name' => 'arrGoodsPriceInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GoodsPriceInfo'
        ),
        self::NNOSHOWBUY => array(
            'name' => 'nNoShowBuy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'itemGender',
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
        $this->values[self::NITEMID] = null;
        $this->values[self::NACTTYPE] = null;
        $this->values[self::NDISCOUNTRATE] = null;
        $this->values[self::NBUYSALELIMIT] = null;
        $this->values[self::NBUYSALECUR] = null;
        $this->values[self::NSTARTTIME] = self::$fields[self::NSTARTTIME]['default'];
        $this->values[self::NENDTIME] = self::$fields[self::NENDTIME]['default'];
        $this->values[self::ARRGOODSPRICEINFO] = array();
        $this->values[self::NNOSHOWBUY] = null;
        $this->values[self::ITEMGENDER] = self::$fields[self::ITEMGENDER]['default'];
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
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nActType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActType($value)
    {
        return $this->set(self::NACTTYPE, $value);
    }

    /**
     * Returns value of 'nActType' property
     *
     * @return integer
     */
    public function getNActType()
    {
        $value = $this->get(self::NACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActType()
    {
        return $this->get(self::NACTTYPE) !== null;
    }

    /**
     * Sets value of 'nDiscountrate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDiscountrate($value)
    {
        return $this->set(self::NDISCOUNTRATE, $value);
    }

    /**
     * Returns value of 'nDiscountrate' property
     *
     * @return integer
     */
    public function getNDiscountrate()
    {
        $value = $this->get(self::NDISCOUNTRATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDiscountrate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDiscountrate()
    {
        return $this->get(self::NDISCOUNTRATE) !== null;
    }

    /**
     * Sets value of 'nBuySaleLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBuySaleLimit($value)
    {
        return $this->set(self::NBUYSALELIMIT, $value);
    }

    /**
     * Returns value of 'nBuySaleLimit' property
     *
     * @return integer
     */
    public function getNBuySaleLimit()
    {
        $value = $this->get(self::NBUYSALELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBuySaleLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBuySaleLimit()
    {
        return $this->get(self::NBUYSALELIMIT) !== null;
    }

    /**
     * Sets value of 'nBuySaleCur' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBuySaleCur($value)
    {
        return $this->set(self::NBUYSALECUR, $value);
    }

    /**
     * Returns value of 'nBuySaleCur' property
     *
     * @return integer
     */
    public function getNBuySaleCur()
    {
        $value = $this->get(self::NBUYSALECUR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBuySaleCur' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBuySaleCur()
    {
        return $this->get(self::NBUYSALECUR) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Appends value to 'arrGoodsPriceInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GoodsPriceInfo $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsPriceInfo(\Xnhd\Core\Pb\Sdo\GoodsPriceInfo $value)
    {
        return $this->append(self::ARRGOODSPRICEINFO, $value);
    }

    /**
     * Clears 'arrGoodsPriceInfo' list
     *
     * @return null
     */
    public function clearArrGoodsPriceInfo()
    {
        return $this->clear(self::ARRGOODSPRICEINFO);
    }

    /**
     * Returns 'arrGoodsPriceInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GoodsPriceInfo[]
     */
    public function getArrGoodsPriceInfo()
    {
        return $this->get(self::ARRGOODSPRICEINFO);
    }

    /**
     * Returns true if 'arrGoodsPriceInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoodsPriceInfo()
    {
        return count($this->get(self::ARRGOODSPRICEINFO)) !== 0;
    }

    /**
     * Returns 'arrGoodsPriceInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoodsPriceInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOODSPRICEINFO));
    }

    /**
     * Returns element from 'arrGoodsPriceInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GoodsPriceInfo
     */
    public function getArrGoodsPriceInfoAt($offset)
    {
        return $this->get(self::ARRGOODSPRICEINFO, $offset);
    }

    /**
     * Returns count of 'arrGoodsPriceInfo' list
     *
     * @return int
     */
    public function getArrGoodsPriceInfoCount()
    {
        return $this->count(self::ARRGOODSPRICEINFO);
    }

    /**
     * Sets value of 'nNoShowBuy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNoShowBuy($value)
    {
        return $this->set(self::NNOSHOWBUY, $value);
    }

    /**
     * Returns value of 'nNoShowBuy' property
     *
     * @return integer
     */
    public function getNNoShowBuy()
    {
        $value = $this->get(self::NNOSHOWBUY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNoShowBuy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNoShowBuy()
    {
        return $this->get(self::NNOSHOWBUY) !== null;
    }

    /**
     * Sets value of 'itemGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemGender($value)
    {
        return $this->set(self::ITEMGENDER, $value);
    }

    /**
     * Returns value of 'itemGender' property
     *
     * @return integer
     */
    public function getItemGender()
    {
        $value = $this->get(self::ITEMGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'itemGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemGender()
    {
        return $this->get(self::ITEMGENDER) !== null;
    }
}
}