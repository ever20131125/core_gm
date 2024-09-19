<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSChooseKeepsakeSEResp message
 */
class RLSChooseKeepsakeSEResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NSEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NSEID => array(
            'name' => 'nSEID',
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
        $this->values[self::NSEID] = null;
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
     * Sets value of 'nSEID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSEID($value)
    {
        return $this->set(self::NSEID, $value);
    }

    /**
     * Returns value of 'nSEID' property
     *
     * @return integer
     */
    public function getNSEID()
    {
        $value = $this->get(self::NSEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSEID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSEID()
    {
        return $this->get(self::NSEID) !== null;
    }
}
}