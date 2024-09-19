<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASFixupResp message
 */
class GASFixupResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STROOMDETAILINFO = 2;
    const NSCENEID = 3;
    const NMUSICID = 4;
    const MUSICLEVEL = 5;
    const ARRKEYGOAL = 6;
    const STMATCHSTARTINFO = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STROOMDETAILINFO => array(
            'name' => 'stRoomDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomDetailInfo'
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
        $this->values[self::STROOMDETAILINFO] = null;
        $this->values[self::NSCENEID] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::MUSICLEVEL] = self::$fields[self::MUSICLEVEL]['default'];
        $this->values[self::ARRKEYGOAL] = array();
        $this->values[self::STMATCHSTARTINFO] = null;
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
     * Sets value of 'stRoomDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomDetailInfo $value Property value
     *
     * @return null
     */
    public function setStRoomDetailInfo(\Xnhd\Core\Pb\Sdo\RoomDetailInfo $value=null)
    {
        return $this->set(self::STROOMDETAILINFO, $value);
    }

    /**
     * Returns value of 'stRoomDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomDetailInfo
     */
    public function getStRoomDetailInfo()
    {
        return $this->get(self::STROOMDETAILINFO);
    }

    /**
     * Returns true if 'stRoomDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoomDetailInfo()
    {
        return $this->get(self::STROOMDETAILINFO) !== null;
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
}
}