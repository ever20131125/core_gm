<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleConcertInfo message
 */
class RoleConcertInfo extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDID = 1;
    const ROLEID = 2;
    const INTRADAYSHOWCOUNT = 3;
    const SINGINGFLAG = 4;
    const STAGENO = 5;
    const CONCERTTYPE = 6;
    const ROLEPOSITION = 7;
    const STARTTIME = 8;
    const DURATION = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INTRADAYSHOWCOUNT => array(
            'name' => 'intradayShowCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SINGINGFLAG => array(
            'name' => 'singingFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAGENO => array(
            'name' => 'stageNo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONCERTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ConcertType::enmConcertType_Invalid,
            'name' => 'concertType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEPOSITION => array(
            'name' => 'rolePosition',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::INTRADAYSHOWCOUNT] = null;
        $this->values[self::SINGINGFLAG] = null;
        $this->values[self::STAGENO] = null;
        $this->values[self::CONCERTTYPE] = self::$fields[self::CONCERTTYPE]['default'];
        $this->values[self::ROLEPOSITION] = null;
        $this->values[self::STARTTIME] = null;
        $this->values[self::DURATION] = null;
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
     * Sets value of 'intradayShowCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIntradayShowCount($value)
    {
        return $this->set(self::INTRADAYSHOWCOUNT, $value);
    }

    /**
     * Returns value of 'intradayShowCount' property
     *
     * @return integer
     */
    public function getIntradayShowCount()
    {
        $value = $this->get(self::INTRADAYSHOWCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'intradayShowCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIntradayShowCount()
    {
        return $this->get(self::INTRADAYSHOWCOUNT) !== null;
    }

    /**
     * Sets value of 'singingFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSingingFlag($value)
    {
        return $this->set(self::SINGINGFLAG, $value);
    }

    /**
     * Returns value of 'singingFlag' property
     *
     * @return integer
     */
    public function getSingingFlag()
    {
        $value = $this->get(self::SINGINGFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'singingFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSingingFlag()
    {
        return $this->get(self::SINGINGFLAG) !== null;
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
     * Sets value of 'rolePosition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRolePosition($value)
    {
        return $this->set(self::ROLEPOSITION, $value);
    }

    /**
     * Returns value of 'rolePosition' property
     *
     * @return integer
     */
    public function getRolePosition()
    {
        $value = $this->get(self::ROLEPOSITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rolePosition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRolePosition()
    {
        return $this->get(self::ROLEPOSITION) !== null;
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
}
}