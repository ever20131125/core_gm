<?php
/**
 * Auto generated from relationserver.proto at 2021-10-26 06:02:40
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleRoleResp message
 */
class RLSGetCoupleRoleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STCOUPLEROLE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STCOUPLEROLE => array(
            'name' => 'stCoupleRole',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleRole'
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
        $this->values[self::STCOUPLEROLE] = null;
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
     * Sets value of 'stCoupleRole' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleRole $value Property value
     *
     * @return null
     */
    public function setStCoupleRole(\Xnhd\Core\Pb\Sdo\CoupleRole $value=null)
    {
        return $this->set(self::STCOUPLEROLE, $value);
    }

    /**
     * Returns value of 'stCoupleRole' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleRole
     */
    public function getStCoupleRole()
    {
        return $this->get(self::STCOUPLEROLE);
    }

    /**
     * Returns true if 'stCoupleRole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStCoupleRole()
    {
        return $this->get(self::STCOUPLEROLE) !== null;
    }
}
}