<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSReconnectReq message
 */
class STSReconnectReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZPLAYERSIGNATURE = 1;
    const NTIMETICK = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZPLAYERSIGNATURE => array(
            'name' => 'szPlayerSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NTIMETICK => array(
            'name' => 'nTimeTick',
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
        $this->values[self::SZPLAYERSIGNATURE] = null;
        $this->values[self::NTIMETICK] = null;
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
     * Sets value of 'szPlayerSignature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPlayerSignature($value)
    {
        return $this->set(self::SZPLAYERSIGNATURE, $value);
    }

    /**
     * Returns value of 'szPlayerSignature' property
     *
     * @return string
     */
    public function getSzPlayerSignature()
    {
        $value = $this->get(self::SZPLAYERSIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPlayerSignature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPlayerSignature()
    {
        return $this->get(self::SZPLAYERSIGNATURE) !== null;
    }

    /**
     * Sets value of 'nTimeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeTick($value)
    {
        return $this->set(self::NTIMETICK, $value);
    }

    /**
     * Returns value of 'nTimeTick' property
     *
     * @return integer
     */
    public function getNTimeTick()
    {
        $value = $this->get(self::NTIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeTick()
    {
        return $this->get(self::NTIMETICK) !== null;
    }
}
}