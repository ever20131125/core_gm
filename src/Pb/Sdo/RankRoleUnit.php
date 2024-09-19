<?php
/**
 * Auto generated from complex.proto at 2021-07-29 01:54:30
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankRoleUnit message
 */
class RankRoleUnit extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITYID = 1;
    const ZONEID = 2;
    const NAME = 3;
    const ACCOUNTID = 4;
    const LEVEL = 5;
    const VIPLEVEL = 6;
    const HEADID = 7;
    const GENDER = 8;
    const HEADTYPE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITYID => array(
            'name' => 'entityID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ZONEID => array(
            'name' => 'zoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACCOUNTID => array(
            'name' => 'accountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIPLEVEL => array(
            'name' => 'vipLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HEADID => array(
            'name' => 'headID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HEADTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PicType::enmPicType_HeadGame,
            'name' => 'headType',
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
        $this->values[self::ENTITYID] = null;
        $this->values[self::ZONEID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::ACCOUNTID] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::VIPLEVEL] = null;
        $this->values[self::HEADID] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::HEADTYPE] = self::$fields[self::HEADTYPE]['default'];
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
     * Sets value of 'entityID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEntityID($value)
    {
        return $this->set(self::ENTITYID, $value);
    }

    /**
     * Returns value of 'entityID' property
     *
     * @return integer
     */
    public function getEntityID()
    {
        $value = $this->get(self::ENTITYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'entityID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEntityID()
    {
        return $this->get(self::ENTITYID) !== null;
    }

    /**
     * Sets value of 'zoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneID($value)
    {
        return $this->set(self::ZONEID, $value);
    }

    /**
     * Returns value of 'zoneID' property
     *
     * @return integer
     */
    public function getZoneID()
    {
        $value = $this->get(self::ZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneID()
    {
        return $this->get(self::ZONEID) !== null;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }

    /**
     * Sets value of 'accountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccountID($value)
    {
        return $this->set(self::ACCOUNTID, $value);
    }

    /**
     * Returns value of 'accountID' property
     *
     * @return string
     */
    public function getAccountID()
    {
        $value = $this->get(self::ACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'accountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccountID()
    {
        return $this->get(self::ACCOUNTID) !== null;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }

    /**
     * Sets value of 'vipLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVipLevel($value)
    {
        return $this->set(self::VIPLEVEL, $value);
    }

    /**
     * Returns value of 'vipLevel' property
     *
     * @return integer
     */
    public function getVipLevel()
    {
        $value = $this->get(self::VIPLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'vipLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVipLevel()
    {
        return $this->get(self::VIPLEVEL) !== null;
    }

    /**
     * Sets value of 'headID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHeadID($value)
    {
        return $this->set(self::HEADID, $value);
    }

    /**
     * Returns value of 'headID' property
     *
     * @return integer
     */
    public function getHeadID()
    {
        $value = $this->get(self::HEADID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'headID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadID()
    {
        return $this->get(self::HEADID) !== null;
    }

    /**
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }

    /**
     * Sets value of 'headType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHeadType($value)
    {
        return $this->set(self::HEADTYPE, $value);
    }

    /**
     * Returns value of 'headType' property
     *
     * @return integer
     */
    public function getHeadType()
    {
        $value = $this->get(self::HEADTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'headType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadType()
    {
        return $this->get(self::HEADTYPE) !== null;
    }
}
}