<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HotCategory message
 */
class HotCategory extends \ProtobufMessage
{
    /* Field index constants */
    const NCATEGORY = 1;
    const SZCATEGORY = 2;
    const NSTARTTIME = 3;
    const NENDTIME = 4;
    const ARRGOODSLIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCATEGORY => array(
            'name' => 'nCategory',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCATEGORY => array(
            'name' => 'szCategory',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSLIST => array(
            'name' => 'arrGoodsList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HotGoods'
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
        $this->values[self::NCATEGORY] = null;
        $this->values[self::SZCATEGORY] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
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
     * Sets value of 'nCategory' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCategory($value)
    {
        return $this->set(self::NCATEGORY, $value);
    }

    /**
     * Returns value of 'nCategory' property
     *
     * @return integer
     */
    public function getNCategory()
    {
        $value = $this->get(self::NCATEGORY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCategory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCategory()
    {
        return $this->get(self::NCATEGORY) !== null;
    }

    /**
     * Sets value of 'szCategory' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzCategory($value)
    {
        return $this->set(self::SZCATEGORY, $value);
    }

    /**
     * Returns value of 'szCategory' property
     *
     * @return string
     */
    public function getSzCategory()
    {
        $value = $this->get(self::SZCATEGORY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szCategory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzCategory()
    {
        return $this->get(self::SZCATEGORY) !== null;
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
     * Appends value to 'arrGoodsList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HotGoods $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsList(\Xnhd\Core\Pb\Sdo\HotGoods $value)
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
     * @return \Xnhd\Core\Pb\Sdo\HotGoods[]
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
     * @return \Xnhd\Core\Pb\Sdo\HotGoods
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