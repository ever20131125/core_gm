<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASRoomDataUpdatedNoti message
 */
class GASRoomDataUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROOMINSTANCEID = 1;
    const STROOMDATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROOMDATA => array(
            'name' => 'stRoomData',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomData'
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
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::STROOMDATA] = null;
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
     * Sets value of 'nRoomInstanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomInstanceID($value)
    {
        return $this->set(self::NROOMINSTANCEID, $value);
    }

    /**
     * Returns value of 'nRoomInstanceID' property
     *
     * @return integer
     */
    public function getNRoomInstanceID()
    {
        $value = $this->get(self::NROOMINSTANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomInstanceID()
    {
        return $this->get(self::NROOMINSTANCEID) !== null;
    }

    /**
     * Sets value of 'stRoomData' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomData $value Property value
     *
     * @return null
     */
    public function setStRoomData(\Xnhd\Core\Pb\Sdo\RoomData $value=null)
    {
        return $this->set(self::STROOMDATA, $value);
    }

    /**
     * Returns value of 'stRoomData' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomData
     */
    public function getStRoomData()
    {
        return $this->get(self::STROOMDATA);
    }

    /**
     * Returns true if 'stRoomData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoomData()
    {
        return $this->get(self::STROOMDATA) !== null;
    }
}
}