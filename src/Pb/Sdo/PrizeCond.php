<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PrizeCond message
 */
class PrizeCond extends \ProtobufMessage
{
    /* Field index constants */
    const NINDEX = 1;
    const NCOND = 2;
    const NVALUE = 3;
    const PRIZELIST = 4;
    const ACTSTATUS = 5;
    const SZOPTION = 6;
    const NOPTION = 7;
    const NPARAM = 8;
    const NPRIZETYPE = 10;
    const NPRIZEID = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NINDEX => array(
            'name' => 'nIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOND => array(
            'name' => 'nCond',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE => array(
            'name' => 'nValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::ACTSTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_UnReceive,
            'name' => 'actStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZOPTION => array(
            'name' => 'szOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPARAM => array(
            'name' => 'nParam',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZETYPE => array(
            'name' => 'nPrizeType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZEID => array(
            'name' => 'nPrizeID',
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
        $this->values[self::NINDEX] = null;
        $this->values[self::NCOND] = null;
        $this->values[self::NVALUE] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::ACTSTATUS] = self::$fields[self::ACTSTATUS]['default'];
        $this->values[self::SZOPTION] = null;
        $this->values[self::NOPTION] = null;
        $this->values[self::NPARAM] = null;
        $this->values[self::NPRIZETYPE] = null;
        $this->values[self::NPRIZEID] = null;
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
     * Sets value of 'nCond' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCond($value)
    {
        return $this->set(self::NCOND, $value);
    }

    /**
     * Returns value of 'nCond' property
     *
     * @return integer
     */
    public function getNCond()
    {
        $value = $this->get(self::NCOND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCond' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCond()
    {
        return $this->get(self::NCOND) !== null;
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
     * Sets value of 'actStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActStatus($value)
    {
        return $this->set(self::ACTSTATUS, $value);
    }

    /**
     * Returns value of 'actStatus' property
     *
     * @return integer
     */
    public function getActStatus()
    {
        $value = $this->get(self::ACTSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActStatus()
    {
        return $this->get(self::ACTSTATUS) !== null;
    }

    /**
     * Sets value of 'szOption' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOption($value)
    {
        return $this->set(self::SZOPTION, $value);
    }

    /**
     * Returns value of 'szOption' property
     *
     * @return string
     */
    public function getSzOption()
    {
        $value = $this->get(self::SZOPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOption()
    {
        return $this->get(self::SZOPTION) !== null;
    }

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
    }

    /**
     * Sets value of 'nParam' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNParam($value)
    {
        return $this->set(self::NPARAM, $value);
    }

    /**
     * Returns value of 'nParam' property
     *
     * @return integer
     */
    public function getNParam()
    {
        $value = $this->get(self::NPARAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nParam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNParam()
    {
        return $this->get(self::NPARAM) !== null;
    }

    /**
     * Sets value of 'nPrizeType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrizeType($value)
    {
        return $this->set(self::NPRIZETYPE, $value);
    }

    /**
     * Returns value of 'nPrizeType' property
     *
     * @return integer
     */
    public function getNPrizeType()
    {
        $value = $this->get(self::NPRIZETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrizeType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrizeType()
    {
        return $this->get(self::NPRIZETYPE) !== null;
    }

    /**
     * Sets value of 'nPrizeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrizeID($value)
    {
        return $this->set(self::NPRIZEID, $value);
    }

    /**
     * Returns value of 'nPrizeID' property
     *
     * @return integer
     */
    public function getNPrizeID()
    {
        $value = $this->get(self::NPRIZEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrizeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrizeID()
    {
        return $this->get(self::NPRIZEID) !== null;
    }
}
}