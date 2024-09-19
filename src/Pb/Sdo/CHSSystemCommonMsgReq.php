<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSSystemCommonMsgReq message
 */
class CHSSystemCommonMsgReq extends \ProtobufMessage
{
    /* Field index constants */
    const CHATTYPE = 1;
    const ROLEIDLIST = 2;
    const PRIO = 3;
    const STYLE1 = 4;
    const STYLE2 = 5;
    const STYLE3 = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHATTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChatType::enmChatGroupType_Multi_Custom,
            'name' => 'chatType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEIDLIST => array(
            'name' => 'roleIDList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIO => array(
            'name' => 'prio',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STYLE1 => array(
            'name' => 'style1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STYLE2 => array(
            'name' => 'style2',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STYLE3 => array(
            'name' => 'style3',
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
        $this->values[self::ROLEIDLIST] = array();
        $this->values[self::PRIO] = null;
        $this->values[self::STYLE1] = null;
        $this->values[self::STYLE2] = array();
        $this->values[self::STYLE3] = null;
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
     * Appends value to 'roleIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRoleIDList($value)
    {
        return $this->append(self::ROLEIDLIST, $value);
    }

    /**
     * Clears 'roleIDList' list
     *
     * @return null
     */
    public function clearRoleIDList()
    {
        return $this->clear(self::ROLEIDLIST);
    }

    /**
     * Returns 'roleIDList' list
     *
     * @return integer[]
     */
    public function getRoleIDList()
    {
        return $this->get(self::ROLEIDLIST);
    }

    /**
     * Returns true if 'roleIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleIDList()
    {
        return count($this->get(self::ROLEIDLIST)) !== 0;
    }

    /**
     * Returns 'roleIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getRoleIDListIterator()
    {
        return new \ArrayIterator($this->get(self::ROLEIDLIST));
    }

    /**
     * Returns element from 'roleIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRoleIDListAt($offset)
    {
        return $this->get(self::ROLEIDLIST, $offset);
    }

    /**
     * Returns count of 'roleIDList' list
     *
     * @return int
     */
    public function getRoleIDListCount()
    {
        return $this->count(self::ROLEIDLIST);
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
     * Sets value of 'style1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStyle1($value)
    {
        return $this->set(self::STYLE1, $value);
    }

    /**
     * Returns value of 'style1' property
     *
     * @return integer
     */
    public function getStyle1()
    {
        $value = $this->get(self::STYLE1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'style1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStyle1()
    {
        return $this->get(self::STYLE1) !== null;
    }

    /**
     * Appends value to 'style2' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendStyle2($value)
    {
        return $this->append(self::STYLE2, $value);
    }

    /**
     * Clears 'style2' list
     *
     * @return null
     */
    public function clearStyle2()
    {
        return $this->clear(self::STYLE2);
    }

    /**
     * Returns 'style2' list
     *
     * @return integer[]
     */
    public function getStyle2()
    {
        return $this->get(self::STYLE2);
    }

    /**
     * Returns true if 'style2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStyle2()
    {
        return count($this->get(self::STYLE2)) !== 0;
    }

    /**
     * Returns 'style2' iterator
     *
     * @return \ArrayIterator
     */
    public function getStyle2Iterator()
    {
        return new \ArrayIterator($this->get(self::STYLE2));
    }

    /**
     * Returns element from 'style2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getStyle2At($offset)
    {
        return $this->get(self::STYLE2, $offset);
    }

    /**
     * Returns count of 'style2' list
     *
     * @return int
     */
    public function getStyle2Count()
    {
        return $this->count(self::STYLE2);
    }

    /**
     * Sets value of 'style3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStyle3($value)
    {
        return $this->set(self::STYLE3, $value);
    }

    /**
     * Returns value of 'style3' property
     *
     * @return integer
     */
    public function getStyle3()
    {
        $value = $this->get(self::STYLE3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'style3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStyle3()
    {
        return $this->get(self::STYLE3) !== null;
    }
}
}