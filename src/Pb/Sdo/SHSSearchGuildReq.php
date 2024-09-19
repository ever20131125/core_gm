<?php
/**
 * Auto generated from searchserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SHSSearchGuildReq message
 */
class SHSSearchGuildReq extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDNAME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDNAME => array(
            'name' => 'guildName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::GUILDNAME] = null;
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
     * Sets value of 'guildName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuildName($value)
    {
        return $this->set(self::GUILDNAME, $value);
    }

    /**
     * Returns value of 'guildName' property
     *
     * @return string
     */
    public function getGuildName()
    {
        $value = $this->get(self::GUILDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guildName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildName()
    {
        return $this->get(self::GUILDNAME) !== null;
    }
}
}