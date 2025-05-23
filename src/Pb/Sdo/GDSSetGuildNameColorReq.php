<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSSetGuildNameColorReq message
 */
class GDSSetGuildNameColorReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const GUILDNAMECOLOR = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDNAMECOLOR => array(
            'name' => 'guildNameColor',
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
        $this->values[self::GUILDNAMECOLOR] = null;
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
     * Sets value of 'guildNameColor' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildNameColor($value)
    {
        return $this->set(self::GUILDNAMECOLOR, $value);
    }

    /**
     * Returns value of 'guildNameColor' property
     *
     * @return integer
     */
    public function getGuildNameColor()
    {
        $value = $this->get(self::GUILDNAMECOLOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildNameColor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildNameColor()
    {
        return $this->get(self::GUILDNAMECOLOR) !== null;
    }
}
}