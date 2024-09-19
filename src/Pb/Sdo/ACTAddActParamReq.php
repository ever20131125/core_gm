<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTAddActParamReq message
 */
class ACTAddActParamReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const NPARAM = 2;
    const NVALUE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPARAM => array(
            'name' => 'nParam',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVALUE => array(
            'name' => 'nValue',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::NPARAM] = null;
        $this->values[self::NVALUE] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'nParam' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNParam($value)
    {
        return $this->set(self::NPARAM, $value);
    }

    /**
     * Returns value of 'nParam' property
     *
     * @return integer
     */
    public function getNParam()
    {
        $value = $this->get(self::NPARAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nParam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNParam()
    {
        return $this->get(self::NPARAM) !== null;
    }

    /**
     * Sets value of 'nValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNValue($value)
    {
        return $this->set(self::NVALUE, $value);
    }

    /**
     * Returns value of 'nValue' property
     *
     * @return integer
     */
    public function getNValue()
    {
        $value = $this->get(self::NVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNValue()
    {
        return $this->get(self::NVALUE) !== null;
    }
}
}