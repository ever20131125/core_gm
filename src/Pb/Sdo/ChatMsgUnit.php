<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChatMsgUnit message
 */
class ChatMsgUnit extends \ProtobufMessage
{
    /* Field index constants */
    const SENDERID = 1;
    const RECVERID = 2;
    const MSGID = 3;
    const MSGSTATE = 4;
    const CONTENT = 5;
    const STYLE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDERID => array(
            'name' => 'senderID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECVERID => array(
            'name' => 'recverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGID => array(
            'name' => 'msgID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGSTATE => array(
            'name' => 'msgState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STYLE => array(
            'name' => 'style',
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
        $this->values[self::SENDERID] = null;
        $this->values[self::RECVERID] = null;
        $this->values[self::MSGID] = null;
        $this->values[self::MSGSTATE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::STYLE] = null;
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
     * Sets value of 'senderID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSenderID($value)
    {
        return $this->set(self::SENDERID, $value);
    }

    /**
     * Returns value of 'senderID' property
     *
     * @return integer
     */
    public function getSenderID()
    {
        $value = $this->get(self::SENDERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'senderID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSenderID()
    {
        return $this->get(self::SENDERID) !== null;
    }

    /**
     * Sets value of 'recverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecverID($value)
    {
        return $this->set(self::RECVERID, $value);
    }

    /**
     * Returns value of 'recverID' property
     *
     * @return integer
     */
    public function getRecverID()
    {
        $value = $this->get(self::RECVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecverID()
    {
        return $this->get(self::RECVERID) !== null;
    }

    /**
     * Sets value of 'msgID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgID($value)
    {
        return $this->set(self::MSGID, $value);
    }

    /**
     * Returns value of 'msgID' property
     *
     * @return integer
     */
    public function getMsgID()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgID()
    {
        return $this->get(self::MSGID) !== null;
    }

    /**
     * Sets value of 'msgState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgState($value)
    {
        return $this->set(self::MSGSTATE, $value);
    }

    /**
     * Returns value of 'msgState' property
     *
     * @return integer
     */
    public function getMsgState()
    {
        $value = $this->get(self::MSGSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgState()
    {
        return $this->get(self::MSGSTATE) !== null;
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
     * Sets value of 'style' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStyle($value)
    {
        return $this->set(self::STYLE, $value);
    }

    /**
     * Returns value of 'style' property
     *
     * @return integer
     */
    public function getStyle()
    {
        $value = $this->get(self::STYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'style' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStyle()
    {
        return $this->get(self::STYLE) !== null;
    }
}
}