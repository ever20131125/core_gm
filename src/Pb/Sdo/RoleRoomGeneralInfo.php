<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleRoomGeneralInfo message
 */
class RoleRoomGeneralInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROOMINSTANCEID = 2;
    const NSERVERID = 4;
    const NROOMID = 5;
    const ROOMTYPE = 6;
    const PLAYERROOMSTATE = 7;
    const BISHOST = 8;
    const NPLACEID = 9;
    const JOINMEANS = 10;
    const GAMEMEANS = 11;
    const TEAM = 12;
    const NFIGHTID = 13;
    const ACSTATE = 14;
    const NFLOORID = 15;

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
        self::NSERVERID => array(
            'name' => 'nServerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMID => array(
            'name' => 'nRoomID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLAYERROOMSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PlayerRoomState::enmPlayerRoomState_None,
            'name' => 'playerRoomState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BISHOST => array(
            'name' => 'bIsHost',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NPLACEID => array(
            'name' => 'nPlaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::JOINMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\JoinMeans::enmJoinMeans_Normal,
            'name' => 'joinmeans',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMeans::enmGameMeans_Play,
            'name' => 'gameMeans',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFIGHTID => array(
            'name' => 'nFightID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActionState::enmActionState_Normal,
            'name' => 'acState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFLOORID => array(
            'name' => 'nFloorID',
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
        $this->values[self::NSERVERID] = null;
        $this->values[self::NROOMID] = null;
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::PLAYERROOMSTATE] = self::$fields[self::PLAYERROOMSTATE]['default'];
        $this->values[self::BISHOST] = null;
        $this->values[self::NPLACEID] = null;
        $this->values[self::JOINMEANS] = self::$fields[self::JOINMEANS]['default'];
        $this->values[self::GAMEMEANS] = self::$fields[self::GAMEMEANS]['default'];
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::NFIGHTID] = null;
        $this->values[self::ACSTATE] = self::$fields[self::ACSTATE]['default'];
        $this->values[self::NFLOORID] = null;
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
     * Sets value of 'nServerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNServerID($value)
    {
        return $this->set(self::NSERVERID, $value);
    }

    /**
     * Returns value of 'nServerID' property
     *
     * @return integer
     */
    public function getNServerID()
    {
        $value = $this->get(self::NSERVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nServerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNServerID()
    {
        return $this->get(self::NSERVERID) !== null;
    }

    /**
     * Sets value of 'nRoomID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomID($value)
    {
        return $this->set(self::NROOMID, $value);
    }

    /**
     * Returns value of 'nRoomID' property
     *
     * @return integer
     */
    public function getNRoomID()
    {
        $value = $this->get(self::NROOMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomID()
    {
        return $this->get(self::NROOMID) !== null;
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
     * Sets value of 'playerRoomState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlayerRoomState($value)
    {
        return $this->set(self::PLAYERROOMSTATE, $value);
    }

    /**
     * Returns value of 'playerRoomState' property
     *
     * @return integer
     */
    public function getPlayerRoomState()
    {
        $value = $this->get(self::PLAYERROOMSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'playerRoomState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlayerRoomState()
    {
        return $this->get(self::PLAYERROOMSTATE) !== null;
    }

    /**
     * Sets value of 'bIsHost' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBIsHost($value)
    {
        return $this->set(self::BISHOST, $value);
    }

    /**
     * Returns value of 'bIsHost' property
     *
     * @return boolean
     */
    public function getBIsHost()
    {
        $value = $this->get(self::BISHOST);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bIsHost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBIsHost()
    {
        return $this->get(self::BISHOST) !== null;
    }

    /**
     * Sets value of 'nPlaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlaceID($value)
    {
        return $this->set(self::NPLACEID, $value);
    }

    /**
     * Returns value of 'nPlaceID' property
     *
     * @return integer
     */
    public function getNPlaceID()
    {
        $value = $this->get(self::NPLACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlaceID()
    {
        return $this->get(self::NPLACEID) !== null;
    }

    /**
     * Sets value of 'joinmeans' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setJoinmeans($value)
    {
        return $this->set(self::JOINMEANS, $value);
    }

    /**
     * Returns value of 'joinmeans' property
     *
     * @return integer
     */
    public function getJoinmeans()
    {
        $value = $this->get(self::JOINMEANS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'joinmeans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJoinmeans()
    {
        return $this->get(self::JOINMEANS) !== null;
    }

    /**
     * Sets value of 'gameMeans' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameMeans($value)
    {
        return $this->set(self::GAMEMEANS, $value);
    }

    /**
     * Returns value of 'gameMeans' property
     *
     * @return integer
     */
    public function getGameMeans()
    {
        $value = $this->get(self::GAMEMEANS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameMeans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameMeans()
    {
        return $this->get(self::GAMEMEANS) !== null;
    }

    /**
     * Sets value of 'team' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTeam($value)
    {
        return $this->set(self::TEAM, $value);
    }

    /**
     * Returns value of 'team' property
     *
     * @return integer
     */
    public function getTeam()
    {
        $value = $this->get(self::TEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'team' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTeam()
    {
        return $this->get(self::TEAM) !== null;
    }

    /**
     * Sets value of 'nFightID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFightID($value)
    {
        return $this->set(self::NFIGHTID, $value);
    }

    /**
     * Returns value of 'nFightID' property
     *
     * @return integer
     */
    public function getNFightID()
    {
        $value = $this->get(self::NFIGHTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFightID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFightID()
    {
        return $this->get(self::NFIGHTID) !== null;
    }

    /**
     * Sets value of 'acState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAcState($value)
    {
        return $this->set(self::ACSTATE, $value);
    }

    /**
     * Returns value of 'acState' property
     *
     * @return integer
     */
    public function getAcState()
    {
        $value = $this->get(self::ACSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'acState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAcState()
    {
        return $this->get(self::ACSTATE) !== null;
    }

    /**
     * Sets value of 'nFloorID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFloorID($value)
    {
        return $this->set(self::NFLOORID, $value);
    }

    /**
     * Returns value of 'nFloorID' property
     *
     * @return integer
     */
    public function getNFloorID()
    {
        $value = $this->get(self::NFLOORID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFloorID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFloorID()
    {
        return $this->get(self::NFLOORID) !== null;
    }
}
}