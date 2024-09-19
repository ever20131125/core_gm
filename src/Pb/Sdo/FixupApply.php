<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FixupApply message
 */
class FixupApply extends \ProtobufMessage
{
    /* Field index constants */
    const ROOMTYPE = 1;
    const NGAMEPLAYFIXUP = 2;
    const NGAMEMODEFIXUP = 3;
    const NMINPLAYERCNT = 4;
    const NMUSICID = 5;
    const MINSTAR = 6;
    const MAXSTAR = 7;
    const SOURCE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGAMEPLAYFIXUP => array(
            'name' => 'nGamePlayFixup',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGAMEMODEFIXUP => array(
            'name' => 'nGameModeFixup',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMINPLAYERCNT => array(
            'name' => 'nMinPlayerCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MINSTAR => array(
            'name' => 'minStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXSTAR => array(
            'name' => 'maxStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_CreateRoom,
            'name' => 'source',
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
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::NGAMEPLAYFIXUP] = null;
        $this->values[self::NGAMEMODEFIXUP] = null;
        $this->values[self::NMINPLAYERCNT] = null;
        $this->values[self::NMUSICID] = null;
        $this->values[self::MINSTAR] = null;
        $this->values[self::MAXSTAR] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
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
     * Sets value of 'nGamePlayFixup' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGamePlayFixup($value)
    {
        return $this->set(self::NGAMEPLAYFIXUP, $value);
    }

    /**
     * Returns value of 'nGamePlayFixup' property
     *
     * @return integer
     */
    public function getNGamePlayFixup()
    {
        $value = $this->get(self::NGAMEPLAYFIXUP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGamePlayFixup' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGamePlayFixup()
    {
        return $this->get(self::NGAMEPLAYFIXUP) !== null;
    }

    /**
     * Sets value of 'nGameModeFixup' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGameModeFixup($value)
    {
        return $this->set(self::NGAMEMODEFIXUP, $value);
    }

    /**
     * Returns value of 'nGameModeFixup' property
     *
     * @return integer
     */
    public function getNGameModeFixup()
    {
        $value = $this->get(self::NGAMEMODEFIXUP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGameModeFixup' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGameModeFixup()
    {
        return $this->get(self::NGAMEMODEFIXUP) !== null;
    }

    /**
     * Sets value of 'nMinPlayerCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMinPlayerCnt($value)
    {
        return $this->set(self::NMINPLAYERCNT, $value);
    }

    /**
     * Returns value of 'nMinPlayerCnt' property
     *
     * @return integer
     */
    public function getNMinPlayerCnt()
    {
        $value = $this->get(self::NMINPLAYERCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMinPlayerCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMinPlayerCnt()
    {
        return $this->get(self::NMINPLAYERCNT) !== null;
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
     * Sets value of 'minStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinStar($value)
    {
        return $this->set(self::MINSTAR, $value);
    }

    /**
     * Returns value of 'minStar' property
     *
     * @return integer
     */
    public function getMinStar()
    {
        $value = $this->get(self::MINSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'minStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMinStar()
    {
        return $this->get(self::MINSTAR) !== null;
    }

    /**
     * Sets value of 'maxStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxStar($value)
    {
        return $this->set(self::MAXSTAR, $value);
    }

    /**
     * Returns value of 'maxStar' property
     *
     * @return integer
     */
    public function getMaxStar()
    {
        $value = $this->get(self::MAXSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxStar()
    {
        return $this->get(self::MAXSTAR) !== null;
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
}
}