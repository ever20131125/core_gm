<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QAAnswer message
 */
class QAAnswer extends \ProtobufMessage
{
    /* Field index constants */
    const NID = 1;
    const ARRSELECT = 2;
    const SZCONTEXT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSELECT => array(
            'name' => 'arrSelect',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCONTEXT => array(
            'name' => 'szContext',
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
        $this->values[self::NID] = null;
        $this->values[self::ARRSELECT] = array();
        $this->values[self::SZCONTEXT] = null;
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
     * Sets value of 'nID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNID($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nID' property
     *
     * @return integer
     */
    public function getNID()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNID()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Appends value to 'arrSelect' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrSelect($value)
    {
        return $this->append(self::ARRSELECT, $value);
    }

    /**
     * Clears 'arrSelect' list
     *
     * @return null
     */
    public function clearArrSelect()
    {
        return $this->clear(self::ARRSELECT);
    }

    /**
     * Returns 'arrSelect' list
     *
     * @return integer[]
     */
    public function getArrSelect()
    {
        return $this->get(self::ARRSELECT);
    }

    /**
     * Returns true if 'arrSelect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSelect()
    {
        return count($this->get(self::ARRSELECT)) !== 0;
    }

    /**
     * Returns 'arrSelect' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSelectIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSELECT));
    }

    /**
     * Returns element from 'arrSelect' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrSelectAt($offset)
    {
        return $this->get(self::ARRSELECT, $offset);
    }

    /**
     * Returns count of 'arrSelect' list
     *
     * @return int
     */
    public function getArrSelectCount()
    {
        return $this->count(self::ARRSELECT);
    }

    /**
     * Sets value of 'szContext' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzContext($value)
    {
        return $this->set(self::SZCONTEXT, $value);
    }

    /**
     * Returns value of 'szContext' property
     *
     * @return string
     */
    public function getSzContext()
    {
        $value = $this->get(self::SZCONTEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szContext' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzContext()
    {
        return $this->get(self::SZCONTEXT) !== null;
    }
}
}