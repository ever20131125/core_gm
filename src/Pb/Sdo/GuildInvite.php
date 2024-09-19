<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildInvite message
 */
class GuildInvite extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const INVITETIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
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
        $this->values[self::ROLEID] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
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