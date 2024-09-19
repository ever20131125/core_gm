<?php
/**
 * Auto generated from complex.proto at 2021-09-02 07:34:25
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * NPCAttrInfo message
 */
class NPCAttrInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZNPCNAME = 2;
    const GENDER = 3;
    const NLEVEL = 4;
    const STROLEATTRINFO = 5;
    const STAVATARINFO = 6;
    const STROLESKILLINFO = 7;
    const NDANCE = 8;
    const TEAM = 9;
    const NFIGHTID = 10;
    const STHEADPIC = 11;
    const NFACEID = 12;
    const TITLE = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZNPCNAME => array(
            'name' => 'szNPCName',
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
        self::STROLEATTRINFO => array(
            'name' => 'stRoleAttrInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleAttrInfo'
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
        self::NDANCE => array(
            'name' => 'nDance',
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
        self::TITLE => array(
            'default' => \Xnhd\Core\Pb\Sdo\QualifyTitle::enmQualifyTitle_1,
            'name' => 'title',
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
        $this->values[self::SZNPCNAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::NLEVEL] = null;
        $this->values[self::STROLEATTRINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::NDANCE] = null;
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::NFIGHTID] = null;
        $this->values[self::STHEADPIC] = null;
        $this->values[self::NFACEID] = null;
        $this->values[self::TITLE] = self::$fields[self::TITLE]['default'];
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
     * Sets value of 'szNPCName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzNPCName($value)
    {
        return $this->set(self::SZNPCNAME, $value);
    }

    /**
     * Returns value of 'szNPCName' property
     *
     * @return string
     */
    public function getSzNPCName()
    {
        $value = $this->get(self::SZNPCNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szNPCName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzNPCName()
    {
        return $this->get(self::SZNPCNAME) !== null;
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
     * Sets value of 'stRoleAttrInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleAttrInfo $value Property value
     *
     * @return null
     */
    public function setStRoleAttrInfo(\Xnhd\Core\Pb\Sdo\RoleAttrInfo $value=null)
    {
        return $this->set(self::STROLEATTRINFO, $value);
    }

    /**
     * Returns value of 'stRoleAttrInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleAttrInfo
     */
    public function getStRoleAttrInfo()
    {
        return $this->get(self::STROLEATTRINFO);
    }

    /**
     * Returns true if 'stRoleAttrInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleAttrInfo()
    {
        return $this->get(self::STROLEATTRINFO) !== null;
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
     * Sets value of 'nDance' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDance($value)
    {
        return $this->set(self::NDANCE, $value);
    }

    /**
     * Returns value of 'nDance' property
     *
     * @return integer
     */
    public function getNDance()
    {
        $value = $this->get(self::NDANCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDance' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDance()
    {
        return $this->get(self::NDANCE) !== null;
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
     * Sets value of 'title' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return integer
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'title' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitle()
    {
        return $this->get(self::TITLE) !== null;
    }
}
}