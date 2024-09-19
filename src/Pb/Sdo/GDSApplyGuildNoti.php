<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSApplyGuildNoti message
 */
class GDSApplyGuildNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEINFO = 1;
    const ENABLE = 2;
    const GUILDID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::ENABLE => array(
            'name' => 'enable',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::GUILDID => array(
            'name' => 'guildID',
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
        $this->values[self::ROLEINFO] = null;
        $this->values[self::ENABLE] = null;
        $this->values[self::GUILDID] = null;
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
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return $this->get(self::ROLEINFO) !== null;
    }

    /**
     * Sets value of 'enable' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEnable($value)
    {
        return $this->set(self::ENABLE, $value);
    }

    /**
     * Returns value of 'enable' property
     *
     * @return boolean
     */
    public function getEnable()
    {
        $value = $this->get(self::ENABLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'enable' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnable()
    {
        return $this->get(self::ENABLE) !== null;
    }

    /**
     * Sets value of 'guildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildID($value)
    {
        return $this->set(self::GUILDID, $value);
    }

    /**
     * Returns value of 'guildID' property
     *
     * @return integer
     */
    public function getGuildID()
    {
        $value = $this->get(self::GUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildID()
    {
        return $this->get(self::GUILDID) !== null;
    }
}
}