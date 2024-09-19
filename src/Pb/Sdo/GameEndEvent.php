<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameEndEvent message
 */
class GameEndEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NDANCEID = 1;
    const REASON = 2;
    const STROOMGENERALINFO = 3;
    const NSCENEID = 4;
    const NMUSICID = 5;
    const NDURING = 6;
    const ARRGAMEENDPLAYER = 7;
    const ARRGAMEENDOBSERVER = 8;
    const ARRGAMEENDNPC = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NDANCEID => array(
            'name' => 'nDanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameEndReason::enmGameEndReason_Normal,
            'name' => 'reason',
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
        self::NDURING => array(
            'name' => 'nDuring',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGAMEENDPLAYER => array(
            'name' => 'arrGameEndPlayer',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GameEndPlayer'
        ),
        self::ARRGAMEENDOBSERVER => array(
            'name' => 'arrGameEndObserver',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GameEndPlayer'
        ),
        self::ARRGAMEENDNPC => array(
            'name' => 'arrGameEndNPC',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GameEndPlayer'
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
        $this->values[self::NDANCEID] = null;
        $this->values[self::REASON] = self::$fields[self::REASON]['default'];
        $this->values[self::STROOMGENERALINFO] = null;
        $this->values[self::NSCENEID] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::NDURING] = null;
        $this->values[self::ARRGAMEENDPLAYER] = array();
        $this->values[self::ARRGAMEENDOBSERVER] = array();
        $this->values[self::ARRGAMEENDNPC] = array();
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
     * Sets value of 'nDanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDanceID($value)
    {
        return $this->set(self::NDANCEID, $value);
    }

    /**
     * Returns value of 'nDanceID' property
     *
     * @return integer
     */
    public function getNDanceID()
    {
        $value = $this->get(self::NDANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDanceID()
    {
        return $this->get(self::NDANCEID) !== null;
    }

    /**
     * Sets value of 'reason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReason($value)
    {
        return $this->set(self::REASON, $value);
    }

    /**
     * Returns value of 'reason' property
     *
     * @return integer
     */
    public function getReason()
    {
        $value = $this->get(self::REASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReason()
    {
        return $this->get(self::REASON) !== null;
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
     * Sets value of 'nDuring' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDuring($value)
    {
        return $this->set(self::NDURING, $value);
    }

    /**
     * Returns value of 'nDuring' property
     *
     * @return integer
     */
    public function getNDuring()
    {
        $value = $this->get(self::NDURING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDuring' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDuring()
    {
        return $this->get(self::NDURING) !== null;
    }

    /**
     * Appends value to 'arrGameEndPlayer' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GameEndPlayer $value Value to append
     *
     * @return null
     */
    public function appendArrGameEndPlayer(\Xnhd\Core\Pb\Sdo\GameEndPlayer $value)
    {
        return $this->append(self::ARRGAMEENDPLAYER, $value);
    }

    /**
     * Clears 'arrGameEndPlayer' list
     *
     * @return null
     */
    public function clearArrGameEndPlayer()
    {
        return $this->clear(self::ARRGAMEENDPLAYER);
    }

    /**
     * Returns 'arrGameEndPlayer' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GameEndPlayer[]
     */
    public function getArrGameEndPlayer()
    {
        return $this->get(self::ARRGAMEENDPLAYER);
    }

    /**
     * Returns true if 'arrGameEndPlayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGameEndPlayer()
    {
        return count($this->get(self::ARRGAMEENDPLAYER)) !== 0;
    }

    /**
     * Returns 'arrGameEndPlayer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGameEndPlayerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGAMEENDPLAYER));
    }

    /**
     * Returns element from 'arrGameEndPlayer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GameEndPlayer
     */
    public function getArrGameEndPlayerAt($offset)
    {
        return $this->get(self::ARRGAMEENDPLAYER, $offset);
    }

    /**
     * Returns count of 'arrGameEndPlayer' list
     *
     * @return int
     */
    public function getArrGameEndPlayerCount()
    {
        return $this->count(self::ARRGAMEENDPLAYER);
    }

    /**
     * Appends value to 'arrGameEndObserver' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GameEndPlayer $value Value to append
     *
     * @return null
     */
    public function appendArrGameEndObserver(\Xnhd\Core\Pb\Sdo\GameEndPlayer $value)
    {
        return $this->append(self::ARRGAMEENDOBSERVER, $value);
    }

    /**
     * Clears 'arrGameEndObserver' list
     *
     * @return null
     */
    public function clearArrGameEndObserver()
    {
        return $this->clear(self::ARRGAMEENDOBSERVER);
    }

    /**
     * Returns 'arrGameEndObserver' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GameEndPlayer[]
     */
    public function getArrGameEndObserver()
    {
        return $this->get(self::ARRGAMEENDOBSERVER);
    }

    /**
     * Returns true if 'arrGameEndObserver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGameEndObserver()
    {
        return count($this->get(self::ARRGAMEENDOBSERVER)) !== 0;
    }

    /**
     * Returns 'arrGameEndObserver' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGameEndObserverIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGAMEENDOBSERVER));
    }

    /**
     * Returns element from 'arrGameEndObserver' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GameEndPlayer
     */
    public function getArrGameEndObserverAt($offset)
    {
        return $this->get(self::ARRGAMEENDOBSERVER, $offset);
    }

    /**
     * Returns count of 'arrGameEndObserver' list
     *
     * @return int
     */
    public function getArrGameEndObserverCount()
    {
        return $this->count(self::ARRGAMEENDOBSERVER);
    }

    /**
     * Appends value to 'arrGameEndNPC' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GameEndPlayer $value Value to append
     *
     * @return null
     */
    public function appendArrGameEndNPC(\Xnhd\Core\Pb\Sdo\GameEndPlayer $value)
    {
        return $this->append(self::ARRGAMEENDNPC, $value);
    }

    /**
     * Clears 'arrGameEndNPC' list
     *
     * @return null
     */
    public function clearArrGameEndNPC()
    {
        return $this->clear(self::ARRGAMEENDNPC);
    }

    /**
     * Returns 'arrGameEndNPC' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GameEndPlayer[]
     */
    public function getArrGameEndNPC()
    {
        return $this->get(self::ARRGAMEENDNPC);
    }

    /**
     * Returns true if 'arrGameEndNPC' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGameEndNPC()
    {
        return count($this->get(self::ARRGAMEENDNPC)) !== 0;
    }

    /**
     * Returns 'arrGameEndNPC' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGameEndNPCIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGAMEENDNPC));
    }

    /**
     * Returns element from 'arrGameEndNPC' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GameEndPlayer
     */
    public function getArrGameEndNPCAt($offset)
    {
        return $this->get(self::ARRGAMEENDNPC, $offset);
    }

    /**
     * Returns count of 'arrGameEndNPC' list
     *
     * @return int
     */
    public function getArrGameEndNPCCount()
    {
        return $this->count(self::ARRGAMEENDNPC);
    }
}
}