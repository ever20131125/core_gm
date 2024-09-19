<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASJoinRoomNoti message
 */
class MASJoinRoomNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STROLEPUBLICINFO = 2;
    const STROLEROOMDETAILINFO = 3;
    const STAVATARINFO = 4;
    const JOINMEANS = 5;
    const STROLEGUILDINFO = 6;
    const STROLELOVERINFO = 7;
    const STROLEBUFFERINFO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STROLEROOMDETAILINFO => array(
            'name' => 'stRoleRoomDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo'
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::JOINMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\JoinMeans::enmJoinMeans_Normal,
            'name' => 'joinMeans',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEGUILDINFO => array(
            'name' => 'stRoleGuildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGuildInfo'
        ),
        self::STROLELOVERINFO => array(
            'name' => 'stRoleLoverInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleLoverInfo'
        ),
        self::STROLEBUFFERINFO => array(
            'name' => 'stRoleBufferInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBufferInfo'
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
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::STROLEROOMDETAILINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::JOINMEANS] = self::$fields[self::JOINMEANS]['default'];
        $this->values[self::STROLEGUILDINFO] = null;
        $this->values[self::STROLELOVERINFO] = null;
        $this->values[self::STROLEBUFFERINFO] = null;
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
     * Sets value of 'stRolePublicInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO);
    }

    /**
     * Returns true if 'stRolePublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO) !== null;
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
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }

    /**
     * Sets value of 'joinMeans' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setJoinMeans($value)
    {
        return $this->set(self::JOINMEANS, $value);
    }

    /**
     * Returns value of 'joinMeans' property
     *
     * @return integer
     */
    public function getJoinMeans()
    {
        $value = $this->get(self::JOINMEANS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'joinMeans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJoinMeans()
    {
        return $this->get(self::JOINMEANS) !== null;
    }

    /**
     * Sets value of 'stRoleGuildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGuildInfo $value Property value
     *
     * @return null
     */
    public function setStRoleGuildInfo(\Xnhd\Core\Pb\Sdo\RoleGuildInfo $value=null)
    {
        return $this->set(self::STROLEGUILDINFO, $value);
    }

    /**
     * Returns value of 'stRoleGuildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInfo
     */
    public function getStRoleGuildInfo()
    {
        return $this->get(self::STROLEGUILDINFO);
    }

    /**
     * Returns true if 'stRoleGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleGuildInfo()
    {
        return $this->get(self::STROLEGUILDINFO) !== null;
    }

    /**
     * Sets value of 'stRoleLoverInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleLoverInfo $value Property value
     *
     * @return null
     */
    public function setStRoleLoverInfo(\Xnhd\Core\Pb\Sdo\RoleLoverInfo $value=null)
    {
        return $this->set(self::STROLELOVERINFO, $value);
    }

    /**
     * Returns value of 'stRoleLoverInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleLoverInfo
     */
    public function getStRoleLoverInfo()
    {
        return $this->get(self::STROLELOVERINFO);
    }

    /**
     * Returns true if 'stRoleLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleLoverInfo()
    {
        return $this->get(self::STROLELOVERINFO) !== null;
    }

    /**
     * Sets value of 'stRoleBufferInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleBufferInfo $value Property value
     *
     * @return null
     */
    public function setStRoleBufferInfo(\Xnhd\Core\Pb\Sdo\RoleBufferInfo $value=null)
    {
        return $this->set(self::STROLEBUFFERINFO, $value);
    }

    /**
     * Returns value of 'stRoleBufferInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBufferInfo
     */
    public function getStRoleBufferInfo()
    {
        return $this->get(self::STROLEBUFFERINFO);
    }

    /**
     * Returns true if 'stRoleBufferInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleBufferInfo()
    {
        return $this->get(self::STROLEBUFFERINFO) !== null;
    }
}
}