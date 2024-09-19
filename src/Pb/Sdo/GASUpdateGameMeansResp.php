<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASUpdateGameMeansResp message
 */
class GASUpdateGameMeansResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const GAMEMEANS = 3;
    const NDESTROLE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::GAMEMEANS] = self::$fields[self::GAMEMEANS]['default'];
        $this->values[self::NDESTROLE] = null;
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
}
}