<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESRemoveDanceFavHistoryResp message
 */
class RESRemoveDanceFavHistoryResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const DANCEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DANCEID => array(
            'name' => 'danceID',
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
        $this->values[self::DANCEID] = null;
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
     * Sets value of 'danceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDanceID($value)
    {
        return $this->set(self::DANCEID, $value);
    }

    /**
     * Returns value of 'danceID' property
     *
     * @return integer
     */
    public function getDanceID()
    {
        $value = $this->get(self::DANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'danceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDanceID()
    {
        return $this->get(self::DANCEID) !== null;
    }
}
}