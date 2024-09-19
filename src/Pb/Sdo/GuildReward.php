<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildReward message
 */
class GuildReward extends \ProtobufMessage
{
    /* Field index constants */
    const INDEX = 1;
    const NPOPULARITY = 2;
    const PRIZELIST = 3;
    const RECEIVED = 4;
    const TYPE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOPULARITY => array(
            'name' => 'npopularity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::RECEIVED => array(
            'name' => 'received',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildHonourType::enmGuildHonourType_None,
            'name' => 'type',
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
        $this->values[self::INDEX] = null;
        $this->values[self::NPOPULARITY] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::RECEIVED] = null;
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
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
     * Sets value of 'index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return integer
     */
    public function getIndex()
    {
        $value = $this->get(self::INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIndex()
    {
        return $this->get(self::INDEX) !== null;
    }

    /**
     * Sets value of 'npopularity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNpopularity($value)
    {
        return $this->set(self::NPOPULARITY, $value);
    }

    /**
     * Returns value of 'npopularity' property
     *
     * @return integer
     */
    public function getNpopularity()
    {
        $value = $this->get(self::NPOPULARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'npopularity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNpopularity()
    {
        return $this->get(self::NPOPULARITY) !== null;
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

    /**
     * Sets value of 'received' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setReceived($value)
    {
        return $this->set(self::RECEIVED, $value);
    }

    /**
     * Returns value of 'received' property
     *
     * @return boolean
     */
    public function getReceived()
    {
        $value = $this->get(self::RECEIVED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'received' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReceived()
    {
        return $this->get(self::RECEIVED) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }
}
}