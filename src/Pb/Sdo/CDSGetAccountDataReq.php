<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetAccountDataReq message
 */
class CDSGetAccountDataReq extends \ProtobufMessage
{
    /* Field index constants */
    const NZONEID = 1;
    const SZACCOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZACCOUNT => array(
            'name' => 'szAccount',
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
        $this->values[self::NZONEID] = null;
        $this->values[self::SZACCOUNT] = null;
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
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Sets value of 'szAccount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccount($value)
    {
        return $this->set(self::SZACCOUNT, $value);
    }

    /**
     * Returns value of 'szAccount' property
     *
     * @return string
     */
    public function getSzAccount()
    {
        $value = $this->get(self::SZACCOUNT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccount()
    {
        return $this->get(self::SZACCOUNT) !== null;
    }
}
}