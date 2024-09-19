<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchHistory message
 */
class MatchHistory extends \ProtobufMessage
{
    /* Field index constants */
    const DANCEID = 1;
    const NTIME = 2;
    const ROOMTYPE = 3;
    const GAMEMODE = 4;
    const GAMEPLAY = 5;
    const SOURCE = 6;
    const NPLAYERCOUNT = 7;
    const NSCENEID = 8;
    const NMUSICID = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DANCEID => array(
            'name' => 'danceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIME => array(
            'name' => 'nTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_Invalid,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_CreateRoom,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLAYERCOUNT => array(
            'name' => 'nPlayerCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCENEID => array(
            'name' => 'nSceneID',
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
        $this->values[self::DANCEID] = null;
        $this->values[self::NTIME] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::NPLAYERCOUNT] = null;
        $this->values[self::NSCENEID] = null;
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
     * Sets value of 'danceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDanceID($value)
    {
        return $this->set(self::DANCEID, $value);
    }

    /**
     * Returns value of 'danceID' property
     *
     * @return integer
     */
    public function getDanceID()
    {
        $value = $this->get(self::DANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'danceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDanceID()
    {
        return $this->get(self::DANCEID) !== null;
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
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
     * Sets value of 'nPlayerCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlayerCount($value)
    {
        return $this->set(self::NPLAYERCOUNT, $value);
    }

    /**
     * Returns value of 'nPlayerCount' property
     *
     * @return integer
     */
    public function getNPlayerCount()
    {
        $value = $this->get(self::NPLAYERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlayerCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlayerCount()
    {
        return $this->get(self::NPLAYERCOUNT) !== null;
    }

    /**
     * Sets value of 'nSceneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSceneID($value)
    {
        return $this->set(self::NSCENEID, $value);
    }

    /**
     * Returns value of 'nSceneID' property
     *
     * @return integer
     */
    public function getNSceneID()
    {
        $value = $this->get(self::NSCENEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSceneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSceneID()
    {
        return $this->get(self::NSCENEID) !== null;
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