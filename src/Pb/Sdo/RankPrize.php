<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankPrize message
 */
class RankPrize extends \ProtobufMessage
{
    /* Field index constants */
    const NRANKSTART = 1;
    const NRANKEND = 2;
    const PRIZELIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NRANKSTART => array(
            'name' => 'nRankStart',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANKEND => array(
            'name' => 'nRankEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
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
        $this->values[self::NRANKSTART] = null;
        $this->values[self::NRANKEND] = null;
        $this->values[self::PRIZELIST] = array();
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
     * Sets value of 'nRankStart' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRankStart($value)
    {
        return $this->set(self::NRANKSTART, $value);
    }

    /**
     * Returns value of 'nRankStart' property
     *
     * @return integer
     */
    public function getNRankStart()
    {
        $value = $this->get(self::NRANKSTART);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRankStart' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRankStart()
    {
        return $this->get(self::NRANKSTART) !== null;
    }

    /**
     * Sets value of 'nRankEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRankEnd($value)
    {
        return $this->set(self::NRANKEND, $value);
    }

    /**
     * Returns value of 'nRankEnd' property
     *
     * @return integer
     */
    public function getNRankEnd()
    {
        $value = $this->get(self::NRANKEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRankEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRankEnd()
    {
        return $this->get(self::NRANKEND) !== null;
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
}
}