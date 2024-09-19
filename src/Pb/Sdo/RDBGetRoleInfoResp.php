<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBGetRoleInfoResp message
 */
class RDBGetRoleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const STROLEPERSONINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPERSONINFO => array(
            'name' => 'stRolePersonInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePersonInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::STROLEPERSONINFO] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'stRolePersonInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePersonInfo $value Property value
     *
     * @return null
     */
    public function setStRolePersonInfo(\Xnhd\Core\Pb\Sdo\RolePersonInfo $value=null)
    {
        return $this->set(self::STROLEPERSONINFO, $value);
    }

    /**
     * Returns value of 'stRolePersonInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePersonInfo
     */
    public function getStRolePersonInfo()
    {
        return $this->get(self::STROLEPERSONINFO);
    }

    /**
     * Returns true if 'stRolePersonInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePersonInfo()
    {
        return $this->get(self::STROLEPERSONINFO) !== null;
    }
}
}