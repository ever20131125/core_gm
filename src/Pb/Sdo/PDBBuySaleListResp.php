<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBBuySaleListResp message
 */
class PDBBuySaleListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const MALLTYPE = 3;
    const ARRGOODSINDEX = 4;
    const GOODSLIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MALLTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MallType::enmMallType_Normal,
            'name' => 'mallType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSINDEX => array(
            'name' => 'arrGoodsIndex',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GOODSLIST => array(
            'name' => 'goodsList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GoodsPriceInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::MALLTYPE] = self::$fields[self::MALLTYPE]['default'];
        $this->values[self::ARRGOODSINDEX] = array();
        $this->values[self::GOODSLIST] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'mallType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMallType($value)
    {
        return $this->set(self::MALLTYPE, $value);
    }

    /**
     * Returns value of 'mallType' property
     *
     * @return integer
     */
    public function getMallType()
    {
        $value = $this->get(self::MALLTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mallType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMallType()
    {
        return $this->get(self::MALLTYPE) !== null;
    }

    /**
     * Appends value to 'arrGoodsIndex' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsIndex($value)
    {
        return $this->append(self::ARRGOODSINDEX, $value);
    }

    /**
     * Clears 'arrGoodsIndex' list
     *
     * @return null
     */
    public function clearArrGoodsIndex()
    {
        return $this->clear(self::ARRGOODSINDEX);
    }

    /**
     * Returns 'arrGoodsIndex' list
     *
     * @return integer[]
     */
    public function getArrGoodsIndex()
    {
        return $this->get(self::ARRGOODSINDEX);
    }

    /**
     * Returns true if 'arrGoodsIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoodsIndex()
    {
        return count($this->get(self::ARRGOODSINDEX)) !== 0;
    }

    /**
     * Returns 'arrGoodsIndex' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoodsIndexIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOODSINDEX));
    }

    /**
     * Returns element from 'arrGoodsIndex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGoodsIndexAt($offset)
    {
        return $this->get(self::ARRGOODSINDEX, $offset);
    }

    /**
     * Returns count of 'arrGoodsIndex' list
     *
     * @return int
     */
    public function getArrGoodsIndexCount()
    {
        return $this->count(self::ARRGOODSINDEX);
    }

    /**
     * Appends value to 'goodsList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GoodsPriceInfo $value Value to append
     *
     * @return null
     */
    public function appendGoodsList(\Xnhd\Core\Pb\Sdo\GoodsPriceInfo $value)
    {
        return $this->append(self::GOODSLIST, $value);
    }

    /**
     * Clears 'goodsList' list
     *
     * @return null
     */
    public function clearGoodsList()
    {
        return $this->clear(self::GOODSLIST);
    }

    /**
     * Returns 'goodsList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GoodsPriceInfo[]
     */
    public function getGoodsList()
    {
        return $this->get(self::GOODSLIST);
    }

    /**
     * Returns true if 'goodsList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGoodsList()
    {
        return count($this->get(self::GOODSLIST)) !== 0;
    }

    /**
     * Returns 'goodsList' iterator
     *
     * @return \ArrayIterator
     */
    public function getGoodsListIterator()
    {
        return new \ArrayIterator($this->get(self::GOODSLIST));
    }

    /**
     * Returns element from 'goodsList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GoodsPriceInfo
     */
    public function getGoodsListAt($offset)
    {
        return $this->get(self::GOODSLIST, $offset);
    }

    /**
     * Returns count of 'goodsList' list
     *
     * @return int
     */
    public function getGoodsListCount()
    {
        return $this->count(self::GOODSLIST);
    }
}
}