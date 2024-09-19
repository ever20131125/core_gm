<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASJoinRoomResp message
 */
class MASJoinRoomResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STROLEROOMDETAILINFO = 3;
    const STROOMDETAILINFO = 4;

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