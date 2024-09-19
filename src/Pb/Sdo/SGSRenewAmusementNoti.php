<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSRenewAmusementNoti message
 */
class SGSRenewAmusementNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NOPTION1 = 2;
    const NOPTION2 = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION1 => array(
            'name' => 'nOption1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION2 => array(
            'name' => 'nOption2',
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
        $this->values[self::NOPTION1] = null;
        $this->values[self::NOPTION2] = null;
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
     * Sets value of 'nOption1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption1($value)
    {
        return $this->set(self::NOPTION1, $value);
    }

    /**
     * Returns value of 'nOption1' property
     *
     * @return integer
     */
    public function getNOption1()
    {
        $value = $this->get(self::NOPTION1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption1()
    {
        return $this->get(self::NOPTION1) !== null;
    }

    /**
     * Sets value of 'nOption2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption2($value)
    {
        return $this->set(self::NOPTION2, $value);
    }

    /**
     * Returns value of 'nOption2' property
     *
     * @return integer
     */
    public function getNOption2()
    {
        $value = $this->get(self::NOPTION2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption2()
    {
        return $this->get(self::NOPTION2) !== null;
    }
}
}