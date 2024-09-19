<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SortValueEvent message
 */
class SortValueEvent extends \ProtobufMessage
{
    /* Field index constants */
    const SORTTYPE = 1;
    const NOPTION = 2;
    const NROLEID = 3;
    const NVALUE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SORTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SortType::enmSortType_None,
            'name' => 'sortType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE => array(
            'name' => 'nValue',
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
        $this->values[self::NOPTION] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NVALUE] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
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
}
}