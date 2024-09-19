<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSExitGuildReq message
 */
class GDSExitGuildReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const EXITTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXITTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ExitGuildType::enmExitType_Invalid,
            'name' => 'exitType',
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
        $this->values[self::EXITTYPE] = self::$fields[self::EXITTYPE]['default'];
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
     * Sets value of 'exitType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExitType($value)
    {
        return $this->set(self::EXITTYPE, $value);
    }

    /**
     * Returns value of 'exitType' property
     *
     * @return integer
     */
    public function getExitType()
    {
        $value = $this->get(self::EXITTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'exitType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExitType()
    {
        return $this->get(self::EXITTYPE) !== null;
    }
}
}