<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchSpanInfo message
 */
class MatchSpanInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NTEAMID = 1;
    const NPROFICIENCY = 2;
    const RECORDKIND = 3;
    const NMATCHTIME = 4;
    const NSPANTIMES = 5;
    const NMINPRO = 6;
    const NMAXPRO = 7;
    const PTYPE = 8;
    const TEAM = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTEAMID => array(
            'name' => 'nTeamID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROFICIENCY => array(
            'name' => 'nProficiency',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECORDKIND => array(
            'default' => \Xnhd\Core\Pb\Sdo\RecordKind::enmRecordKind_Normal,
            'name' => 'recordKind',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATCHTIME => array(
            'name' => 'nMatchTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSPANTIMES => array(
            'name' => 'nSpanTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMINPRO => array(
            'name' => 'nMinPro',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXPRO => array(
            'name' => 'nMaxPro',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PartnerType::enmPartner_None,
            'name' => 'pType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
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
        $this->values[self::NTEAMID] = null;
        $this->values[self::NPROFICIENCY] = null;
        $this->values[self::RECORDKIND] = self::$fields[self::RECORDKIND]['default'];
        $this->values[self::NMATCHTIME] = null;
        $this->values[self::NSPANTIMES] = null;
        $this->values[self::NMINPRO] = null;
        $this->values[self::NMAXPRO] = null;
        $this->values[self::PTYPE] = self::$fields[self::PTYPE]['default'];
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
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
     * Sets value of 'nTeamID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTeamID($value)
    {
        return $this->set(self::NTEAMID, $value);
    }

    /**
     * Returns value of 'nTeamID' property
     *
     * @return integer
     */
    public function getNTeamID()
    {
        $value = $this->get(self::NTEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTeamID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTeamID()
    {
        return $this->get(self::NTEAMID) !== null;
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
     * Sets value of 'recordKind' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecordKind($value)
    {
        return $this->set(self::RECORDKIND, $value);
    }

    /**
     * Returns value of 'recordKind' property
     *
     * @return integer
     */
    public function getRecordKind()
    {
        $value = $this->get(self::RECORDKIND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recordKind' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecordKind()
    {
        return $this->get(self::RECORDKIND) !== null;
    }

    /**
     * Sets value of 'nMatchTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchTime($value)
    {
        return $this->set(self::NMATCHTIME, $value);
    }

    /**
     * Returns value of 'nMatchTime' property
     *
     * @return integer
     */
    public function getNMatchTime()
    {
        $value = $this->get(self::NMATCHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchTime()
    {
        return $this->get(self::NMATCHTIME) !== null;
    }

    /**
     * Sets value of 'nSpanTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSpanTimes($value)
    {
        return $this->set(self::NSPANTIMES, $value);
    }

    /**
     * Returns value of 'nSpanTimes' property
     *
     * @return integer
     */
    public function getNSpanTimes()
    {
        $value = $this->get(self::NSPANTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSpanTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSpanTimes()
    {
        return $this->get(self::NSPANTIMES) !== null;
    }

    /**
     * Sets value of 'nMinPro' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMinPro($value)
    {
        return $this->set(self::NMINPRO, $value);
    }

    /**
     * Returns value of 'nMinPro' property
     *
     * @return integer
     */
    public function getNMinPro()
    {
        $value = $this->get(self::NMINPRO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMinPro' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMinPro()
    {
        return $this->get(self::NMINPRO) !== null;
    }

    /**
     * Sets value of 'nMaxPro' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxPro($value)
    {
        return $this->set(self::NMAXPRO, $value);
    }

    /**
     * Returns value of 'nMaxPro' property
     *
     * @return integer
     */
    public function getNMaxPro()
    {
        $value = $this->get(self::NMAXPRO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxPro' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxPro()
    {
        return $this->get(self::NMAXPRO) !== null;
    }

    /**
     * Sets value of 'pType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPType($value)
    {
        return $this->set(self::PTYPE, $value);
    }

    /**
     * Returns value of 'pType' property
     *
     * @return integer
     */
    public function getPType()
    {
        $value = $this->get(self::PTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPType()
    {
        return $this->get(self::PTYPE) !== null;
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
}
}