<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyRankListReq message
 */
class SGSQualifyRankListReq extends \ProtobufMessage
{
    /* Field index constants */
    const GAMEMODE = 1;
    const ROLEID = 2;
    const RANKMIN = 3;
    const RANKMAX = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKMIN => array(
            'name' => 'rankmin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKMAX => array(
            'name' => 'rankmax',
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
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::ROLEID] = null;
        $this->values[self::RANKMIN] = null;
        $this->values[self::RANKMAX] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'rankmin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankmin($value)
    {
        return $this->set(self::RANKMIN, $value);
    }

    /**
     * Returns value of 'rankmin' property
     *
     * @return integer
     */
    public function getRankmin()
    {
        $value = $this->get(self::RANKMIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankmin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankmin()
    {
        return $this->get(self::RANKMIN) !== null;
    }

    /**
     * Sets value of 'rankmax' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankmax($value)
    {
        return $this->set(self::RANKMAX, $value);
    }

    /**
     * Returns value of 'rankmax' property
     *
     * @return integer
     */
    public function getRankmax()
    {
        $value = $this->get(self::RANKMAX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankmax' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankmax()
    {
        return $this->get(self::RANKMAX) !== null;
    }
}
}