<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WorkPrize message
 */
class WorkPrize extends \ProtobufMessage
{
    /* Field index constants */
    const NALBUMID = 1;
    const NPRIZEID = 2;
    const ARRITEMBASE = 3;
    const NCOND = 4;
    const NVALUE = 5;
    const STATUS = 6;
    const SZDESC = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NALBUMID => array(
            'name' => 'nAlbumID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZEID => array(
            'name' => 'nPrizeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        self::STATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_NULL,
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZDESC => array(
            'name' => 'szDesc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NALBUMID] = null;
        $this->values[self::NPRIZEID] = null;
        $this->values[self::ARRITEMBASE] = array();
        $this->values[self::NCOND] = null;
        $this->values[self::NVALUE] = null;
        $this->values[self::STATUS] = self::$fields[self::STATUS]['default'];
        $this->values[self::SZDESC] = null;
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
     * Sets value of 'nAlbumID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAlbumID($value)
    {
        return $this->set(self::NALBUMID, $value);
    }

    /**
     * Returns value of 'nAlbumID' property
     *
     * @return integer
     */
    public function getNAlbumID()
    {
        $value = $this->get(self::NALBUMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAlbumID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAlbumID()
    {
        return $this->get(self::NALBUMID) !== null;
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

    /**
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
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

    /**
     * Sets value of 'szDesc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzDesc($value)
    {
        return $this->set(self::SZDESC, $value);
    }

    /**
     * Returns value of 'szDesc' property
     *
     * @return string
     */
    public function getSzDesc()
    {
        $value = $this->get(self::SZDESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szDesc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzDesc()
    {
        return $this->get(self::SZDESC) !== null;
    }
}
}