<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSOnSaleAuctionReq message
 */
class CDSOnSaleAuctionReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NZONEID = 2;
    const SZROLENAME = 3;
    const NITEMINSID = 4;
    const NQUANTITY = 5;
    const ASSETTYPE = 6;
    const NSTARTPRICE = 7;
    const NFIXEDPRICE = 8;
    const NSALETIME = 9;

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
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSETTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AssetType::enmAssetType_Money,
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTPRICE => array(
            'name' => 'nStartPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFIXEDPRICE => array(
            'name' => 'nFixedPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSALETIME => array(
            'name' => 'nSaleTime',
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
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NSTARTPRICE] = null;
        $this->values[self::NFIXEDPRICE] = null;
        $this->values[self::NSALETIME] = null;
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
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
    }

    /**
     * Sets value of 'assetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssetType($value)
    {
        return $this->set(self::ASSETTYPE, $value);
    }

    /**
     * Returns value of 'assetType' property
     *
     * @return integer
     */
    public function getAssetType()
    {
        $value = $this->get(self::ASSETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'assetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAssetType()
    {
        return $this->get(self::ASSETTYPE) !== null;
    }

    /**
     * Sets value of 'nStartPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartPrice($value)
    {
        return $this->set(self::NSTARTPRICE, $value);
    }

    /**
     * Returns value of 'nStartPrice' property
     *
     * @return integer
     */
    public function getNStartPrice()
    {
        $value = $this->get(self::NSTARTPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartPrice()
    {
        return $this->get(self::NSTARTPRICE) !== null;
    }

    /**
     * Sets value of 'nFixedPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFixedPrice($value)
    {
        return $this->set(self::NFIXEDPRICE, $value);
    }

    /**
     * Returns value of 'nFixedPrice' property
     *
     * @return integer
     */
    public function getNFixedPrice()
    {
        $value = $this->get(self::NFIXEDPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFixedPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFixedPrice()
    {
        return $this->get(self::NFIXEDPRICE) !== null;
    }

    /**
     * Sets value of 'nSaleTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSaleTime($value)
    {
        return $this->set(self::NSALETIME, $value);
    }

    /**
     * Returns value of 'nSaleTime' property
     *
     * @return integer
     */
    public function getNSaleTime()
    {
        $value = $this->get(self::NSALETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSaleTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSaleTime()
    {
        return $this->get(self::NSALETIME) !== null;
    }
}
}