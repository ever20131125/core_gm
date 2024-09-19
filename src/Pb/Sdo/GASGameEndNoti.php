<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGameEndNoti message
 */
class GASGameEndNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const REASON = 2;
    const NROOMINSTANCEID = 3;
    const STROOMDETAILINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameEndReason::enmGameEndReason_Normal,
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROOMDETAILINFO => array(
            'name' => 'stRoomDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomDetailInfo'
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
        $this->values[self::REASON] = self::$fields[self::REASON]['default'];
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::STROOMDETAILINFO] = null;
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
     * Sets value of 'stRoomDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomDetailInfo $value Property value
     *
     * @return null
     */
    public function setStRoomDetailInfo(\Xnhd\Core\Pb\Sdo\RoomDetailInfo $value=null)
    {
        return $this->set(self::STROOMDETAILINFO, $value);
    }

    /**
     * Returns value of 'stRoomDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomDetailInfo
     */
    public function getStRoomDetailInfo()
    {
        return $this->get(self::STROOMDETAILINFO);
    }

    /**
     * Returns true if 'stRoomDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoomDetailInfo()
    {
        return $this->get(self::STROOMDETAILINFO) !== null;
    }
}
}