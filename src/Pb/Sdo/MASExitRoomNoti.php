<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASExitRoomNoti message
 */
class MASExitRoomNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROOMINSTANCEID = 2;
    const REASON = 3;
    const STROLECHANNELINFO = 4;
    const STCHANNELDETAILINFO = 5;
    const NOTHERID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'default' => \Xnhd\Core\Pb\Sdo\ExitRoomReason::enmExitRoomReason_Normal,
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLECHANNELINFO => array(
            'name' => 'stRoleChannelInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleChannelInfo'
        ),
        self::STCHANNELDETAILINFO => array(
            'name' => 'stChannelDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ChannelDetailInfo'
        ),
        self::NOTHERID => array(
            'name' => 'nOtherID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::REASON] = self::$fields[self::REASON]['default'];
        $this->values[self::STROLECHANNELINFO] = null;
        $this->values[self::STCHANNELDETAILINFO] = null;
        $this->values[self::NOTHERID] = null;
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
     * Sets value of 'stRoleChannelInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleChannelInfo $value Property value
     *
     * @return null
     */
    public function setStRoleChannelInfo(\Xnhd\Core\Pb\Sdo\RoleChannelInfo $value=null)
    {
        return $this->set(self::STROLECHANNELINFO, $value);
    }

    /**
     * Returns value of 'stRoleChannelInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleChannelInfo
     */
    public function getStRoleChannelInfo()
    {
        return $this->get(self::STROLECHANNELINFO);
    }

    /**
     * Returns true if 'stRoleChannelInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleChannelInfo()
    {
        return $this->get(self::STROLECHANNELINFO) !== null;
    }

    /**
     * Sets value of 'stChannelDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ChannelDetailInfo $value Property value
     *
     * @return null
     */
    public function setStChannelDetailInfo(\Xnhd\Core\Pb\Sdo\ChannelDetailInfo $value=null)
    {
        return $this->set(self::STCHANNELDETAILINFO, $value);
    }

    /**
     * Returns value of 'stChannelDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ChannelDetailInfo
     */
    public function getStChannelDetailInfo()
    {
        return $this->get(self::STCHANNELDETAILINFO);
    }

    /**
     * Returns true if 'stChannelDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStChannelDetailInfo()
    {
        return $this->get(self::STCHANNELDETAILINFO) !== null;
    }

    /**
     * Sets value of 'nOtherID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOtherID($value)
    {
        return $this->set(self::NOTHERID, $value);
    }

    /**
     * Returns value of 'nOtherID' property
     *
     * @return integer
     */
    public function getNOtherID()
    {
        $value = $this->get(self::NOTHERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOtherID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOtherID()
    {
        return $this->get(self::NOTHERID) !== null;
    }
}
}