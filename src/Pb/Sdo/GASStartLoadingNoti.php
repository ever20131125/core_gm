<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASStartLoadingNoti message
 */
class GASStartLoadingNoti extends \ProtobufMessage
{
    /* Field index constants */
    const GAMEPLAY = 1;
    const GAMEMODE = 2;
    const NSCENEID = 3;
    const NMUSICID = 4;
    const MUSICLEVEL = 5;
    const ARRKEYGOAL = 6;
    const STMATCHSTARTINFO = 7;
    const ARRPLAYERARRANGE = 8;
    const ARROBSERVERARRANGE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_RHYTHM,
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
        self::MUSICLEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\MusicLevel::enmMusicLevel_Easy,
            'name' => 'musicLevel',
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
        self::ARRPLAYERARRANGE => array(
            'name' => 'arrPlayerArrange',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingArrange'
        ),
        self::ARROBSERVERARRANGE => array(
            'name' => 'arrObserverArrange',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingArrange'
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
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::NSCENEID] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::MUSICLEVEL] = self::$fields[self::MUSICLEVEL]['default'];
        $this->values[self::ARRKEYGOAL] = array();
        $this->values[self::STMATCHSTARTINFO] = null;
        $this->values[self::ARRPLAYERARRANGE] = array();
        $this->values[self::ARROBSERVERARRANGE] = array();
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
     * Sets value of 'musicLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMusicLevel($value)
    {
        return $this->set(self::MUSICLEVEL, $value);
    }

    /**
     * Returns value of 'musicLevel' property
     *
     * @return integer
     */
    public function getMusicLevel()
    {
        $value = $this->get(self::MUSICLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'musicLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMusicLevel()
    {
        return $this->get(self::MUSICLEVEL) !== null;
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
     * Appends value to 'arrPlayerArrange' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingArrange $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerArrange(\Xnhd\Core\Pb\Sdo\WeddingArrange $value)
    {
        return $this->append(self::ARRPLAYERARRANGE, $value);
    }

    /**
     * Clears 'arrPlayerArrange' list
     *
     * @return null
     */
    public function clearArrPlayerArrange()
    {
        return $this->clear(self::ARRPLAYERARRANGE);
    }

    /**
     * Returns 'arrPlayerArrange' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingArrange[]
     */
    public function getArrPlayerArrange()
    {
        return $this->get(self::ARRPLAYERARRANGE);
    }

    /**
     * Returns true if 'arrPlayerArrange' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerArrange()
    {
        return count($this->get(self::ARRPLAYERARRANGE)) !== 0;
    }

    /**
     * Returns 'arrPlayerArrange' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerArrangeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERARRANGE));
    }

    /**
     * Returns element from 'arrPlayerArrange' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingArrange
     */
    public function getArrPlayerArrangeAt($offset)
    {
        return $this->get(self::ARRPLAYERARRANGE, $offset);
    }

    /**
     * Returns count of 'arrPlayerArrange' list
     *
     * @return int
     */
    public function getArrPlayerArrangeCount()
    {
        return $this->count(self::ARRPLAYERARRANGE);
    }

    /**
     * Appends value to 'arrObserverArrange' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingArrange $value Value to append
     *
     * @return null
     */
    public function appendArrObserverArrange(\Xnhd\Core\Pb\Sdo\WeddingArrange $value)
    {
        return $this->append(self::ARROBSERVERARRANGE, $value);
    }

    /**
     * Clears 'arrObserverArrange' list
     *
     * @return null
     */
    public function clearArrObserverArrange()
    {
        return $this->clear(self::ARROBSERVERARRANGE);
    }

    /**
     * Returns 'arrObserverArrange' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingArrange[]
     */
    public function getArrObserverArrange()
    {
        return $this->get(self::ARROBSERVERARRANGE);
    }

    /**
     * Returns true if 'arrObserverArrange' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverArrange()
    {
        return count($this->get(self::ARROBSERVERARRANGE)) !== 0;
    }

    /**
     * Returns 'arrObserverArrange' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverArrangeIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERARRANGE));
    }

    /**
     * Returns element from 'arrObserverArrange' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingArrange
     */
    public function getArrObserverArrangeAt($offset)
    {
        return $this->get(self::ARROBSERVERARRANGE, $offset);
    }

    /**
     * Returns count of 'arrObserverArrange' list
     *
     * @return int
     */
    public function getArrObserverArrangeCount()
    {
        return $this->count(self::ARROBSERVERARRANGE);
    }
}
}