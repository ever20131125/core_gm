<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSBroadCastChatNoti message
 */
class CHSBroadCastChatNoti extends \ProtobufMessage
{
    /* Field index constants */
    const CHATTYPE = 1;
    const CONTENT = 2;
    const ROLEID = 3;
    const CHATSYTLE = 4;
    const SENDTIMES = 5;
    const PRIO = 6;
    const ISUSECARD = 7;
    const SPEAKERCARDID = 8;
    const DSTROLEID = 9;
    const CHATSN = 10;
    const OPTDATA = 11;
    const SRCROLEINFO = 12;
    const DSTROLEINFO = 13;
    const BROADID = 14;
    const ARRINT32 = 15;
    const ARRINT64 = 16;
    const ARRSTRING = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHATTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChatType::enmChatGroupType_Multi_Custom,
            'name' => 'chatType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATSYTLE => array(
            'name' => 'chatSytle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SENDTIMES => array(
            'name' => 'sendTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIO => array(
            'name' => 'prio',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISUSECARD => array(
            'name' => 'isUseCard',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPEAKERCARDID => array(
            'name' => 'speakerCardID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DSTROLEID => array(
            'name' => 'dstRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATSN => array(
            'name' => 'ChatSN',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTDATA => array(
            'name' => 'OptData',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SRCROLEINFO => array(
            'name' => 'srcRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ChatRoleInfo'
        ),
        self::DSTROLEINFO => array(
            'name' => 'dstRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ChatRoleInfo'
        ),
        self::BROADID => array(
            'name' => 'broadID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRINT32 => array(
            'name' => 'arrInt32',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRINT64 => array(
            'name' => 'arrInt64',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSTRING => array(
            'name' => 'arrString',
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
        $this->values[self::CHATTYPE] = self::$fields[self::CHATTYPE]['default'];
        $this->values[self::CONTENT] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::CHATSYTLE] = null;
        $this->values[self::SENDTIMES] = null;
        $this->values[self::PRIO] = null;
        $this->values[self::ISUSECARD] = null;
        $this->values[self::SPEAKERCARDID] = null;
        $this->values[self::DSTROLEID] = null;
        $this->values[self::CHATSN] = null;
        $this->values[self::OPTDATA] = null;
        $this->values[self::SRCROLEINFO] = null;
        $this->values[self::DSTROLEINFO] = null;
        $this->values[self::BROADID] = null;
        $this->values[self::ARRINT32] = array();
        $this->values[self::ARRINT64] = array();
        $this->values[self::ARRSTRING] = array();
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
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
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
     * Sets value of 'chatSytle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatSytle($value)
    {
        return $this->set(self::CHATSYTLE, $value);
    }

    /**
     * Returns value of 'chatSytle' property
     *
     * @return integer
     */
    public function getChatSytle()
    {
        $value = $this->get(self::CHATSYTLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatSytle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatSytle()
    {
        return $this->get(self::CHATSYTLE) !== null;
    }

    /**
     * Sets value of 'sendTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendTimes($value)
    {
        return $this->set(self::SENDTIMES, $value);
    }

    /**
     * Returns value of 'sendTimes' property
     *
     * @return integer
     */
    public function getSendTimes()
    {
        $value = $this->get(self::SENDTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sendTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendTimes()
    {
        return $this->get(self::SENDTIMES) !== null;
    }

    /**
     * Sets value of 'prio' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrio($value)
    {
        return $this->set(self::PRIO, $value);
    }

    /**
     * Returns value of 'prio' property
     *
     * @return integer
     */
    public function getPrio()
    {
        $value = $this->get(self::PRIO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'prio' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrio()
    {
        return $this->get(self::PRIO) !== null;
    }

    /**
     * Sets value of 'isUseCard' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsUseCard($value)
    {
        return $this->set(self::ISUSECARD, $value);
    }

    /**
     * Returns value of 'isUseCard' property
     *
     * @return integer
     */
    public function getIsUseCard()
    {
        $value = $this->get(self::ISUSECARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'isUseCard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsUseCard()
    {
        return $this->get(self::ISUSECARD) !== null;
    }

    /**
     * Sets value of 'speakerCardID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpeakerCardID($value)
    {
        return $this->set(self::SPEAKERCARDID, $value);
    }

    /**
     * Returns value of 'speakerCardID' property
     *
     * @return integer
     */
    public function getSpeakerCardID()
    {
        $value = $this->get(self::SPEAKERCARDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'speakerCardID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpeakerCardID()
    {
        return $this->get(self::SPEAKERCARDID) !== null;
    }

    /**
     * Sets value of 'dstRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDstRoleID($value)
    {
        return $this->set(self::DSTROLEID, $value);
    }

    /**
     * Returns value of 'dstRoleID' property
     *
     * @return integer
     */
    public function getDstRoleID()
    {
        $value = $this->get(self::DSTROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dstRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDstRoleID()
    {
        return $this->get(self::DSTROLEID) !== null;
    }

    /**
     * Sets value of 'ChatSN' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatSN($value)
    {
        return $this->set(self::CHATSN, $value);
    }

    /**
     * Returns value of 'ChatSN' property
     *
     * @return integer
     */
    public function getChatSN()
    {
        $value = $this->get(self::CHATSN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ChatSN' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatSN()
    {
        return $this->get(self::CHATSN) !== null;
    }

    /**
     * Sets value of 'OptData' property
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
     * Returns value of 'OptData' property
     *
     * @return integer
     */
    public function getOptData()
    {
        $value = $this->get(self::OPTDATA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'OptData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOptData()
    {
        return $this->get(self::OPTDATA) !== null;
    }

    /**
     * Sets value of 'srcRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ChatRoleInfo $value Property value
     *
     * @return null
     */
    public function setSrcRoleInfo(\Xnhd\Core\Pb\Sdo\ChatRoleInfo $value=null)
    {
        return $this->set(self::SRCROLEINFO, $value);
    }

    /**
     * Returns value of 'srcRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ChatRoleInfo
     */
    public function getSrcRoleInfo()
    {
        return $this->get(self::SRCROLEINFO);
    }

    /**
     * Returns true if 'srcRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSrcRoleInfo()
    {
        return $this->get(self::SRCROLEINFO) !== null;
    }

    /**
     * Sets value of 'dstRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ChatRoleInfo $value Property value
     *
     * @return null
     */
    public function setDstRoleInfo(\Xnhd\Core\Pb\Sdo\ChatRoleInfo $value=null)
    {
        return $this->set(self::DSTROLEINFO, $value);
    }

    /**
     * Returns value of 'dstRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ChatRoleInfo
     */
    public function getDstRoleInfo()
    {
        return $this->get(self::DSTROLEINFO);
    }

    /**
     * Returns true if 'dstRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDstRoleInfo()
    {
        return $this->get(self::DSTROLEINFO) !== null;
    }

    /**
     * Sets value of 'broadID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBroadID($value)
    {
        return $this->set(self::BROADID, $value);
    }

    /**
     * Returns value of 'broadID' property
     *
     * @return integer
     */
    public function getBroadID()
    {
        $value = $this->get(self::BROADID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'broadID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBroadID()
    {
        return $this->get(self::BROADID) !== null;
    }

    /**
     * Appends value to 'arrInt32' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrInt32($value)
    {
        return $this->append(self::ARRINT32, $value);
    }

    /**
     * Clears 'arrInt32' list
     *
     * @return null
     */
    public function clearArrInt32()
    {
        return $this->clear(self::ARRINT32);
    }

    /**
     * Returns 'arrInt32' list
     *
     * @return integer[]
     */
    public function getArrInt32()
    {
        return $this->get(self::ARRINT32);
    }

    /**
     * Returns true if 'arrInt32' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrInt32()
    {
        return count($this->get(self::ARRINT32)) !== 0;
    }

    /**
     * Returns 'arrInt32' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrInt32Iterator()
    {
        return new \ArrayIterator($this->get(self::ARRINT32));
    }

    /**
     * Returns element from 'arrInt32' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrInt32At($offset)
    {
        return $this->get(self::ARRINT32, $offset);
    }

    /**
     * Returns count of 'arrInt32' list
     *
     * @return int
     */
    public function getArrInt32Count()
    {
        return $this->count(self::ARRINT32);
    }

    /**
     * Appends value to 'arrInt64' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrInt64($value)
    {
        return $this->append(self::ARRINT64, $value);
    }

    /**
     * Clears 'arrInt64' list
     *
     * @return null
     */
    public function clearArrInt64()
    {
        return $this->clear(self::ARRINT64);
    }

    /**
     * Returns 'arrInt64' list
     *
     * @return integer[]
     */
    public function getArrInt64()
    {
        return $this->get(self::ARRINT64);
    }

    /**
     * Returns true if 'arrInt64' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrInt64()
    {
        return count($this->get(self::ARRINT64)) !== 0;
    }

    /**
     * Returns 'arrInt64' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrInt64Iterator()
    {
        return new \ArrayIterator($this->get(self::ARRINT64));
    }

    /**
     * Returns element from 'arrInt64' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrInt64At($offset)
    {
        return $this->get(self::ARRINT64, $offset);
    }

    /**
     * Returns count of 'arrInt64' list
     *
     * @return int
     */
    public function getArrInt64Count()
    {
        return $this->count(self::ARRINT64);
    }

    /**
     * Appends value to 'arrString' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrString($value)
    {
        return $this->append(self::ARRSTRING, $value);
    }

    /**
     * Clears 'arrString' list
     *
     * @return null
     */
    public function clearArrString()
    {
        return $this->clear(self::ARRSTRING);
    }

    /**
     * Returns 'arrString' list
     *
     * @return string[]
     */
    public function getArrString()
    {
        return $this->get(self::ARRSTRING);
    }

    /**
     * Returns true if 'arrString' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrString()
    {
        return count($this->get(self::ARRSTRING)) !== 0;
    }

    /**
     * Returns 'arrString' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStringIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTRING));
    }

    /**
     * Returns element from 'arrString' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrStringAt($offset)
    {
        return $this->get(self::ARRSTRING, $offset);
    }

    /**
     * Returns count of 'arrString' list
     *
     * @return int
     */
    public function getArrStringCount()
    {
        return $this->count(self::ARRSTRING);
    }
}
}