<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QAQuest message
 */
class QAQuest extends \ProtobufMessage
{
    /* Field index constants */
    const NID = 1;
    const NTYPE = 2;
    const SZTITLE = 3;
    const ARROPTION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTYPE => array(
            'name' => 'nType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZTITLE => array(
            'name' => 'szTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
            'repeated' => true,
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
        $this->values[self::NTYPE] = null;
        $this->values[self::SZTITLE] = null;
        $this->values[self::ARROPTION] = array();
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
     * Sets value of 'nType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return integer
     */
    public function getNType()
    {
        $value = $this->get(self::NTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return $this->get(self::NTYPE) !== null;
    }

    /**
     * Sets value of 'szTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTitle($value)
    {
        return $this->set(self::SZTITLE, $value);
    }

    /**
     * Returns value of 'szTitle' property
     *
     * @return string
     */
    public function getSzTitle()
    {
        $value = $this->get(self::SZTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTitle()
    {
        return $this->get(self::SZTITLE) !== null;
    }

    /**
     * Appends value to 'arrOption' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrOption($value)
    {
        return $this->append(self::ARROPTION, $value);
    }

    /**
     * Clears 'arrOption' list
     *
     * @return null
     */
    public function clearArrOption()
    {
        return $this->clear(self::ARROPTION);
    }

    /**
     * Returns 'arrOption' list
     *
     * @return string[]
     */
    public function getArrOption()
    {
        return $this->get(self::ARROPTION);
    }

    /**
     * Returns true if 'arrOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption()
    {
        return count($this->get(self::ARROPTION)) !== 0;
    }

    /**
     * Returns 'arrOption' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOptionIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION));
    }

    /**
     * Returns element from 'arrOption' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrOptionAt($offset)
    {
        return $this->get(self::ARROPTION, $offset);
    }

    /**
     * Returns count of 'arrOption' list
     *
     * @return int
     */
    public function getArrOptionCount()
    {
        return $this->count(self::ARROPTION);
    }
}
}