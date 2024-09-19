<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AskFriendInfo message
 */
class AskFriendInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDID = 1;
    const FRIENDTYPE = 2;
    const ASKNAME = 3;
    const MESSAGE = 4;
    const FRIENDINTIMACY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDTYPE => array(
            'name' => 'friendType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASKNAME => array(
            'name' => 'askName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FRIENDINTIMACY => array(
            'name' => 'friendIntimacy',
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::FRIENDTYPE] = null;
        $this->values[self::ASKNAME] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::FRIENDINTIMACY] = null;
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
     * Sets value of 'friendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendID($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendID' property
     *
     * @return integer
     */
    public function getFriendID()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Sets value of 'friendType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendType($value)
    {
        return $this->set(self::FRIENDTYPE, $value);
    }

    /**
     * Returns value of 'friendType' property
     *
     * @return integer
     */
    public function getFriendType()
    {
        $value = $this->get(self::FRIENDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendType()
    {
        return $this->get(self::FRIENDTYPE) !== null;
    }

    /**
     * Sets value of 'askName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAskName($value)
    {
        return $this->set(self::ASKNAME, $value);
    }

    /**
     * Returns value of 'askName' property
     *
     * @return string
     */
    public function getAskName()
    {
        $value = $this->get(self::ASKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'askName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAskName()
    {
        return $this->get(self::ASKNAME) !== null;
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        $value = $this->get(self::MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessage()
    {
        return $this->get(self::MESSAGE) !== null;
    }

    /**
     * Sets value of 'friendIntimacy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendIntimacy($value)
    {
        return $this->set(self::FRIENDINTIMACY, $value);
    }

    /**
     * Returns value of 'friendIntimacy' property
     *
     * @return integer
     */
    public function getFriendIntimacy()
    {
        $value = $this->get(self::FRIENDINTIMACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendIntimacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendIntimacy()
    {
        return $this->get(self::FRIENDINTIMACY) !== null;
    }
}
}