<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSAppointOfficerReq message
 */
class GDSAppointOfficerReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const TARGETID = 2;
    const POSTTYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGETID => array(
            'name' => 'targetid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildPostType::enmGuildPostType_Invalid,
            'name' => 'postType',
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
        $this->values[self::TARGETID] = null;
        $this->values[self::POSTTYPE] = self::$fields[self::POSTTYPE]['default'];
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
     * Sets value of 'targetid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTargetid($value)
    {
        return $this->set(self::TARGETID, $value);
    }

    /**
     * Returns value of 'targetid' property
     *
     * @return integer
     */
    public function getTargetid()
    {
        $value = $this->get(self::TARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'targetid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTargetid()
    {
        return $this->get(self::TARGETID) !== null;
    }

    /**
     * Sets value of 'postType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPostType($value)
    {
        return $this->set(self::POSTTYPE, $value);
    }

    /**
     * Returns value of 'postType' property
     *
     * @return integer
     */
    public function getPostType()
    {
        $value = $this->get(self::POSTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'postType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostType()
    {
        return $this->get(self::POSTTYPE) !== null;
    }
}
}