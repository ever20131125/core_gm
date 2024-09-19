<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBGetRoleGMInfoResp message
 */
class RDBGetRoleGMInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEGMINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEGMINFO => array(
            'name' => 'roleGMInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGMInfo'
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
        $this->values[self::ROLEGMINFO] = null;
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
     * Sets value of 'roleGMInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGMInfo $value Property value
     *
     * @return null
     */
    public function setRoleGMInfo(\Xnhd\Core\Pb\Sdo\RoleGMInfo $value=null)
    {
        return $this->set(self::ROLEGMINFO, $value);
    }

    /**
     * Returns value of 'roleGMInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGMInfo
     */
    public function getRoleGMInfo()
    {
        return $this->get(self::ROLEGMINFO);
    }

    /**
     * Returns true if 'roleGMInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleGMInfo()
    {
        return $this->get(self::ROLEGMINFO) !== null;
    }
}
}