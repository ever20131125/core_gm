<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSBidReq message
 */
class CDSBidReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NZONEID = 2;
    const SZROLENAME = 3;
    const NBIDID = 4;
    const NPRICE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NBIDID => array(
            'name' => 'nBidID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRICE => array(
            'name' => 'nPrice',
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
        $this->values[self::NZONEID] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NBIDID] = null;
        $this->values[self::NPRICE] = null;
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
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
    }

    /**
     * Sets value of 'nBidID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBidID($value)
    {
        return $this->set(self::NBIDID, $value);
    }

    /**
     * Returns value of 'nBidID' property
     *
     * @return integer
     */
    public function getNBidID()
    {
        $value = $this->get(self::NBIDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBidID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBidID()
    {
        return $this->get(self::NBIDID) !== null;
    }

    /**
     * Sets value of 'nPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrice($value)
    {
        return $this->set(self::NPRICE, $value);
    }

    /**
     * Returns value of 'nPrice' property
     *
     * @return integer
     */
    public function getNPrice()
    {
        $value = $this->get(self::NPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrice()
    {
        return $this->get(self::NPRICE) !== null;
    }
}
}