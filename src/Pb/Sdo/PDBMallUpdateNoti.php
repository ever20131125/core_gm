<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBMallUpdateNoti message
 */
class PDBMallUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const MALLTYPE = 2;
    const NREFRESHTIMES = 3;
    const GOODSLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::NREFRESHTIMES => array(
            'name' => 'nRefreshTimes',
            'required' => false,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::MALLTYPE] = self::$fields[self::MALLTYPE]['default'];
        $this->values[self::NREFRESHTIMES] = null;
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
     * Sets value of 'nRefreshTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRefreshTimes($value)
    {
        return $this->set(self::NREFRESHTIMES, $value);
    }

    /**
     * Returns value of 'nRefreshTimes' property
     *
     * @return integer
     */
    public function getNRefreshTimes()
    {
        $value = $this->get(self::NREFRESHTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRefreshTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRefreshTimes()
    {
        return $this->get(self::NREFRESHTIMES) !== null;
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