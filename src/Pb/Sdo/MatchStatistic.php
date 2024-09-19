<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchStatistic message
 */
class MatchStatistic extends \ProtobufMessage
{
    /* Field index constants */
    const GAMEMODE = 1;
    const GAMEPLAY = 2;
    const NMATCHCOUNT = 3;
    const NWINCOUNT = 4;
    const NMAXCWINCOUNT = 5;
    const NACCOUNT = 6;
    const NAPCOUNT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_Invalid,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATCHCOUNT => array(
            'name' => 'nMatchCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWINCOUNT => array(
            'name' => 'nWinCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXCWINCOUNT => array(
            'name' => 'nMaxCWinCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACCOUNT => array(
            'name' => 'nACCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAPCOUNT => array(
            'name' => 'nAPCount',
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
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::NMATCHCOUNT] = null;
        $this->values[self::NWINCOUNT] = null;
        $this->values[self::NMAXCWINCOUNT] = null;
        $this->values[self::NACCOUNT] = null;
        $this->values[self::NAPCOUNT] = null;
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
     * Sets value of 'nMatchCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchCount($value)
    {
        return $this->set(self::NMATCHCOUNT, $value);
    }

    /**
     * Returns value of 'nMatchCount' property
     *
     * @return integer
     */
    public function getNMatchCount()
    {
        $value = $this->get(self::NMATCHCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchCount()
    {
        return $this->get(self::NMATCHCOUNT) !== null;
    }

    /**
     * Sets value of 'nWinCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWinCount($value)
    {
        return $this->set(self::NWINCOUNT, $value);
    }

    /**
     * Returns value of 'nWinCount' property
     *
     * @return integer
     */
    public function getNWinCount()
    {
        $value = $this->get(self::NWINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWinCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWinCount()
    {
        return $this->get(self::NWINCOUNT) !== null;
    }

    /**
     * Sets value of 'nMaxCWinCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxCWinCount($value)
    {
        return $this->set(self::NMAXCWINCOUNT, $value);
    }

    /**
     * Returns value of 'nMaxCWinCount' property
     *
     * @return integer
     */
    public function getNMaxCWinCount()
    {
        $value = $this->get(self::NMAXCWINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxCWinCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxCWinCount()
    {
        return $this->get(self::NMAXCWINCOUNT) !== null;
    }

    /**
     * Sets value of 'nACCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNACCount($value)
    {
        return $this->set(self::NACCOUNT, $value);
    }

    /**
     * Returns value of 'nACCount' property
     *
     * @return integer
     */
    public function getNACCount()
    {
        $value = $this->get(self::NACCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nACCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNACCount()
    {
        return $this->get(self::NACCOUNT) !== null;
    }

    /**
     * Sets value of 'nAPCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAPCount($value)
    {
        return $this->set(self::NAPCOUNT, $value);
    }

    /**
     * Returns value of 'nAPCount' property
     *
     * @return integer
     */
    public function getNAPCount()
    {
        $value = $this->get(self::NAPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAPCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAPCount()
    {
        return $this->get(self::NAPCOUNT) !== null;
    }
}
}