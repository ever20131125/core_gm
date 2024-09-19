<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSAnswerInviteResp message
 */
class COSAnswerInviteResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STROLECHANNELINFO = 3;
    const STCHANNELDETAILINFO = 4;
    const STROLEROOMDETAILINFO = 5;
    const STROOMDETAILINFO = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
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
        self::STROLEROOMDETAILINFO => array(
            'name' => 'stRoleRoomDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::STROLECHANNELINFO] = null;
        $this->values[self::STCHANNELDETAILINFO] = null;
        $this->values[self::STROLEROOMDETAILINFO] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'stRoleRoomDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo $value Property value
     *
     * @return null
     */
    public function setStRoleRoomDetailInfo(\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo $value=null)
    {
        return $this->set(self::STROLEROOMDETAILINFO, $value);
    }

    /**
     * Returns value of 'stRoleRoomDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo
     */
    public function getStRoleRoomDetailInfo()
    {
        return $this->get(self::STROLEROOMDETAILINFO);
    }

    /**
     * Returns true if 'stRoleRoomDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleRoomDetailInfo()
    {
        return $this->get(self::STROLEROOMDETAILINFO) !== null;
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