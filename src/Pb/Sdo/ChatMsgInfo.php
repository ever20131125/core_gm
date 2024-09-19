<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChatMsgInfo message
 */
class ChatMsgInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEINFO = 1;
    const CHATMSGLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ChatRoleInfo'
        ),
        self::CHATMSGLIST => array(
            'name' => 'chatMsgList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ChatMsgUnit'
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
        $this->values[self::ROLEINFO] = null;
        $this->values[self::CHATMSGLIST] = array();
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
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ChatRoleInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\ChatRoleInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ChatRoleInfo
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return $this->get(self::ROLEINFO) !== null;
    }

    /**
     * Appends value to 'chatMsgList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ChatMsgUnit $value Value to append
     *
     * @return null
     */
    public function appendChatMsgList(\Xnhd\Core\Pb\Sdo\ChatMsgUnit $value)
    {
        return $this->append(self::CHATMSGLIST, $value);
    }

    /**
     * Clears 'chatMsgList' list
     *
     * @return null
     */
    public function clearChatMsgList()
    {
        return $this->clear(self::CHATMSGLIST);
    }

    /**
     * Returns 'chatMsgList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChatMsgUnit[]
     */
    public function getChatMsgList()
    {
        return $this->get(self::CHATMSGLIST);
    }

    /**
     * Returns true if 'chatMsgList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatMsgList()
    {
        return count($this->get(self::CHATMSGLIST)) !== 0;
    }

    /**
     * Returns 'chatMsgList' iterator
     *
     * @return \ArrayIterator
     */
    public function getChatMsgListIterator()
    {
        return new \ArrayIterator($this->get(self::CHATMSGLIST));
    }

    /**
     * Returns element from 'chatMsgList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChatMsgUnit
     */
    public function getChatMsgListAt($offset)
    {
        return $this->get(self::CHATMSGLIST, $offset);
    }

    /**
     * Returns count of 'chatMsgList' list
     *
     * @return int
     */
    public function getChatMsgListCount()
    {
        return $this->count(self::CHATMSGLIST);
    }
}
}