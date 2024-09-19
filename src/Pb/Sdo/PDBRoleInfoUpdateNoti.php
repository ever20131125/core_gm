<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBRoleInfoUpdateNoti message
 */
class PDBRoleInfoUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NUPDATETYPE = 2;
    const STAVATARINFO = 3;
    const STROLESKILLINFO = 4;
    const NBESTRANK = 5;
    const STROLEITEMBUFFER = 6;
    const NSKILLPOINT = 7;
    const ROLETYPE = 8;
    const NCROWNENDTIME = 9;
    const STHOUSEINFO = 10;
    const NCCLEVEL = 11;
    const NCCSCORE = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUPDATETYPE => array(
            'name' => 'nUpdateType',
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
        self::NBESTRANK => array(
            'name' => 'nBestRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEITEMBUFFER => array(
            'name' => 'stRoleItemBuffer',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleItemBuffer'
        ),
        self::NSKILLPOINT => array(
            'name' => 'nSkillPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoleType::enmRoleType_Normal,
            'name' => 'roleType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCROWNENDTIME => array(
            'name' => 'nCrownEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STHOUSEINFO => array(
            'name' => 'stHouseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
        ),
        self::NCCLEVEL => array(
            'name' => 'nCCLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCCSCORE => array(
            'name' => 'nCCScore',
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
        $this->values[self::NUPDATETYPE] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::NBESTRANK] = null;
        $this->values[self::STROLEITEMBUFFER] = null;
        $this->values[self::NSKILLPOINT] = null;
        $this->values[self::ROLETYPE] = self::$fields[self::ROLETYPE]['default'];
        $this->values[self::NCROWNENDTIME] = null;
        $this->values[self::STHOUSEINFO] = null;
        $this->values[self::NCCLEVEL] = null;
        $this->values[self::NCCSCORE] = null;
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
     * Sets value of 'nUpdateType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUpdateType($value)
    {
        return $this->set(self::NUPDATETYPE, $value);
    }

    /**
     * Returns value of 'nUpdateType' property
     *
     * @return integer
     */
    public function getNUpdateType()
    {
        $value = $this->get(self::NUPDATETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUpdateType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUpdateType()
    {
        return $this->get(self::NUPDATETYPE) !== null;
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
     * Sets value of 'nBestRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBestRank($value)
    {
        return $this->set(self::NBESTRANK, $value);
    }

    /**
     * Returns value of 'nBestRank' property
     *
     * @return integer
     */
    public function getNBestRank()
    {
        $value = $this->get(self::NBESTRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBestRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBestRank()
    {
        return $this->get(self::NBESTRANK) !== null;
    }

    /**
     * Sets value of 'stRoleItemBuffer' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleItemBuffer $value Property value
     *
     * @return null
     */
    public function setStRoleItemBuffer(\Xnhd\Core\Pb\Sdo\RoleItemBuffer $value=null)
    {
        return $this->set(self::STROLEITEMBUFFER, $value);
    }

    /**
     * Returns value of 'stRoleItemBuffer' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleItemBuffer
     */
    public function getStRoleItemBuffer()
    {
        return $this->get(self::STROLEITEMBUFFER);
    }

    /**
     * Returns true if 'stRoleItemBuffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleItemBuffer()
    {
        return $this->get(self::STROLEITEMBUFFER) !== null;
    }

    /**
     * Sets value of 'nSkillPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSkillPoint($value)
    {
        return $this->set(self::NSKILLPOINT, $value);
    }

    /**
     * Returns value of 'nSkillPoint' property
     *
     * @return integer
     */
    public function getNSkillPoint()
    {
        $value = $this->get(self::NSKILLPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSkillPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSkillPoint()
    {
        return $this->get(self::NSKILLPOINT) !== null;
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
     * Sets value of 'nCrownEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCrownEndTime($value)
    {
        return $this->set(self::NCROWNENDTIME, $value);
    }

    /**
     * Returns value of 'nCrownEndTime' property
     *
     * @return integer
     */
    public function getNCrownEndTime()
    {
        $value = $this->get(self::NCROWNENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCrownEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCrownEndTime()
    {
        return $this->get(self::NCROWNENDTIME) !== null;
    }

    /**
     * Sets value of 'stHouseInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDetailInfo $value Property value
     *
     * @return null
     */
    public function setStHouseInfo(\Xnhd\Core\Pb\Sdo\HouseDetailInfo $value=null)
    {
        return $this->set(self::STHOUSEINFO, $value);
    }

    /**
     * Returns value of 'stHouseInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDetailInfo
     */
    public function getStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO);
    }

    /**
     * Returns true if 'stHouseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO) !== null;
    }

    /**
     * Sets value of 'nCCLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCCLevel($value)
    {
        return $this->set(self::NCCLEVEL, $value);
    }

    /**
     * Returns value of 'nCCLevel' property
     *
     * @return integer
     */
    public function getNCCLevel()
    {
        $value = $this->get(self::NCCLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCCLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCCLevel()
    {
        return $this->get(self::NCCLEVEL) !== null;
    }

    /**
     * Sets value of 'nCCScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCCScore($value)
    {
        return $this->set(self::NCCSCORE, $value);
    }

    /**
     * Returns value of 'nCCScore' property
     *
     * @return integer
     */
    public function getNCCScore()
    {
        $value = $this->get(self::NCCSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCCScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCCScore()
    {
        return $this->get(self::NCCSCORE) !== null;
    }
}
}