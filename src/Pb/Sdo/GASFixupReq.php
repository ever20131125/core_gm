<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASFixupReq message
 */
class GASFixupReq extends \ProtobufMessage
{
    /* Field index constants */
    const STROOMGENERALINFO = 1;
    const ARRPLAYERINFO = 2;
    const ARROBSERVERINFO = 3;
    const ARRNPCINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
        ),
        self::ARRPLAYERINFO => array(
            'name' => 'arrPlayerInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo'
        ),
        self::ARROBSERVERINFO => array(
            'name' => 'arrObserverInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo'
        ),
        self::ARRNPCINFO => array(
            'name' => 'arrNPCInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleInfo'
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
        $this->values[self::STROOMGENERALINFO] = null;
        $this->values[self::ARRPLAYERINFO] = array();
        $this->values[self::ARROBSERVERINFO] = array();
        $this->values[self::ARRNPCINFO] = array();
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
     * Appends value to 'arrPlayerInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerInfo(\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value)
    {
        return $this->append(self::ARRPLAYERINFO, $value);
    }

    /**
     * Clears 'arrPlayerInfo' list
     *
     * @return null
     */
    public function clearArrPlayerInfo()
    {
        return $this->clear(self::ARRPLAYERINFO);
    }

    /**
     * Returns 'arrPlayerInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo[]
     */
    public function getArrPlayerInfo()
    {
        return $this->get(self::ARRPLAYERINFO);
    }

    /**
     * Returns true if 'arrPlayerInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerInfo()
    {
        return count($this->get(self::ARRPLAYERINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERINFO));
    }

    /**
     * Returns element from 'arrPlayerInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo
     */
    public function getArrPlayerInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerInfo' list
     *
     * @return int
     */
    public function getArrPlayerInfoCount()
    {
        return $this->count(self::ARRPLAYERINFO);
    }

    /**
     * Appends value to 'arrObserverInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverInfo(\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value)
    {
        return $this->append(self::ARROBSERVERINFO, $value);
    }

    /**
     * Clears 'arrObserverInfo' list
     *
     * @return null
     */
    public function clearArrObserverInfo()
    {
        return $this->clear(self::ARROBSERVERINFO);
    }

    /**
     * Returns 'arrObserverInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo[]
     */
    public function getArrObserverInfo()
    {
        return $this->get(self::ARROBSERVERINFO);
    }

    /**
     * Returns true if 'arrObserverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverInfo()
    {
        return count($this->get(self::ARROBSERVERINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERINFO));
    }

    /**
     * Returns element from 'arrObserverInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo
     */
    public function getArrObserverInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverInfo' list
     *
     * @return int
     */
    public function getArrObserverInfoCount()
    {
        return $this->count(self::ARROBSERVERINFO);
    }

    /**
     * Appends value to 'arrNPCInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrNPCInfo(\Xnhd\Core\Pb\Sdo\RoleInfo $value)
    {
        return $this->append(self::ARRNPCINFO, $value);
    }

    /**
     * Clears 'arrNPCInfo' list
     *
     * @return null
     */
    public function clearArrNPCInfo()
    {
        return $this->clear(self::ARRNPCINFO);
    }

    /**
     * Returns 'arrNPCInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo[]
     */
    public function getArrNPCInfo()
    {
        return $this->get(self::ARRNPCINFO);
    }

    /**
     * Returns true if 'arrNPCInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNPCInfo()
    {
        return count($this->get(self::ARRNPCINFO)) !== 0;
    }

    /**
     * Returns 'arrNPCInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNPCInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNPCINFO));
    }

    /**
     * Returns element from 'arrNPCInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo
     */
    public function getArrNPCInfoAt($offset)
    {
        return $this->get(self::ARRNPCINFO, $offset);
    }

    /**
     * Returns count of 'arrNPCInfo' list
     *
     * @return int
     */
    public function getArrNPCInfoCount()
    {
        return $this->count(self::ARRNPCINFO);
    }
}
}