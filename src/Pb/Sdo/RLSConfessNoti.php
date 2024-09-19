<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSConfessNoti message
 */
class RLSConfessNoti extends \ProtobufMessage
{
    /* Field index constants */
    const CONFESSERID = 1;
    const CONFESSERNAME = 2;
    const CONFESSEEID = 3;
    const CONFESSEENAME = 4;
    const CONFESSIDCARD = 5;
    const MSG = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFESSERID => array(
            'name' => 'confesserID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSERNAME => array(
            'name' => 'confesserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONFESSEEID => array(
            'name' => 'confesseeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSEENAME => array(
            'name' => 'confesseeName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::CONFESSERID] = null;
        $this->values[self::CONFESSERNAME] = null;
        $this->values[self::CONFESSEEID] = null;
        $this->values[self::CONFESSEENAME] = null;
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
     * Sets value of 'confesserID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesserID($value)
    {
        return $this->set(self::CONFESSERID, $value);
    }

    /**
     * Returns value of 'confesserID' property
     *
     * @return integer
     */
    public function getConfesserID()
    {
        $value = $this->get(self::CONFESSERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesserID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesserID()
    {
        return $this->get(self::CONFESSERID) !== null;
    }

    /**
     * Sets value of 'confesserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConfesserName($value)
    {
        return $this->set(self::CONFESSERNAME, $value);
    }

    /**
     * Returns value of 'confesserName' property
     *
     * @return string
     */
    public function getConfesserName()
    {
        $value = $this->get(self::CONFESSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'confesserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesserName()
    {
        return $this->get(self::CONFESSERNAME) !== null;
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
     * Sets value of 'confesseeName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConfesseeName($value)
    {
        return $this->set(self::CONFESSEENAME, $value);
    }

    /**
     * Returns value of 'confesseeName' property
     *
     * @return string
     */
    public function getConfesseeName()
    {
        $value = $this->get(self::CONFESSEENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'confesseeName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesseeName()
    {
        return $this->get(self::CONFESSEENAME) !== null;
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