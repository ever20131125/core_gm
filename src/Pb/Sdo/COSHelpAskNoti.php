<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSHelpAskNoti message
 */
class COSHelpAskNoti extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCE = 1;
    const NROLEID = 2;
    const STINVITORINFO = 3;
    const NID = 4;
    const ROOMTYPE = 5;
    const GAMEPLAY = 6;
    const GAMEMODE = 7;
    const NMUSICID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STINVITORINFO => array(
            'name' => 'stInvitorInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_TOUCH,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Normal,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICID => array(
            'name' => 'nMusicID',
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
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::NROLEID] = null;
        $this->values[self::STINVITORINFO] = null;
        $this->values[self::NID] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::NMUSICID] = null;
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
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
     * Sets value of 'stInvitorInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStInvitorInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STINVITORINFO, $value);
    }

    /**
     * Returns value of 'stInvitorInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStInvitorInfo()
    {
        return $this->get(self::STINVITORINFO);
    }

    /**
     * Returns true if 'stInvitorInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStInvitorInfo()
    {
        return $this->get(self::STINVITORINFO) !== null;
    }

    /**
     * Sets value of 'nID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNID($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nID' property
     *
     * @return integer
     */
    public function getNID()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNID()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Sets value of 'roomType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomType($value)
    {
        return $this->set(self::ROOMTYPE, $value);
    }

    /**
     * Returns value of 'roomType' property
     *
     * @return integer
     */
    public function getRoomType()
    {
        $value = $this->get(self::ROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomType()
    {
        return $this->get(self::ROOMTYPE) !== null;
    }

    /**
     * Sets value of 'gamePlay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamePlay($value)
    {
        return $this->set(self::GAMEPLAY, $value);
    }

    /**
     * Returns value of 'gamePlay' property
     *
     * @return integer
     */
    public function getGamePlay()
    {
        $value = $this->get(self::GAMEPLAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGamePlay()
    {
        return $this->get(self::GAMEPLAY) !== null;
    }

    /**
     * Sets value of 'gameMode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameMode($value)
    {
        return $this->set(self::GAMEMODE, $value);
    }

    /**
     * Returns value of 'gameMode' property
     *
     * @return integer
     */
    public function getGameMode()
    {
        $value = $this->get(self::GAMEMODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameMode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameMode()
    {
        return $this->get(self::GAMEMODE) !== null;
    }

    /**
     * Sets value of 'nMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicID($value)
    {
        return $this->set(self::NMUSICID, $value);
    }

    /**
     * Returns value of 'nMusicID' property
     *
     * @return integer
     */
    public function getNMusicID()
    {
        $value = $this->get(self::NMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicID()
    {
        return $this->get(self::NMUSICID) !== null;
    }
}
}