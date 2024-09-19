<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BuildInfo message
 */
class BuildInfo extends \ProtobufMessage
{
    /* Field index constants */
    const BUILD = 1;
    const STATE = 2;
    const SZMESSAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BUILD => array(
            'name' => 'build',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZMESSAGE => array(
            'name' => 'szMessage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::BUILD] = null;
        $this->values[self::STATE] = null;
        $this->values[self::SZMESSAGE] = null;
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
     * Sets value of 'build' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBuild($value)
    {
        return $this->set(self::BUILD, $value);
    }

    /**
     * Returns value of 'build' property
     *
     * @return integer
     */
    public function getBuild()
    {
        $value = $this->get(self::BUILD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'build' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuild()
    {
        return $this->get(self::BUILD) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'szMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMessage($value)
    {
        return $this->set(self::SZMESSAGE, $value);
    }

    /**
     * Returns value of 'szMessage' property
     *
     * @return string
     */
    public function getSzMessage()
    {
        $value = $this->get(self::SZMESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMessage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMessage()
    {
        return $this->get(self::SZMESSAGE) !== null;
    }
}
}