<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASEnterSNSRoomReq message
 */
class GASEnterSNSRoomReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STENTERROOMINFO = 2;
    const STROOMGENERALINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STENTERROOMINFO => array(
            'name' => 'stEnterRoomInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\EnterRoomInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STENTERROOMINFO] = null;
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
     * Sets value of 'stEnterRoomInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\EnterRoomInfo $value Property value
     *
     * @return null
     */
    public function setStEnterRoomInfo(\Xnhd\Core\Pb\Sdo\EnterRoomInfo $value=null)
    {
        return $this->set(self::STENTERROOMINFO, $value);
    }

    /**
     * Returns value of 'stEnterRoomInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\EnterRoomInfo
     */
    public function getStEnterRoomInfo()
    {
        return $this->get(self::STENTERROOMINFO);
    }

    /**
     * Returns true if 'stEnterRoomInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStEnterRoomInfo()
    {
        return $this->get(self::STENTERROOMINFO) !== null;
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