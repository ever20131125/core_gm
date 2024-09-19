<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSConfessReq message
 */
class RLSConfessReq extends \ProtobufMessage
{
    /* Field index constants */
    const CONFESSEEID = 1;
    const CONFESSIDCARD = 2;
    const MSG = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFESSEEID => array(
            'name' => 'confesseeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSIDCARD => array(
            'name' => 'confessIDCard',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::CONFESSEEID] = null;
        $this->values[self::CONFESSIDCARD] = null;
        $this->values[self::MSG] = null;
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
     * Sets value of 'confesseeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesseeID($value)
    {
        return $this->set(self::CONFESSEEID, $value);
    }

    /**
     * Returns value of 'confesseeID' property
     *
     * @return integer
     */
    public function getConfesseeID()
    {
        $value = $this->get(self::CONFESSEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesseeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesseeID()
    {
        return $this->get(self::CONFESSEEID) !== null;
    }

    /**
     * Sets value of 'confessIDCard' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfessIDCard($value)
    {
        return $this->set(self::CONFESSIDCARD, $value);
    }

    /**
     * Returns value of 'confessIDCard' property
     *
     * @return integer
     */
    public function getConfessIDCard()
    {
        $value = $this->get(self::CONFESSIDCARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confessIDCard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfessIDCard()
    {
        return $this->get(self::CONFESSIDCARD) !== null;
    }

    /**
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value)
    {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg()
    {
        $value = $this->get(self::MSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'msg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsg()
    {
        return $this->get(self::MSG) !== null;
    }
}
}