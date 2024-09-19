<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSStageInfoUpdateNoti message
 */
class GDSStageInfoUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDSTAGEINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDSTAGEINFO => array(
            'name' => 'guildStageInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildStageInfo'
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
        $this->values[self::GUILDSTAGEINFO] = null;
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
     * Sets value of 'guildStageInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildStageInfo $value Property value
     *
     * @return null
     */
    public function setGuildStageInfo(\Xnhd\Core\Pb\Sdo\GuildStageInfo $value=null)
    {
        return $this->set(self::GUILDSTAGEINFO, $value);
    }

    /**
     * Returns value of 'guildStageInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildStageInfo
     */
    public function getGuildStageInfo()
    {
        return $this->get(self::GUILDSTAGEINFO);
    }

    /**
     * Returns true if 'guildStageInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildStageInfo()
    {
        return $this->get(self::GUILDSTAGEINFO) !== null;
    }
}
}