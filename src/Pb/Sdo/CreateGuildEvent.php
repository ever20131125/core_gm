<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CreateGuildEvent message
 */
class CreateGuildEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NGUILDID = 1;
    const GUILDNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGUILDID => array(
            'name' => 'nGuildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::NGUILDID] = null;
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
     * Sets value of 'nGuildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuildID($value)
    {
        return $this->set(self::NGUILDID, $value);
    }

    /**
     * Returns value of 'nGuildID' property
     *
     * @return integer
     */
    public function getNGuildID()
    {
        $value = $this->get(self::NGUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuildID()
    {
        return $this->get(self::NGUILDID) !== null;
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