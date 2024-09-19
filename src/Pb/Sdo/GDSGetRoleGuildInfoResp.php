<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetRoleGuildInfoResp message
 */
class GDSGetRoleGuildInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUILDINFO = 2;
    const MEMBERINFO = 3;
    const NLASTWITHDRAWTIME = 4;
    const NDISSOLVEDURATION = 5;
    const NTRANSFERDURATION = 6;
    const NCOOLDOWNDURATION = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GUILDINFO => array(
            'name' => 'guildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildInfo'
        ),
        self::MEMBERINFO => array(
            'name' => 'memberInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildMemberInfo'
        ),
        self::NLASTWITHDRAWTIME => array(
            'name' => 'nLastWithdrawTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDISSOLVEDURATION => array(
            'name' => 'nDissolveDuration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTRANSFERDURATION => array(
            'name' => 'nTransferDuration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOOLDOWNDURATION => array(
            'name' => 'nCoolDownDuration',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::GUILDINFO] = null;
        $this->values[self::MEMBERINFO] = null;
        $this->values[self::NLASTWITHDRAWTIME] = null;
        $this->values[self::NDISSOLVEDURATION] = null;
        $this->values[self::NTRANSFERDURATION] = null;
        $this->values[self::NCOOLDOWNDURATION] = null;
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
     * Sets value of 'guildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildInfo $value Property value
     *
     * @return null
     */
    public function setGuildInfo(\Xnhd\Core\Pb\Sdo\GuildInfo $value=null)
    {
        return $this->set(self::GUILDINFO, $value);
    }

    /**
     * Returns value of 'guildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildInfo
     */
    public function getGuildInfo()
    {
        return $this->get(self::GUILDINFO);
    }

    /**
     * Returns true if 'guildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildInfo()
    {
        return $this->get(self::GUILDINFO) !== null;
    }

    /**
     * Sets value of 'memberInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildMemberInfo $value Property value
     *
     * @return null
     */
    public function setMemberInfo(\Xnhd\Core\Pb\Sdo\GuildMemberInfo $value=null)
    {
        return $this->set(self::MEMBERINFO, $value);
    }

    /**
     * Returns value of 'memberInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildMemberInfo
     */
    public function getMemberInfo()
    {
        return $this->get(self::MEMBERINFO);
    }

    /**
     * Returns true if 'memberInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberInfo()
    {
        return $this->get(self::MEMBERINFO) !== null;
    }

    /**
     * Sets value of 'nLastWithdrawTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastWithdrawTime($value)
    {
        return $this->set(self::NLASTWITHDRAWTIME, $value);
    }

    /**
     * Returns value of 'nLastWithdrawTime' property
     *
     * @return integer
     */
    public function getNLastWithdrawTime()
    {
        $value = $this->get(self::NLASTWITHDRAWTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastWithdrawTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastWithdrawTime()
    {
        return $this->get(self::NLASTWITHDRAWTIME) !== null;
    }

    /**
     * Sets value of 'nDissolveDuration' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDissolveDuration($value)
    {
        return $this->set(self::NDISSOLVEDURATION, $value);
    }

    /**
     * Returns value of 'nDissolveDuration' property
     *
     * @return integer
     */
    public function getNDissolveDuration()
    {
        $value = $this->get(self::NDISSOLVEDURATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDissolveDuration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDissolveDuration()
    {
        return $this->get(self::NDISSOLVEDURATION) !== null;
    }

    /**
     * Sets value of 'nTransferDuration' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTransferDuration($value)
    {
        return $this->set(self::NTRANSFERDURATION, $value);
    }

    /**
     * Returns value of 'nTransferDuration' property
     *
     * @return integer
     */
    public function getNTransferDuration()
    {
        $value = $this->get(self::NTRANSFERDURATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTransferDuration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTransferDuration()
    {
        return $this->get(self::NTRANSFERDURATION) !== null;
    }

    /**
     * Sets value of 'nCoolDownDuration' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCoolDownDuration($value)
    {
        return $this->set(self::NCOOLDOWNDURATION, $value);
    }

    /**
     * Returns value of 'nCoolDownDuration' property
     *
     * @return integer
     */
    public function getNCoolDownDuration()
    {
        $value = $this->get(self::NCOOLDOWNDURATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCoolDownDuration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCoolDownDuration()
    {
        return $this->get(self::NCOOLDOWNDURATION) !== null;
    }
}
}