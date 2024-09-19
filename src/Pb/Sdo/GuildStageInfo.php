<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildStageInfo message
 */
class GuildStageInfo extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDID = 1;
    const STAGENO = 2;
    const GUILDSTAGETYPE = 3;
    const UNLOCKFLAG = 4;
    const UNLOCKROLEINFO = 5;
    const UNLOCKTIME = 6;
    const USINGFLAG = 7;
    const CONCERTTYPE = 8;
    const STARTTIME = 9;
    const DURATION = 10;
    const STMAINVOCALINFO = 11;
    const STSUBVOCAL1INFO = 12;
    const STSUBVOCAL2INFO = 13;
    const STSUBVOCAL3INFO = 14;
    const STSUBVOCAL4INFO = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAGENO => array(
            'name' => 'stageNo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDSTAGETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildStageType::enmGuildStageType_Invalid,
            'name' => 'guildStageType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UNLOCKFLAG => array(
            'name' => 'unlockFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UNLOCKROLEINFO => array(
            'name' => 'unlockRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::UNLOCKTIME => array(
            'name' => 'unlockTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USINGFLAG => array(
            'name' => 'usingFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONCERTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ConcertType::enmConcertType_Invalid,
            'name' => 'concertType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTTIME => array(
            'name' => 'startTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STMAINVOCALINFO => array(
            'name' => 'stMainVocalInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STSUBVOCAL1INFO => array(
            'name' => 'stSubVocal1Info',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STSUBVOCAL2INFO => array(
            'name' => 'stSubVocal2Info',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STSUBVOCAL3INFO => array(
            'name' => 'stSubVocal3Info',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STSUBVOCAL4INFO => array(
            'name' => 'stSubVocal4Info',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
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
        $this->values[self::GUILDID] = null;
        $this->values[self::STAGENO] = null;
        $this->values[self::GUILDSTAGETYPE] = self::$fields[self::GUILDSTAGETYPE]['default'];
        $this->values[self::UNLOCKFLAG] = null;
        $this->values[self::UNLOCKROLEINFO] = null;
        $this->values[self::UNLOCKTIME] = null;
        $this->values[self::USINGFLAG] = null;
        $this->values[self::CONCERTTYPE] = self::$fields[self::CONCERTTYPE]['default'];
        $this->values[self::STARTTIME] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::STMAINVOCALINFO] = null;
        $this->values[self::STSUBVOCAL1INFO] = null;
        $this->values[self::STSUBVOCAL2INFO] = null;
        $this->values[self::STSUBVOCAL3INFO] = null;
        $this->values[self::STSUBVOCAL4INFO] = null;
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
     * Sets value of 'guildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildID($value)
    {
        return $this->set(self::GUILDID, $value);
    }

    /**
     * Returns value of 'guildID' property
     *
     * @return integer
     */
    public function getGuildID()
    {
        $value = $this->get(self::GUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildID()
    {
        return $this->get(self::GUILDID) !== null;
    }

    /**
     * Sets value of 'stageNo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStageNo($value)
    {
        return $this->set(self::STAGENO, $value);
    }

    /**
     * Returns value of 'stageNo' property
     *
     * @return integer
     */
    public function getStageNo()
    {
        $value = $this->get(self::STAGENO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'stageNo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStageNo()
    {
        return $this->get(self::STAGENO) !== null;
    }

    /**
     * Sets value of 'guildStageType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildStageType($value)
    {
        return $this->set(self::GUILDSTAGETYPE, $value);
    }

    /**
     * Returns value of 'guildStageType' property
     *
     * @return integer
     */
    public function getGuildStageType()
    {
        $value = $this->get(self::GUILDSTAGETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildStageType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildStageType()
    {
        return $this->get(self::GUILDSTAGETYPE) !== null;
    }

    /**
     * Sets value of 'unlockFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnlockFlag($value)
    {
        return $this->set(self::UNLOCKFLAG, $value);
    }

    /**
     * Returns value of 'unlockFlag' property
     *
     * @return integer
     */
    public function getUnlockFlag()
    {
        $value = $this->get(self::UNLOCKFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unlockFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnlockFlag()
    {
        return $this->get(self::UNLOCKFLAG) !== null;
    }

    /**
     * Sets value of 'unlockRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setUnlockRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::UNLOCKROLEINFO, $value);
    }

    /**
     * Returns value of 'unlockRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getUnlockRoleInfo()
    {
        return $this->get(self::UNLOCKROLEINFO);
    }

    /**
     * Returns true if 'unlockRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnlockRoleInfo()
    {
        return $this->get(self::UNLOCKROLEINFO) !== null;
    }

    /**
     * Sets value of 'unlockTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnlockTime($value)
    {
        return $this->set(self::UNLOCKTIME, $value);
    }

    /**
     * Returns value of 'unlockTime' property
     *
     * @return integer
     */
    public function getUnlockTime()
    {
        $value = $this->get(self::UNLOCKTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unlockTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnlockTime()
    {
        return $this->get(self::UNLOCKTIME) !== null;
    }

    /**
     * Sets value of 'usingFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUsingFlag($value)
    {
        return $this->set(self::USINGFLAG, $value);
    }

    /**
     * Returns value of 'usingFlag' property
     *
     * @return integer
     */
    public function getUsingFlag()
    {
        $value = $this->get(self::USINGFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'usingFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsingFlag()
    {
        return $this->get(self::USINGFLAG) !== null;
    }

    /**
     * Sets value of 'concertType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConcertType($value)
    {
        return $this->set(self::CONCERTTYPE, $value);
    }

    /**
     * Returns value of 'concertType' property
     *
     * @return integer
     */
    public function getConcertType()
    {
        $value = $this->get(self::CONCERTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'concertType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConcertType()
    {
        return $this->get(self::CONCERTTYPE) !== null;
    }

    /**
     * Sets value of 'startTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartTime($value)
    {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return integer
     */
    public function getStartTime()
    {
        $value = $this->get(self::STARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartTime()
    {
        return $this->get(self::STARTTIME) !== null;
    }

    /**
     * Sets value of 'duration' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDuration($value)
    {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return integer
     */
    public function getDuration()
    {
        $value = $this->get(self::DURATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'duration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDuration()
    {
        return $this->get(self::DURATION) !== null;
    }

    /**
     * Sets value of 'stMainVocalInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStMainVocalInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STMAINVOCALINFO, $value);
    }

    /**
     * Returns value of 'stMainVocalInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStMainVocalInfo()
    {
        return $this->get(self::STMAINVOCALINFO);
    }

    /**
     * Returns true if 'stMainVocalInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStMainVocalInfo()
    {
        return $this->get(self::STMAINVOCALINFO) !== null;
    }

    /**
     * Sets value of 'stSubVocal1Info' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStSubVocal1Info(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STSUBVOCAL1INFO, $value);
    }

    /**
     * Returns value of 'stSubVocal1Info' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStSubVocal1Info()
    {
        return $this->get(self::STSUBVOCAL1INFO);
    }

    /**
     * Returns true if 'stSubVocal1Info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStSubVocal1Info()
    {
        return $this->get(self::STSUBVOCAL1INFO) !== null;
    }

    /**
     * Sets value of 'stSubVocal2Info' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStSubVocal2Info(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STSUBVOCAL2INFO, $value);
    }

    /**
     * Returns value of 'stSubVocal2Info' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStSubVocal2Info()
    {
        return $this->get(self::STSUBVOCAL2INFO);
    }

    /**
     * Returns true if 'stSubVocal2Info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStSubVocal2Info()
    {
        return $this->get(self::STSUBVOCAL2INFO) !== null;
    }

    /**
     * Sets value of 'stSubVocal3Info' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStSubVocal3Info(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STSUBVOCAL3INFO, $value);
    }

    /**
     * Returns value of 'stSubVocal3Info' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStSubVocal3Info()
    {
        return $this->get(self::STSUBVOCAL3INFO);
    }

    /**
     * Returns true if 'stSubVocal3Info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStSubVocal3Info()
    {
        return $this->get(self::STSUBVOCAL3INFO) !== null;
    }

    /**
     * Sets value of 'stSubVocal4Info' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStSubVocal4Info(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STSUBVOCAL4INFO, $value);
    }

    /**
     * Returns value of 'stSubVocal4Info' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStSubVocal4Info()
    {
        return $this->get(self::STSUBVOCAL4INFO);
    }

    /**
     * Returns true if 'stSubVocal4Info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStSubVocal4Info()
    {
        return $this->get(self::STSUBVOCAL4INFO) !== null;
    }
}
}