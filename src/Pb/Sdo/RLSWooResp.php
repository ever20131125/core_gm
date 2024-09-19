<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWooResp message
 */
class RLSWooResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NWOOEDROLEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NWOOEDROLEID => array(
            'name' => 'nWooedRoleID',
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
        $this->values[self::NWOOEDROLEID] = null;
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
     * Sets value of 'nWooedRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWooedRoleID($value)
    {
        return $this->set(self::NWOOEDROLEID, $value);
    }

    /**
     * Returns value of 'nWooedRoleID' property
     *
     * @return integer
     */
    public function getNWooedRoleID()
    {
        $value = $this->get(self::NWOOEDROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWooedRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWooedRoleID()
    {
        return $this->get(self::NWOOEDROLEID) !== null;
    }
}
}