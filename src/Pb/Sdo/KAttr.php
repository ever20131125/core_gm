<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KAttr message
 */
class KAttr extends \ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const VALUESTR = 2;
    const VALUEINT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUESTR => array(
            'name' => 'valueStr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUEINT => array(
            'name' => 'valueInt',
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
        $this->values[self::KEY] = null;
        $this->values[self::VALUESTR] = null;
        $this->values[self::VALUEINT] = null;
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
     * Sets value of 'key' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return integer
     */
    public function getKey()
    {
        $value = $this->get(self::KEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey()
    {
        return $this->get(self::KEY) !== null;
    }

    /**
     * Sets value of 'valueStr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValueStr($value)
    {
        return $this->set(self::VALUESTR, $value);
    }

    /**
     * Returns value of 'valueStr' property
     *
     * @return string
     */
    public function getValueStr()
    {
        $value = $this->get(self::VALUESTR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'valueStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueStr()
    {
        return $this->get(self::VALUESTR) !== null;
    }

    /**
     * Sets value of 'valueInt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValueInt($value)
    {
        return $this->set(self::VALUEINT, $value);
    }

    /**
     * Returns value of 'valueInt' property
     *
     * @return integer
     */
    public function getValueInt()
    {
        $value = $this->get(self::VALUEINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'valueInt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueInt()
    {
        return $this->get(self::VALUEINT) !== null;
    }
}
}