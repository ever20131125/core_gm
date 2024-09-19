<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CategoryInfo message
 */
class CategoryInfo extends \ProtobufMessage
{
    /* Field index constants */
    const CATEGORY = 1;
    const ARRGOODSLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CATEGORY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GoodsCategory::enmGoodsCategory_Cloth,
            'name' => 'category',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSLIST => array(
            'name' => 'arrGoodsList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GoodsInfo'
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
        $this->values[self::CATEGORY] = self::$fields[self::CATEGORY]['default'];
        $this->values[self::ARRGOODSLIST] = array();
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
     * Sets value of 'category' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCategory($value)
    {
        return $this->set(self::CATEGORY, $value);
    }

    /**
     * Returns value of 'category' property
     *
     * @return integer
     */
    public function getCategory()
    {
        $value = $this->get(self::CATEGORY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'category' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCategory()
    {
        return $this->get(self::CATEGORY) !== null;
    }

    /**
     * Appends value to 'arrGoodsList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GoodsInfo $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsList(\Xnhd\Core\Pb\Sdo\GoodsInfo $value)
    {
        return $this->append(self::ARRGOODSLIST, $value);
    }

    /**
     * Clears 'arrGoodsList' list
     *
     * @return null
     */
    public function clearArrGoodsList()
    {
        return $this->clear(self::ARRGOODSLIST);
    }

    /**
     * Returns 'arrGoodsList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GoodsInfo[]
     */
    public function getArrGoodsList()
    {
        return $this->get(self::ARRGOODSLIST);
    }

    /**
     * Returns true if 'arrGoodsList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoodsList()
    {
        return count($this->get(self::ARRGOODSLIST)) !== 0;
    }

    /**
     * Returns 'arrGoodsList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoodsListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOODSLIST));
    }

    /**
     * Returns element from 'arrGoodsList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GoodsInfo
     */
    public function getArrGoodsListAt($offset)
    {
        return $this->get(self::ARRGOODSLIST, $offset);
    }

    /**
     * Returns count of 'arrGoodsList' list
     *
     * @return int
     */
    public function getArrGoodsListCount()
    {
        return $this->count(self::ARRGOODSLIST);
    }
}
}