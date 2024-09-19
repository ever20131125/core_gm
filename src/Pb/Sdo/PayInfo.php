<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PayInfo message
 */
class PayInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCE = 1;
    const ID = 2;
    const PRODUCTID = 3;
    const RMB = 4;
    const SORT = 5;
    const ICON = 6;
    const DESC = 7;
    const MONEY = 11;
    const PAYCOUNT = 12;
    const FIRSTPAY = 13;
    const NORMALPAY = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRODUCTID => array(
            'name' => 'productid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RMB => array(
            'name' => 'rmb',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SORT => array(
            'name' => 'sort',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MONEY => array(
            'name' => 'money',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PAYCOUNT => array(
            'name' => 'payCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIRSTPAY => array(
            'name' => 'firstPay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NORMALPAY => array(
            'name' => 'normalPay',
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
        $this->values[self::SOURCE] = null;
        $this->values[self::ID] = null;
        $this->values[self::PRODUCTID] = null;
        $this->values[self::RMB] = null;
        $this->values[self::SORT] = null;
        $this->values[self::ICON] = null;
        $this->values[self::DESC] = null;
        $this->values[self::MONEY] = null;
        $this->values[self::PAYCOUNT] = null;
        $this->values[self::FIRSTPAY] = null;
        $this->values[self::NORMALPAY] = null;
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'productid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProductid($value)
    {
        return $this->set(self::PRODUCTID, $value);
    }

    /**
     * Returns value of 'productid' property
     *
     * @return string
     */
    public function getProductid()
    {
        $value = $this->get(self::PRODUCTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'productid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProductid()
    {
        return $this->get(self::PRODUCTID) !== null;
    }

    /**
     * Sets value of 'rmb' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRmb($value)
    {
        return $this->set(self::RMB, $value);
    }

    /**
     * Returns value of 'rmb' property
     *
     * @return integer
     */
    public function getRmb()
    {
        $value = $this->get(self::RMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rmb' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRmb()
    {
        return $this->get(self::RMB) !== null;
    }

    /**
     * Sets value of 'sort' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSort($value)
    {
        return $this->set(self::SORT, $value);
    }

    /**
     * Returns value of 'sort' property
     *
     * @return integer
     */
    public function getSort()
    {
        $value = $this->get(self::SORT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sort' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSort()
    {
        return $this->get(self::SORT) !== null;
    }

    /**
     * Sets value of 'icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcon($value)
    {
        return $this->set(self::ICON, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return string
     */
    public function getIcon()
    {
        $value = $this->get(self::ICON);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'icon' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIcon()
    {
        return $this->get(self::ICON) !== null;
    }

    /**
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value)
    {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc()
    {
        $value = $this->get(self::DESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'desc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDesc()
    {
        return $this->get(self::DESC) !== null;
    }

    /**
     * Sets value of 'money' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMoney($value)
    {
        return $this->set(self::MONEY, $value);
    }

    /**
     * Returns value of 'money' property
     *
     * @return integer
     */
    public function getMoney()
    {
        $value = $this->get(self::MONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'money' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMoney()
    {
        return $this->get(self::MONEY) !== null;
    }

    /**
     * Sets value of 'payCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPayCount($value)
    {
        return $this->set(self::PAYCOUNT, $value);
    }

    /**
     * Returns value of 'payCount' property
     *
     * @return integer
     */
    public function getPayCount()
    {
        $value = $this->get(self::PAYCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'payCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayCount()
    {
        return $this->get(self::PAYCOUNT) !== null;
    }

    /**
     * Sets value of 'firstPay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFirstPay($value)
    {
        return $this->set(self::FIRSTPAY, $value);
    }

    /**
     * Returns value of 'firstPay' property
     *
     * @return integer
     */
    public function getFirstPay()
    {
        $value = $this->get(self::FIRSTPAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'firstPay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFirstPay()
    {
        return $this->get(self::FIRSTPAY) !== null;
    }

    /**
     * Sets value of 'normalPay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNormalPay($value)
    {
        return $this->set(self::NORMALPAY, $value);
    }

    /**
     * Returns value of 'normalPay' property
     *
     * @return integer
     */
    public function getNormalPay()
    {
        $value = $this->get(self::NORMALPAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'normalPay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNormalPay()
    {
        return $this->get(self::NORMALPAY) !== null;
    }
}
}