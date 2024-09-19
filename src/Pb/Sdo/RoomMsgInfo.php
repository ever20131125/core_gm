<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomMsgInfo message
 */
class RoomMsgInfo extends \ProtobufMessage
{
    /* Field index constants */
    const MSGPOS = 1;
    const SZMSGTEXT = 2;
    const ARROPTION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MSGPOS => array(
            'name' => 'msgPos',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZMSGTEXT => array(
            'name' => 'szMsgText',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
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
        $this->values[self::MSGPOS] = null;
        $this->values[self::SZMSGTEXT] = null;
        $this->values[self::ARROPTION] = array();
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
     * Sets value of 'msgPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgPos($value)
    {
        return $this->set(self::MSGPOS, $value);
    }

    /**
     * Returns value of 'msgPos' property
     *
     * @return integer
     */
    public function getMsgPos()
    {
        $value = $this->get(self::MSGPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgPos()
    {
        return $this->get(self::MSGPOS) !== null;
    }

    /**
     * Sets value of 'szMsgText' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMsgText($value)
    {
        return $this->set(self::SZMSGTEXT, $value);
    }

    /**
     * Returns value of 'szMsgText' property
     *
     * @return string
     */
    public function getSzMsgText()
    {
        $value = $this->get(self::SZMSGTEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMsgText' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMsgText()
    {
        return $this->get(self::SZMSGTEXT) !== null;
    }

    /**
     * Appends value to 'arrOption' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOption($value)
    {
        return $this->append(self::ARROPTION, $value);
    }

    /**
     * Clears 'arrOption' list
     *
     * @return null
     */
    public function clearArrOption()
    {
        return $this->clear(self::ARROPTION);
    }

    /**
     * Returns 'arrOption' list
     *
     * @return integer[]
     */
    public function getArrOption()
    {
        return $this->get(self::ARROPTION);
    }

    /**
     * Returns true if 'arrOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption()
    {
        return count($this->get(self::ARROPTION)) !== 0;
    }

    /**
     * Returns 'arrOption' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOptionIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION));
    }

    /**
     * Returns element from 'arrOption' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOptionAt($offset)
    {
        return $this->get(self::ARROPTION, $offset);
    }

    /**
     * Returns count of 'arrOption' list
     *
     * @return int
     */
    public function getArrOptionCount()
    {
        return $this->count(self::ARROPTION);
    }
}
}