<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASMatchEndNoti message
 */
class GASMatchEndNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NMATCHID = 1;
    const STROOMGENERALINFO = 2;
    const NSCENEID = 3;
    const NMUSICID = 4;
    const STMATCHENDINFO = 5;
    const ARRFLOPITEM = 6;
    const NCHANCE = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NMATCHID => array(
            'name' => 'nMatchID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
        ),
        self::NSCENEID => array(
            'name' => 'nSceneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STMATCHENDINFO => array(
            'name' => 'stMatchEndInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchEndInfo'
        ),
        self::ARRFLOPITEM => array(
            'name' => 'arrFlopItem',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NCHANCE => array(
            'name' => 'nChance',
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
        $this->values[self::NMATCHID] = null;
        $this->values[self::STROOMGENERALINFO] = null;
        $this->values[self::NSCENEID] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::STMATCHENDINFO] = null;
        $this->values[self::ARRFLOPITEM] = array();
        $this->values[self::NCHANCE] = null;
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
     * Sets value of 'nMatchID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchID($value)
    {
        return $this->set(self::NMATCHID, $value);
    }

    /**
     * Returns value of 'nMatchID' property
     *
     * @return integer
     */
    public function getNMatchID()
    {
        $value = $this->get(self::NMATCHID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchID()
    {
        return $this->get(self::NMATCHID) !== null;
    }

    /**
     * Sets value of 'stRoomGeneralInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value=null)
    {
        return $this->set(self::STROOMGENERALINFO, $value);
    }

    /**
     * Returns value of 'stRoomGeneralInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomGeneralInfo
     */
    public function getStRoomGeneralInfo()
    {
        return $this->get(self::STROOMGENERALINFO);
    }

    /**
     * Returns true if 'stRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoomGeneralInfo()
    {
        return $this->get(self::STROOMGENERALINFO) !== null;
    }

    /**
     * Sets value of 'nSceneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSceneID($value)
    {
        return $this->set(self::NSCENEID, $value);
    }

    /**
     * Returns value of 'nSceneID' property
     *
     * @return integer
     */
    public function getNSceneID()
    {
        $value = $this->get(self::NSCENEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSceneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSceneID()
    {
        return $this->get(self::NSCENEID) !== null;
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
     * Sets value of 'stMatchEndInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchEndInfo $value Property value
     *
     * @return null
     */
    public function setStMatchEndInfo(\Xnhd\Core\Pb\Sdo\MatchEndInfo $value=null)
    {
        return $this->set(self::STMATCHENDINFO, $value);
    }

    /**
     * Returns value of 'stMatchEndInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchEndInfo
     */
    public function getStMatchEndInfo()
    {
        return $this->get(self::STMATCHENDINFO);
    }

    /**
     * Returns true if 'stMatchEndInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStMatchEndInfo()
    {
        return $this->get(self::STMATCHENDINFO) !== null;
    }

    /**
     * Appends value to 'arrFlopItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrFlopItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRFLOPITEM, $value);
    }

    /**
     * Clears 'arrFlopItem' list
     *
     * @return null
     */
    public function clearArrFlopItem()
    {
        return $this->clear(self::ARRFLOPITEM);
    }

    /**
     * Returns 'arrFlopItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrFlopItem()
    {
        return $this->get(self::ARRFLOPITEM);
    }

    /**
     * Returns true if 'arrFlopItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFlopItem()
    {
        return count($this->get(self::ARRFLOPITEM)) !== 0;
    }

    /**
     * Returns 'arrFlopItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFlopItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFLOPITEM));
    }

    /**
     * Returns element from 'arrFlopItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrFlopItemAt($offset)
    {
        return $this->get(self::ARRFLOPITEM, $offset);
    }

    /**
     * Returns count of 'arrFlopItem' list
     *
     * @return int
     */
    public function getArrFlopItemCount()
    {
        return $this->count(self::ARRFLOPITEM);
    }

    /**
     * Sets value of 'nChance' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChance($value)
    {
        return $this->set(self::NCHANCE, $value);
    }

    /**
     * Returns value of 'nChance' property
     *
     * @return integer
     */
    public function getNChance()
    {
        $value = $this->get(self::NCHANCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChance' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChance()
    {
        return $this->get(self::NCHANCE) !== null;
    }
}
}