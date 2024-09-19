<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASInvitePlayerReq message
 */
class MASInvitePlayerReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRPLAYERLIST = 2;
    const GAMEMEANS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPLAYERLIST => array(
            'name' => 'arrPlayerList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::ARRPLAYERLIST] = array();
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
     * Appends value to 'arrPlayerList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerList($value)
    {
        return $this->append(self::ARRPLAYERLIST, $value);
    }

    /**
     * Clears 'arrPlayerList' list
     *
     * @return null
     */
    public function clearArrPlayerList()
    {
        return $this->clear(self::ARRPLAYERLIST);
    }

    /**
     * Returns 'arrPlayerList' list
     *
     * @return integer[]
     */
    public function getArrPlayerList()
    {
        return $this->get(self::ARRPLAYERLIST);
    }

    /**
     * Returns true if 'arrPlayerList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerList()
    {
        return count($this->get(self::ARRPLAYERLIST)) !== 0;
    }

    /**
     * Returns 'arrPlayerList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERLIST));
    }

    /**
     * Returns element from 'arrPlayerList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPlayerListAt($offset)
    {
        return $this->get(self::ARRPLAYERLIST, $offset);
    }

    /**
     * Returns count of 'arrPlayerList' list
     *
     * @return int
     */
    public function getArrPlayerListCount()
    {
        return $this->count(self::ARRPLAYERLIST);
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