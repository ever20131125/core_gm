<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetMatchRecordResp message
 */
class GASGetMatchRecordResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const DANCEID = 2;
    const ROOMTYPE = 3;
    const GAMEMODE = 4;
    const GAMEPLAY = 5;
    const NSCENEID = 6;
    const NMUSICID = 7;
    const ARRKEYGOAL = 8;
    const STMATCHSTARTINFO = 9;
    const ARRROLES = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::DANCEID => array(
            'name' => 'danceID',
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
        self::ARRKEYGOAL => array(
            'name' => 'arrKeyGoal',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\KeyGoal'
        ),
        self::STMATCHSTARTINFO => array(
            'name' => 'stMatchStartInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchStartInfo'
        ),
        self::ARRROLES => array(
            'name' => 'arrRoles',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchRecordRole'
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
        $this->values[self::DANCEID] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::NSCENEID] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::ARRKEYGOAL] = array();
        $this->values[self::STMATCHSTARTINFO] = null;
        $this->values[self::ARRROLES] = array();
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

    /**
     * Appends value to 'arrKeyGoal' list
     *
     * @param \Xnhd\Core\Pb\Sdo\KeyGoal $value Value to append
     *
     * @return null
     */
    public function appendArrKeyGoal(\Xnhd\Core\Pb\Sdo\KeyGoal $value)
    {
        return $this->append(self::ARRKEYGOAL, $value);
    }

    /**
     * Clears 'arrKeyGoal' list
     *
     * @return null
     */
    public function clearArrKeyGoal()
    {
        return $this->clear(self::ARRKEYGOAL);
    }

    /**
     * Returns 'arrKeyGoal' list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeyGoal[]
     */
    public function getArrKeyGoal()
    {
        return $this->get(self::ARRKEYGOAL);
    }

    /**
     * Returns true if 'arrKeyGoal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrKeyGoal()
    {
        return count($this->get(self::ARRKEYGOAL)) !== 0;
    }

    /**
     * Returns 'arrKeyGoal' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrKeyGoalIterator()
    {
        return new \ArrayIterator($this->get(self::ARRKEYGOAL));
    }

    /**
     * Returns element from 'arrKeyGoal' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeyGoal
     */
    public function getArrKeyGoalAt($offset)
    {
        return $this->get(self::ARRKEYGOAL, $offset);
    }

    /**
     * Returns count of 'arrKeyGoal' list
     *
     * @return int
     */
    public function getArrKeyGoalCount()
    {
        return $this->count(self::ARRKEYGOAL);
    }

    /**
     * Sets value of 'stMatchStartInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchStartInfo $value Property value
     *
     * @return null
     */
    public function setStMatchStartInfo(\Xnhd\Core\Pb\Sdo\MatchStartInfo $value=null)
    {
        return $this->set(self::STMATCHSTARTINFO, $value);
    }

    /**
     * Returns value of 'stMatchStartInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchStartInfo
     */
    public function getStMatchStartInfo()
    {
        return $this->get(self::STMATCHSTARTINFO);
    }

    /**
     * Returns true if 'stMatchStartInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStMatchStartInfo()
    {
        return $this->get(self::STMATCHSTARTINFO) !== null;
    }

    /**
     * Appends value to 'arrRoles' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchRecordRole $value Value to append
     *
     * @return null
     */
    public function appendArrRoles(\Xnhd\Core\Pb\Sdo\MatchRecordRole $value)
    {
        return $this->append(self::ARRROLES, $value);
    }

    /**
     * Clears 'arrRoles' list
     *
     * @return null
     */
    public function clearArrRoles()
    {
        return $this->clear(self::ARRROLES);
    }

    /**
     * Returns 'arrRoles' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRecordRole[]
     */
    public function getArrRoles()
    {
        return $this->get(self::ARRROLES);
    }

    /**
     * Returns true if 'arrRoles' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoles()
    {
        return count($this->get(self::ARRROLES)) !== 0;
    }

    /**
     * Returns 'arrRoles' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRolesIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLES));
    }

    /**
     * Returns element from 'arrRoles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRecordRole
     */
    public function getArrRolesAt($offset)
    {
        return $this->get(self::ARRROLES, $offset);
    }

    /**
     * Returns count of 'arrRoles' list
     *
     * @return int
     */
    public function getArrRolesCount()
    {
        return $this->count(self::ARRROLES);
    }
}
}