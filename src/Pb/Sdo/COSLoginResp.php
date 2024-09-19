<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSLoginResp message
 */
class COSLoginResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const BNEEDQUEUE = 2;
    const STLOGINQUEUEINFO = 3;
    const NBANREASON = 4;
    const NBANENDTIME = 5;
    const NRELOGIN = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::BNEEDQUEUE => array(
            'name' => 'bNeedQueue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::STLOGINQUEUEINFO => array(
            'name' => 'stLoginQueueInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\LoginQueueInfo'
        ),
        self::NBANREASON => array(
            'name' => 'nBanReason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBANENDTIME => array(
            'name' => 'nBanEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRELOGIN => array(
            'name' => 'nRelogin',
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
        $this->values[self::BNEEDQUEUE] = null;
        $this->values[self::STLOGINQUEUEINFO] = null;
        $this->values[self::NBANREASON] = null;
        $this->values[self::NBANENDTIME] = null;
        $this->values[self::NRELOGIN] = null;
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
     * Sets value of 'bNeedQueue' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBNeedQueue($value)
    {
        return $this->set(self::BNEEDQUEUE, $value);
    }

    /**
     * Returns value of 'bNeedQueue' property
     *
     * @return boolean
     */
    public function getBNeedQueue()
    {
        $value = $this->get(self::BNEEDQUEUE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bNeedQueue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBNeedQueue()
    {
        return $this->get(self::BNEEDQUEUE) !== null;
    }

    /**
     * Sets value of 'stLoginQueueInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\LoginQueueInfo $value Property value
     *
     * @return null
     */
    public function setStLoginQueueInfo(\Xnhd\Core\Pb\Sdo\LoginQueueInfo $value=null)
    {
        return $this->set(self::STLOGINQUEUEINFO, $value);
    }

    /**
     * Returns value of 'stLoginQueueInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\LoginQueueInfo
     */
    public function getStLoginQueueInfo()
    {
        return $this->get(self::STLOGINQUEUEINFO);
    }

    /**
     * Returns true if 'stLoginQueueInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStLoginQueueInfo()
    {
        return $this->get(self::STLOGINQUEUEINFO) !== null;
    }

    /**
     * Sets value of 'nBanReason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBanReason($value)
    {
        return $this->set(self::NBANREASON, $value);
    }

    /**
     * Returns value of 'nBanReason' property
     *
     * @return integer
     */
    public function getNBanReason()
    {
        $value = $this->get(self::NBANREASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBanReason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBanReason()
    {
        return $this->get(self::NBANREASON) !== null;
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
     * Sets value of 'nRelogin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRelogin($value)
    {
        return $this->set(self::NRELOGIN, $value);
    }

    /**
     * Returns value of 'nRelogin' property
     *
     * @return integer
     */
    public function getNRelogin()
    {
        $value = $this->get(self::NRELOGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRelogin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRelogin()
    {
        return $this->get(self::NRELOGIN) !== null;
    }
}
}