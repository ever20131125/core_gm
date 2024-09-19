<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSDeleteRoomNoti message
 */
class COSDeleteRoomNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROOMINSTANCEID = 1;
    const DELETEDREASON = 2;
    const STROOMGENERALINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DELETEDREASON => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomDeleteReason::enmDeletedReason_Normal,
            'name' => 'deletedReason',
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
        $this->values[self::DELETEDREASON] = self::$fields[self::DELETEDREASON]['default'];
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
     * Sets value of 'deletedReason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeletedReason($value)
    {
        return $this->set(self::DELETEDREASON, $value);
    }

    /**
     * Returns value of 'deletedReason' property
     *
     * @return integer
     */
    public function getDeletedReason()
    {
        $value = $this->get(self::DELETEDREASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deletedReason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeletedReason()
    {
        return $this->get(self::DELETEDREASON) !== null;
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