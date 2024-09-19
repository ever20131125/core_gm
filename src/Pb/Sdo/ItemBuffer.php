<?php
/**
 * Auto generated from complex.proto at 2022-09-01 09:36:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemBuffer message
 */
class ItemBuffer extends \ProtobufMessage
{
    /* Field index constants */
    const BUFFERTYPE = 1;
    const NITEMID = 2;
    const DURINGTYPE = 3;
    const NSTART = 4;
    const NDURING = 5;
    const NENDTIME = 6;
    const NVALUE1 = 7;
    const NVALUE2 = 8;
    const NVALUE3 = 9;
    const NVALUE4 = 10;
    const NVALUE5 = 11;
    const SZSTRING = 12;

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
        self::NVALUE1 => array(
            'name' => 'nValue1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE2 => array(
            'name' => 'nValue2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE3 => array(
            'name' => 'nValue3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE4 => array(
            'name' => 'nValue4',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE5 => array(
            'name' => 'nValue5',
            'required' => false,
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
        $this->values[self::NSTART] = null;
        $this->values[self::NDURING] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NVALUE1] = null;
        $this->values[self::NVALUE2] = null;
        $this->values[self::NVALUE3] = null;
        $this->values[self::NVALUE4] = null;
        $this->values[self::NVALUE5] = null;
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
     * Sets value of 'nValue1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValue1($value)
    {
        return $this->set(self::NVALUE1, $value);
    }

    /**
     * Returns value of 'nValue1' property
     *
     * @return integer
     */
    public function getNValue1()
    {
        $value = $this->get(self::NVALUE1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValue1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValue1()
    {
        return $this->get(self::NVALUE1) !== null;
    }

    /**
     * Sets value of 'nValue2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValue2($value)
    {
        return $this->set(self::NVALUE2, $value);
    }

    /**
     * Returns value of 'nValue2' property
     *
     * @return integer
     */
    public function getNValue2()
    {
        $value = $this->get(self::NVALUE2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValue2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValue2()
    {
        return $this->get(self::NVALUE2) !== null;
    }

    /**
     * Sets value of 'nValue3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValue3($value)
    {
        return $this->set(self::NVALUE3, $value);
    }

    /**
     * Returns value of 'nValue3' property
     *
     * @return integer
     */
    public function getNValue3()
    {
        $value = $this->get(self::NVALUE3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValue3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValue3()
    {
        return $this->get(self::NVALUE3) !== null;
    }

    /**
     * Sets value of 'nValue4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValue4($value)
    {
        return $this->set(self::NVALUE4, $value);
    }

    /**
     * Returns value of 'nValue4' property
     *
     * @return integer
     */
    public function getNValue4()
    {
        $value = $this->get(self::NVALUE4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValue4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValue4()
    {
        return $this->get(self::NVALUE4) !== null;
    }

    /**
     * Sets value of 'nValue5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValue5($value)
    {
        return $this->set(self::NVALUE5, $value);
    }

    /**
     * Returns value of 'nValue5' property
     *
     * @return integer
     */
    public function getNValue5()
    {
        $value = $this->get(self::NVALUE5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValue5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValue5()
    {
        return $this->get(self::NVALUE5) !== null;
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