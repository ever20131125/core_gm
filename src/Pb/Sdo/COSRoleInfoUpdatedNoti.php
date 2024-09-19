<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSRoleInfoUpdatedNoti message
 */
class COSRoleInfoUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STROLEGUILDINFO = 2;
    const STROLELOVERINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEGUILDINFO => array(
            'name' => 'stRoleGuildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGuildInfo'
        ),
        self::STROLELOVERINFO => array(
            'name' => 'stRoleLoverInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleLoverInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STROLEGUILDINFO] = null;
        $this->values[self::STROLELOVERINFO] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'stRoleGuildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGuildInfo $value Property value
     *
     * @return null
     */
    public function setStRoleGuildInfo(\Xnhd\Core\Pb\Sdo\RoleGuildInfo $value=null)
    {
        return $this->set(self::STROLEGUILDINFO, $value);
    }

    /**
     * Returns value of 'stRoleGuildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInfo
     */
    public function getStRoleGuildInfo()
    {
        return $this->get(self::STROLEGUILDINFO);
    }

    /**
     * Returns true if 'stRoleGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleGuildInfo()
    {
        return $this->get(self::STROLEGUILDINFO) !== null;
    }

    /**
     * Sets value of 'stRoleLoverInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleLoverInfo $value Property value
     *
     * @return null
     */
    public function setStRoleLoverInfo(\Xnhd\Core\Pb\Sdo\RoleLoverInfo $value=null)
    {
        return $this->set(self::STROLELOVERINFO, $value);
    }

    /**
     * Returns value of 'stRoleLoverInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleLoverInfo
     */
    public function getStRoleLoverInfo()
    {
        return $this->get(self::STROLELOVERINFO);
    }

    /**
     * Returns true if 'stRoleLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleLoverInfo()
    {
        return $this->get(self::STROLELOVERINFO) !== null;
    }
}
}