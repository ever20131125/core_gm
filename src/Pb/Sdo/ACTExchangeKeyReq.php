<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTExchangeKeyReq message
 */
class ACTExchangeKeyReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZKEY => array(
            'name' => 'szkey',
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
        $this->values[self::SZKEY] = null;
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
     * Sets value of 'szkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzkey($value)
    {
        return $this->set(self::SZKEY, $value);
    }

    /**
     * Returns value of 'szkey' property
     *
     * @return string
     */
    public function getSzkey()
    {
        $value = $this->get(self::SZKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzkey()
    {
        return $this->get(self::SZKEY) !== null;
    }
}
}