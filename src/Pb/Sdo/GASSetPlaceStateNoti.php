<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASSetPlaceStateNoti message
 */
class GASSetPlaceStateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROOMINSTANCEID = 1;
    const NROLEID = 2;
    const PLACETYPE = 3;
    const NPLACEID = 4;
    const PLACESTATE = 5;
    const STROOMGENERALINFO = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLACETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PlaceType::enmPlaceType_Play,
            'name' => 'placeType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLACEID => array(
            'name' => 'nPlaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLACESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PlaceState::enmPlaceState_Normal,
            'name' => 'placeState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::PLACETYPE] = self::$fields[self::PLACETYPE]['default'];
        $this->values[self::NPLACEID] = null;
        $this->values[self::PLACESTATE] = self::$fields[self::PLACESTATE]['default'];
        $this->values[self::STROOMGENERALINFO] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'placeType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlaceType($value)
    {
        return $this->set(self::PLACETYPE, $value);
    }

    /**
     * Returns value of 'placeType' property
     *
     * @return integer
     */
    public function getPlaceType()
    {
        $value = $this->get(self::PLACETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'placeType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlaceType()
    {
        return $this->get(self::PLACETYPE) !== null;
    }

    /**
     * Sets value of 'nPlaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlaceID($value)
    {
        return $this->set(self::NPLACEID, $value);
    }

    /**
     * Returns value of 'nPlaceID' property
     *
     * @return integer
     */
    public function getNPlaceID()
    {
        $value = $this->get(self::NPLACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlaceID()
    {
        return $this->get(self::NPLACEID) !== null;
    }

    /**
     * Sets value of 'placeState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlaceState($value)
    {
        return $this->set(self::PLACESTATE, $value);
    }

    /**
     * Returns value of 'placeState' property
     *
     * @return integer
     */
    public function getPlaceState()
    {
        $value = $this->get(self::PLACESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'placeState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlaceState()
    {
        return $this->get(self::PLACESTATE) !== null;
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
}
}