<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SendSpeakerEvent message
 */
class SendSpeakerEvent extends \ProtobufMessage
{
    /* Field index constants */
    const CHATTYPE = 1;
    const ROLEID = 2;
    const DESTID = 3;
    const CHATSTYLE = 4;
    const CARDITEMID = 5;
    const OPTDATA = 6;
    const CHATFLAG = 7;
    const GROUPID = 8;
    const NSPEAKERSOURCETYPE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHATTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChatType::enmChatGroupType_Multi_Custom,
            'name' => 'chatType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESTID => array(
            'name' => 'destID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATSTYLE => array(
            'name' => 'chatStyle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CARDITEMID => array(
            'name' => 'cardItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTDATA => array(
            'name' => 'optData',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATFLAG => array(
            'name' => 'chatFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPID => array(
            'name' => 'groupID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSPEAKERSOURCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SpeakerSourceType::enmSpeakerSourceType_Common,
            'name' => 'nSpeakerSourceType',
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
        $this->values[self::CHATTYPE] = self::$fields[self::CHATTYPE]['default'];
        $this->values[self::ROLEID] = null;
        $this->values[self::DESTID] = array();
        $this->values[self::CHATSTYLE] = null;
        $this->values[self::CARDITEMID] = null;
        $this->values[self::OPTDATA] = null;
        $this->values[self::CHATFLAG] = null;
        $this->values[self::GROUPID] = null;
        $this->values[self::NSPEAKERSOURCETYPE] = self::$fields[self::NSPEAKERSOURCETYPE]['default'];
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
     * Sets value of 'chatType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatType($value)
    {
        return $this->set(self::CHATTYPE, $value);
    }

    /**
     * Returns value of 'chatType' property
     *
     * @return integer
     */
    public function getChatType()
    {
        $value = $this->get(self::CHATTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatType()
    {
        return $this->get(self::CHATTYPE) !== null;
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
     * Appends value to 'destID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDestID($value)
    {
        return $this->append(self::DESTID, $value);
    }

    /**
     * Clears 'destID' list
     *
     * @return null
     */
    public function clearDestID()
    {
        return $this->clear(self::DESTID);
    }

    /**
     * Returns 'destID' list
     *
     * @return integer[]
     */
    public function getDestID()
    {
        return $this->get(self::DESTID);
    }

    /**
     * Returns true if 'destID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDestID()
    {
        return count($this->get(self::DESTID)) !== 0;
    }

    /**
     * Returns 'destID' iterator
     *
     * @return \ArrayIterator
     */
    public function getDestIDIterator()
    {
        return new \ArrayIterator($this->get(self::DESTID));
    }

    /**
     * Returns element from 'destID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDestIDAt($offset)
    {
        return $this->get(self::DESTID, $offset);
    }

    /**
     * Returns count of 'destID' list
     *
     * @return int
     */
    public function getDestIDCount()
    {
        return $this->count(self::DESTID);
    }

    /**
     * Sets value of 'chatStyle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatStyle($value)
    {
        return $this->set(self::CHATSTYLE, $value);
    }

    /**
     * Returns value of 'chatStyle' property
     *
     * @return integer
     */
    public function getChatStyle()
    {
        $value = $this->get(self::CHATSTYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatStyle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatStyle()
    {
        return $this->get(self::CHATSTYLE) !== null;
    }

    /**
     * Sets value of 'cardItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCardItemID($value)
    {
        return $this->set(self::CARDITEMID, $value);
    }

    /**
     * Returns value of 'cardItemID' property
     *
     * @return integer
     */
    public function getCardItemID()
    {
        $value = $this->get(self::CARDITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cardItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCardItemID()
    {
        return $this->get(self::CARDITEMID) !== null;
    }

    /**
     * Sets value of 'optData' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOptData($value)
    {
        return $this->set(self::OPTDATA, $value);
    }

    /**
     * Returns value of 'optData' property
     *
     * @return integer
     */
    public function getOptData()
    {
        $value = $this->get(self::OPTDATA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'optData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOptData()
    {
        return $this->get(self::OPTDATA) !== null;
    }

    /**
     * Sets value of 'chatFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatFlag($value)
    {
        return $this->set(self::CHATFLAG, $value);
    }

    /**
     * Returns value of 'chatFlag' property
     *
     * @return integer
     */
    public function getChatFlag()
    {
        $value = $this->get(self::CHATFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatFlag()
    {
        return $this->get(self::CHATFLAG) !== null;
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
     * Sets value of 'nSpeakerSourceType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSpeakerSourceType($value)
    {
        return $this->set(self::NSPEAKERSOURCETYPE, $value);
    }

    /**
     * Returns value of 'nSpeakerSourceType' property
     *
     * @return integer
     */
    public function getNSpeakerSourceType()
    {
        $value = $this->get(self::NSPEAKERSOURCETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSpeakerSourceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSpeakerSourceType()
    {
        return $this->get(self::NSPEAKERSOURCETYPE) !== null;
    }
}
}