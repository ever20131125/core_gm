<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSDivorceReq message
 */
class RLSDivorceReq extends \ProtobufMessage
{
    /* Field index constants */
    const DIVORCEEID = 1;
    const MSG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DIVORCEEID => array(
            'name' => 'DivorceeID',
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
        $this->values[self::DIVORCEEID] = null;
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