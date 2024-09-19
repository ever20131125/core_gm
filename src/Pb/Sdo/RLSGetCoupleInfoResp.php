<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleInfoResp message
 */
class RLSGetCoupleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STCOUPLEINFO = 3;
    const NBREAKTIMECD = 4;
    const NRECOVERTIME = 5;

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
        self::STCOUPLEINFO => array(
            'name' => 'stCoupleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleInfo'
        ),
        self::NBREAKTIMECD => array(
            'name' => 'nBreakTimeCD',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRECOVERTIME => array(
            'name' => 'nRecoverTime',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STCOUPLEINFO] = null;
        $this->values[self::NBREAKTIMECD] = null;
        $this->values[self::NRECOVERTIME] = null;
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
     * Sets value of 'stCoupleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleInfo $value Property value
     *
     * @return null
     */
    public function setStCoupleInfo(\Xnhd\Core\Pb\Sdo\CoupleInfo $value=null)
    {
        return $this->set(self::STCOUPLEINFO, $value);
    }

    /**
     * Returns value of 'stCoupleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleInfo
     */
    public function getStCoupleInfo()
    {
        return $this->get(self::STCOUPLEINFO);
    }

    /**
     * Returns true if 'stCoupleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStCoupleInfo()
    {
        return $this->get(self::STCOUPLEINFO) !== null;
    }

    /**
     * Sets value of 'nBreakTimeCD' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBreakTimeCD($value)
    {
        return $this->set(self::NBREAKTIMECD, $value);
    }

    /**
     * Returns value of 'nBreakTimeCD' property
     *
     * @return integer
     */
    public function getNBreakTimeCD()
    {
        $value = $this->get(self::NBREAKTIMECD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBreakTimeCD' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBreakTimeCD()
    {
        return $this->get(self::NBREAKTIMECD) !== null;
    }

    /**
     * Sets value of 'nRecoverTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRecoverTime($value)
    {
        return $this->set(self::NRECOVERTIME, $value);
    }

    /**
     * Returns value of 'nRecoverTime' property
     *
     * @return integer
     */
    public function getNRecoverTime()
    {
        $value = $this->get(self::NRECOVERTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRecoverTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRecoverTime()
    {
        return $this->get(self::NRECOVERTIME) !== null;
    }
}
}