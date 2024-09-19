<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAddLoveCrystalResp message
 */
class RLSAddLoveCrystalResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NOLDVALUE = 2;
    const NNEWVALUE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NOLDVALUE => array(
            'name' => 'nOldValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWVALUE => array(
            'name' => 'nNewValue',
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
        $this->values[self::NOLDVALUE] = null;
        $this->values[self::NNEWVALUE] = null;
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
     * Sets value of 'nOldValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOldValue($value)
    {
        return $this->set(self::NOLDVALUE, $value);
    }

    /**
     * Returns value of 'nOldValue' property
     *
     * @return integer
     */
    public function getNOldValue()
    {
        $value = $this->get(self::NOLDVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOldValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOldValue()
    {
        return $this->get(self::NOLDVALUE) !== null;
    }

    /**
     * Sets value of 'nNewValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewValue($value)
    {
        return $this->set(self::NNEWVALUE, $value);
    }

    /**
     * Returns value of 'nNewValue' property
     *
     * @return integer
     */
    public function getNNewValue()
    {
        $value = $this->get(self::NNEWVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewValue()
    {
        return $this->get(self::NNEWVALUE) !== null;
    }
}
}