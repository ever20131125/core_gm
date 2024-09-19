<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSInvitePlayerNoti message
 */
class COSInvitePlayerNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NINVITEEID = 2;
    const STROLEPUBLICINFO = 3;
    const STROLECHANNELINFO = 4;
    const STROOMGENERALINFO = 5;
    const GAMEMEANS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NINVITEEID => array(
            'name' => 'nInviteeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STROLECHANNELINFO => array(
            'name' => 'stRoleChannelInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleChannelInfo'
        ),
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
        ),
        self::GAMEMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMeans::enmGameMeans_Play,
            'name' => 'gamemeans',
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
        $this->values[self::NINVITEEID] = null;
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::STROLECHANNELINFO] = null;
        $this->values[self::STROOMGENERALINFO] = null;
        $this->values[self::GAMEMEANS] = self::$fields[self::GAMEMEANS]['default'];
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
     * Sets value of 'nInviteeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNInviteeID($value)
    {
        return $this->set(self::NINVITEEID, $value);
    }

    /**
     * Returns value of 'nInviteeID' property
     *
     * @return integer
     */
    public function getNInviteeID()
    {
        $value = $this->get(self::NINVITEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nInviteeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNInviteeID()
    {
        return $this->get(self::NINVITEEID) !== null;
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
     * Sets value of 'gamemeans' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamemeans($value)
    {
        return $this->set(self::GAMEMEANS, $value);
    }

    /**
     * Returns value of 'gamemeans' property
     *
     * @return integer
     */
    public function getGamemeans()
    {
        $value = $this->get(self::GAMEMEANS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gamemeans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGamemeans()
    {
        return $this->get(self::GAMEMEANS) !== null;
    }
}
}