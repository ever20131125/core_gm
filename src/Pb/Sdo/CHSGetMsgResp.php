<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSGetMsgResp message
 */
class CHSGetMsgResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const CHATTYPE = 2;
    const ROLEID = 3;
    const CHATID = 4;
    const WAYS = 5;
    const TIMESTAMP = 6;
    const CHATMSGINFOLIST = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::CHATID => array(
            'name' => 'chatID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WAYS => array(
            'name' => 'ways',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATMSGINFOLIST => array(
            'name' => 'chatMsgInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ChatMsgInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::CHATTYPE] = self::$fields[self::CHATTYPE]['default'];
        $this->values[self::ROLEID] = null;
        $this->values[self::CHATID] = null;
        $this->values[self::WAYS] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::CHATMSGINFOLIST] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Appends value to 'chatMsgInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ChatMsgInfo $value Value to append
     *
     * @return null
     */
    public function appendChatMsgInfoList(\Xnhd\Core\Pb\Sdo\ChatMsgInfo $value)
    {
        return $this->append(self::CHATMSGINFOLIST, $value);
    }

    /**
     * Clears 'chatMsgInfoList' list
     *
     * @return null
     */
    public function clearChatMsgInfoList()
    {
        return $this->clear(self::CHATMSGINFOLIST);
    }

    /**
     * Returns 'chatMsgInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChatMsgInfo[]
     */
    public function getChatMsgInfoList()
    {
        return $this->get(self::CHATMSGINFOLIST);
    }

    /**
     * Returns true if 'chatMsgInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatMsgInfoList()
    {
        return count($this->get(self::CHATMSGINFOLIST)) !== 0;
    }

    /**
     * Returns 'chatMsgInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getChatMsgInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::CHATMSGINFOLIST));
    }

    /**
     * Returns element from 'chatMsgInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChatMsgInfo
     */
    public function getChatMsgInfoListAt($offset)
    {
        return $this->get(self::CHATMSGINFOLIST, $offset);
    }

    /**
     * Returns count of 'chatMsgInfoList' list
     *
     * @return int
     */
    public function getChatMsgInfoListCount()
    {
        return $this->count(self::CHATMSGINFOLIST);
    }
}
}