<?php
/**
 * Auto generated from stateserver.proto at 2021-12-31 05:50:58
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSGetServerStatusResp message
 */
class STSGetServerStatusResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NONLINECOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NONLINECOUNT => array(
            'name' => 'nOnlineCount',
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
        $this->values[self::NONLINECOUNT] = null;
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
     * Sets value of 'nOnlineCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOnlineCount($value)
    {
        return $this->set(self::NONLINECOUNT, $value);
    }

    /**
     * Returns value of 'nOnlineCount' property
     *
     * @return integer
     */
    public function getNOnlineCount()
    {
        $value = $this->get(self::NONLINECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOnlineCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOnlineCount()
    {
        return $this->get(self::NONLINECOUNT) !== null;
    }
}
}