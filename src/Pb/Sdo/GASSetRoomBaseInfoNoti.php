<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASSetRoomBaseInfoNoti message
 */
class GASSetRoomBaseInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROOMINSTANCEID = 2;
    const SZROOMNAME = 3;
    const SZPASSWORD = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROOMNAME => array(
            'name' => 'szRoomName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZPASSWORD => array(
            'name' => 'szPassword',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::SZROOMNAME] = null;
        $this->values[self::SZPASSWORD] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nRoomInstanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomInstanceID($value)
    {
        return $this->set(self::NROOMINSTANCEID, $value);
    }

    /**
     * Returns value of 'nRoomInstanceID' property
     *
     * @return integer
     */
    public function getNRoomInstanceID()
    {
        $value = $this->get(self::NROOMINSTANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomInstanceID()
    {
        return $this->get(self::NROOMINSTANCEID) !== null;
    }

    /**
     * Sets value of 'szRoomName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoomName($value)
    {
        return $this->set(self::SZROOMNAME, $value);
    }

    /**
     * Returns value of 'szRoomName' property
     *
     * @return string
     */
    public function getSzRoomName()
    {
        $value = $this->get(self::SZROOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoomName()
    {
        return $this->get(self::SZROOMNAME) !== null;
    }

    /**
     * Sets value of 'szPassword' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPassword($value)
    {
        return $this->set(self::SZPASSWORD, $value);
    }

    /**
     * Returns value of 'szPassword' property
     *
     * @return string
     */
    public function getSzPassword()
    {
        $value = $this->get(self::SZPASSWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPassword' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPassword()
    {
        return $this->get(self::SZPASSWORD) !== null;
    }
}
}