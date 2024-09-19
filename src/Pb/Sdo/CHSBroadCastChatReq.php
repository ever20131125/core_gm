<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSBroadCastChatReq message
 */
class CHSBroadCastChatReq extends \ProtobufMessage
{
    /* Field index constants */
    const BROADTYPE = 1;
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
    const ZONEID = 12;
    const NSPEAKERSOURCETYPE = 13;
    const BROADID = 14;
    const ARRINT32 = 15;
    const ARRINT64 = 16;
    const ARRSTRING = 17;
    const TIMETICK = 18;
    const STRTOKEN = 19;
    const CHATSCENE = 20;
    const CHATCONTENTTYPE = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BROADTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChatType::enmChatGroupType_Multi_Custom,
            'name' => 'broadType',
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
        self::ZONEID => array(
            'name' => 'ZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSPEAKERSOURCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SpeakerSourceType::enmSpeakerSourceType_Common,
            'name' => 'nSpeakerSourceType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::CHATSCENE => array(
            'name' => 'chatScene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATCONTENTTYPE => array(
            'name' => 'chatContentType',
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
        $this->values[self::BROADTYPE] = self::$fields[self::BROADTYPE]['default'];
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
        $this->values[self::ZONEID] = null;
        $this->values[self::NSPEAKERSOURCETYPE] = self::$fields[self::NSPEAKERSOURCETYPE]['default'];
        $this->values[self::BROADID] = null;
        $this->values[self::ARRINT32] = array();
        $this->values[self::ARRINT64] = array();
        $this->values[self::ARRSTRING] = array();
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
        $this->values[self::CHATSCENE] = null;
        $this->values[self::CHATCONTENTTYPE] = null;
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
     * Sets value of 'broadType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBroadType($value)
    {
        return $this->set(self::BROADTYPE, $value);
    }

    /**
     * Returns value of 'broadType' property
     *
     * @return integer
     */
    public function getBroadType()
    {
        $value = $this->get(self::BROADTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'broadType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBroadType()
    {
        return $this->get(self::BROADTYPE) !== null;
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
     * Sets value of 'ZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneID($value)
    {
        return $this->set(self::ZONEID, $value);
    }

    /**
     * Returns value of 'ZoneID' property
     *
     * @return integer
     */
    public function getZoneID()
    {
        $value = $this->get(self::ZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneID()
    {
        return $this->get(self::ZONEID) !== null;
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

    /**
     * Sets value of 'chatScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatScene($value)
    {
        return $this->set(self::CHATSCENE, $value);
    }

    /**
     * Returns value of 'chatScene' property
     *
     * @return integer
     */
    public function getChatScene()
    {
        $value = $this->get(self::CHATSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatScene()
    {
        return $this->get(self::CHATSCENE) !== null;
    }

    /**
     * Sets value of 'chatContentType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatContentType($value)
    {
        return $this->set(self::CHATCONTENTTYPE, $value);
    }

    /**
     * Returns value of 'chatContentType' property
     *
     * @return integer
     */
    public function getChatContentType()
    {
        $value = $this->get(self::CHATCONTENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatContentType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatContentType()
    {
        return $this->get(self::CHATCONTENTTYPE) !== null;
    }
}
}