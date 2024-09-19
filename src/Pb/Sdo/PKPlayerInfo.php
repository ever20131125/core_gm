<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PKPlayerInfo message
 */
class PKPlayerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const RANK = 2;
    const CANPK = 3;
    const LASTSENDPKMOMENT = 4;
    const AVAILABLEPKTIMES = 5;
    const LASTCDMOMENT = 6;
    const TODAYBUYPKTIMES = 7;
    const BESTRANK = 8;
    const GENINFO = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CANPK => array(
            'name' => 'canpk',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::LASTSENDPKMOMENT => array(
            'name' => 'lastSendPKMoment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AVAILABLEPKTIMES => array(
            'name' => 'availablePKTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTCDMOMENT => array(
            'name' => 'lastCDMoment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TODAYBUYPKTIMES => array(
            'name' => 'todayBuyPKTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BESTRANK => array(
            'name' => 'bestRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENINFO => array(
            'name' => 'genInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::RANK] = null;
        $this->values[self::CANPK] = null;
        $this->values[self::LASTSENDPKMOMENT] = null;
        $this->values[self::AVAILABLEPKTIMES] = null;
        $this->values[self::LASTCDMOMENT] = null;
        $this->values[self::TODAYBUYPKTIMES] = null;
        $this->values[self::BESTRANK] = null;
        $this->values[self::GENINFO] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'rank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRank($value)
    {
        return $this->set(self::RANK, $value);
    }

    /**
     * Returns value of 'rank' property
     *
     * @return integer
     */
    public function getRank()
    {
        $value = $this->get(self::RANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRank()
    {
        return $this->get(self::RANK) !== null;
    }

    /**
     * Sets value of 'canpk' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanpk($value)
    {
        return $this->set(self::CANPK, $value);
    }

    /**
     * Returns value of 'canpk' property
     *
     * @return boolean
     */
    public function getCanpk()
    {
        $value = $this->get(self::CANPK);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'canpk' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCanpk()
    {
        return $this->get(self::CANPK) !== null;
    }

    /**
     * Sets value of 'lastSendPKMoment' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastSendPKMoment($value)
    {
        return $this->set(self::LASTSENDPKMOMENT, $value);
    }

    /**
     * Returns value of 'lastSendPKMoment' property
     *
     * @return integer
     */
    public function getLastSendPKMoment()
    {
        $value = $this->get(self::LASTSENDPKMOMENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastSendPKMoment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastSendPKMoment()
    {
        return $this->get(self::LASTSENDPKMOMENT) !== null;
    }

    /**
     * Sets value of 'availablePKTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAvailablePKTimes($value)
    {
        return $this->set(self::AVAILABLEPKTIMES, $value);
    }

    /**
     * Returns value of 'availablePKTimes' property
     *
     * @return integer
     */
    public function getAvailablePKTimes()
    {
        $value = $this->get(self::AVAILABLEPKTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'availablePKTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAvailablePKTimes()
    {
        return $this->get(self::AVAILABLEPKTIMES) !== null;
    }

    /**
     * Sets value of 'lastCDMoment' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastCDMoment($value)
    {
        return $this->set(self::LASTCDMOMENT, $value);
    }

    /**
     * Returns value of 'lastCDMoment' property
     *
     * @return integer
     */
    public function getLastCDMoment()
    {
        $value = $this->get(self::LASTCDMOMENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastCDMoment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastCDMoment()
    {
        return $this->get(self::LASTCDMOMENT) !== null;
    }

    /**
     * Sets value of 'todayBuyPKTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTodayBuyPKTimes($value)
    {
        return $this->set(self::TODAYBUYPKTIMES, $value);
    }

    /**
     * Returns value of 'todayBuyPKTimes' property
     *
     * @return integer
     */
    public function getTodayBuyPKTimes()
    {
        $value = $this->get(self::TODAYBUYPKTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'todayBuyPKTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTodayBuyPKTimes()
    {
        return $this->get(self::TODAYBUYPKTIMES) !== null;
    }

    /**
     * Sets value of 'bestRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBestRank($value)
    {
        return $this->set(self::BESTRANK, $value);
    }

    /**
     * Returns value of 'bestRank' property
     *
     * @return integer
     */
    public function getBestRank()
    {
        $value = $this->get(self::BESTRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bestRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBestRank()
    {
        return $this->get(self::BESTRANK) !== null;
    }

    /**
     * Sets value of 'genInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setGenInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::GENINFO, $value);
    }

    /**
     * Returns value of 'genInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getGenInfo()
    {
        return $this->get(self::GENINFO);
    }

    /**
     * Returns true if 'genInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGenInfo()
    {
        return $this->get(self::GENINFO) !== null;
    }
}
}