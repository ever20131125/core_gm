<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSDivorceNoti message
 */
class RLSDivorceNoti extends \ProtobufMessage
{
    /* Field index constants */
    const DIVORCERID = 1;
    const DIVORCERNAME = 2;
    const DIVORCEEID = 3;
    const DIVORCEENAME = 4;
    const MSG = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DIVORCERID => array(
            'name' => 'DivorcerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DIVORCERNAME => array(
            'name' => 'DivorcerName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DIVORCEEID => array(
            'name' => 'DivorceeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DIVORCEENAME => array(
            'name' => 'DivorceeName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::DIVORCERID] = null;
        $this->values[self::DIVORCERNAME] = null;
        $this->values[self::DIVORCEEID] = null;
        $this->values[self::DIVORCEENAME] = null;
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
     * Sets value of 'DivorcerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDivorcerID($value)
    {
        return $this->set(self::DIVORCERID, $value);
    }

    /**
     * Returns value of 'DivorcerID' property
     *
     * @return integer
     */
    public function getDivorcerID()
    {
        $value = $this->get(self::DIVORCERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'DivorcerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDivorcerID()
    {
        return $this->get(self::DIVORCERID) !== null;
    }

    /**
     * Sets value of 'DivorcerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDivorcerName($value)
    {
        return $this->set(self::DIVORCERNAME, $value);
    }

    /**
     * Returns value of 'DivorcerName' property
     *
     * @return string
     */
    public function getDivorcerName()
    {
        $value = $this->get(self::DIVORCERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'DivorcerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDivorcerName()
    {
        return $this->get(self::DIVORCERNAME) !== null;
    }

    /**
     * Sets value of 'DivorceeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDivorceeID($value)
    {
        return $this->set(self::DIVORCEEID, $value);
    }

    /**
     * Returns value of 'DivorceeID' property
     *
     * @return integer
     */
    public function getDivorceeID()
    {
        $value = $this->get(self::DIVORCEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'DivorceeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDivorceeID()
    {
        return $this->get(self::DIVORCEEID) !== null;
    }

    /**
     * Sets value of 'DivorceeName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDivorceeName($value)
    {
        return $this->set(self::DIVORCEENAME, $value);
    }

    /**
     * Returns value of 'DivorceeName' property
     *
     * @return string
     */
    public function getDivorceeName()
    {
        $value = $this->get(self::DIVORCEENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'DivorceeName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDivorceeName()
    {
        return $this->get(self::DIVORCEENAME) !== null;
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