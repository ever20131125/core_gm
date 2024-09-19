<?php
/**
 * Auto generated from matchserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MACMatchSuccessNoti message
 */
class MACMatchSuccessNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROOMTYPE = 1;
    const GAMEPLAY = 2;
    const GAMEMODE = 3;
    const SOURCE = 4;
    const MATCHKIND = 5;
    const ARRMUSICID = 6;
    const ARRSPANINFO = 7;
    const ARRNPCINFO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_Invalid,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATCHKIND => array(
            'default' => \Xnhd\Core\Pb\Sdo\MatchKind::enmMatchKind_Normal,
            'name' => 'matchKind',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMUSICID => array(
            'name' => 'arrMusicID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSPANINFO => array(
            'name' => 'arrSpanInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchSpanInfo'
        ),
        self::ARRNPCINFO => array(
            'name' => 'arrNPCInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleInfo'
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
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::SOURCE] = null;
        $this->values[self::MATCHKIND] = self::$fields[self::MATCHKIND]['default'];
        $this->values[self::ARRMUSICID] = array();
        $this->values[self::ARRSPANINFO] = array();
        $this->values[self::ARRNPCINFO] = array();
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
     * Sets value of 'matchKind' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMatchKind($value)
    {
        return $this->set(self::MATCHKIND, $value);
    }

    /**
     * Returns value of 'matchKind' property
     *
     * @return integer
     */
    public function getMatchKind()
    {
        $value = $this->get(self::MATCHKIND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'matchKind' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMatchKind()
    {
        return $this->get(self::MATCHKIND) !== null;
    }

    /**
     * Appends value to 'arrMusicID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMusicID($value)
    {
        return $this->append(self::ARRMUSICID, $value);
    }

    /**
     * Clears 'arrMusicID' list
     *
     * @return null
     */
    public function clearArrMusicID()
    {
        return $this->clear(self::ARRMUSICID);
    }

    /**
     * Returns 'arrMusicID' list
     *
     * @return integer[]
     */
    public function getArrMusicID()
    {
        return $this->get(self::ARRMUSICID);
    }

    /**
     * Returns true if 'arrMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMusicID()
    {
        return count($this->get(self::ARRMUSICID)) !== 0;
    }

    /**
     * Returns 'arrMusicID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMusicIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMUSICID));
    }

    /**
     * Returns element from 'arrMusicID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMusicIDAt($offset)
    {
        return $this->get(self::ARRMUSICID, $offset);
    }

    /**
     * Returns count of 'arrMusicID' list
     *
     * @return int
     */
    public function getArrMusicIDCount()
    {
        return $this->count(self::ARRMUSICID);
    }

    /**
     * Appends value to 'arrSpanInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchSpanInfo $value Value to append
     *
     * @return null
     */
    public function appendArrSpanInfo(\Xnhd\Core\Pb\Sdo\MatchSpanInfo $value)
    {
        return $this->append(self::ARRSPANINFO, $value);
    }

    /**
     * Clears 'arrSpanInfo' list
     *
     * @return null
     */
    public function clearArrSpanInfo()
    {
        return $this->clear(self::ARRSPANINFO);
    }

    /**
     * Returns 'arrSpanInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchSpanInfo[]
     */
    public function getArrSpanInfo()
    {
        return $this->get(self::ARRSPANINFO);
    }

    /**
     * Returns true if 'arrSpanInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSpanInfo()
    {
        return count($this->get(self::ARRSPANINFO)) !== 0;
    }

    /**
     * Returns 'arrSpanInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSpanInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSPANINFO));
    }

    /**
     * Returns element from 'arrSpanInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchSpanInfo
     */
    public function getArrSpanInfoAt($offset)
    {
        return $this->get(self::ARRSPANINFO, $offset);
    }

    /**
     * Returns count of 'arrSpanInfo' list
     *
     * @return int
     */
    public function getArrSpanInfoCount()
    {
        return $this->count(self::ARRSPANINFO);
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
}
}