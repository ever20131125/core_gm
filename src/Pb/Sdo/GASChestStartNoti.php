<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASChestStartNoti message
 */
class GASChestStartNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRCHESTINFO = 1;
    const SZMSG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRCHESTINFO => array(
            'name' => 'arrChestInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ChestInfo'
        ),
        self::SZMSG => array(
            'name' => 'szMsg',
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
        $this->values[self::ARRCHESTINFO] = array();
        $this->values[self::SZMSG] = null;
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
     * Appends value to 'arrChestInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ChestInfo $value Value to append
     *
     * @return null
     */
    public function appendArrChestInfo(\Xnhd\Core\Pb\Sdo\ChestInfo $value)
    {
        return $this->append(self::ARRCHESTINFO, $value);
    }

    /**
     * Clears 'arrChestInfo' list
     *
     * @return null
     */
    public function clearArrChestInfo()
    {
        return $this->clear(self::ARRCHESTINFO);
    }

    /**
     * Returns 'arrChestInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChestInfo[]
     */
    public function getArrChestInfo()
    {
        return $this->get(self::ARRCHESTINFO);
    }

    /**
     * Returns true if 'arrChestInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrChestInfo()
    {
        return count($this->get(self::ARRCHESTINFO)) !== 0;
    }

    /**
     * Returns 'arrChestInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrChestInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCHESTINFO));
    }

    /**
     * Returns element from 'arrChestInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChestInfo
     */
    public function getArrChestInfoAt($offset)
    {
        return $this->get(self::ARRCHESTINFO, $offset);
    }

    /**
     * Returns count of 'arrChestInfo' list
     *
     * @return int
     */
    public function getArrChestInfoCount()
    {
        return $this->count(self::ARRCHESTINFO);
    }

    /**
     * Sets value of 'szMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMsg($value)
    {
        return $this->set(self::SZMSG, $value);
    }

    /**
     * Returns value of 'szMsg' property
     *
     * @return string
     */
    public function getSzMsg()
    {
        $value = $this->get(self::SZMSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMsg()
    {
        return $this->get(self::SZMSG) !== null;
    }
}
}