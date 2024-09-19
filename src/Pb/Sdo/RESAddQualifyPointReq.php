<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESAddQualifyPointReq message
 */
class RESAddQualifyPointReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const POINT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POINT => array(
            'name' => 'point',
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
        $this->values[self::POINT] = null;
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
     * Sets value of 'point' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPoint($value)
    {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return integer
     */
    public function getPoint()
    {
        $value = $this->get(self::POINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'point' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPoint()
    {
        return $this->get(self::POINT) !== null;
    }
}
}