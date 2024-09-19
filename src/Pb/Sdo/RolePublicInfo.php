<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RolePublicInfo message
 */
class RolePublicInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZACCOUNTID = 2;
    const ROLETYPE = 3;
    const NZONEID = 4;
    const SZROLENAME = 5;
    const NNAMERGB = 6;
    const GENDER = 7;
    const VIPLEVEL = 8;
    const NLEVEL = 9;
    const STHEADPIC = 10;
    const NFACEID = 11;
    const HEADFRAME = 12;
    const NTITLE = 13;
    const NQTITLESRANK = 14;
    const NLASTLOGOUTTIME = 15;
    const NCROWNEND = 16;
    const NCROWNYEAREND = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ROLETYPE => array(
            'name' => 'roleType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
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
        self::NFACEID => array(
            'name' => 'nFaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HEADFRAME => array(
            'name' => 'headFrame',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTITLE => array(
            'name' => 'nTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQTITLESRANK => array(
            'name' => 'nQTitleSRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTLOGOUTTIME => array(
            'name' => 'nLastLogoutTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCROWNEND => array(
            'name' => 'nCrownEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCROWNYEAREND => array(
            'name' => 'nCrownYearEnd',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::ROLETYPE] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NNAMERGB] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::VIPLEVEL] = self::$fields[self::VIPLEVEL]['default'];
        $this->values[self::NLEVEL] = null;
        $this->values[self::STHEADPIC] = null;
        $this->values[self::NFACEID] = null;
        $this->values[self::HEADFRAME] = null;
        $this->values[self::NTITLE] = null;
        $this->values[self::NQTITLESRANK] = null;
        $this->values[self::NLASTLOGOUTTIME] = null;
        $this->values[self::NCROWNEND] = null;
        $this->values[self::NCROWNYEAREND] = null;
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
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'roleType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleType($value)
    {
        return $this->set(self::ROLETYPE, $value);
    }

    /**
     * Returns value of 'roleType' property
     *
     * @return integer
     */
    public function getRoleType()
    {
        $value = $this->get(self::ROLETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleType()
    {
        return $this->get(self::ROLETYPE) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
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

    /**
     * Sets value of 'nFaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceID($value)
    {
        return $this->set(self::NFACEID, $value);
    }

    /**
     * Returns value of 'nFaceID' property
     *
     * @return integer
     */
    public function getNFaceID()
    {
        $value = $this->get(self::NFACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceID()
    {
        return $this->get(self::NFACEID) !== null;
    }

    /**
     * Sets value of 'headFrame' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHeadFrame($value)
    {
        return $this->set(self::HEADFRAME, $value);
    }

    /**
     * Returns value of 'headFrame' property
     *
     * @return integer
     */
    public function getHeadFrame()
    {
        $value = $this->get(self::HEADFRAME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'headFrame' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadFrame()
    {
        return $this->get(self::HEADFRAME) !== null;
    }

    /**
     * Sets value of 'nTitle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTitle($value)
    {
        return $this->set(self::NTITLE, $value);
    }

    /**
     * Returns value of 'nTitle' property
     *
     * @return integer
     */
    public function getNTitle()
    {
        $value = $this->get(self::NTITLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTitle()
    {
        return $this->get(self::NTITLE) !== null;
    }

    /**
     * Sets value of 'nQTitleSRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQTitleSRank($value)
    {
        return $this->set(self::NQTITLESRANK, $value);
    }

    /**
     * Returns value of 'nQTitleSRank' property
     *
     * @return integer
     */
    public function getNQTitleSRank()
    {
        $value = $this->get(self::NQTITLESRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQTitleSRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQTitleSRank()
    {
        return $this->get(self::NQTITLESRANK) !== null;
    }

    /**
     * Sets value of 'nLastLogoutTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastLogoutTime($value)
    {
        return $this->set(self::NLASTLOGOUTTIME, $value);
    }

    /**
     * Returns value of 'nLastLogoutTime' property
     *
     * @return integer
     */
    public function getNLastLogoutTime()
    {
        $value = $this->get(self::NLASTLOGOUTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastLogoutTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastLogoutTime()
    {
        return $this->get(self::NLASTLOGOUTTIME) !== null;
    }

    /**
     * Sets value of 'nCrownEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCrownEnd($value)
    {
        return $this->set(self::NCROWNEND, $value);
    }

    /**
     * Returns value of 'nCrownEnd' property
     *
     * @return integer
     */
    public function getNCrownEnd()
    {
        $value = $this->get(self::NCROWNEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCrownEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCrownEnd()
    {
        return $this->get(self::NCROWNEND) !== null;
    }

    /**
     * Sets value of 'nCrownYearEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCrownYearEnd($value)
    {
        return $this->set(self::NCROWNYEAREND, $value);
    }

    /**
     * Returns value of 'nCrownYearEnd' property
     *
     * @return integer
     */
    public function getNCrownYearEnd()
    {
        $value = $this->get(self::NCROWNYEAREND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCrownYearEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCrownYearEnd()
    {
        return $this->get(self::NCROWNYEAREND) !== null;
    }
}
}