<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSChatNoti message
 */
class CHSChatNoti extends \ProtobufMessage
{
    /* Field index constants */
    const CHATTYPE = 1;
    const CONTENT = 2;
    const CHATSYTLE = 3;
    const GROUPID = 4;
    const FLAG = 5;
    const PRIO = 6;
    const CHATSN = 7;
    const OPTDATA = 8;
    const SRCROLEINFO = 9;
    const DSTROLEINFO = 10;
    const SPEAKERCARDID = 11;
    const TIMESTAMP = 12;
    const NSPEAKERSOURCETYPE = 13;

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
        self::CHATSYTLE => array(
            'name' => 'chatSytle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPID => array(
            'name' => 'groupID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FLAG => array(
            'name' => 'flag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIO => array(
            'name' => 'prio',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATSN => array(
            'name' => 'chatSN',
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
        self::SPEAKERCARDID => array(
            'name' => 'speakerCardID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
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
        $this->values[self::CONTENT] = null;
        $this->values[self::CHATSYTLE] = null;
        $this->values[self::GROUPID] = null;
        $this->values[self::FLAG] = null;
        $this->values[self::PRIO] = null;
        $this->values[self::CHATSN] = null;
        $this->values[self::OPTDATA] = null;
        $this->values[self::SRCROLEINFO] = null;
        $this->values[self::DSTROLEINFO] = null;
        $this->values[self::SPEAKERCARDID] = null;
        $this->values[self::TIMESTAMP] = null;
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
     * Sets value of 'flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlag($value)
    {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return integer
     */
    public function getFlag()
    {
        $value = $this->get(self::FLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'flag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlag()
    {
        return $this->get(self::FLAG) !== null;
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
     * Sets value of 'chatSN' property
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
     * Returns value of 'chatSN' property
     *
     * @return integer
     */
    public function getChatSN()
    {
        $value = $this->get(self::CHATSN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatSN' property is set, false otherwise
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
     * Sets value of 'timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestamp()
    {
        return $this->get(self::TIMESTAMP) !== null;
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