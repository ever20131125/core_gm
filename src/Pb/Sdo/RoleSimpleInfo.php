<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleSimpleInfo message
 */
class RoleSimpleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZROLENAME = 2;
    const NNAMERGB = 3;
    const GENDER = 4;
    const VIPLEVEL = 5;
    const NLEVEL = 6;
    const STHEADPIC = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NNAMERGB => array(
            'name' => 'nNameRGB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIPLEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\VIPLevel::enmVIPLevel_Null,
            'name' => 'vipLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STHEADPIC => array(
            'name' => 'stHeadPic',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PicInfo'
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
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NNAMERGB] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::VIPLEVEL] = self::$fields[self::VIPLEVEL]['default'];
        $this->values[self::NLEVEL] = null;
        $this->values[self::STHEADPIC] = null;
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
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
    }

    /**
     * Sets value of 'nNameRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNameRGB($value)
    {
        return $this->set(self::NNAMERGB, $value);
    }

    /**
     * Returns value of 'nNameRGB' property
     *
     * @return integer
     */
    public function getNNameRGB()
    {
        $value = $this->get(self::NNAMERGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNameRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNameRGB()
    {
        return $this->get(self::NNAMERGB) !== null;
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
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Sets value of 'stHeadPic' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PicInfo $value Property value
     *
     * @return null
     */
    public function setStHeadPic(\Xnhd\Core\Pb\Sdo\PicInfo $value=null)
    {
        return $this->set(self::STHEADPIC, $value);
    }

    /**
     * Returns value of 'stHeadPic' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo
     */
    public function getStHeadPic()
    {
        return $this->get(self::STHEADPIC);
    }

    /**
     * Returns true if 'stHeadPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHeadPic()
    {
        return $this->get(self::STHEADPIC) !== null;
    }
}
}