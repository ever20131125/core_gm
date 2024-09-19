<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HotGoods message
 */
class HotGoods extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const ARRGOODSPRICEINFO = 2;
    const ARRITEMLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSPRICEINFO => array(
            'name' => 'arrGoodsPriceInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GoodsPriceInfo'
        ),
        self::ARRITEMLIST => array(
            'name' => 'arrItemList',
            'repeated' => true,
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
        $this->values[self::ARRGOODSPRICEINFO] = array();
        $this->values[self::ARRITEMLIST] = array();
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
     * Appends value to 'arrItemList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemList($value)
    {
        return $this->append(self::ARRITEMLIST, $value);
    }

    /**
     * Clears 'arrItemList' list
     *
     * @return null
     */
    public function clearArrItemList()
    {
        return $this->clear(self::ARRITEMLIST);
    }

    /**
     * Returns 'arrItemList' list
     *
     * @return integer[]
     */
    public function getArrItemList()
    {
        return $this->get(self::ARRITEMLIST);
    }

    /**
     * Returns true if 'arrItemList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemList()
    {
        return count($this->get(self::ARRITEMLIST)) !== 0;
    }

    /**
     * Returns 'arrItemList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMLIST));
    }

    /**
     * Returns element from 'arrItemList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemListAt($offset)
    {
        return $this->get(self::ARRITEMLIST, $offset);
    }

    /**
     * Returns count of 'arrItemList' list
     *
     * @return int
     */
    public function getArrItemListCount()
    {
        return $this->count(self::ARRITEMLIST);
    }
}
}