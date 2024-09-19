<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBreakupNoti message
 */
class RLSBreakupNoti extends \ProtobufMessage
{
    /* Field index constants */
    const BREAKERID = 1;
    const BREAKERNAME = 2;
    const BREAKEEID = 3;
    const BREAKEENAME = 4;
    const MSG = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BREAKERID => array(
            'name' => 'breakerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BREAKERNAME => array(
            'name' => 'breakerName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BREAKEEID => array(
            'name' => 'breakeeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BREAKEENAME => array(
            'name' => 'breakeeName',
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
        $this->values[self::BREAKERID] = null;
        $this->values[self::BREAKERNAME] = null;
        $this->values[self::BREAKEEID] = null;
        $this->values[self::BREAKEENAME] = null;
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
     * Sets value of 'breakerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBreakerID($value)
    {
        return $this->set(self::BREAKERID, $value);
    }

    /**
     * Returns value of 'breakerID' property
     *
     * @return integer
     */
    public function getBreakerID()
    {
        $value = $this->get(self::BREAKERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'breakerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBreakerID()
    {
        return $this->get(self::BREAKERID) !== null;
    }

    /**
     * Sets value of 'breakerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBreakerName($value)
    {
        return $this->set(self::BREAKERNAME, $value);
    }

    /**
     * Returns value of 'breakerName' property
     *
     * @return string
     */
    public function getBreakerName()
    {
        $value = $this->get(self::BREAKERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'breakerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBreakerName()
    {
        return $this->get(self::BREAKERNAME) !== null;
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
     * Sets value of 'breakeeName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBreakeeName($value)
    {
        return $this->set(self::BREAKEENAME, $value);
    }

    /**
     * Returns value of 'breakeeName' property
     *
     * @return string
     */
    public function getBreakeeName()
    {
        $value = $this->get(self::BREAKEENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'breakeeName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBreakeeName()
    {
        return $this->get(self::BREAKEENAME) !== null;
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