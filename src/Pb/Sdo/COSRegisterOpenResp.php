<?php
/**
 * Auto generated from controlserver.proto at 2021-10-20 06:51:27
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSRegisterOpenResp message
 */
class COSRegisterOpenResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NOPEN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NOPEN => array(
            'name' => 'nOpen',
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
        $this->values[self::NOPEN] = null;
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
     * Sets value of 'nOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOpen($value)
    {
        return $this->set(self::NOPEN, $value);
    }

    /**
     * Returns value of 'nOpen' property
     *
     * @return integer
     */
    public function getNOpen()
    {
        $value = $this->get(self::NOPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOpen()
    {
        return $this->get(self::NOPEN) !== null;
    }
}
}