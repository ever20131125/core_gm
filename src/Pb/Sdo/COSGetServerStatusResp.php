<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetServerStatusResp message
 */
class COSGetServerStatusResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NONLINECOUNT = 2;
    const NCREATECOUNT = 3;

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
        self::NCREATECOUNT => array(
            'name' => 'nCreateCount',
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
        $this->values[self::NCREATECOUNT] = null;
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

    /**
     * Sets value of 'nCreateCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateCount($value)
    {
        return $this->set(self::NCREATECOUNT, $value);
    }

    /**
     * Returns value of 'nCreateCount' property
     *
     * @return integer
     */
    public function getNCreateCount()
    {
        $value = $this->get(self::NCREATECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreateCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateCount()
    {
        return $this->get(self::NCREATECOUNT) !== null;
    }
}
}