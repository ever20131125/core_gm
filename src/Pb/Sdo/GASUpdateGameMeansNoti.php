<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASUpdateGameMeansNoti message
 */
class GASUpdateGameMeansNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROOMINSTANCEID = 2;
    const GAMEMEANS = 3;
    const NDESTROLE = 4;
    const STROLEROOMDETAILINFO = 5;

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
        self::GAMEMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMeans::enmGameMeans_Play,
            'name' => 'gameMeans',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDESTROLE => array(
            'name' => 'nDestRole',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEROOMDETAILINFO => array(
            'name' => 'stRoleRoomDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo'
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
        $this->values[self::GAMEMEANS] = self::$fields[self::GAMEMEANS]['default'];
        $this->values[self::NDESTROLE] = null;
        $this->values[self::STROLEROOMDETAILINFO] = null;
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
     * Sets value of 'nDestRole' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDestRole($value)
    {
        return $this->set(self::NDESTROLE, $value);
    }

    /**
     * Returns value of 'nDestRole' property
     *
     * @return integer
     */
    public function getNDestRole()
    {
        $value = $this->get(self::NDESTROLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDestRole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDestRole()
    {
        return $this->get(self::NDESTROLE) !== null;
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
}
}