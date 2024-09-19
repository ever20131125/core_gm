<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyMusicResp message
 */
class SGSQualifyMusicResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const GAMEMODE = 3;
    const ARRALLMUSICID = 4;
    const ARRCURMUSICID = 5;

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
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRALLMUSICID => array(
            'name' => 'arrAllMusicID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCURMUSICID => array(
            'name' => 'arrCurMusicID',
            'repeated' => true,
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
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::ARRALLMUSICID] = array();
        $this->values[self::ARRCURMUSICID] = array();
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
     * Appends value to 'arrAllMusicID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAllMusicID($value)
    {
        return $this->append(self::ARRALLMUSICID, $value);
    }

    /**
     * Clears 'arrAllMusicID' list
     *
     * @return null
     */
    public function clearArrAllMusicID()
    {
        return $this->clear(self::ARRALLMUSICID);
    }

    /**
     * Returns 'arrAllMusicID' list
     *
     * @return integer[]
     */
    public function getArrAllMusicID()
    {
        return $this->get(self::ARRALLMUSICID);
    }

    /**
     * Returns true if 'arrAllMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAllMusicID()
    {
        return count($this->get(self::ARRALLMUSICID)) !== 0;
    }

    /**
     * Returns 'arrAllMusicID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAllMusicIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRALLMUSICID));
    }

    /**
     * Returns element from 'arrAllMusicID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAllMusicIDAt($offset)
    {
        return $this->get(self::ARRALLMUSICID, $offset);
    }

    /**
     * Returns count of 'arrAllMusicID' list
     *
     * @return int
     */
    public function getArrAllMusicIDCount()
    {
        return $this->count(self::ARRALLMUSICID);
    }

    /**
     * Appends value to 'arrCurMusicID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCurMusicID($value)
    {
        return $this->append(self::ARRCURMUSICID, $value);
    }

    /**
     * Clears 'arrCurMusicID' list
     *
     * @return null
     */
    public function clearArrCurMusicID()
    {
        return $this->clear(self::ARRCURMUSICID);
    }

    /**
     * Returns 'arrCurMusicID' list
     *
     * @return integer[]
     */
    public function getArrCurMusicID()
    {
        return $this->get(self::ARRCURMUSICID);
    }

    /**
     * Returns true if 'arrCurMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCurMusicID()
    {
        return count($this->get(self::ARRCURMUSICID)) !== 0;
    }

    /**
     * Returns 'arrCurMusicID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCurMusicIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCURMUSICID));
    }

    /**
     * Returns element from 'arrCurMusicID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCurMusicIDAt($offset)
    {
        return $this->get(self::ARRCURMUSICID, $offset);
    }

    /**
     * Returns count of 'arrCurMusicID' list
     *
     * @return int
     */
    public function getArrCurMusicIDCount()
    {
        return $this->count(self::ARRCURMUSICID);
    }
}
}