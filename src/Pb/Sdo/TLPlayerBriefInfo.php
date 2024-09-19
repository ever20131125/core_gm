<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TLPlayerBriefInfo message
 */
class TLPlayerBriefInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ZONEID = 2;
    const NAME = 3;
    const HEADID = 4;
    const GENDER = 5;
    const HEADTYPE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleid',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ZONEID] = null;
        $this->values[self::NAME] = null;
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
     * Sets value of 'roleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleid($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleid' property
     *
     * @return integer
     */
    public function getRoleid()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleid()
    {
        return $this->get(self::ROLEID) !== null;
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