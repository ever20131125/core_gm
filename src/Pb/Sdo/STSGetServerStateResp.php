<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSGetServerStateResp message
 */
class STSGetServerStateResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NSERVERTIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NSERVERTIME => array(
            'name' => 'nServerTime',
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
        $this->values[self::NSERVERTIME] = null;
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
     * Sets value of 'nServerTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNServerTime($value)
    {
        return $this->set(self::NSERVERTIME, $value);
    }

    /**
     * Returns value of 'nServerTime' property
     *
     * @return integer
     */
    public function getNServerTime()
    {
        $value = $this->get(self::NSERVERTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nServerTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNServerTime()
    {
        return $this->get(self::NSERVERTIME) !== null;
    }
}
}