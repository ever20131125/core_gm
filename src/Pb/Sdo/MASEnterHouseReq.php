<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASEnterHouseReq message
 */
class MASEnterHouseReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROOMTYPE = 1;
    const NROLEID = 2;
    const NHOSTID = 3;
    const SZPASSWORD = 4;
    const NTHEMEID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_House,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZPASSWORD => array(
            'name' => 'szPassword',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NTHEMEID => array(
            'default' => 0,
            'name' => 'nThemeID',
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
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::NROLEID] = null;
        $this->values[self::NHOSTID] = null;
        $this->values[self::SZPASSWORD] = null;
        $this->values[self::NTHEMEID] = self::$fields[self::NTHEMEID]['default'];
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
     * Sets value of 'roomType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomType($value)
    {
        return $this->set(self::ROOMTYPE, $value);
    }

    /**
     * Returns value of 'roomType' property
     *
     * @return integer
     */
    public function getRoomType()
    {
        $value = $this->get(self::ROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomType()
    {
        return $this->get(self::ROOMTYPE) !== null;
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
     * Sets value of 'nHostID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHostID($value)
    {
        return $this->set(self::NHOSTID, $value);
    }

    /**
     * Returns value of 'nHostID' property
     *
     * @return integer
     */
    public function getNHostID()
    {
        $value = $this->get(self::NHOSTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHostID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHostID()
    {
        return $this->get(self::NHOSTID) !== null;
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

    /**
     * Sets value of 'nThemeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeID($value)
    {
        return $this->set(self::NTHEMEID, $value);
    }

    /**
     * Returns value of 'nThemeID' property
     *
     * @return integer
     */
    public function getNThemeID()
    {
        $value = $this->get(self::NTHEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeID()
    {
        return $this->get(self::NTHEMEID) !== null;
    }
}
}