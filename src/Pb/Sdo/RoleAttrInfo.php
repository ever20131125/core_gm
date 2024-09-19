<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleAttrInfo message
 */
class RoleAttrInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NDAN = 11;
    const NOPTION = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDAN => array(
            'name' => 'nDan',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NDAN] = null;
        $this->values[self::NOPTION] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nDan' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDan($value)
    {
        return $this->set(self::NDAN, $value);
    }

    /**
     * Returns value of 'nDan' property
     *
     * @return integer
     */
    public function getNDan()
    {
        $value = $this->get(self::NDAN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDan' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDan()
    {
        return $this->get(self::NDAN) !== null;
    }

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
    }
}
}