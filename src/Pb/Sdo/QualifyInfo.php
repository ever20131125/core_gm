<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyInfo message
 */
class QualifyInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NNO = 1;
    const NSHOWTIME = 2;
    const NSTARTTIME = 3;
    const NENDTIME = 4;
    const NDISPEARTIME = 5;
    const NSTARTHOUR = 6;
    const NENDHOUR = 7;
    const SZNAME = 8;
    const QSTATE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NNO => array(
            'name' => 'nNo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSHOWTIME => array(
            'name' => 'nShowTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDISPEARTIME => array(
            'name' => 'nDispearTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTHOUR => array(
            'name' => 'nStartHour',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDHOUR => array(
            'name' => 'nEndHour',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZNAME => array(
            'name' => 'szName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\QualifyState::QualifyState_Close,
            'name' => 'qstate',
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
        $this->values[self::NNO] = null;
        $this->values[self::NSHOWTIME] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NDISPEARTIME] = null;
        $this->values[self::NSTARTHOUR] = null;
        $this->values[self::NENDHOUR] = null;
        $this->values[self::SZNAME] = null;
        $this->values[self::QSTATE] = self::$fields[self::QSTATE]['default'];
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
     * Sets value of 'nNo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNo($value)
    {
        return $this->set(self::NNO, $value);
    }

    /**
     * Returns value of 'nNo' property
     *
     * @return integer
     */
    public function getNNo()
    {
        $value = $this->get(self::NNO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNo()
    {
        return $this->get(self::NNO) !== null;
    }

    /**
     * Sets value of 'nShowTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShowTime($value)
    {
        return $this->set(self::NSHOWTIME, $value);
    }

    /**
     * Returns value of 'nShowTime' property
     *
     * @return integer
     */
    public function getNShowTime()
    {
        $value = $this->get(self::NSHOWTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShowTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShowTime()
    {
        return $this->get(self::NSHOWTIME) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nDispearTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDispearTime($value)
    {
        return $this->set(self::NDISPEARTIME, $value);
    }

    /**
     * Returns value of 'nDispearTime' property
     *
     * @return integer
     */
    public function getNDispearTime()
    {
        $value = $this->get(self::NDISPEARTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDispearTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDispearTime()
    {
        return $this->get(self::NDISPEARTIME) !== null;
    }

    /**
     * Sets value of 'nStartHour' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartHour($value)
    {
        return $this->set(self::NSTARTHOUR, $value);
    }

    /**
     * Returns value of 'nStartHour' property
     *
     * @return integer
     */
    public function getNStartHour()
    {
        $value = $this->get(self::NSTARTHOUR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartHour' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartHour()
    {
        return $this->get(self::NSTARTHOUR) !== null;
    }

    /**
     * Sets value of 'nEndHour' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndHour($value)
    {
        return $this->set(self::NENDHOUR, $value);
    }

    /**
     * Returns value of 'nEndHour' property
     *
     * @return integer
     */
    public function getNEndHour()
    {
        $value = $this->get(self::NENDHOUR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndHour' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndHour()
    {
        return $this->get(self::NENDHOUR) !== null;
    }

    /**
     * Sets value of 'szName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzName($value)
    {
        return $this->set(self::SZNAME, $value);
    }

    /**
     * Returns value of 'szName' property
     *
     * @return string
     */
    public function getSzName()
    {
        $value = $this->get(self::SZNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzName()
    {
        return $this->get(self::SZNAME) !== null;
    }

    /**
     * Sets value of 'qstate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQstate($value)
    {
        return $this->set(self::QSTATE, $value);
    }

    /**
     * Returns value of 'qstate' property
     *
     * @return integer
     */
    public function getQstate()
    {
        $value = $this->get(self::QSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'qstate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQstate()
    {
        return $this->get(self::QSTATE) !== null;
    }
}
}