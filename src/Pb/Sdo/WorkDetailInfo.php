<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WorkDetailInfo message
 */
class WorkDetailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NWORKID = 1;
    const NPREWORKID = 2;
    const NMUSICID = 3;
    const NSTARS = 4;
    const ARRCOND = 5;
    const ARRVALUE = 6;
    const ARRPROCESS = 7;
    const ARRDESC = 8;
    const ARRSTATUS = 9;
    const ARRITEMBASE = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWORKID => array(
            'name' => 'nWorkID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPREWORKID => array(
            'name' => 'nPreWorkID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARS => array(
            'name' => 'nStars',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCOND => array(
            'name' => 'arrCond',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRVALUE => array(
            'name' => 'arrValue',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPROCESS => array(
            'name' => 'arrProcess',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDESC => array(
            'name' => 'arrDesc',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRSTATUS => array(
            'name' => 'arrStatus',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::NWORKID] = null;
        $this->values[self::NPREWORKID] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::NSTARS] = null;
        $this->values[self::ARRCOND] = array();
        $this->values[self::ARRVALUE] = array();
        $this->values[self::ARRPROCESS] = array();
        $this->values[self::ARRDESC] = array();
        $this->values[self::ARRSTATUS] = array();
        $this->values[self::ARRITEMBASE] = array();
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
     * Sets value of 'nWorkID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWorkID($value)
    {
        return $this->set(self::NWORKID, $value);
    }

    /**
     * Returns value of 'nWorkID' property
     *
     * @return integer
     */
    public function getNWorkID()
    {
        $value = $this->get(self::NWORKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWorkID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWorkID()
    {
        return $this->get(self::NWORKID) !== null;
    }

    /**
     * Sets value of 'nPreWorkID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPreWorkID($value)
    {
        return $this->set(self::NPREWORKID, $value);
    }

    /**
     * Returns value of 'nPreWorkID' property
     *
     * @return integer
     */
    public function getNPreWorkID()
    {
        $value = $this->get(self::NPREWORKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPreWorkID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPreWorkID()
    {
        return $this->get(self::NPREWORKID) !== null;
    }

    /**
     * Sets value of 'nMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicID($value)
    {
        return $this->set(self::NMUSICID, $value);
    }

    /**
     * Returns value of 'nMusicID' property
     *
     * @return integer
     */
    public function getNMusicID()
    {
        $value = $this->get(self::NMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicID()
    {
        return $this->get(self::NMUSICID) !== null;
    }

    /**
     * Sets value of 'nStars' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStars($value)
    {
        return $this->set(self::NSTARS, $value);
    }

    /**
     * Returns value of 'nStars' property
     *
     * @return integer
     */
    public function getNStars()
    {
        $value = $this->get(self::NSTARS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStars' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStars()
    {
        return $this->get(self::NSTARS) !== null;
    }

    /**
     * Appends value to 'arrCond' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCond($value)
    {
        return $this->append(self::ARRCOND, $value);
    }

    /**
     * Clears 'arrCond' list
     *
     * @return null
     */
    public function clearArrCond()
    {
        return $this->clear(self::ARRCOND);
    }

    /**
     * Returns 'arrCond' list
     *
     * @return integer[]
     */
    public function getArrCond()
    {
        return $this->get(self::ARRCOND);
    }

    /**
     * Returns true if 'arrCond' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCond()
    {
        return count($this->get(self::ARRCOND)) !== 0;
    }

    /**
     * Returns 'arrCond' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCondIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOND));
    }

    /**
     * Returns element from 'arrCond' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCondAt($offset)
    {
        return $this->get(self::ARRCOND, $offset);
    }

    /**
     * Returns count of 'arrCond' list
     *
     * @return int
     */
    public function getArrCondCount()
    {
        return $this->count(self::ARRCOND);
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
     * Appends value to 'arrProcess' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrProcess($value)
    {
        return $this->append(self::ARRPROCESS, $value);
    }

    /**
     * Clears 'arrProcess' list
     *
     * @return null
     */
    public function clearArrProcess()
    {
        return $this->clear(self::ARRPROCESS);
    }

    /**
     * Returns 'arrProcess' list
     *
     * @return integer[]
     */
    public function getArrProcess()
    {
        return $this->get(self::ARRPROCESS);
    }

    /**
     * Returns true if 'arrProcess' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrProcess()
    {
        return count($this->get(self::ARRPROCESS)) !== 0;
    }

    /**
     * Returns 'arrProcess' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrProcessIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPROCESS));
    }

    /**
     * Returns element from 'arrProcess' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrProcessAt($offset)
    {
        return $this->get(self::ARRPROCESS, $offset);
    }

    /**
     * Returns count of 'arrProcess' list
     *
     * @return int
     */
    public function getArrProcessCount()
    {
        return $this->count(self::ARRPROCESS);
    }

    /**
     * Appends value to 'arrDesc' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrDesc($value)
    {
        return $this->append(self::ARRDESC, $value);
    }

    /**
     * Clears 'arrDesc' list
     *
     * @return null
     */
    public function clearArrDesc()
    {
        return $this->clear(self::ARRDESC);
    }

    /**
     * Returns 'arrDesc' list
     *
     * @return string[]
     */
    public function getArrDesc()
    {
        return $this->get(self::ARRDESC);
    }

    /**
     * Returns true if 'arrDesc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDesc()
    {
        return count($this->get(self::ARRDESC)) !== 0;
    }

    /**
     * Returns 'arrDesc' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDescIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDESC));
    }

    /**
     * Returns element from 'arrDesc' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrDescAt($offset)
    {
        return $this->get(self::ARRDESC, $offset);
    }

    /**
     * Returns count of 'arrDesc' list
     *
     * @return int
     */
    public function getArrDescCount()
    {
        return $this->count(self::ARRDESC);
    }

    /**
     * Appends value to 'arrStatus' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrStatus($value)
    {
        return $this->append(self::ARRSTATUS, $value);
    }

    /**
     * Clears 'arrStatus' list
     *
     * @return null
     */
    public function clearArrStatus()
    {
        return $this->clear(self::ARRSTATUS);
    }

    /**
     * Returns 'arrStatus' list
     *
     * @return integer[]
     */
    public function getArrStatus()
    {
        return $this->get(self::ARRSTATUS);
    }

    /**
     * Returns true if 'arrStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStatus()
    {
        return count($this->get(self::ARRSTATUS)) !== 0;
    }

    /**
     * Returns 'arrStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTATUS));
    }

    /**
     * Returns element from 'arrStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrStatusAt($offset)
    {
        return $this->get(self::ARRSTATUS, $offset);
    }

    /**
     * Returns count of 'arrStatus' list
     *
     * @return int
     */
    public function getArrStatusCount()
    {
        return $this->count(self::ARRSTATUS);
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
}
}