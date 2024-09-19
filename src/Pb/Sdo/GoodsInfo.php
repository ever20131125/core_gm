<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GoodsInfo message
 */
class GoodsInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const ARRGOODSPRICEINFO = 2;
    const NCROWN = 3;
    const NSTARTTIME = 4;
    const NENDTIME = 5;
    const NSORT = 6;

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
        self::NCROWN => array(
            'name' => 'nCrown',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::NSORT => array(
            'name' => 'nSort',
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
        $this->values[self::ARRGOODSPRICEINFO] = array();
        $this->values[self::NCROWN] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NSORT] = null;
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
     * Sets value of 'nCrown' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCrown($value)
    {
        return $this->set(self::NCROWN, $value);
    }

    /**
     * Returns value of 'nCrown' property
     *
     * @return integer
     */
    public function getNCrown()
    {
        $value = $this->get(self::NCROWN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCrown' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCrown()
    {
        return $this->get(self::NCROWN) !== null;
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
     * Sets value of 'nSort' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSort($value)
    {
        return $this->set(self::NSORT, $value);
    }

    /**
     * Returns value of 'nSort' property
     *
     * @return integer
     */
    public function getNSort()
    {
        $value = $this->get(self::NSORT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSort' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSort()
    {
        return $this->get(self::NSORT) !== null;
    }
}
}