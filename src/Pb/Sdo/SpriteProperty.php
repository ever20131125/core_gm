<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SpriteProperty message
 */
class SpriteProperty extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const UUID = 2;
    const SPRITEID = 3;
    const NICKNAME = 4;
    const BIRTHDAY = 5;
    const RARITY = 6;
    const LEVEL = 7;
    const GROWTH = 8;
    const PHYSICAL = 9;
    const MOOD = 10;
    const ISCARRIED = 11;
    const ISOPENMEDALSTATUS = 12;
    const ISOPENHORSESTATUS = 13;
    const HOSTTITLE = 14;
    const STARLEVEL = 15;
    const CURMAXGROWTH = 16;
    const CURMAXPHYSICAL = 17;
    const CURMAXMOOD = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPRITEID => array(
            'name' => 'spriteId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BIRTHDAY => array(
            'name' => 'birthday',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RARITY => array(
            'name' => 'rarity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROWTH => array(
            'name' => 'growth',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PHYSICAL => array(
            'name' => 'physical',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MOOD => array(
            'name' => 'mood',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISCARRIED => array(
            'name' => 'isCarried',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISOPENMEDALSTATUS => array(
            'name' => 'isOpenMedalStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISOPENHORSESTATUS => array(
            'name' => 'isOpenHorseStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::HOSTTITLE => array(
            'name' => 'hostTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STARLEVEL => array(
            'name' => 'starLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURMAXGROWTH => array(
            'name' => 'curMaxGrowth',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURMAXPHYSICAL => array(
            'name' => 'curMaxPhysical',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURMAXMOOD => array(
            'name' => 'curMaxMood',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::UUID] = null;
        $this->values[self::SPRITEID] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::BIRTHDAY] = null;
        $this->values[self::RARITY] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::GROWTH] = null;
        $this->values[self::PHYSICAL] = null;
        $this->values[self::MOOD] = null;
        $this->values[self::ISCARRIED] = null;
        $this->values[self::ISOPENMEDALSTATUS] = null;
        $this->values[self::ISOPENHORSESTATUS] = null;
        $this->values[self::HOSTTITLE] = null;
        $this->values[self::STARLEVEL] = null;
        $this->values[self::CURMAXGROWTH] = null;
        $this->values[self::CURMAXPHYSICAL] = null;
        $this->values[self::CURMAXMOOD] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'uuid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return integer
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }

    /**
     * Sets value of 'spriteId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpriteId($value)
    {
        return $this->set(self::SPRITEID, $value);
    }

    /**
     * Returns value of 'spriteId' property
     *
     * @return integer
     */
    public function getSpriteId()
    {
        $value = $this->get(self::SPRITEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'spriteId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpriteId()
    {
        return $this->get(self::SPRITEID) !== null;
    }

    /**
     * Sets value of 'nickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickName($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return string
     */
    public function getNickName()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickName()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'birthday' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBirthday($value)
    {
        return $this->set(self::BIRTHDAY, $value);
    }

    /**
     * Returns value of 'birthday' property
     *
     * @return integer
     */
    public function getBirthday()
    {
        $value = $this->get(self::BIRTHDAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'birthday' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBirthday()
    {
        return $this->get(self::BIRTHDAY) !== null;
    }

    /**
     * Sets value of 'rarity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRarity($value)
    {
        return $this->set(self::RARITY, $value);
    }

    /**
     * Returns value of 'rarity' property
     *
     * @return integer
     */
    public function getRarity()
    {
        $value = $this->get(self::RARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rarity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRarity()
    {
        return $this->get(self::RARITY) !== null;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }

    /**
     * Sets value of 'growth' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGrowth($value)
    {
        return $this->set(self::GROWTH, $value);
    }

    /**
     * Returns value of 'growth' property
     *
     * @return integer
     */
    public function getGrowth()
    {
        $value = $this->get(self::GROWTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'growth' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGrowth()
    {
        return $this->get(self::GROWTH) !== null;
    }

    /**
     * Sets value of 'physical' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPhysical($value)
    {
        return $this->set(self::PHYSICAL, $value);
    }

    /**
     * Returns value of 'physical' property
     *
     * @return integer
     */
    public function getPhysical()
    {
        $value = $this->get(self::PHYSICAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'physical' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhysical()
    {
        return $this->get(self::PHYSICAL) !== null;
    }

    /**
     * Sets value of 'mood' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMood($value)
    {
        return $this->set(self::MOOD, $value);
    }

    /**
     * Returns value of 'mood' property
     *
     * @return integer
     */
    public function getMood()
    {
        $value = $this->get(self::MOOD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mood' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMood()
    {
        return $this->get(self::MOOD) !== null;
    }

    /**
     * Sets value of 'isCarried' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsCarried($value)
    {
        return $this->set(self::ISCARRIED, $value);
    }

    /**
     * Returns value of 'isCarried' property
     *
     * @return boolean
     */
    public function getIsCarried()
    {
        $value = $this->get(self::ISCARRIED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isCarried' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsCarried()
    {
        return $this->get(self::ISCARRIED) !== null;
    }

    /**
     * Sets value of 'isOpenMedalStatus' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsOpenMedalStatus($value)
    {
        return $this->set(self::ISOPENMEDALSTATUS, $value);
    }

    /**
     * Returns value of 'isOpenMedalStatus' property
     *
     * @return boolean
     */
    public function getIsOpenMedalStatus()
    {
        $value = $this->get(self::ISOPENMEDALSTATUS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isOpenMedalStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsOpenMedalStatus()
    {
        return $this->get(self::ISOPENMEDALSTATUS) !== null;
    }

    /**
     * Sets value of 'isOpenHorseStatus' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsOpenHorseStatus($value)
    {
        return $this->set(self::ISOPENHORSESTATUS, $value);
    }

    /**
     * Returns value of 'isOpenHorseStatus' property
     *
     * @return boolean
     */
    public function getIsOpenHorseStatus()
    {
        $value = $this->get(self::ISOPENHORSESTATUS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isOpenHorseStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsOpenHorseStatus()
    {
        return $this->get(self::ISOPENHORSESTATUS) !== null;
    }

    /**
     * Sets value of 'hostTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHostTitle($value)
    {
        return $this->set(self::HOSTTITLE, $value);
    }

    /**
     * Returns value of 'hostTitle' property
     *
     * @return string
     */
    public function getHostTitle()
    {
        $value = $this->get(self::HOSTTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'hostTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHostTitle()
    {
        return $this->get(self::HOSTTITLE) !== null;
    }

    /**
     * Sets value of 'starLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStarLevel($value)
    {
        return $this->set(self::STARLEVEL, $value);
    }

    /**
     * Returns value of 'starLevel' property
     *
     * @return integer
     */
    public function getStarLevel()
    {
        $value = $this->get(self::STARLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'starLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStarLevel()
    {
        return $this->get(self::STARLEVEL) !== null;
    }

    /**
     * Sets value of 'curMaxGrowth' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurMaxGrowth($value)
    {
        return $this->set(self::CURMAXGROWTH, $value);
    }

    /**
     * Returns value of 'curMaxGrowth' property
     *
     * @return integer
     */
    public function getCurMaxGrowth()
    {
        $value = $this->get(self::CURMAXGROWTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curMaxGrowth' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurMaxGrowth()
    {
        return $this->get(self::CURMAXGROWTH) !== null;
    }

    /**
     * Sets value of 'curMaxPhysical' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurMaxPhysical($value)
    {
        return $this->set(self::CURMAXPHYSICAL, $value);
    }

    /**
     * Returns value of 'curMaxPhysical' property
     *
     * @return integer
     */
    public function getCurMaxPhysical()
    {
        $value = $this->get(self::CURMAXPHYSICAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curMaxPhysical' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurMaxPhysical()
    {
        return $this->get(self::CURMAXPHYSICAL) !== null;
    }

    /**
     * Sets value of 'curMaxMood' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurMaxMood($value)
    {
        return $this->set(self::CURMAXMOOD, $value);
    }

    /**
     * Returns value of 'curMaxMood' property
     *
     * @return integer
     */
    public function getCurMaxMood()
    {
        $value = $this->get(self::CURMAXMOOD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curMaxMood' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurMaxMood()
    {
        return $this->get(self::CURMAXMOOD) !== null;
    }
}
}