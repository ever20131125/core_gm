<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASCreateRoomReq message
 */
class MASCreateRoomReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ROOMTYPE = 2;
    const SZROOMNAME = 3;
    const SZPASSWORD = 4;
    const BGTYPE = 5;
    const NBACKGROUNDID = 6;
    const GAMEPLAY = 7;
    const GAMEMODE = 8;
    const ARRWEDITEMID = 9;
    const TIMETICK = 10;
    const STRTOKEN = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'roomtype',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROOMNAME => array(
            'name' => 'szRoomName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZPASSWORD => array(
            'name' => 'szPassword',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BackGroundType::enmBackGroundType_Normal,
            'name' => 'bgType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBACKGROUNDID => array(
            'name' => 'nBackgroundID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_TOUCH,
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
        self::ARRWEDITEMID => array(
            'name' => 'arrWedItemID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMETICK => array(
            'name' => 'timetick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRTOKEN => array(
            'name' => 'strtoken',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::SZROOMNAME] = null;
        $this->values[self::SZPASSWORD] = null;
        $this->values[self::BGTYPE] = self::$fields[self::BGTYPE]['default'];
        $this->values[self::NBACKGROUNDID] = null;
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::ARRWEDITEMID] = array();
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
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
     * Sets value of 'roomtype' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomtype($value)
    {
        return $this->set(self::ROOMTYPE, $value);
    }

    /**
     * Returns value of 'roomtype' property
     *
     * @return integer
     */
    public function getRoomtype()
    {
        $value = $this->get(self::ROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomtype' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomtype()
    {
        return $this->get(self::ROOMTYPE) !== null;
    }

    /**
     * Sets value of 'szRoomName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoomName($value)
    {
        return $this->set(self::SZROOMNAME, $value);
    }

    /**
     * Returns value of 'szRoomName' property
     *
     * @return string
     */
    public function getSzRoomName()
    {
        $value = $this->get(self::SZROOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoomName()
    {
        return $this->get(self::SZROOMNAME) !== null;
    }

    /**
     * Sets value of 'szPassword' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPassword($value)
    {
        return $this->set(self::SZPASSWORD, $value);
    }

    /**
     * Returns value of 'szPassword' property
     *
     * @return string
     */
    public function getSzPassword()
    {
        $value = $this->get(self::SZPASSWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPassword' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPassword()
    {
        return $this->get(self::SZPASSWORD) !== null;
    }

    /**
     * Sets value of 'bgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBgType($value)
    {
        return $this->set(self::BGTYPE, $value);
    }

    /**
     * Returns value of 'bgType' property
     *
     * @return integer
     */
    public function getBgType()
    {
        $value = $this->get(self::BGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bgType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBgType()
    {
        return $this->get(self::BGTYPE) !== null;
    }

    /**
     * Sets value of 'nBackgroundID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBackgroundID($value)
    {
        return $this->set(self::NBACKGROUNDID, $value);
    }

    /**
     * Returns value of 'nBackgroundID' property
     *
     * @return integer
     */
    public function getNBackgroundID()
    {
        $value = $this->get(self::NBACKGROUNDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBackgroundID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBackgroundID()
    {
        return $this->get(self::NBACKGROUNDID) !== null;
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
     * Appends value to 'arrWedItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrWedItemID($value)
    {
        return $this->append(self::ARRWEDITEMID, $value);
    }

    /**
     * Clears 'arrWedItemID' list
     *
     * @return null
     */
    public function clearArrWedItemID()
    {
        return $this->clear(self::ARRWEDITEMID);
    }

    /**
     * Returns 'arrWedItemID' list
     *
     * @return integer[]
     */
    public function getArrWedItemID()
    {
        return $this->get(self::ARRWEDITEMID);
    }

    /**
     * Returns true if 'arrWedItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWedItemID()
    {
        return count($this->get(self::ARRWEDITEMID)) !== 0;
    }

    /**
     * Returns 'arrWedItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWedItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWEDITEMID));
    }

    /**
     * Returns element from 'arrWedItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrWedItemIDAt($offset)
    {
        return $this->get(self::ARRWEDITEMID, $offset);
    }

    /**
     * Returns count of 'arrWedItemID' list
     *
     * @return int
     */
    public function getArrWedItemIDCount()
    {
        return $this->count(self::ARRWEDITEMID);
    }

    /**
     * Sets value of 'timetick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimetick($value)
    {
        return $this->set(self::TIMETICK, $value);
    }

    /**
     * Returns value of 'timetick' property
     *
     * @return integer
     */
    public function getTimetick()
    {
        $value = $this->get(self::TIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timetick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimetick()
    {
        return $this->get(self::TIMETICK) !== null;
    }

    /**
     * Appends value to 'strtoken' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStrtoken($value)
    {
        return $this->append(self::STRTOKEN, $value);
    }

    /**
     * Clears 'strtoken' list
     *
     * @return null
     */
    public function clearStrtoken()
    {
        return $this->clear(self::STRTOKEN);
    }

    /**
     * Returns 'strtoken' list
     *
     * @return string[]
     */
    public function getStrtoken()
    {
        return $this->get(self::STRTOKEN);
    }

    /**
     * Returns true if 'strtoken' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrtoken()
    {
        return count($this->get(self::STRTOKEN)) !== 0;
    }

    /**
     * Returns 'strtoken' iterator
     *
     * @return \ArrayIterator
     */
    public function getStrtokenIterator()
    {
        return new \ArrayIterator($this->get(self::STRTOKEN));
    }

    /**
     * Returns element from 'strtoken' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStrtokenAt($offset)
    {
        return $this->get(self::STRTOKEN, $offset);
    }

    /**
     * Returns count of 'strtoken' list
     *
     * @return int
     */
    public function getStrtokenCount()
    {
        return $this->count(self::STRTOKEN);
    }
}
}