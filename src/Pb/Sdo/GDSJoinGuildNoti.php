<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSJoinGuildNoti message
 */
class GDSJoinGuildNoti extends \ProtobufMessage
{
    /* Field index constants */
    const MEMBERINFO = 1;
    const STGUILDINFO = 2;
    const ROLEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEMBERINFO => array(
            'name' => 'memberInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildMemberInfo'
        ),
        self::STGUILDINFO => array(
            'name' => 'stGuildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildInfo'
        ),
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
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
        $this->values[self::MEMBERINFO] = null;
        $this->values[self::STGUILDINFO] = null;
        $this->values[self::ROLEINFO] = null;
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
     * Sets value of 'memberInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildMemberInfo $value Property value
     *
     * @return null
     */
    public function setMemberInfo(\Xnhd\Core\Pb\Sdo\GuildMemberInfo $value=null)
    {
        return $this->set(self::MEMBERINFO, $value);
    }

    /**
     * Returns value of 'memberInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildMemberInfo
     */
    public function getMemberInfo()
    {
        return $this->get(self::MEMBERINFO);
    }

    /**
     * Returns true if 'memberInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberInfo()
    {
        return $this->get(self::MEMBERINFO) !== null;
    }

    /**
     * Sets value of 'stGuildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildInfo $value Property value
     *
     * @return null
     */
    public function setStGuildInfo(\Xnhd\Core\Pb\Sdo\GuildInfo $value=null)
    {
        return $this->set(self::STGUILDINFO, $value);
    }

    /**
     * Returns value of 'stGuildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildInfo
     */
    public function getStGuildInfo()
    {
        return $this->get(self::STGUILDINFO);
    }

    /**
     * Returns true if 'stGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStGuildInfo()
    {
        return $this->get(self::STGUILDINFO) !== null;
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
}
}