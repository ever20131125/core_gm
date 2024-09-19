<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSConfessResp message
 */
class RLSConfessResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const CONFESSEEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::CONFESSEEID => array(
            'name' => 'confesseeID',
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
        $this->values[self::CONFESSEEID] = null;
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
     * Sets value of 'confesseeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesseeID($value)
    {
        return $this->set(self::CONFESSEEID, $value);
    }

    /**
     * Returns value of 'confesseeID' property
     *
     * @return integer
     */
    public function getConfesseeID()
    {
        $value = $this->get(self::CONFESSEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesseeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesseeID()
    {
        return $this->get(self::CONFESSEEID) !== null;
    }
}
}