<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTBindInviteCodeReq message
 */
class ACTBindInviteCodeReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const NCODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCODE => array(
            'name' => 'nCode',
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
        $this->values[self::NCODE] = null;
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
     * Sets value of 'nCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCode($value)
    {
        return $this->set(self::NCODE, $value);
    }

    /**
     * Returns value of 'nCode' property
     *
     * @return integer
     */
    public function getNCode()
    {
        $value = $this->get(self::NCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCode()
    {
        return $this->get(self::NCODE) !== null;
    }
}
}