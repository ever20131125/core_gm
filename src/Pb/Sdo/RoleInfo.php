<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleInfo message
 */
class RoleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZROLENAME = 2;
    const GENDER = 3;
    const NLEVEL = 4;
    const STAVATARINFO = 6;
    const STROLESKILLINFO = 7;
    const NPROFICIENCY = 8;
    const TEAM = 9;
    const NFIGHTID = 10;
    const STHEADPIC = 11;
    const NFACEID = 12;
    const HEADFRAME = 13;
    const NQTITLESRANK = 14;
    const USERECORD = 15;
    const NRECORDDANCEID = 16;
    const NRECORDROLEID = 17;

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
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Male,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::STROLESKILLINFO => array(
            'name' => 'stRoleSkillInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleSkillInfo'
        ),
        self::NPROFICIENCY => array(
            'name' => 'nProficiency',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFIGHTID => array(
            'name' => 'nFightID',
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
        self::NQTITLESRANK => array(
            'name' => 'nQTitleSRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERECORD => array(
            'default' => 0,
            'name' => 'useRecord',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRECORDDANCEID => array(
            'name' => 'nRecordDanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRECORDROLEID => array(
            'name' => 'nRecordRoleID',
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
        $this->values[self::SZROLENAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::NLEVEL] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::NPROFICIENCY] = null;
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::NFIGHTID] = null;
        $this->values[self::STHEADPIC] = null;
        $this->values[self::NFACEID] = null;
        $this->values[self::HEADFRAME] = null;
        $this->values[self::NQTITLESRANK] = null;
        $this->values[self::USERECORD] = self::$fields[self::USERECORD]['default'];
        $this->values[self::NRECORDDANCEID] = null;
        $this->values[self::NRECORDROLEID] = null;
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
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }

    /**
     * Sets value of 'stRoleSkillInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleSkillInfo $value Property value
     *
     * @return null
     */
    public function setStRoleSkillInfo(\Xnhd\Core\Pb\Sdo\RoleSkillInfo $value=null)
    {
        return $this->set(self::STROLESKILLINFO, $value);
    }

    /**
     * Returns value of 'stRoleSkillInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleSkillInfo
     */
    public function getStRoleSkillInfo()
    {
        return $this->get(self::STROLESKILLINFO);
    }

    /**
     * Returns true if 'stRoleSkillInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleSkillInfo()
    {
        return $this->get(self::STROLESKILLINFO) !== null;
    }

    /**
     * Sets value of 'nProficiency' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNProficiency($value)
    {
        return $this->set(self::NPROFICIENCY, $value);
    }

    /**
     * Returns value of 'nProficiency' property
     *
     * @return integer
     */
    public function getNProficiency()
    {
        $value = $this->get(self::NPROFICIENCY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nProficiency' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNProficiency()
    {
        return $this->get(self::NPROFICIENCY) !== null;
    }

    /**
     * Sets value of 'team' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTeam($value)
    {
        return $this->set(self::TEAM, $value);
    }

    /**
     * Returns value of 'team' property
     *
     * @return integer
     */
    public function getTeam()
    {
        $value = $this->get(self::TEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'team' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTeam()
    {
        return $this->get(self::TEAM) !== null;
    }

    /**
     * Sets value of 'nFightID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFightID($value)
    {
        return $this->set(self::NFIGHTID, $value);
    }

    /**
     * Returns value of 'nFightID' property
     *
     * @return integer
     */
    public function getNFightID()
    {
        $value = $this->get(self::NFIGHTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFightID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFightID()
    {
        return $this->get(self::NFIGHTID) !== null;
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
     * Sets value of 'useRecord' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUseRecord($value)
    {
        return $this->set(self::USERECORD, $value);
    }

    /**
     * Returns value of 'useRecord' property
     *
     * @return integer
     */
    public function getUseRecord()
    {
        $value = $this->get(self::USERECORD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'useRecord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUseRecord()
    {
        return $this->get(self::USERECORD) !== null;
    }

    /**
     * Sets value of 'nRecordDanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRecordDanceID($value)
    {
        return $this->set(self::NRECORDDANCEID, $value);
    }

    /**
     * Returns value of 'nRecordDanceID' property
     *
     * @return integer
     */
    public function getNRecordDanceID()
    {
        $value = $this->get(self::NRECORDDANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRecordDanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRecordDanceID()
    {
        return $this->get(self::NRECORDDANCEID) !== null;
    }

    /**
     * Sets value of 'nRecordRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRecordRoleID($value)
    {
        return $this->set(self::NRECORDROLEID, $value);
    }

    /**
     * Returns value of 'nRecordRoleID' property
     *
     * @return integer
     */
    public function getNRecordRoleID()
    {
        $value = $this->get(self::NRECORDROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRecordRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRecordRoleID()
    {
        return $this->get(self::NRECORDROLEID) !== null;
    }
}
}