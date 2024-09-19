<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSMultiCastChatReq message
 */
class CHSMultiCastChatReq extends \ProtobufMessage
{
    /* Field index constants */
    const MULTITYPE = 1;
    const CONTENT = 2;
    const ROLEID = 3;
    const CHATSYTLE = 4;
    const GROUPID = 5;
    const DESTROLEIDLIST = 6;
    const CHATSN = 7;
    const CHATOPT = 8;
    const TIMETICK = 9;
    const STRTOKEN = 10;
    const CHATSCENE = 11;
    const CHATCONTENTTYPE = 12;
    const RELATIONSHIP = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MULTITYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChatType::enmChatGroupType_Multi_Custom,
            'name' => 'multiType',
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
        self::GROUPID => array(
            'name' => 'groupID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESTROLEIDLIST => array(
            'name' => 'destRoleIDList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATSN => array(
            'name' => 'chatSN',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATOPT => array(
            'name' => 'chatOpt',
            'required' => false,
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
        self::RELATIONSHIP => array(
            'name' => 'relationShip',
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
        $this->values[self::MULTITYPE] = self::$fields[self::MULTITYPE]['default'];
        $this->values[self::CONTENT] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::CHATSYTLE] = null;
        $this->values[self::GROUPID] = null;
        $this->values[self::DESTROLEIDLIST] = array();
        $this->values[self::CHATSN] = null;
        $this->values[self::CHATOPT] = null;
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
        $this->values[self::CHATSCENE] = null;
        $this->values[self::CHATCONTENTTYPE] = null;
        $this->values[self::RELATIONSHIP] = null;
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
     * Sets value of 'multiType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMultiType($value)
    {
        return $this->set(self::MULTITYPE, $value);
    }

    /**
     * Returns value of 'multiType' property
     *
     * @return integer
     */
    public function getMultiType()
    {
        $value = $this->get(self::MULTITYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'multiType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMultiType()
    {
        return $this->get(self::MULTITYPE) !== null;
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
     * Appends value to 'destRoleIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDestRoleIDList($value)
    {
        return $this->append(self::DESTROLEIDLIST, $value);
    }

    /**
     * Clears 'destRoleIDList' list
     *
     * @return null
     */
    public function clearDestRoleIDList()
    {
        return $this->clear(self::DESTROLEIDLIST);
    }

    /**
     * Returns 'destRoleIDList' list
     *
     * @return integer[]
     */
    public function getDestRoleIDList()
    {
        return $this->get(self::DESTROLEIDLIST);
    }

    /**
     * Returns true if 'destRoleIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDestRoleIDList()
    {
        return count($this->get(self::DESTROLEIDLIST)) !== 0;
    }

    /**
     * Returns 'destRoleIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getDestRoleIDListIterator()
    {
        return new \ArrayIterator($this->get(self::DESTROLEIDLIST));
    }

    /**
     * Returns element from 'destRoleIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDestRoleIDListAt($offset)
    {
        return $this->get(self::DESTROLEIDLIST, $offset);
    }

    /**
     * Returns count of 'destRoleIDList' list
     *
     * @return int
     */
    public function getDestRoleIDListCount()
    {
        return $this->count(self::DESTROLEIDLIST);
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
     * Sets value of 'chatOpt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatOpt($value)
    {
        return $this->set(self::CHATOPT, $value);
    }

    /**
     * Returns value of 'chatOpt' property
     *
     * @return integer
     */
    public function getChatOpt()
    {
        $value = $this->get(self::CHATOPT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatOpt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatOpt()
    {
        return $this->get(self::CHATOPT) !== null;
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

    /**
     * Sets value of 'relationShip' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRelationShip($value)
    {
        return $this->set(self::RELATIONSHIP, $value);
    }

    /**
     * Returns value of 'relationShip' property
     *
     * @return integer
     */
    public function getRelationShip()
    {
        $value = $this->get(self::RELATIONSHIP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'relationShip' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRelationShip()
    {
        return $this->get(self::RELATIONSHIP) !== null;
    }
}
}