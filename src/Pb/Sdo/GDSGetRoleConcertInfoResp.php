<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetRoleConcertInfoResp message
 */
class GDSGetRoleConcertInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLECONCERTINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLECONCERTINFO => array(
            'name' => 'roleConcertInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleConcertInfo'
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
        $this->values[self::ROLECONCERTINFO] = null;
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
     * Sets value of 'roleConcertInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleConcertInfo $value Property value
     *
     * @return null
     */
    public function setRoleConcertInfo(\Xnhd\Core\Pb\Sdo\RoleConcertInfo $value=null)
    {
        return $this->set(self::ROLECONCERTINFO, $value);
    }

    /**
     * Returns value of 'roleConcertInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleConcertInfo
     */
    public function getRoleConcertInfo()
    {
        return $this->get(self::ROLECONCERTINFO);
    }

    /**
     * Returns true if 'roleConcertInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleConcertInfo()
    {
        return $this->get(self::ROLECONCERTINFO) !== null;
    }
}
}