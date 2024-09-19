<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSFixupMatchReq message
 */
class COSFixupMatchReq extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCE = 1;
    const NROLEID = 2;
    const ARRROLEID = 3;
    const ARRROLETEAM = 4;
    const ARRNPCINFO = 5;
    const ARRNPCTEAM = 6;
    const NID = 7;
    const GAMEPLAY = 8;
    const GAMEMODE = 9;
    const NMUSICID = 10;
    const NMUSICSTAR = 11;
    const NSCENEID = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_CreateRoom,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLETEAM => array(
            'name' => 'arrRoleTeam',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRNPCINFO => array(
            'name' => 'arrNPCInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleInfo'
        ),
        self::ARRNPCTEAM => array(
            'name' => 'arrNPCTeam',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NID => array(
            'name' => 'nID',
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
        self::NMUSICSTAR => array(
            'name' => 'nMusicStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCENEID => array(
            'name' => 'nSceneID',
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
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRROLETEAM] = array();
        $this->values[self::ARRNPCINFO] = array();
        $this->values[self::ARRNPCTEAM] = array();
        $this->values[self::NID] = null;
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::NMUSICID] = null;
        $this->values[self::NMUSICSTAR] = null;
        $this->values[self::NSCENEID] = null;
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
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Appends value to 'arrRoleTeam' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleTeam($value)
    {
        return $this->append(self::ARRROLETEAM, $value);
    }

    /**
     * Clears 'arrRoleTeam' list
     *
     * @return null
     */
    public function clearArrRoleTeam()
    {
        return $this->clear(self::ARRROLETEAM);
    }

    /**
     * Returns 'arrRoleTeam' list
     *
     * @return integer[]
     */
    public function getArrRoleTeam()
    {
        return $this->get(self::ARRROLETEAM);
    }

    /**
     * Returns true if 'arrRoleTeam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleTeam()
    {
        return count($this->get(self::ARRROLETEAM)) !== 0;
    }

    /**
     * Returns 'arrRoleTeam' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleTeamIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLETEAM));
    }

    /**
     * Returns element from 'arrRoleTeam' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleTeamAt($offset)
    {
        return $this->get(self::ARRROLETEAM, $offset);
    }

    /**
     * Returns count of 'arrRoleTeam' list
     *
     * @return int
     */
    public function getArrRoleTeamCount()
    {
        return $this->count(self::ARRROLETEAM);
    }

    /**
     * Appends value to 'arrNPCInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrNPCInfo(\Xnhd\Core\Pb\Sdo\RoleInfo $value)
    {
        return $this->append(self::ARRNPCINFO, $value);
    }

    /**
     * Clears 'arrNPCInfo' list
     *
     * @return null
     */
    public function clearArrNPCInfo()
    {
        return $this->clear(self::ARRNPCINFO);
    }

    /**
     * Returns 'arrNPCInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo[]
     */
    public function getArrNPCInfo()
    {
        return $this->get(self::ARRNPCINFO);
    }

    /**
     * Returns true if 'arrNPCInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNPCInfo()
    {
        return count($this->get(self::ARRNPCINFO)) !== 0;
    }

    /**
     * Returns 'arrNPCInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNPCInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNPCINFO));
    }

    /**
     * Returns element from 'arrNPCInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo
     */
    public function getArrNPCInfoAt($offset)
    {
        return $this->get(self::ARRNPCINFO, $offset);
    }

    /**
     * Returns count of 'arrNPCInfo' list
     *
     * @return int
     */
    public function getArrNPCInfoCount()
    {
        return $this->count(self::ARRNPCINFO);
    }

    /**
     * Appends value to 'arrNPCTeam' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrNPCTeam($value)
    {
        return $this->append(self::ARRNPCTEAM, $value);
    }

    /**
     * Clears 'arrNPCTeam' list
     *
     * @return null
     */
    public function clearArrNPCTeam()
    {
        return $this->clear(self::ARRNPCTEAM);
    }

    /**
     * Returns 'arrNPCTeam' list
     *
     * @return integer[]
     */
    public function getArrNPCTeam()
    {
        return $this->get(self::ARRNPCTEAM);
    }

    /**
     * Returns true if 'arrNPCTeam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNPCTeam()
    {
        return count($this->get(self::ARRNPCTEAM)) !== 0;
    }

    /**
     * Returns 'arrNPCTeam' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNPCTeamIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNPCTEAM));
    }

    /**
     * Returns element from 'arrNPCTeam' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrNPCTeamAt($offset)
    {
        return $this->get(self::ARRNPCTEAM, $offset);
    }

    /**
     * Returns count of 'arrNPCTeam' list
     *
     * @return int
     */
    public function getArrNPCTeamCount()
    {
        return $this->count(self::ARRNPCTEAM);
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

    /**
     * Sets value of 'nMusicStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicStar($value)
    {
        return $this->set(self::NMUSICSTAR, $value);
    }

    /**
     * Returns value of 'nMusicStar' property
     *
     * @return integer
     */
    public function getNMusicStar()
    {
        $value = $this->get(self::NMUSICSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicStar()
    {
        return $this->get(self::NMUSICSTAR) !== null;
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
}
}