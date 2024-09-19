<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSMatchSuccessNoti message
 */
class SGSMatchSuccessNoti extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCE = 1;
    const GAMEPLAY = 2;
    const ARRROLEINFO = 3;
    const ARRMUSICIDS = 4;
    const NTIMEOUT = 5;
    const MATCHKIND = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_Invalid,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEINFO => array(
            'name' => 'arrRoleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchRoleInfo'
        ),
        self::ARRMUSICIDS => array(
            'name' => 'arrMusicIDs',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMEOUT => array(
            'name' => 'nTimeout',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATCHKIND => array(
            'default' => \Xnhd\Core\Pb\Sdo\MatchKind::enmMatchKind_Normal,
            'name' => 'matchKind',
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
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::ARRROLEINFO] = array();
        $this->values[self::ARRMUSICIDS] = array();
        $this->values[self::NTIMEOUT] = null;
        $this->values[self::MATCHKIND] = self::$fields[self::MATCHKIND]['default'];
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
     * Appends value to 'arrRoleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchRoleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleInfo(\Xnhd\Core\Pb\Sdo\MatchRoleInfo $value)
    {
        return $this->append(self::ARRROLEINFO, $value);
    }

    /**
     * Clears 'arrRoleInfo' list
     *
     * @return null
     */
    public function clearArrRoleInfo()
    {
        return $this->clear(self::ARRROLEINFO);
    }

    /**
     * Returns 'arrRoleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRoleInfo[]
     */
    public function getArrRoleInfo()
    {
        return $this->get(self::ARRROLEINFO);
    }

    /**
     * Returns true if 'arrRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleInfo()
    {
        return count($this->get(self::ARRROLEINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEINFO));
    }

    /**
     * Returns element from 'arrRoleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRoleInfo
     */
    public function getArrRoleInfoAt($offset)
    {
        return $this->get(self::ARRROLEINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleInfo' list
     *
     * @return int
     */
    public function getArrRoleInfoCount()
    {
        return $this->count(self::ARRROLEINFO);
    }

    /**
     * Appends value to 'arrMusicIDs' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMusicIDs($value)
    {
        return $this->append(self::ARRMUSICIDS, $value);
    }

    /**
     * Clears 'arrMusicIDs' list
     *
     * @return null
     */
    public function clearArrMusicIDs()
    {
        return $this->clear(self::ARRMUSICIDS);
    }

    /**
     * Returns 'arrMusicIDs' list
     *
     * @return integer[]
     */
    public function getArrMusicIDs()
    {
        return $this->get(self::ARRMUSICIDS);
    }

    /**
     * Returns true if 'arrMusicIDs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMusicIDs()
    {
        return count($this->get(self::ARRMUSICIDS)) !== 0;
    }

    /**
     * Returns 'arrMusicIDs' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMusicIDsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMUSICIDS));
    }

    /**
     * Returns element from 'arrMusicIDs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMusicIDsAt($offset)
    {
        return $this->get(self::ARRMUSICIDS, $offset);
    }

    /**
     * Returns count of 'arrMusicIDs' list
     *
     * @return int
     */
    public function getArrMusicIDsCount()
    {
        return $this->count(self::ARRMUSICIDS);
    }

    /**
     * Sets value of 'nTimeout' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeout($value)
    {
        return $this->set(self::NTIMEOUT, $value);
    }

    /**
     * Returns value of 'nTimeout' property
     *
     * @return integer
     */
    public function getNTimeout()
    {
        $value = $this->get(self::NTIMEOUT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeout' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeout()
    {
        return $this->get(self::NTIMEOUT) !== null;
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
}
}