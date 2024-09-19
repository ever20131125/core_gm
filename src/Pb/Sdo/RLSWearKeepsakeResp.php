<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWearKeepsakeResp message
 */
class RLSWearKeepsakeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NKEEPSAKELEVEL = 2;
    const NNEXTKEEPSAKEVALUE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NKEEPSAKELEVEL => array(
            'name' => 'nKeepsakeLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEXTKEEPSAKEVALUE => array(
            'name' => 'nNextKeepsakeValue',
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
        $this->values[self::NKEEPSAKELEVEL] = null;
        $this->values[self::NNEXTKEEPSAKEVALUE] = null;
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
     * Sets value of 'nKeepsakeLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeepsakeLevel($value)
    {
        return $this->set(self::NKEEPSAKELEVEL, $value);
    }

    /**
     * Returns value of 'nKeepsakeLevel' property
     *
     * @return integer
     */
    public function getNKeepsakeLevel()
    {
        $value = $this->get(self::NKEEPSAKELEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeepsakeLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeepsakeLevel()
    {
        return $this->get(self::NKEEPSAKELEVEL) !== null;
    }

    /**
     * Sets value of 'nNextKeepsakeValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNextKeepsakeValue($value)
    {
        return $this->set(self::NNEXTKEEPSAKEVALUE, $value);
    }

    /**
     * Returns value of 'nNextKeepsakeValue' property
     *
     * @return integer
     */
    public function getNNextKeepsakeValue()
    {
        $value = $this->get(self::NNEXTKEEPSAKEVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNextKeepsakeValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNextKeepsakeValue()
    {
        return $this->get(self::NNEXTKEEPSAKEVALUE) !== null;
    }
}
}