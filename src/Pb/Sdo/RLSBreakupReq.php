<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBreakupReq message
 */
class RLSBreakupReq extends \ProtobufMessage
{
    /* Field index constants */
    const BREAKEEID = 1;
    const MSG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BREAKEEID => array(
            'name' => 'breakeeID',
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
        $this->values[self::BREAKEEID] = null;
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
     * Sets value of 'breakeeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBreakeeID($value)
    {
        return $this->set(self::BREAKEEID, $value);
    }

    /**
     * Returns value of 'breakeeID' property
     *
     * @return integer
     */
    public function getBreakeeID()
    {
        $value = $this->get(self::BREAKEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'breakeeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBreakeeID()
    {
        return $this->get(self::BREAKEEID) !== null;
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