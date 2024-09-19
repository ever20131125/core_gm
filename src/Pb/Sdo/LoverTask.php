<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoverTask message
 */
class LoverTask extends \ProtobufMessage
{
    /* Field index constants */
    const NTASKID = 1;
    const NROLEID = 2;
    const NLOVERID = 3;
    const NTASKTYPE = 4;
    const NTASKSUBTYPE = 5;
    const NTASKQUALITY = 6;
    const NTASKARGV = 7;
    const NSTDVALUE = 8;
    const NMTD = 9;
    const NSTATE = 10;
    const NLASTUPDATETIME = 11;
    const NFORCECOMPLETEMONEY = 12;
    const NDANCEMUSICID = 13;
    const NNEXTUPDATETIMESPAN = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTASKID => array(
            'name' => 'nTaskID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVERID => array(
            'name' => 'nLoverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTASKTYPE => array(
            'name' => 'nTaskType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTASKSUBTYPE => array(
            'name' => 'nTaskSubType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTASKQUALITY => array(
            'name' => 'nTaskQuality',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTASKARGV => array(
            'name' => 'nTaskArgv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTDVALUE => array(
            'name' => 'nStdValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMTD => array(
            'name' => 'nMTD',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTATE => array(
            'name' => 'nState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTUPDATETIME => array(
            'name' => 'nLastUpdateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFORCECOMPLETEMONEY => array(
            'name' => 'nForceCompleteMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDANCEMUSICID => array(
            'name' => 'nDanceMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEXTUPDATETIMESPAN => array(
            'name' => 'nNextUpdateTimeSpan',
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
        $this->values[self::NTASKID] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NLOVERID] = null;
        $this->values[self::NTASKTYPE] = null;
        $this->values[self::NTASKSUBTYPE] = null;
        $this->values[self::NTASKQUALITY] = null;
        $this->values[self::NTASKARGV] = null;
        $this->values[self::NSTDVALUE] = null;
        $this->values[self::NMTD] = null;
        $this->values[self::NSTATE] = null;
        $this->values[self::NLASTUPDATETIME] = null;
        $this->values[self::NFORCECOMPLETEMONEY] = null;
        $this->values[self::NDANCEMUSICID] = null;
        $this->values[self::NNEXTUPDATETIMESPAN] = null;
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
     * Sets value of 'nTaskID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTaskID($value)
    {
        return $this->set(self::NTASKID, $value);
    }

    /**
     * Returns value of 'nTaskID' property
     *
     * @return integer
     */
    public function getNTaskID()
    {
        $value = $this->get(self::NTASKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTaskID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTaskID()
    {
        return $this->get(self::NTASKID) !== null;
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
     * Sets value of 'nLoverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoverID($value)
    {
        return $this->set(self::NLOVERID, $value);
    }

    /**
     * Returns value of 'nLoverID' property
     *
     * @return integer
     */
    public function getNLoverID()
    {
        $value = $this->get(self::NLOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoverID()
    {
        return $this->get(self::NLOVERID) !== null;
    }

    /**
     * Sets value of 'nTaskType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTaskType($value)
    {
        return $this->set(self::NTASKTYPE, $value);
    }

    /**
     * Returns value of 'nTaskType' property
     *
     * @return integer
     */
    public function getNTaskType()
    {
        $value = $this->get(self::NTASKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTaskType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTaskType()
    {
        return $this->get(self::NTASKTYPE) !== null;
    }

    /**
     * Sets value of 'nTaskSubType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTaskSubType($value)
    {
        return $this->set(self::NTASKSUBTYPE, $value);
    }

    /**
     * Returns value of 'nTaskSubType' property
     *
     * @return integer
     */
    public function getNTaskSubType()
    {
        $value = $this->get(self::NTASKSUBTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTaskSubType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTaskSubType()
    {
        return $this->get(self::NTASKSUBTYPE) !== null;
    }

    /**
     * Sets value of 'nTaskQuality' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTaskQuality($value)
    {
        return $this->set(self::NTASKQUALITY, $value);
    }

    /**
     * Returns value of 'nTaskQuality' property
     *
     * @return integer
     */
    public function getNTaskQuality()
    {
        $value = $this->get(self::NTASKQUALITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTaskQuality' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTaskQuality()
    {
        return $this->get(self::NTASKQUALITY) !== null;
    }

    /**
     * Sets value of 'nTaskArgv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTaskArgv($value)
    {
        return $this->set(self::NTASKARGV, $value);
    }

    /**
     * Returns value of 'nTaskArgv' property
     *
     * @return integer
     */
    public function getNTaskArgv()
    {
        $value = $this->get(self::NTASKARGV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTaskArgv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTaskArgv()
    {
        return $this->get(self::NTASKARGV) !== null;
    }

    /**
     * Sets value of 'nStdValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStdValue($value)
    {
        return $this->set(self::NSTDVALUE, $value);
    }

    /**
     * Returns value of 'nStdValue' property
     *
     * @return integer
     */
    public function getNStdValue()
    {
        $value = $this->get(self::NSTDVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStdValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStdValue()
    {
        return $this->get(self::NSTDVALUE) !== null;
    }

    /**
     * Sets value of 'nMTD' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMTD($value)
    {
        return $this->set(self::NMTD, $value);
    }

    /**
     * Returns value of 'nMTD' property
     *
     * @return integer
     */
    public function getNMTD()
    {
        $value = $this->get(self::NMTD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMTD' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMTD()
    {
        return $this->get(self::NMTD) !== null;
    }

    /**
     * Sets value of 'nState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNState($value)
    {
        return $this->set(self::NSTATE, $value);
    }

    /**
     * Returns value of 'nState' property
     *
     * @return integer
     */
    public function getNState()
    {
        $value = $this->get(self::NSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNState()
    {
        return $this->get(self::NSTATE) !== null;
    }

    /**
     * Sets value of 'nLastUpdateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastUpdateTime($value)
    {
        return $this->set(self::NLASTUPDATETIME, $value);
    }

    /**
     * Returns value of 'nLastUpdateTime' property
     *
     * @return integer
     */
    public function getNLastUpdateTime()
    {
        $value = $this->get(self::NLASTUPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastUpdateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastUpdateTime()
    {
        return $this->get(self::NLASTUPDATETIME) !== null;
    }

    /**
     * Sets value of 'nForceCompleteMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForceCompleteMoney($value)
    {
        return $this->set(self::NFORCECOMPLETEMONEY, $value);
    }

    /**
     * Returns value of 'nForceCompleteMoney' property
     *
     * @return integer
     */
    public function getNForceCompleteMoney()
    {
        $value = $this->get(self::NFORCECOMPLETEMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForceCompleteMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForceCompleteMoney()
    {
        return $this->get(self::NFORCECOMPLETEMONEY) !== null;
    }

    /**
     * Sets value of 'nDanceMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDanceMusicID($value)
    {
        return $this->set(self::NDANCEMUSICID, $value);
    }

    /**
     * Returns value of 'nDanceMusicID' property
     *
     * @return integer
     */
    public function getNDanceMusicID()
    {
        $value = $this->get(self::NDANCEMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDanceMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDanceMusicID()
    {
        return $this->get(self::NDANCEMUSICID) !== null;
    }

    /**
     * Sets value of 'nNextUpdateTimeSpan' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNextUpdateTimeSpan($value)
    {
        return $this->set(self::NNEXTUPDATETIMESPAN, $value);
    }

    /**
     * Returns value of 'nNextUpdateTimeSpan' property
     *
     * @return integer
     */
    public function getNNextUpdateTimeSpan()
    {
        $value = $this->get(self::NNEXTUPDATETIMESPAN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNextUpdateTimeSpan' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNextUpdateTimeSpan()
    {
        return $this->get(self::NNEXTUPDATETIMESPAN) !== null;
    }
}
}