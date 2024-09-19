<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSHandleWooResp message
 */
class RLSHandleWooResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NWOOROLEID = 2;
    const NRECOVERTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NWOOROLEID => array(
            'name' => 'nWooRoleID',
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
        $this->values[self::NWOOROLEID] = null;
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
     * Sets value of 'nWooRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWooRoleID($value)
    {
        return $this->set(self::NWOOROLEID, $value);
    }

    /**
     * Returns value of 'nWooRoleID' property
     *
     * @return integer
     */
    public function getNWooRoleID()
    {
        $value = $this->get(self::NWOOROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWooRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWooRoleID()
    {
        return $this->get(self::NWOOROLEID) !== null;
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