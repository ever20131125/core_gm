<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LimitGiftInfo message
 */
class LimitGiftInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ITEMID = 2;
    const PRODUCTID = 3;
    const RMB = 4;
    const SHOWRMB = 5;
    const SORT = 6;
    const ICON = 7;
    const DESC = 8;
    const GIFTTYPE = 9;
    const MONEY = 10;
    const PAYCOUNT = 11;
    const PAYLIMIT = 12;
    const PAYDAYLIMIT = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMID => array(
            'name' => 'itemid',
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
        self::SHOWRMB => array(
            'name' => 'showrmb',
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
        self::GIFTTYPE => array(
            'name' => 'giftType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::PAYLIMIT => array(
            'name' => 'payLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PAYDAYLIMIT => array(
            'name' => 'payDayLimit',
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
        $this->values[self::ID] = null;
        $this->values[self::ITEMID] = null;
        $this->values[self::PRODUCTID] = null;
        $this->values[self::RMB] = null;
        $this->values[self::SHOWRMB] = null;
        $this->values[self::SORT] = null;
        $this->values[self::ICON] = null;
        $this->values[self::DESC] = null;
        $this->values[self::GIFTTYPE] = null;
        $this->values[self::MONEY] = null;
        $this->values[self::PAYCOUNT] = null;
        $this->values[self::PAYLIMIT] = null;
        $this->values[self::PAYDAYLIMIT] = null;
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
     * Sets value of 'itemid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemid($value)
    {
        return $this->set(self::ITEMID, $value);
    }

    /**
     * Returns value of 'itemid' property
     *
     * @return integer
     */
    public function getItemid()
    {
        $value = $this->get(self::ITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'itemid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemid()
    {
        return $this->get(self::ITEMID) !== null;
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
     * Sets value of 'showrmb' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShowrmb($value)
    {
        return $this->set(self::SHOWRMB, $value);
    }

    /**
     * Returns value of 'showrmb' property
     *
     * @return integer
     */
    public function getShowrmb()
    {
        $value = $this->get(self::SHOWRMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'showrmb' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShowrmb()
    {
        return $this->get(self::SHOWRMB) !== null;
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
     * Sets value of 'payLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPayLimit($value)
    {
        return $this->set(self::PAYLIMIT, $value);
    }

    /**
     * Returns value of 'payLimit' property
     *
     * @return integer
     */
    public function getPayLimit()
    {
        $value = $this->get(self::PAYLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'payLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayLimit()
    {
        return $this->get(self::PAYLIMIT) !== null;
    }

    /**
     * Sets value of 'payDayLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPayDayLimit($value)
    {
        return $this->set(self::PAYDAYLIMIT, $value);
    }

    /**
     * Returns value of 'payDayLimit' property
     *
     * @return integer
     */
    public function getPayDayLimit()
    {
        $value = $this->get(self::PAYDAYLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'payDayLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayDayLimit()
    {
        return $this->get(self::PAYDAYLIMIT) !== null;
    }
}
}