<?php
/**
 * Auto generated from smallgameserver.proto at 2021-07-29 01:54:29
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSHistoryDetailResp message
 */
class SGSHistoryDetailResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STINFO => array(
            'name' => 'stInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistoryDetail'
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
        $this->values[self::STINFO] = null;
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
     * Sets value of 'stInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistoryDetail $value Property value
     *
     * @return null
     */
    public function setStInfo(\Xnhd\Core\Pb\Sdo\MatchHistoryDetail $value=null)
    {
        return $this->set(self::STINFO, $value);
    }

    /**
     * Returns value of 'stInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryDetail
     */
    public function getStInfo()
    {
        return $this->get(self::STINFO);
    }

    /**
     * Returns true if 'stInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStInfo()
    {
        return $this->get(self::STINFO) !== null;
    }
}
}