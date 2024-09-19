<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGuildInfoUpdatedNoti message
 */
class GDSGuildInfoUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDINFO => array(
            'name' => 'guildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildInfo'
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
     * Sets value of 'guildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildInfo $value Property value
     *
     * @return null
     */
    public function setGuildInfo(\Xnhd\Core\Pb\Sdo\GuildInfo $value=null)
    {
        return $this->set(self::GUILDINFO, $value);
    }

    /**
     * Returns value of 'guildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildInfo
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