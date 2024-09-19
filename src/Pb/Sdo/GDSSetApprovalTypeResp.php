<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSSetApprovalTypeResp message
 */
class GDSSetApprovalTypeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const APPROVALTYPE = 2;
    const MINLEVEL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::APPROVALTYPE => array(
            'name' => 'approvalType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MINLEVEL => array(
            'name' => 'minLevel',
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
        $this->values[self::APPROVALTYPE] = null;
        $this->values[self::MINLEVEL] = null;
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
     * Sets value of 'approvalType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setApprovalType($value)
    {
        return $this->set(self::APPROVALTYPE, $value);
    }

    /**
     * Returns value of 'approvalType' property
     *
     * @return integer
     */
    public function getApprovalType()
    {
        $value = $this->get(self::APPROVALTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'approvalType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasApprovalType()
    {
        return $this->get(self::APPROVALTYPE) !== null;
    }

    /**
     * Sets value of 'minLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinLevel($value)
    {
        return $this->set(self::MINLEVEL, $value);
    }

    /**
     * Returns value of 'minLevel' property
     *
     * @return integer
     */
    public function getMinLevel()
    {
        $value = $this->get(self::MINLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'minLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMinLevel()
    {
        return $this->get(self::MINLEVEL) !== null;
    }
}
}