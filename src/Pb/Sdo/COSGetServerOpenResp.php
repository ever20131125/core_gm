<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetServerOpenResp message
 */
class COSGetServerOpenResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NREGISTEROPEN = 2;
    const NCREATEOPEN = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NREGISTEROPEN => array(
            'name' => 'nRegisterOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCREATEOPEN => array(
            'name' => 'nCreateOpen',
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
        $this->values[self::NREGISTEROPEN] = null;
        $this->values[self::NCREATEOPEN] = null;
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
     * Sets value of 'nRegisterOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRegisterOpen($value)
    {
        return $this->set(self::NREGISTEROPEN, $value);
    }

    /**
     * Returns value of 'nRegisterOpen' property
     *
     * @return integer
     */
    public function getNRegisterOpen()
    {
        $value = $this->get(self::NREGISTEROPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRegisterOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRegisterOpen()
    {
        return $this->get(self::NREGISTEROPEN) !== null;
    }

    /**
     * Sets value of 'nCreateOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateOpen($value)
    {
        return $this->set(self::NCREATEOPEN, $value);
    }

    /**
     * Returns value of 'nCreateOpen' property
     *
     * @return integer
     */
    public function getNCreateOpen()
    {
        $value = $this->get(self::NCREATEOPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreateOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateOpen()
    {
        return $this->get(self::NCREATEOPEN) !== null;
    }
}
}