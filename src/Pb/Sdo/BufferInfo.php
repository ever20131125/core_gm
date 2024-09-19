<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BufferInfo message
 */
class BufferInfo extends \ProtobufMessage
{
    /* Field index constants */
    const BUFFERTYPE = 1;
    const NITEMID = 2;
    const DURINGTYPE = 3;
    const SZNAME = 4;
    const NSTART = 5;
    const NDURING = 6;
    const NENDTIME = 7;
    const NTIMESEP = 8;
    const STBONUS = 9;
    const ARRVALUE = 10;
    const SZSTRING = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BUFFERTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BufferType::enmBufType_None,
            'name' => 'bufferType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DURINGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BufDuringType::enmBufDuring_Time,
            'name' => 'duringType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZNAME => array(
            'name' => 'szName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NSTART => array(
            'name' => 'nStart',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDURING => array(
            'name' => 'nDuring',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMESEP => array(
            'name' => 'nTimeSep',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STBONUS => array(
            'name' => 'stBonus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::ARRVALUE => array(
            'name' => 'arrValue',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZSTRING => array(
            'name' => 'szString',
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
        $this->values[self::BUFFERTYPE] = self::$fields[self::BUFFERTYPE]['default'];
        $this->values[self::NITEMID] = null;
        $this->values[self::DURINGTYPE] = self::$fields[self::DURINGTYPE]['default'];
        $this->values[self::SZNAME] = null;
        $this->values[self::NSTART] = null;
        $this->values[self::NDURING] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NTIMESEP] = null;
        $this->values[self::STBONUS] = array();
        $this->values[self::ARRVALUE] = array();
        $this->values[self::SZSTRING] = null;
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
     * Sets value of 'bufferType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBufferType($value)
    {
        return $this->set(self::BUFFERTYPE, $value);
    }

    /**
     * Returns value of 'bufferType' property
     *
     * @return integer
     */
    public function getBufferType()
    {
        $value = $this->get(self::BUFFERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bufferType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBufferType()
    {
        return $this->get(self::BUFFERTYPE) !== null;
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
     * Sets value of 'duringType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDuringType($value)
    {
        return $this->set(self::DURINGTYPE, $value);
    }

    /**
     * Returns value of 'duringType' property
     *
     * @return integer
     */
    public function getDuringType()
    {
        $value = $this->get(self::DURINGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'duringType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDuringType()
    {
        return $this->get(self::DURINGTYPE) !== null;
    }

    /**
     * Sets value of 'szName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzName($value)
    {
        return $this->set(self::SZNAME, $value);
    }

    /**
     * Returns value of 'szName' property
     *
     * @return string
     */
    public function getSzName()
    {
        $value = $this->get(self::SZNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzName()
    {
        return $this->get(self::SZNAME) !== null;
    }

    /**
     * Sets value of 'nStart' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStart($value)
    {
        return $this->set(self::NSTART, $value);
    }

    /**
     * Returns value of 'nStart' property
     *
     * @return integer
     */
    public function getNStart()
    {
        $value = $this->get(self::NSTART);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStart' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStart()
    {
        return $this->get(self::NSTART) !== null;
    }

    /**
     * Sets value of 'nDuring' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDuring($value)
    {
        return $this->set(self::NDURING, $value);
    }

    /**
     * Returns value of 'nDuring' property
     *
     * @return integer
     */
    public function getNDuring()
    {
        $value = $this->get(self::NDURING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDuring' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDuring()
    {
        return $this->get(self::NDURING) !== null;
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
     * Sets value of 'nTimeSep' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeSep($value)
    {
        return $this->set(self::NTIMESEP, $value);
    }

    /**
     * Returns value of 'nTimeSep' property
     *
     * @return integer
     */
    public function getNTimeSep()
    {
        $value = $this->get(self::NTIMESEP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeSep' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeSep()
    {
        return $this->get(self::NTIMESEP) !== null;
    }

    /**
     * Appends value to 'stBonus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendStBonus(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::STBONUS, $value);
    }

    /**
     * Clears 'stBonus' list
     *
     * @return null
     */
    public function clearStBonus()
    {
        return $this->clear(self::STBONUS);
    }

    /**
     * Returns 'stBonus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getStBonus()
    {
        return $this->get(self::STBONUS);
    }

    /**
     * Returns true if 'stBonus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBonus()
    {
        return count($this->get(self::STBONUS)) !== 0;
    }

    /**
     * Returns 'stBonus' iterator
     *
     * @return \ArrayIterator
     */
    public function getStBonusIterator()
    {
        return new \ArrayIterator($this->get(self::STBONUS));
    }

    /**
     * Returns element from 'stBonus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStBonusAt($offset)
    {
        return $this->get(self::STBONUS, $offset);
    }

    /**
     * Returns count of 'stBonus' list
     *
     * @return int
     */
    public function getStBonusCount()
    {
        return $this->count(self::STBONUS);
    }

    /**
     * Appends value to 'arrValue' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrValue($value)
    {
        return $this->append(self::ARRVALUE, $value);
    }

    /**
     * Clears 'arrValue' list
     *
     * @return null
     */
    public function clearArrValue()
    {
        return $this->clear(self::ARRVALUE);
    }

    /**
     * Returns 'arrValue' list
     *
     * @return integer[]
     */
    public function getArrValue()
    {
        return $this->get(self::ARRVALUE);
    }

    /**
     * Returns true if 'arrValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrValue()
    {
        return count($this->get(self::ARRVALUE)) !== 0;
    }

    /**
     * Returns 'arrValue' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrValueIterator()
    {
        return new \ArrayIterator($this->get(self::ARRVALUE));
    }

    /**
     * Returns element from 'arrValue' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrValueAt($offset)
    {
        return $this->get(self::ARRVALUE, $offset);
    }

    /**
     * Returns count of 'arrValue' list
     *
     * @return int
     */
    public function getArrValueCount()
    {
        return $this->count(self::ARRVALUE);
    }

    /**
     * Sets value of 'szString' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzString($value)
    {
        return $this->set(self::SZSTRING, $value);
    }

    /**
     * Returns value of 'szString' property
     *
     * @return string
     */
    public function getSzString()
    {
        $value = $this->get(self::SZSTRING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szString' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzString()
    {
        return $this->get(self::SZSTRING) !== null;
    }
}
}