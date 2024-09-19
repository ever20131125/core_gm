<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASWeddingSwearReq message
 */
class GASWeddingSwearReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZSWEAR = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZSWEAR => array(
            'name' => 'szSwear',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::SZSWEAR] = null;
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
     * Sets value of 'szSwear' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzSwear($value)
    {
        return $this->set(self::SZSWEAR, $value);
    }

    /**
     * Returns value of 'szSwear' property
     *
     * @return string
     */
    public function getSzSwear()
    {
        $value = $this->get(self::SZSWEAR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szSwear' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzSwear()
    {
        return $this->get(self::SZSWEAR) !== null;
    }
}
}