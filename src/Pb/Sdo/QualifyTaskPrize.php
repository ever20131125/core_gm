<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyTaskPrize message
 */
class QualifyTaskPrize extends \ProtobufMessage
{
    /* Field index constants */
    const NNO = 1;
    const NINDEX = 2;
    const NVALUE = 3;
    const NPROCESS = 4;
    const PRIZELIST = 5;
    const STATUS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NNO => array(
            'name' => 'nNo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NINDEX => array(
            'name' => 'nIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE => array(
            'name' => 'nValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROCESS => array(
            'name' => 'nProcess',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::STATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_UnReceive,
            'name' => 'status',
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
        $this->values[self::NNO] = null;
        $this->values[self::NINDEX] = null;
        $this->values[self::NVALUE] = null;
        $this->values[self::NPROCESS] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::STATUS] = self::$fields[self::STATUS]['default'];
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
     * Sets value of 'nNo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNo($value)
    {
        return $this->set(self::NNO, $value);
    }

    /**
     * Returns value of 'nNo' property
     *
     * @return integer
     */
    public function getNNo()
    {
        $value = $this->get(self::NNO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNo()
    {
        return $this->get(self::NNO) !== null;
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
     * Sets value of 'nValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValue($value)
    {
        return $this->set(self::NVALUE, $value);
    }

    /**
     * Returns value of 'nValue' property
     *
     * @return integer
     */
    public function getNValue()
    {
        $value = $this->get(self::NVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValue()
    {
        return $this->get(self::NVALUE) !== null;
    }

    /**
     * Sets value of 'nProcess' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNProcess($value)
    {
        return $this->set(self::NPROCESS, $value);
    }

    /**
     * Returns value of 'nProcess' property
     *
     * @return integer
     */
    public function getNProcess()
    {
        $value = $this->get(self::NPROCESS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nProcess' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNProcess()
    {
        return $this->get(self::NPROCESS) !== null;
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendPrizeList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::PRIZELIST, $value);
    }

    /**
     * Clears 'prizeList' list
     *
     * @return null
     */
    public function clearPrizeList()
    {
        return $this->clear(self::PRIZELIST);
    }

    /**
     * Returns 'prizeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getPrizeList()
    {
        return $this->get(self::PRIZELIST);
    }

    /**
     * Returns true if 'prizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeList()
    {
        return count($this->get(self::PRIZELIST)) !== 0;
    }

    /**
     * Returns 'prizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZELIST));
    }

    /**
     * Returns element from 'prizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getPrizeListAt($offset)
    {
        return $this->get(self::PRIZELIST, $offset);
    }

    /**
     * Returns count of 'prizeList' list
     *
     * @return int
     */
    public function getPrizeListCount()
    {
        return $this->count(self::PRIZELIST);
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }
}
}