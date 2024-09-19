<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemUseLimit message
 */
class ItemUseLimit extends \ProtobufMessage
{
    /* Field index constants */
    const NROLELEVEL = 1;
    const NVIPLEVEL = 2;
    const NLOVERLEVEL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLELEVEL => array(
            'name' => 'nRoleLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVIPLEVEL => array(
            'name' => 'nVIPLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVERLEVEL => array(
            'name' => 'nLoverLevel',
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
        $this->values[self::NROLELEVEL] = null;
        $this->values[self::NVIPLEVEL] = null;
        $this->values[self::NLOVERLEVEL] = null;
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
     * Sets value of 'nRoleLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleLevel($value)
    {
        return $this->set(self::NROLELEVEL, $value);
    }

    /**
     * Returns value of 'nRoleLevel' property
     *
     * @return integer
     */
    public function getNRoleLevel()
    {
        $value = $this->get(self::NROLELEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleLevel()
    {
        return $this->get(self::NROLELEVEL) !== null;
    }

    /**
     * Sets value of 'nVIPLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVIPLevel($value)
    {
        return $this->set(self::NVIPLEVEL, $value);
    }

    /**
     * Returns value of 'nVIPLevel' property
     *
     * @return integer
     */
    public function getNVIPLevel()
    {
        $value = $this->get(self::NVIPLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVIPLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVIPLevel()
    {
        return $this->get(self::NVIPLEVEL) !== null;
    }

    /**
     * Sets value of 'nLoverLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoverLevel($value)
    {
        return $this->set(self::NLOVERLEVEL, $value);
    }

    /**
     * Returns value of 'nLoverLevel' property
     *
     * @return integer
     */
    public function getNLoverLevel()
    {
        $value = $this->get(self::NLOVERLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoverLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoverLevel()
    {
        return $this->get(self::NLOVERLEVEL) !== null;
    }
}
}