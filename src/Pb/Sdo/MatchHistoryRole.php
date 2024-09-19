<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchHistoryRole message
 */
class MatchHistoryRole extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STROLEINFO = 2;
    const STTITLEINFO = 3;
    const NTEAM = 4;
    const NRANK = 5;
    const NRANKINTEAM = 6;
    const BMVP = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEINFO => array(
            'name' => 'stRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::STTITLEINFO => array(
            'name' => 'stTitleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::NTEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'nTeam',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANK => array(
            'name' => 'nRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANKINTEAM => array(
            'name' => 'nRankInTeam',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BMVP => array(
            'name' => 'bMVP',
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
        $this->values[self::STROLEINFO] = null;
        $this->values[self::STTITLEINFO] = null;
        $this->values[self::NTEAM] = self::$fields[self::NTEAM]['default'];
        $this->values[self::NRANK] = null;
        $this->values[self::NRANKINTEAM] = null;
        $this->values[self::BMVP] = null;
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
     * Sets value of 'stRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoleInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::STROLEINFO, $value);
    }

    /**
     * Returns value of 'stRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getStRoleInfo()
    {
        return $this->get(self::STROLEINFO);
    }

    /**
     * Returns true if 'stRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleInfo()
    {
        return $this->get(self::STROLEINFO) !== null;
    }

    /**
     * Sets value of 'stTitleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setStTitleInfo(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::STTITLEINFO, $value);
    }

    /**
     * Returns value of 'stTitleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getStTitleInfo()
    {
        return $this->get(self::STTITLEINFO);
    }

    /**
     * Returns true if 'stTitleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTitleInfo()
    {
        return $this->get(self::STTITLEINFO) !== null;
    }

    /**
     * Sets value of 'nTeam' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTeam($value)
    {
        return $this->set(self::NTEAM, $value);
    }

    /**
     * Returns value of 'nTeam' property
     *
     * @return integer
     */
    public function getNTeam()
    {
        $value = $this->get(self::NTEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTeam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTeam()
    {
        return $this->get(self::NTEAM) !== null;
    }

    /**
     * Sets value of 'nRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRank($value)
    {
        return $this->set(self::NRANK, $value);
    }

    /**
     * Returns value of 'nRank' property
     *
     * @return integer
     */
    public function getNRank()
    {
        $value = $this->get(self::NRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRank()
    {
        return $this->get(self::NRANK) !== null;
    }

    /**
     * Sets value of 'nRankInTeam' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRankInTeam($value)
    {
        return $this->set(self::NRANKINTEAM, $value);
    }

    /**
     * Returns value of 'nRankInTeam' property
     *
     * @return integer
     */
    public function getNRankInTeam()
    {
        $value = $this->get(self::NRANKINTEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRankInTeam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRankInTeam()
    {
        return $this->get(self::NRANKINTEAM) !== null;
    }

    /**
     * Sets value of 'bMVP' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBMVP($value)
    {
        return $this->set(self::BMVP, $value);
    }

    /**
     * Returns value of 'bMVP' property
     *
     * @return integer
     */
    public function getBMVP()
    {
        $value = $this->get(self::BMVP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bMVP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBMVP()
    {
        return $this->get(self::BMVP) !== null;
    }
}
}