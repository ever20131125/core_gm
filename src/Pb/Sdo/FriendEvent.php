<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendEvent message
 */
class FriendEvent extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const FRIENDID = 2;
    const FRIENDEVENTTYPE = 3;
    const TOTALCOUNT = 4;
    const OLDINTIMACY = 5;
    const NEWINTIMACY = 6;
    const SENDGIFTCHARM = 7;
    const SENDGIFTRICH = 8;

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
        self::FRIENDEVENTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendEventType::enmFriendEvent_None,
            'name' => 'friendEventType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALCOUNT => array(
            'name' => 'totalCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OLDINTIMACY => array(
            'name' => 'oldIntimacy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWINTIMACY => array(
            'name' => 'newIntimacy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SENDGIFTCHARM => array(
            'name' => 'sendGiftCharm',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SENDGIFTRICH => array(
            'name' => 'sendGiftRich',
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
        $this->values[self::FRIENDEVENTTYPE] = self::$fields[self::FRIENDEVENTTYPE]['default'];
        $this->values[self::TOTALCOUNT] = null;
        $this->values[self::OLDINTIMACY] = null;
        $this->values[self::NEWINTIMACY] = null;
        $this->values[self::SENDGIFTCHARM] = null;
        $this->values[self::SENDGIFTRICH] = null;
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
     * Sets value of 'friendEventType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendEventType($value)
    {
        return $this->set(self::FRIENDEVENTTYPE, $value);
    }

    /**
     * Returns value of 'friendEventType' property
     *
     * @return integer
     */
    public function getFriendEventType()
    {
        $value = $this->get(self::FRIENDEVENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendEventType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendEventType()
    {
        return $this->get(self::FRIENDEVENTTYPE) !== null;
    }

    /**
     * Sets value of 'totalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalCount($value)
    {
        return $this->set(self::TOTALCOUNT, $value);
    }

    /**
     * Returns value of 'totalCount' property
     *
     * @return integer
     */
    public function getTotalCount()
    {
        $value = $this->get(self::TOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalCount()
    {
        return $this->get(self::TOTALCOUNT) !== null;
    }

    /**
     * Sets value of 'oldIntimacy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOldIntimacy($value)
    {
        return $this->set(self::OLDINTIMACY, $value);
    }

    /**
     * Returns value of 'oldIntimacy' property
     *
     * @return integer
     */
    public function getOldIntimacy()
    {
        $value = $this->get(self::OLDINTIMACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'oldIntimacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOldIntimacy()
    {
        return $this->get(self::OLDINTIMACY) !== null;
    }

    /**
     * Sets value of 'newIntimacy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewIntimacy($value)
    {
        return $this->set(self::NEWINTIMACY, $value);
    }

    /**
     * Returns value of 'newIntimacy' property
     *
     * @return integer
     */
    public function getNewIntimacy()
    {
        $value = $this->get(self::NEWINTIMACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newIntimacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewIntimacy()
    {
        return $this->get(self::NEWINTIMACY) !== null;
    }

    /**
     * Sets value of 'sendGiftCharm' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendGiftCharm($value)
    {
        return $this->set(self::SENDGIFTCHARM, $value);
    }

    /**
     * Returns value of 'sendGiftCharm' property
     *
     * @return integer
     */
    public function getSendGiftCharm()
    {
        $value = $this->get(self::SENDGIFTCHARM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sendGiftCharm' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendGiftCharm()
    {
        return $this->get(self::SENDGIFTCHARM) !== null;
    }

    /**
     * Sets value of 'sendGiftRich' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendGiftRich($value)
    {
        return $this->set(self::SENDGIFTRICH, $value);
    }

    /**
     * Returns value of 'sendGiftRich' property
     *
     * @return integer
     */
    public function getSendGiftRich()
    {
        $value = $this->get(self::SENDGIFTRICH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sendGiftRich' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendGiftRich()
    {
        return $this->get(self::SENDGIFTRICH) !== null;
    }
}
}