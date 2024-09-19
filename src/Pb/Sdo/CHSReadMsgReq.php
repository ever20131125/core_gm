<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSReadMsgReq message
 */
class CHSReadMsgReq extends \ProtobufMessage
{
    /* Field index constants */
    const CHATTYPE = 1;
    const WAYS = 2;
    const ROLEID = 3;
    const CHATID = 4;
    const MSGIDLIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHATTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChatType::enmChatGroupType_Multi_Custom,
            'name' => 'chatType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WAYS => array(
            'name' => 'ways',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATID => array(
            'name' => 'chatID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGIDLIST => array(
            'name' => 'msgIDList',
            'repeated' => true,
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
        $this->values[self::WAYS] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::CHATID] = null;
        $this->values[self::MSGIDLIST] = array();
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
     * Sets value of 'ways' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWays($value)
    {
        return $this->set(self::WAYS, $value);
    }

    /**
     * Returns value of 'ways' property
     *
     * @return integer
     */
    public function getWays()
    {
        $value = $this->get(self::WAYS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ways' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWays()
    {
        return $this->get(self::WAYS) !== null;
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
     * Sets value of 'chatID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatID($value)
    {
        return $this->set(self::CHATID, $value);
    }

    /**
     * Returns value of 'chatID' property
     *
     * @return integer
     */
    public function getChatID()
    {
        $value = $this->get(self::CHATID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatID()
    {
        return $this->get(self::CHATID) !== null;
    }

    /**
     * Appends value to 'msgIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendMsgIDList($value)
    {
        return $this->append(self::MSGIDLIST, $value);
    }

    /**
     * Clears 'msgIDList' list
     *
     * @return null
     */
    public function clearMsgIDList()
    {
        return $this->clear(self::MSGIDLIST);
    }

    /**
     * Returns 'msgIDList' list
     *
     * @return integer[]
     */
    public function getMsgIDList()
    {
        return $this->get(self::MSGIDLIST);
    }

    /**
     * Returns true if 'msgIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgIDList()
    {
        return count($this->get(self::MSGIDLIST)) !== 0;
    }

    /**
     * Returns 'msgIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getMsgIDListIterator()
    {
        return new \ArrayIterator($this->get(self::MSGIDLIST));
    }

    /**
     * Returns element from 'msgIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getMsgIDListAt($offset)
    {
        return $this->get(self::MSGIDLIST, $offset);
    }

    /**
     * Returns count of 'msgIDList' list
     *
     * @return int
     */
    public function getMsgIDListCount()
    {
        return $this->count(self::MSGIDLIST);
    }
}
}