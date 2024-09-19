<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TownEmploy message
 */
class TownEmploy extends \ProtobufMessage
{
    /* Field index constants */
    const NEMPLOYID = 1;
    const NITEMINSID = 2;
    const NEXPIRETIME = 3;
    const WORKINSID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEMPLOYID => array(
            'name' => 'nEmployID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPIRETIME => array(
            'name' => 'nExpireTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WORKINSID => array(
            'name' => 'WorkInsID',
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
        $this->values[self::NEMPLOYID] = null;
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NEXPIRETIME] = null;
        $this->values[self::WORKINSID] = null;
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
     * Sets value of 'nEmployID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEmployID($value)
    {
        return $this->set(self::NEMPLOYID, $value);
    }

    /**
     * Returns value of 'nEmployID' property
     *
     * @return integer
     */
    public function getNEmployID()
    {
        $value = $this->get(self::NEMPLOYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEmployID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEmployID()
    {
        return $this->get(self::NEMPLOYID) !== null;
    }

    /**
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
    }

    /**
     * Sets value of 'nExpireTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExpireTime($value)
    {
        return $this->set(self::NEXPIRETIME, $value);
    }

    /**
     * Returns value of 'nExpireTime' property
     *
     * @return integer
     */
    public function getNExpireTime()
    {
        $value = $this->get(self::NEXPIRETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExpireTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExpireTime()
    {
        return $this->get(self::NEXPIRETIME) !== null;
    }

    /**
     * Sets value of 'WorkInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWorkInsID($value)
    {
        return $this->set(self::WORKINSID, $value);
    }

    /**
     * Returns value of 'WorkInsID' property
     *
     * @return integer
     */
    public function getWorkInsID()
    {
        $value = $this->get(self::WORKINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'WorkInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWorkInsID()
    {
        return $this->get(self::WORKINSID) !== null;
    }
}
}