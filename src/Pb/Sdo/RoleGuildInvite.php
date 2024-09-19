<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleGuildInvite message
 */
class RoleGuildInvite extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDID = 1;
    const INVITETIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INVITETIME => array(
            'name' => 'inviteTime',
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
        $this->values[self::GUILDID] = null;
        $this->values[self::INVITETIME] = null;
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

    /**
     * Sets value of 'inviteTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInviteTime($value)
    {
        return $this->set(self::INVITETIME, $value);
    }

    /**
     * Returns value of 'inviteTime' property
     *
     * @return integer
     */
    public function getInviteTime()
    {
        $value = $this->get(self::INVITETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'inviteTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInviteTime()
    {
        return $this->get(self::INVITETIME) !== null;
    }
}
}