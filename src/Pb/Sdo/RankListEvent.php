<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankListEvent message
 */
class RankListEvent extends \ProtobufMessage
{
    /* Field index constants */
    const RANKTYPE = 1;
    const ARRUNIT = 2;
    const NOPTION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RANKTYPE => array(
            'name' => 'rankType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRUNIT => array(
            'name' => 'arrUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RankUnit'
        ),
        self::NOPTION => array(
            'name' => 'nOption',
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
        $this->values[self::RANKTYPE] = null;
        $this->values[self::ARRUNIT] = array();
        $this->values[self::NOPTION] = null;
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
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }

    /**
     * Appends value to 'arrUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RankUnit $value Value to append
     *
     * @return null
     */
    public function appendArrUnit(\Xnhd\Core\Pb\Sdo\RankUnit $value)
    {
        return $this->append(self::ARRUNIT, $value);
    }

    /**
     * Clears 'arrUnit' list
     *
     * @return null
     */
    public function clearArrUnit()
    {
        return $this->clear(self::ARRUNIT);
    }

    /**
     * Returns 'arrUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RankUnit[]
     */
    public function getArrUnit()
    {
        return $this->get(self::ARRUNIT);
    }

    /**
     * Returns true if 'arrUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrUnit()
    {
        return count($this->get(self::ARRUNIT)) !== 0;
    }

    /**
     * Returns 'arrUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRUNIT));
    }

    /**
     * Returns element from 'arrUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RankUnit
     */
    public function getArrUnitAt($offset)
    {
        return $this->get(self::ARRUNIT, $offset);
    }

    /**
     * Returns count of 'arrUnit' list
     *
     * @return int
     */
    public function getArrUnitCount()
    {
        return $this->count(self::ARRUNIT);
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
}
}