<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBDealWithTipOffReq message
 */
class RDBDealWithTipOffReq extends \ProtobufMessage
{
    /* Field index constants */
    const NTARGETID = 1;
    const TIPOFFTYPE = 2;
    const SZMESSAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIPOFFTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\TipOffType::enmTipOff_None,
            'name' => 'tipOffType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZMESSAGE => array(
            'name' => 'szMessage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NTARGETID] = null;
        $this->values[self::TIPOFFTYPE] = self::$fields[self::TIPOFFTYPE]['default'];
        $this->values[self::SZMESSAGE] = null;
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
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }

    /**
     * Sets value of 'tipOffType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTipOffType($value)
    {
        return $this->set(self::TIPOFFTYPE, $value);
    }

    /**
     * Returns value of 'tipOffType' property
     *
     * @return integer
     */
    public function getTipOffType()
    {
        $value = $this->get(self::TIPOFFTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tipOffType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTipOffType()
    {
        return $this->get(self::TIPOFFTYPE) !== null;
    }

    /**
     * Sets value of 'szMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMessage($value)
    {
        return $this->set(self::SZMESSAGE, $value);
    }

    /**
     * Returns value of 'szMessage' property
     *
     * @return string
     */
    public function getSzMessage()
    {
        $value = $this->get(self::SZMESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMessage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMessage()
    {
        return $this->get(self::SZMESSAGE) !== null;
    }
}
}