<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendInfo message
 */
class FriendInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const FRIENDID = 2;
    const FRIENDTYPE = 3;
    const FRIENDINTIMACY = 4;
    const INTIMACYLEVEL = 5;
    const NICKNAME = 6;
    const FOLLOWTIME = 7;
    const ACTIONTIME = 8;
    const SENDFCOIN = 9;
    const RECEIVEFCOIN = 10;
    const RECVFAME = 11;
    const SENDFAME = 12;
    const COUPLE = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDTYPE => array(
            'name' => 'friendType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDINTIMACY => array(
            'name' => 'friendIntimacy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INTIMACYLEVEL => array(
            'name' => 'intimacyLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FOLLOWTIME => array(
            'name' => 'followTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTIONTIME => array(
            'name' => 'actionTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SENDFCOIN => array(
            'name' => 'sendFCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECEIVEFCOIN => array(
            'name' => 'receiveFCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECVFAME => array(
            'name' => 'recvFame',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SENDFAME => array(
            'name' => 'sendFame',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUPLE => array(
            'name' => 'couple',
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::FRIENDTYPE] = null;
        $this->values[self::FRIENDINTIMACY] = null;
        $this->values[self::INTIMACYLEVEL] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::FOLLOWTIME] = null;
        $this->values[self::ACTIONTIME] = null;
        $this->values[self::SENDFCOIN] = null;
        $this->values[self::RECEIVEFCOIN] = null;
        $this->values[self::RECVFAME] = null;
        $this->values[self::SENDFAME] = null;
        $this->values[self::COUPLE] = null;
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
     * Sets value of 'friendIntimacy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendIntimacy($value)
    {
        return $this->set(self::FRIENDINTIMACY, $value);
    }

    /**
     * Returns value of 'friendIntimacy' property
     *
     * @return integer
     */
    public function getFriendIntimacy()
    {
        $value = $this->get(self::FRIENDINTIMACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendIntimacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendIntimacy()
    {
        return $this->get(self::FRIENDINTIMACY) !== null;
    }

    /**
     * Sets value of 'intimacyLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIntimacyLevel($value)
    {
        return $this->set(self::INTIMACYLEVEL, $value);
    }

    /**
     * Returns value of 'intimacyLevel' property
     *
     * @return integer
     */
    public function getIntimacyLevel()
    {
        $value = $this->get(self::INTIMACYLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'intimacyLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIntimacyLevel()
    {
        return $this->get(self::INTIMACYLEVEL) !== null;
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
     * Sets value of 'followTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFollowTime($value)
    {
        return $this->set(self::FOLLOWTIME, $value);
    }

    /**
     * Returns value of 'followTime' property
     *
     * @return integer
     */
    public function getFollowTime()
    {
        $value = $this->get(self::FOLLOWTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'followTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFollowTime()
    {
        return $this->get(self::FOLLOWTIME) !== null;
    }

    /**
     * Sets value of 'actionTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActionTime($value)
    {
        return $this->set(self::ACTIONTIME, $value);
    }

    /**
     * Returns value of 'actionTime' property
     *
     * @return integer
     */
    public function getActionTime()
    {
        $value = $this->get(self::ACTIONTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actionTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActionTime()
    {
        return $this->get(self::ACTIONTIME) !== null;
    }

    /**
     * Sets value of 'sendFCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendFCoin($value)
    {
        return $this->set(self::SENDFCOIN, $value);
    }

    /**
     * Returns value of 'sendFCoin' property
     *
     * @return integer
     */
    public function getSendFCoin()
    {
        $value = $this->get(self::SENDFCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sendFCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendFCoin()
    {
        return $this->get(self::SENDFCOIN) !== null;
    }

    /**
     * Sets value of 'receiveFCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReceiveFCoin($value)
    {
        return $this->set(self::RECEIVEFCOIN, $value);
    }

    /**
     * Returns value of 'receiveFCoin' property
     *
     * @return integer
     */
    public function getReceiveFCoin()
    {
        $value = $this->get(self::RECEIVEFCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'receiveFCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReceiveFCoin()
    {
        return $this->get(self::RECEIVEFCOIN) !== null;
    }

    /**
     * Sets value of 'recvFame' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecvFame($value)
    {
        return $this->set(self::RECVFAME, $value);
    }

    /**
     * Returns value of 'recvFame' property
     *
     * @return integer
     */
    public function getRecvFame()
    {
        $value = $this->get(self::RECVFAME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recvFame' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecvFame()
    {
        return $this->get(self::RECVFAME) !== null;
    }

    /**
     * Sets value of 'sendFame' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendFame($value)
    {
        return $this->set(self::SENDFAME, $value);
    }

    /**
     * Returns value of 'sendFame' property
     *
     * @return integer
     */
    public function getSendFame()
    {
        $value = $this->get(self::SENDFAME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sendFame' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendFame()
    {
        return $this->get(self::SENDFAME) !== null;
    }

    /**
     * Sets value of 'couple' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCouple($value)
    {
        return $this->set(self::COUPLE, $value);
    }

    /**
     * Returns value of 'couple' property
     *
     * @return integer
     */
    public function getCouple()
    {
        $value = $this->get(self::COUPLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'couple' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCouple()
    {
        return $this->get(self::COUPLE) !== null;
    }
}
}