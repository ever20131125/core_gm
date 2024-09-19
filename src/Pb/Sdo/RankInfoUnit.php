<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankInfoUnit message
 */
class RankInfoUnit extends \ProtobufMessage
{
    /* Field index constants */
    const RANKTYPE = 1;
    const CURRRANK = 2;
    const LASTRANK = 3;
    const SHOWRANKVALUE = 4;
    const RANKVALUE = 5;
    const RANKVALUE3 = 6;
    const ROLEINFO = 7;
    const OHTERINFO = 8;
    const RANKVALUE4 = 9;
    const RANKVALUE5 = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RANKTYPE => array(
            'name' => 'rankType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRRANK => array(
            'name' => 'currRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTRANK => array(
            'name' => 'lastRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOWRANKVALUE => array(
            'name' => 'showRankValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKVALUE => array(
            'name' => 'rankValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKVALUE3 => array(
            'name' => 'rankValue3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::OHTERINFO => array(
            'name' => 'ohterInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::RANKVALUE4 => array(
            'name' => 'rankValue4',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKVALUE5 => array(
            'name' => 'rankValue5',
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
        $this->values[self::RANKTYPE] = null;
        $this->values[self::CURRRANK] = null;
        $this->values[self::LASTRANK] = null;
        $this->values[self::SHOWRANKVALUE] = null;
        $this->values[self::RANKVALUE] = null;
        $this->values[self::RANKVALUE3] = null;
        $this->values[self::ROLEINFO] = null;
        $this->values[self::OHTERINFO] = null;
        $this->values[self::RANKVALUE4] = null;
        $this->values[self::RANKVALUE5] = null;
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
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }

    /**
     * Sets value of 'currRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrRank($value)
    {
        return $this->set(self::CURRRANK, $value);
    }

    /**
     * Returns value of 'currRank' property
     *
     * @return integer
     */
    public function getCurrRank()
    {
        $value = $this->get(self::CURRRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'currRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrRank()
    {
        return $this->get(self::CURRRANK) !== null;
    }

    /**
     * Sets value of 'lastRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRank($value)
    {
        return $this->set(self::LASTRANK, $value);
    }

    /**
     * Returns value of 'lastRank' property
     *
     * @return integer
     */
    public function getLastRank()
    {
        $value = $this->get(self::LASTRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastRank()
    {
        return $this->get(self::LASTRANK) !== null;
    }

    /**
     * Sets value of 'showRankValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShowRankValue($value)
    {
        return $this->set(self::SHOWRANKVALUE, $value);
    }

    /**
     * Returns value of 'showRankValue' property
     *
     * @return integer
     */
    public function getShowRankValue()
    {
        $value = $this->get(self::SHOWRANKVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'showRankValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShowRankValue()
    {
        return $this->get(self::SHOWRANKVALUE) !== null;
    }

    /**
     * Sets value of 'rankValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankValue($value)
    {
        return $this->set(self::RANKVALUE, $value);
    }

    /**
     * Returns value of 'rankValue' property
     *
     * @return integer
     */
    public function getRankValue()
    {
        $value = $this->get(self::RANKVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankValue()
    {
        return $this->get(self::RANKVALUE) !== null;
    }

    /**
     * Sets value of 'rankValue3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankValue3($value)
    {
        return $this->set(self::RANKVALUE3, $value);
    }

    /**
     * Returns value of 'rankValue3' property
     *
     * @return integer
     */
    public function getRankValue3()
    {
        $value = $this->get(self::RANKVALUE3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankValue3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankValue3()
    {
        return $this->get(self::RANKVALUE3) !== null;
    }

    /**
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return $this->get(self::ROLEINFO) !== null;
    }

    /**
     * Sets value of 'ohterInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setOhterInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::OHTERINFO, $value);
    }

    /**
     * Returns value of 'ohterInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getOhterInfo()
    {
        return $this->get(self::OHTERINFO);
    }

    /**
     * Returns true if 'ohterInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOhterInfo()
    {
        return $this->get(self::OHTERINFO) !== null;
    }

    /**
     * Sets value of 'rankValue4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankValue4($value)
    {
        return $this->set(self::RANKVALUE4, $value);
    }

    /**
     * Returns value of 'rankValue4' property
     *
     * @return integer
     */
    public function getRankValue4()
    {
        $value = $this->get(self::RANKVALUE4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankValue4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankValue4()
    {
        return $this->get(self::RANKVALUE4) !== null;
    }

    /**
     * Sets value of 'rankValue5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankValue5($value)
    {
        return $this->set(self::RANKVALUE5, $value);
    }

    /**
     * Returns value of 'rankValue5' property
     *
     * @return integer
     */
    public function getRankValue5()
    {
        $value = $this->get(self::RANKVALUE5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankValue5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankValue5()
    {
        return $this->get(self::RANKVALUE5) !== null;
    }
}
}