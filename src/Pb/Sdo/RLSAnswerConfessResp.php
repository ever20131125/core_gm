<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAnswerConfessResp message
 */
class RLSAnswerConfessResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const CONFESSERID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::CONFESSERID => array(
            'name' => 'confesserID',
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
        $this->values[self::CONFESSERID] = null;
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
     * Sets value of 'confesserID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesserID($value)
    {
        return $this->set(self::CONFESSERID, $value);
    }

    /**
     * Returns value of 'confesserID' property
     *
     * @return integer
     */
    public function getConfesserID()
    {
        $value = $this->get(self::CONFESSERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesserID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesserID()
    {
        return $this->get(self::CONFESSERID) !== null;
    }
}
}