<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSEnterGameResp message
 */
class STSEnterGameResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SZBANREASON = 3;
    const NBANENDTIME = 4;
    const NCHANNELID = 5;
    const SZCHANNELNAME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZBANREASON => array(
            'name' => 'szBanReason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NBANENDTIME => array(
            'name' => 'nBanEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHANNELID => array(
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCHANNELNAME => array(
            'name' => 'szChannelName',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SZBANREASON] = null;
        $this->values[self::NBANENDTIME] = null;
        $this->values[self::NCHANNELID] = null;
        $this->values[self::SZCHANNELNAME] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'szBanReason' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzBanReason($value)
    {
        return $this->set(self::SZBANREASON, $value);
    }

    /**
     * Returns value of 'szBanReason' property
     *
     * @return string
     */
    public function getSzBanReason()
    {
        $value = $this->get(self::SZBANREASON);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szBanReason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzBanReason()
    {
        return $this->get(self::SZBANREASON) !== null;
    }

    /**
     * Sets value of 'nBanEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBanEndTime($value)
    {
        return $this->set(self::NBANENDTIME, $value);
    }

    /**
     * Returns value of 'nBanEndTime' property
     *
     * @return integer
     */
    public function getNBanEndTime()
    {
        $value = $this->get(self::NBANENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBanEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBanEndTime()
    {
        return $this->get(self::NBANENDTIME) !== null;
    }

    /**
     * Sets value of 'nChannelID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChannelID($value)
    {
        return $this->set(self::NCHANNELID, $value);
    }

    /**
     * Returns value of 'nChannelID' property
     *
     * @return integer
     */
    public function getNChannelID()
    {
        $value = $this->get(self::NCHANNELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChannelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChannelID()
    {
        return $this->get(self::NCHANNELID) !== null;
    }

    /**
     * Sets value of 'szChannelName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzChannelName($value)
    {
        return $this->set(self::SZCHANNELNAME, $value);
    }

    /**
     * Returns value of 'szChannelName' property
     *
     * @return string
     */
    public function getSzChannelName()
    {
        $value = $this->get(self::SZCHANNELNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szChannelName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzChannelName()
    {
        return $this->get(self::SZCHANNELNAME) !== null;
    }
}
}