<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingEvent message
 */
class WeddingEvent extends \ProtobufMessage
{
    /* Field index constants */
    const STROOMGENERALINFO = 1;
    const ARRWEDDINGPLAYER = 2;
    const ARRWEDDINGOBSERVER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
        ),
        self::ARRWEDDINGPLAYER => array(
            'name' => 'arrWeddingPlayer',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingPlayer'
        ),
        self::ARRWEDDINGOBSERVER => array(
            'name' => 'arrWeddingObserver',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingPlayer'
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
        $this->values[self::ARRWEDDINGPLAYER] = array();
        $this->values[self::ARRWEDDINGOBSERVER] = array();
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
     * Appends value to 'arrWeddingPlayer' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingPlayer $value Value to append
     *
     * @return null
     */
    public function appendArrWeddingPlayer(\Xnhd\Core\Pb\Sdo\WeddingPlayer $value)
    {
        return $this->append(self::ARRWEDDINGPLAYER, $value);
    }

    /**
     * Clears 'arrWeddingPlayer' list
     *
     * @return null
     */
    public function clearArrWeddingPlayer()
    {
        return $this->clear(self::ARRWEDDINGPLAYER);
    }

    /**
     * Returns 'arrWeddingPlayer' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingPlayer[]
     */
    public function getArrWeddingPlayer()
    {
        return $this->get(self::ARRWEDDINGPLAYER);
    }

    /**
     * Returns true if 'arrWeddingPlayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWeddingPlayer()
    {
        return count($this->get(self::ARRWEDDINGPLAYER)) !== 0;
    }

    /**
     * Returns 'arrWeddingPlayer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWeddingPlayerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWEDDINGPLAYER));
    }

    /**
     * Returns element from 'arrWeddingPlayer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingPlayer
     */
    public function getArrWeddingPlayerAt($offset)
    {
        return $this->get(self::ARRWEDDINGPLAYER, $offset);
    }

    /**
     * Returns count of 'arrWeddingPlayer' list
     *
     * @return int
     */
    public function getArrWeddingPlayerCount()
    {
        return $this->count(self::ARRWEDDINGPLAYER);
    }

    /**
     * Appends value to 'arrWeddingObserver' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingPlayer $value Value to append
     *
     * @return null
     */
    public function appendArrWeddingObserver(\Xnhd\Core\Pb\Sdo\WeddingPlayer $value)
    {
        return $this->append(self::ARRWEDDINGOBSERVER, $value);
    }

    /**
     * Clears 'arrWeddingObserver' list
     *
     * @return null
     */
    public function clearArrWeddingObserver()
    {
        return $this->clear(self::ARRWEDDINGOBSERVER);
    }

    /**
     * Returns 'arrWeddingObserver' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingPlayer[]
     */
    public function getArrWeddingObserver()
    {
        return $this->get(self::ARRWEDDINGOBSERVER);
    }

    /**
     * Returns true if 'arrWeddingObserver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWeddingObserver()
    {
        return count($this->get(self::ARRWEDDINGOBSERVER)) !== 0;
    }

    /**
     * Returns 'arrWeddingObserver' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWeddingObserverIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWEDDINGOBSERVER));
    }

    /**
     * Returns element from 'arrWeddingObserver' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingPlayer
     */
    public function getArrWeddingObserverAt($offset)
    {
        return $this->get(self::ARRWEDDINGOBSERVER, $offset);
    }

    /**
     * Returns count of 'arrWeddingObserver' list
     *
     * @return int
     */
    public function getArrWeddingObserverCount()
    {
        return $this->count(self::ARRWEDDINGOBSERVER);
    }
}
}