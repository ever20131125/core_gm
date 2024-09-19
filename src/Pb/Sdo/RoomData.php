<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomData message
 */
class RoomData extends \ProtobufMessage
{
    /* Field index constants */
    const STROOMGENERALINFO = 1;
    const ARRPLAYERID = 2;
    const ARRPLAYERROOMGENERALINFO = 3;
    const ARROBSERVERID = 4;
    const ARROBSERVERROOMGENERALINFO = 5;
    const ARRLOCKPLAYERPLACE = 6;
    const ARRLOCKOBSERVERPLACE = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
        ),
        self::ARRPLAYERID => array(
            'name' => 'arrPlayerID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPLAYERROOMGENERALINFO => array(
            'name' => 'arrPlayerRoomGeneralInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo'
        ),
        self::ARROBSERVERID => array(
            'name' => 'arrObserverID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROBSERVERROOMGENERALINFO => array(
            'name' => 'arrObserverRoomGeneralInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo'
        ),
        self::ARRLOCKPLAYERPLACE => array(
            'name' => 'arrLockPlayerPlace',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRLOCKOBSERVERPLACE => array(
            'name' => 'arrLockObserverPlace',
            'repeated' => true,
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
        $this->values[self::STROOMGENERALINFO] = null;
        $this->values[self::ARRPLAYERID] = array();
        $this->values[self::ARRPLAYERROOMGENERALINFO] = array();
        $this->values[self::ARROBSERVERID] = array();
        $this->values[self::ARROBSERVERROOMGENERALINFO] = array();
        $this->values[self::ARRLOCKPLAYERPLACE] = array();
        $this->values[self::ARRLOCKOBSERVERPLACE] = array();
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
     * Appends value to 'arrPlayerID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerID($value)
    {
        return $this->append(self::ARRPLAYERID, $value);
    }

    /**
     * Clears 'arrPlayerID' list
     *
     * @return null
     */
    public function clearArrPlayerID()
    {
        return $this->clear(self::ARRPLAYERID);
    }

    /**
     * Returns 'arrPlayerID' list
     *
     * @return integer[]
     */
    public function getArrPlayerID()
    {
        return $this->get(self::ARRPLAYERID);
    }

    /**
     * Returns true if 'arrPlayerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerID()
    {
        return count($this->get(self::ARRPLAYERID)) !== 0;
    }

    /**
     * Returns 'arrPlayerID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERID));
    }

    /**
     * Returns element from 'arrPlayerID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPlayerIDAt($offset)
    {
        return $this->get(self::ARRPLAYERID, $offset);
    }

    /**
     * Returns count of 'arrPlayerID' list
     *
     * @return int
     */
    public function getArrPlayerIDCount()
    {
        return $this->count(self::ARRPLAYERID);
    }

    /**
     * Appends value to 'arrPlayerRoomGeneralInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value)
    {
        return $this->append(self::ARRPLAYERROOMGENERALINFO, $value);
    }

    /**
     * Clears 'arrPlayerRoomGeneralInfo' list
     *
     * @return null
     */
    public function clearArrPlayerRoomGeneralInfo()
    {
        return $this->clear(self::ARRPLAYERROOMGENERALINFO);
    }

    /**
     * Returns 'arrPlayerRoomGeneralInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo[]
     */
    public function getArrPlayerRoomGeneralInfo()
    {
        return $this->get(self::ARRPLAYERROOMGENERALINFO);
    }

    /**
     * Returns true if 'arrPlayerRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerRoomGeneralInfo()
    {
        return count($this->get(self::ARRPLAYERROOMGENERALINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerRoomGeneralInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerRoomGeneralInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERROOMGENERALINFO));
    }

    /**
     * Returns element from 'arrPlayerRoomGeneralInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo
     */
    public function getArrPlayerRoomGeneralInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERROOMGENERALINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerRoomGeneralInfo' list
     *
     * @return int
     */
    public function getArrPlayerRoomGeneralInfoCount()
    {
        return $this->count(self::ARRPLAYERROOMGENERALINFO);
    }

    /**
     * Appends value to 'arrObserverID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrObserverID($value)
    {
        return $this->append(self::ARROBSERVERID, $value);
    }

    /**
     * Clears 'arrObserverID' list
     *
     * @return null
     */
    public function clearArrObserverID()
    {
        return $this->clear(self::ARROBSERVERID);
    }

    /**
     * Returns 'arrObserverID' list
     *
     * @return integer[]
     */
    public function getArrObserverID()
    {
        return $this->get(self::ARROBSERVERID);
    }

    /**
     * Returns true if 'arrObserverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverID()
    {
        return count($this->get(self::ARROBSERVERID)) !== 0;
    }

    /**
     * Returns 'arrObserverID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERID));
    }

    /**
     * Returns element from 'arrObserverID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrObserverIDAt($offset)
    {
        return $this->get(self::ARROBSERVERID, $offset);
    }

    /**
     * Returns count of 'arrObserverID' list
     *
     * @return int
     */
    public function getArrObserverIDCount()
    {
        return $this->count(self::ARROBSERVERID);
    }

    /**
     * Appends value to 'arrObserverRoomGeneralInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value)
    {
        return $this->append(self::ARROBSERVERROOMGENERALINFO, $value);
    }

    /**
     * Clears 'arrObserverRoomGeneralInfo' list
     *
     * @return null
     */
    public function clearArrObserverRoomGeneralInfo()
    {
        return $this->clear(self::ARROBSERVERROOMGENERALINFO);
    }

    /**
     * Returns 'arrObserverRoomGeneralInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo[]
     */
    public function getArrObserverRoomGeneralInfo()
    {
        return $this->get(self::ARROBSERVERROOMGENERALINFO);
    }

    /**
     * Returns true if 'arrObserverRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverRoomGeneralInfo()
    {
        return count($this->get(self::ARROBSERVERROOMGENERALINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverRoomGeneralInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverRoomGeneralInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERROOMGENERALINFO));
    }

    /**
     * Returns element from 'arrObserverRoomGeneralInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo
     */
    public function getArrObserverRoomGeneralInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERROOMGENERALINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverRoomGeneralInfo' list
     *
     * @return int
     */
    public function getArrObserverRoomGeneralInfoCount()
    {
        return $this->count(self::ARROBSERVERROOMGENERALINFO);
    }

    /**
     * Appends value to 'arrLockPlayerPlace' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrLockPlayerPlace($value)
    {
        return $this->append(self::ARRLOCKPLAYERPLACE, $value);
    }

    /**
     * Clears 'arrLockPlayerPlace' list
     *
     * @return null
     */
    public function clearArrLockPlayerPlace()
    {
        return $this->clear(self::ARRLOCKPLAYERPLACE);
    }

    /**
     * Returns 'arrLockPlayerPlace' list
     *
     * @return integer[]
     */
    public function getArrLockPlayerPlace()
    {
        return $this->get(self::ARRLOCKPLAYERPLACE);
    }

    /**
     * Returns true if 'arrLockPlayerPlace' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLockPlayerPlace()
    {
        return count($this->get(self::ARRLOCKPLAYERPLACE)) !== 0;
    }

    /**
     * Returns 'arrLockPlayerPlace' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLockPlayerPlaceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLOCKPLAYERPLACE));
    }

    /**
     * Returns element from 'arrLockPlayerPlace' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrLockPlayerPlaceAt($offset)
    {
        return $this->get(self::ARRLOCKPLAYERPLACE, $offset);
    }

    /**
     * Returns count of 'arrLockPlayerPlace' list
     *
     * @return int
     */
    public function getArrLockPlayerPlaceCount()
    {
        return $this->count(self::ARRLOCKPLAYERPLACE);
    }

    /**
     * Appends value to 'arrLockObserverPlace' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrLockObserverPlace($value)
    {
        return $this->append(self::ARRLOCKOBSERVERPLACE, $value);
    }

    /**
     * Clears 'arrLockObserverPlace' list
     *
     * @return null
     */
    public function clearArrLockObserverPlace()
    {
        return $this->clear(self::ARRLOCKOBSERVERPLACE);
    }

    /**
     * Returns 'arrLockObserverPlace' list
     *
     * @return integer[]
     */
    public function getArrLockObserverPlace()
    {
        return $this->get(self::ARRLOCKOBSERVERPLACE);
    }

    /**
     * Returns true if 'arrLockObserverPlace' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLockObserverPlace()
    {
        return count($this->get(self::ARRLOCKOBSERVERPLACE)) !== 0;
    }

    /**
     * Returns 'arrLockObserverPlace' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLockObserverPlaceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLOCKOBSERVERPLACE));
    }

    /**
     * Returns element from 'arrLockObserverPlace' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrLockObserverPlaceAt($offset)
    {
        return $this->get(self::ARRLOCKOBSERVERPLACE, $offset);
    }

    /**
     * Returns count of 'arrLockObserverPlace' list
     *
     * @return int
     */
    public function getArrLockObserverPlaceCount()
    {
        return $this->count(self::ARRLOCKOBSERVERPLACE);
    }
}
}