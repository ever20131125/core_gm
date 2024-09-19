<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGuildMemberUpdatedNoti message
 */
class GDSGuildMemberUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const MEMBERINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEMBERINFO => array(
            'name' => 'memberInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildMemberInfo'
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
}
}