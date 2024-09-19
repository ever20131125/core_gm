<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendRecord message
 */
class FriendRecord extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDID = 1;
    const FRIENDNAME = 2;
    const GENDER = 3;
    const FRIENDTYPE = 4;
    const FRIENDSHIPLEVEL = 5;
    const FRIENDNICKNAME = 6;
    const GROUPID = 7;
    const ESTABLISHTIME = 8;
    const DELETETIME = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDNAME => array(
            'name' => 'friendName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendType::enmFriendType_None,
            'name' => 'friendType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDSHIPLEVEL => array(
            'name' => 'friendshipLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDNICKNAME => array(
            'name' => 'friendNickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROUPID => array(
            'name' => 'groupID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ESTABLISHTIME => array(
            'name' => 'establishTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DELETETIME => array(
            'name' => 'deleteTime',
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::FRIENDNAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::FRIENDTYPE] = self::$fields[self::FRIENDTYPE]['default'];
        $this->values[self::FRIENDSHIPLEVEL] = null;
        $this->values[self::FRIENDNICKNAME] = null;
        $this->values[self::GROUPID] = null;
        $this->values[self::ESTABLISHTIME] = null;
        $this->values[self::DELETETIME] = null;
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
     * Sets value of 'friendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendID($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendID' property
     *
     * @return integer
     */
    public function getFriendID()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Sets value of 'friendName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendName($value)
    {
        return $this->set(self::FRIENDNAME, $value);
    }

    /**
     * Returns value of 'friendName' property
     *
     * @return string
     */
    public function getFriendName()
    {
        $value = $this->get(self::FRIENDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendName()
    {
        return $this->get(self::FRIENDNAME) !== null;
    }

    /**
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }

    /**
     * Sets value of 'friendType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendType($value)
    {
        return $this->set(self::FRIENDTYPE, $value);
    }

    /**
     * Returns value of 'friendType' property
     *
     * @return integer
     */
    public function getFriendType()
    {
        $value = $this->get(self::FRIENDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendType()
    {
        return $this->get(self::FRIENDTYPE) !== null;
    }

    /**
     * Sets value of 'friendshipLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendshipLevel($value)
    {
        return $this->set(self::FRIENDSHIPLEVEL, $value);
    }

    /**
     * Returns value of 'friendshipLevel' property
     *
     * @return integer
     */
    public function getFriendshipLevel()
    {
        $value = $this->get(self::FRIENDSHIPLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendshipLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendshipLevel()
    {
        return $this->get(self::FRIENDSHIPLEVEL) !== null;
    }

    /**
     * Sets value of 'friendNickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendNickName($value)
    {
        return $this->set(self::FRIENDNICKNAME, $value);
    }

    /**
     * Returns value of 'friendNickName' property
     *
     * @return string
     */
    public function getFriendNickName()
    {
        $value = $this->get(self::FRIENDNICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendNickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendNickName()
    {
        return $this->get(self::FRIENDNICKNAME) !== null;
    }

    /**
     * Sets value of 'groupID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupID($value)
    {
        return $this->set(self::GROUPID, $value);
    }

    /**
     * Returns value of 'groupID' property
     *
     * @return integer
     */
    public function getGroupID()
    {
        $value = $this->get(self::GROUPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupID()
    {
        return $this->get(self::GROUPID) !== null;
    }

    /**
     * Sets value of 'establishTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEstablishTime($value)
    {
        return $this->set(self::ESTABLISHTIME, $value);
    }

    /**
     * Returns value of 'establishTime' property
     *
     * @return integer
     */
    public function getEstablishTime()
    {
        $value = $this->get(self::ESTABLISHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'establishTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEstablishTime()
    {
        return $this->get(self::ESTABLISHTIME) !== null;
    }

    /**
     * Sets value of 'deleteTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeleteTime($value)
    {
        return $this->set(self::DELETETIME, $value);
    }

    /**
     * Returns value of 'deleteTime' property
     *
     * @return integer
     */
    public function getDeleteTime()
    {
        $value = $this->get(self::DELETETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deleteTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeleteTime()
    {
        return $this->get(self::DELETETIME) !== null;
    }
}
}