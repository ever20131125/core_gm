<?php
/**
 * Auto generated from roledbserver.proto at 2021-12-17 09:50:47
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBGetMusicListReq message
 */
class RDBGetMusicListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const GAMEPLAY = 2;
    const NMUSICLEVEL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_TOUCH,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICLEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\MusicLevel::enmMusicLevel_Easy,
            'name' => 'nMusicLevel',
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
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::NMUSICLEVEL] = self::$fields[self::NMUSICLEVEL]['default'];
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
     * Sets value of 'nMusicLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicLevel($value)
    {
        return $this->set(self::NMUSICLEVEL, $value);
    }

    /**
     * Returns value of 'nMusicLevel' property
     *
     * @return integer
     */
    public function getNMusicLevel()
    {
        $value = $this->get(self::NMUSICLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicLevel()
    {
        return $this->get(self::NMUSICLEVEL) !== null;
    }
}
}