<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGuildInviteNoti message
 */
class GDSGuildInviteNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STINVITERINFO = 1;
    const GUILDINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STINVITERINFO => array(
            'name' => 'stInviterInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::GUILDINFO => array(
            'name' => 'guildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildBriefDetails'
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
        $this->values[self::STINVITERINFO] = null;
        $this->values[self::GUILDINFO] = null;
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
     * Sets value of 'stInviterInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStInviterInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STINVITERINFO, $value);
    }

    /**
     * Returns value of 'stInviterInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStInviterInfo()
    {
        return $this->get(self::STINVITERINFO);
    }

    /**
     * Returns true if 'stInviterInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStInviterInfo()
    {
        return $this->get(self::STINVITERINFO) !== null;
    }

    /**
     * Sets value of 'guildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildBriefDetails $value Property value
     *
     * @return null
     */
    public function setGuildInfo(\Xnhd\Core\Pb\Sdo\GuildBriefDetails $value=null)
    {
        return $this->set(self::GUILDINFO, $value);
    }

    /**
     * Returns value of 'guildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails
     */
    public function getGuildInfo()
    {
        return $this->get(self::GUILDINFO);
    }

    /**
     * Returns true if 'guildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildInfo()
    {
        return $this->get(self::GUILDINFO) !== null;
    }
}
}