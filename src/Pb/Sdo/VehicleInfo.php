<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VehicleInfo message
 */
class VehicleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NVEHICLEID = 1;
    const KIND = 2;
    const STATE = 3;
    const ARRPLAYER = 4;
    const NCAPACITY = 5;
    const NSTARTTIME = 6;
    const NDURINGTIME = 7;
    const NTICKID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NVEHICLEID => array(
            'name' => 'nVehicleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KIND => array(
            'name' => 'kind',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPLAYER => array(
            'name' => 'arrPlayer',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCAPACITY => array(
            'name' => 'nCapacity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDURINGTIME => array(
            'name' => 'nDuringTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTICKID => array(
            'name' => 'nTickID',
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
        $this->values[self::NVEHICLEID] = null;
        $this->values[self::KIND] = null;
        $this->values[self::STATE] = null;
        $this->values[self::ARRPLAYER] = array();
        $this->values[self::NCAPACITY] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NDURINGTIME] = null;
        $this->values[self::NTICKID] = null;
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
     * Sets value of 'nVehicleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVehicleID($value)
    {
        return $this->set(self::NVEHICLEID, $value);
    }

    /**
     * Returns value of 'nVehicleID' property
     *
     * @return integer
     */
    public function getNVehicleID()
    {
        $value = $this->get(self::NVEHICLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVehicleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVehicleID()
    {
        return $this->get(self::NVEHICLEID) !== null;
    }

    /**
     * Sets value of 'kind' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKind($value)
    {
        return $this->set(self::KIND, $value);
    }

    /**
     * Returns value of 'kind' property
     *
     * @return integer
     */
    public function getKind()
    {
        $value = $this->get(self::KIND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'kind' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKind()
    {
        return $this->get(self::KIND) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Appends value to 'arrPlayer' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPlayer($value)
    {
        return $this->append(self::ARRPLAYER, $value);
    }

    /**
     * Clears 'arrPlayer' list
     *
     * @return null
     */
    public function clearArrPlayer()
    {
        return $this->clear(self::ARRPLAYER);
    }

    /**
     * Returns 'arrPlayer' list
     *
     * @return integer[]
     */
    public function getArrPlayer()
    {
        return $this->get(self::ARRPLAYER);
    }

    /**
     * Returns true if 'arrPlayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayer()
    {
        return count($this->get(self::ARRPLAYER)) !== 0;
    }

    /**
     * Returns 'arrPlayer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYER));
    }

    /**
     * Returns element from 'arrPlayer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPlayerAt($offset)
    {
        return $this->get(self::ARRPLAYER, $offset);
    }

    /**
     * Returns count of 'arrPlayer' list
     *
     * @return int
     */
    public function getArrPlayerCount()
    {
        return $this->count(self::ARRPLAYER);
    }

    /**
     * Sets value of 'nCapacity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCapacity($value)
    {
        return $this->set(self::NCAPACITY, $value);
    }

    /**
     * Returns value of 'nCapacity' property
     *
     * @return integer
     */
    public function getNCapacity()
    {
        $value = $this->get(self::NCAPACITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCapacity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCapacity()
    {
        return $this->get(self::NCAPACITY) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nDuringTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDuringTime($value)
    {
        return $this->set(self::NDURINGTIME, $value);
    }

    /**
     * Returns value of 'nDuringTime' property
     *
     * @return integer
     */
    public function getNDuringTime()
    {
        $value = $this->get(self::NDURINGTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDuringTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDuringTime()
    {
        return $this->get(self::NDURINGTIME) !== null;
    }

    /**
     * Sets value of 'nTickID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTickID($value)
    {
        return $this->set(self::NTICKID, $value);
    }

    /**
     * Returns value of 'nTickID' property
     *
     * @return integer
     */
    public function getNTickID()
    {
        $value = $this->get(self::NTICKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTickID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTickID()
    {
        return $this->get(self::NTICKID) !== null;
    }
}
}