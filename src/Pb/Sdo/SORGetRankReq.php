<?php
/**
 * Auto generated from sortserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SORGetRankReq message
 */
class SORGetRankReq extends \ProtobufMessage
{
    /* Field index constants */
    const SORTTYPE = 1;
    const NOPTION1 = 2;
    const NOPTION2 = 3;
    const NOPTION = 4;
    const STARTINDEX = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SORTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SortType::enmSortType_None,
            'name' => 'sortType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION1 => array(
            'name' => 'nOption1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION2 => array(
            'name' => 'nOption2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTINDEX => array(
            'name' => 'startIndex',
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
        $this->values[self::SORTTYPE] = self::$fields[self::SORTTYPE]['default'];
        $this->values[self::NOPTION1] = null;
        $this->values[self::NOPTION2] = null;
        $this->values[self::NOPTION] = null;
        $this->values[self::STARTINDEX] = null;
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
     * Sets value of 'sortType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSortType($value)
    {
        return $this->set(self::SORTTYPE, $value);
    }

    /**
     * Returns value of 'sortType' property
     *
     * @return integer
     */
    public function getSortType()
    {
        $value = $this->get(self::SORTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sortType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSortType()
    {
        return $this->get(self::SORTTYPE) !== null;
    }

    /**
     * Sets value of 'nOption1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption1($value)
    {
        return $this->set(self::NOPTION1, $value);
    }

    /**
     * Returns value of 'nOption1' property
     *
     * @return integer
     */
    public function getNOption1()
    {
        $value = $this->get(self::NOPTION1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption1()
    {
        return $this->get(self::NOPTION1) !== null;
    }

    /**
     * Sets value of 'nOption2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption2($value)
    {
        return $this->set(self::NOPTION2, $value);
    }

    /**
     * Returns value of 'nOption2' property
     *
     * @return integer
     */
    public function getNOption2()
    {
        $value = $this->get(self::NOPTION2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption2()
    {
        return $this->get(self::NOPTION2) !== null;
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
     * Sets value of 'startIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartIndex($value)
    {
        return $this->set(self::STARTINDEX, $value);
    }

    /**
     * Returns value of 'startIndex' property
     *
     * @return integer
     */
    public function getStartIndex()
    {
        $value = $this->get(self::STARTINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartIndex()
    {
        return $this->get(self::STARTINDEX) !== null;
    }
}
}