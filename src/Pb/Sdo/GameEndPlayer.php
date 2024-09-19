<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameEndPlayer message
 */
class GameEndPlayer extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZROLENAME = 2;
    const GENDER = 3;
    const NLEVEL = 4;
    const NTITLE = 5;
    const NPROFICIENCY = 6;
    const NQUALIFYPOINT = 7;
    const STBALANCERESULT = 8;
    const STAVATARINFO = 9;
    const BALLFRIEND = 10;
    const BONEGUILD = 11;
    const SZHEADPIC = 12;
    const USERECORD = 13;
    const NRECORDDANCEID = 14;
    const NRECORDROLEID = 15;
    const BWITHLOVER = 16;

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
        self::NTITLE => array(
            'name' => 'nTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROFICIENCY => array(
            'name' => 'nProficiency',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUALIFYPOINT => array(
            'name' => 'nQualifyPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STBALANCERESULT => array(
            'name' => 'stBalanceResult',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\BalanceResult'
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::BALLFRIEND => array(
            'default' => 0,
            'name' => 'bAllFriend',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BONEGUILD => array(
            'default' => 0,
            'name' => 'bOneGuild',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZHEADPIC => array(
            'name' => 'szHeadPic',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::BWITHLOVER => array(
            'default' => 0,
            'name' => 'bWithLover',
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
        $this->values[self::NTITLE] = null;
        $this->values[self::NPROFICIENCY] = null;
        $this->values[self::NQUALIFYPOINT] = null;
        $this->values[self::STBALANCERESULT] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::BALLFRIEND] = self::$fields[self::BALLFRIEND]['default'];
        $this->values[self::BONEGUILD] = self::$fields[self::BONEGUILD]['default'];
        $this->values[self::SZHEADPIC] = null;
        $this->values[self::USERECORD] = self::$fields[self::USERECORD]['default'];
        $this->values[self::NRECORDDANCEID] = null;
        $this->values[self::NRECORDROLEID] = null;
        $this->values[self::BWITHLOVER] = self::$fields[self::BWITHLOVER]['default'];
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
     * Sets value of 'nQualifyPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQualifyPoint($value)
    {
        return $this->set(self::NQUALIFYPOINT, $value);
    }

    /**
     * Returns value of 'nQualifyPoint' property
     *
     * @return integer
     */
    public function getNQualifyPoint()
    {
        $value = $this->get(self::NQUALIFYPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQualifyPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQualifyPoint()
    {
        return $this->get(self::NQUALIFYPOINT) !== null;
    }

    /**
     * Sets value of 'stBalanceResult' property
     *
     * @param \Xnhd\Core\Pb\Sdo\BalanceResult $value Property value
     *
     * @return null
     */
    public function setStBalanceResult(\Xnhd\Core\Pb\Sdo\BalanceResult $value=null)
    {
        return $this->set(self::STBALANCERESULT, $value);
    }

    /**
     * Returns value of 'stBalanceResult' property
     *
     * @return \Xnhd\Core\Pb\Sdo\BalanceResult
     */
    public function getStBalanceResult()
    {
        return $this->get(self::STBALANCERESULT);
    }

    /**
     * Returns true if 'stBalanceResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBalanceResult()
    {
        return $this->get(self::STBALANCERESULT) !== null;
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
     * Sets value of 'bAllFriend' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBAllFriend($value)
    {
        return $this->set(self::BALLFRIEND, $value);
    }

    /**
     * Returns value of 'bAllFriend' property
     *
     * @return integer
     */
    public function getBAllFriend()
    {
        $value = $this->get(self::BALLFRIEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bAllFriend' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAllFriend()
    {
        return $this->get(self::BALLFRIEND) !== null;
    }

    /**
     * Sets value of 'bOneGuild' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBOneGuild($value)
    {
        return $this->set(self::BONEGUILD, $value);
    }

    /**
     * Returns value of 'bOneGuild' property
     *
     * @return integer
     */
    public function getBOneGuild()
    {
        $value = $this->get(self::BONEGUILD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bOneGuild' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBOneGuild()
    {
        return $this->get(self::BONEGUILD) !== null;
    }

    /**
     * Sets value of 'szHeadPic' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzHeadPic($value)
    {
        return $this->set(self::SZHEADPIC, $value);
    }

    /**
     * Returns value of 'szHeadPic' property
     *
     * @return string
     */
    public function getSzHeadPic()
    {
        $value = $this->get(self::SZHEADPIC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szHeadPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzHeadPic()
    {
        return $this->get(self::SZHEADPIC) !== null;
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

    /**
     * Sets value of 'bWithLover' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBWithLover($value)
    {
        return $this->set(self::BWITHLOVER, $value);
    }

    /**
     * Returns value of 'bWithLover' property
     *
     * @return integer
     */
    public function getBWithLover()
    {
        $value = $this->get(self::BWITHLOVER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bWithLover' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBWithLover()
    {
        return $this->get(self::BWITHLOVER) !== null;
    }
}
}