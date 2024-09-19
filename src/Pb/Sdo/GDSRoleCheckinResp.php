<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSRoleCheckinResp message
 */
class GDSRoleCheckinResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NCHECKINTIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NCHECKINTIME => array(
            'name' => 'nCheckinTime',
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
        $this->values[self::NCHECKINTIME] = null;
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
     * Sets value of 'nCheckinTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCheckinTime($value)
    {
        return $this->set(self::NCHECKINTIME, $value);
    }

    /**
     * Returns value of 'nCheckinTime' property
     *
     * @return integer
     */
    public function getNCheckinTime()
    {
        $value = $this->get(self::NCHECKINTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCheckinTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCheckinTime()
    {
        return $this->get(self::NCHECKINTIME) !== null;
    }
}
}