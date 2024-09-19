<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetDonationInfoResp message
 */
class GDSGetDonationInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEDONATION = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEDONATION => array(
            'name' => 'roleDonation',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleDonation'
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
        $this->values[self::ROLEDONATION] = null;
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
     * Sets value of 'roleDonation' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleDonation $value Property value
     *
     * @return null
     */
    public function setRoleDonation(\Xnhd\Core\Pb\Sdo\RoleDonation $value=null)
    {
        return $this->set(self::ROLEDONATION, $value);
    }

    /**
     * Returns value of 'roleDonation' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleDonation
     */
    public function getRoleDonation()
    {
        return $this->get(self::ROLEDONATION);
    }

    /**
     * Returns true if 'roleDonation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleDonation()
    {
        return $this->get(self::ROLEDONATION) !== null;
    }
}
}