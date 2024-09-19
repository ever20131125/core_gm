<?php
/**
 * Auto generated from relationserver.proto at 2021-10-26 06:02:40
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWearTokenReq message
 */
class RLSWearTokenReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STTOKENINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STTOKENINFO => array(
            'name' => 'stTokenInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TokenInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STTOKENINFO] = null;
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
     * Sets value of 'stTokenInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TokenInfo $value Property value
     *
     * @return null
     */
    public function setStTokenInfo(\Xnhd\Core\Pb\Sdo\TokenInfo $value=null)
    {
        return $this->set(self::STTOKENINFO, $value);
    }

    /**
     * Returns value of 'stTokenInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TokenInfo
     */
    public function getStTokenInfo()
    {
        return $this->get(self::STTOKENINFO);
    }

    /**
     * Returns true if 'stTokenInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTokenInfo()
    {
        return $this->get(self::STTOKENINFO) !== null;
    }
}
}