<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AuctionInfo message
 */
class AuctionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NBIDID = 1;
    const NITEMID = 2;
    const NITEMTYPE = 3;
    const NQUANTITY = 4;
    const ASSETTYPE = 5;
    const NSTARTPRICE = 6;
    const NCURPRICE = 7;
    const NFIXEDPRICE = 8;
    const NSALETIME = 9;
    const NSTARTTIME = 10;
    const NENDTIME = 11;
    const NSALEROLEID = 12;
    const NSALEZONEID = 13;
    const SZSALEROLENAME = 14;
    const NBIDROLEID = 15;
    const NBIDZONEID = 16;
    const SZBIDROLENAME = 17;
    const NENDBID = 18;
    const NENDPRICE = 19;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NBIDID => array(
            'name' => 'nBidID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMTYPE => array(
            'name' => 'nItemType',
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
        self::NCURPRICE => array(
            'name' => 'nCurPrice',
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
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSALEROLEID => array(
            'name' => 'nSaleRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSALEZONEID => array(
            'name' => 'nSaleZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZSALEROLENAME => array(
            'name' => 'szSaleRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NBIDROLEID => array(
            'name' => 'nBidRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBIDZONEID => array(
            'name' => 'nBidZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZBIDROLENAME => array(
            'name' => 'szBidRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NENDBID => array(
            'name' => 'nEndBid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDPRICE => array(
            'name' => 'nEndPrice',
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
        $this->values[self::NBIDID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NITEMTYPE] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NSTARTPRICE] = null;
        $this->values[self::NCURPRICE] = null;
        $this->values[self::NFIXEDPRICE] = null;
        $this->values[self::NSALETIME] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NSALEROLEID] = null;
        $this->values[self::NSALEZONEID] = null;
        $this->values[self::SZSALEROLENAME] = null;
        $this->values[self::NBIDROLEID] = null;
        $this->values[self::NBIDZONEID] = null;
        $this->values[self::SZBIDROLENAME] = null;
        $this->values[self::NENDBID] = null;
        $this->values[self::NENDPRICE] = null;
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
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nItemType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemType($value)
    {
        return $this->set(self::NITEMTYPE, $value);
    }

    /**
     * Returns value of 'nItemType' property
     *
     * @return integer
     */
    public function getNItemType()
    {
        $value = $this->get(self::NITEMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemType()
    {
        return $this->get(self::NITEMTYPE) !== null;
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
     * Sets value of 'nCurPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurPrice($value)
    {
        return $this->set(self::NCURPRICE, $value);
    }

    /**
     * Returns value of 'nCurPrice' property
     *
     * @return integer
     */
    public function getNCurPrice()
    {
        $value = $this->get(self::NCURPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurPrice()
    {
        return $this->get(self::NCURPRICE) !== null;
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

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nSaleRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSaleRoleID($value)
    {
        return $this->set(self::NSALEROLEID, $value);
    }

    /**
     * Returns value of 'nSaleRoleID' property
     *
     * @return integer
     */
    public function getNSaleRoleID()
    {
        $value = $this->get(self::NSALEROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSaleRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSaleRoleID()
    {
        return $this->get(self::NSALEROLEID) !== null;
    }

    /**
     * Sets value of 'nSaleZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSaleZoneID($value)
    {
        return $this->set(self::NSALEZONEID, $value);
    }

    /**
     * Returns value of 'nSaleZoneID' property
     *
     * @return integer
     */
    public function getNSaleZoneID()
    {
        $value = $this->get(self::NSALEZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSaleZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSaleZoneID()
    {
        return $this->get(self::NSALEZONEID) !== null;
    }

    /**
     * Sets value of 'szSaleRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzSaleRoleName($value)
    {
        return $this->set(self::SZSALEROLENAME, $value);
    }

    /**
     * Returns value of 'szSaleRoleName' property
     *
     * @return string
     */
    public function getSzSaleRoleName()
    {
        $value = $this->get(self::SZSALEROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szSaleRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzSaleRoleName()
    {
        return $this->get(self::SZSALEROLENAME) !== null;
    }

    /**
     * Sets value of 'nBidRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBidRoleID($value)
    {
        return $this->set(self::NBIDROLEID, $value);
    }

    /**
     * Returns value of 'nBidRoleID' property
     *
     * @return integer
     */
    public function getNBidRoleID()
    {
        $value = $this->get(self::NBIDROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBidRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBidRoleID()
    {
        return $this->get(self::NBIDROLEID) !== null;
    }

    /**
     * Sets value of 'nBidZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBidZoneID($value)
    {
        return $this->set(self::NBIDZONEID, $value);
    }

    /**
     * Returns value of 'nBidZoneID' property
     *
     * @return integer
     */
    public function getNBidZoneID()
    {
        $value = $this->get(self::NBIDZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBidZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBidZoneID()
    {
        return $this->get(self::NBIDZONEID) !== null;
    }

    /**
     * Sets value of 'szBidRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzBidRoleName($value)
    {
        return $this->set(self::SZBIDROLENAME, $value);
    }

    /**
     * Returns value of 'szBidRoleName' property
     *
     * @return string
     */
    public function getSzBidRoleName()
    {
        $value = $this->get(self::SZBIDROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szBidRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzBidRoleName()
    {
        return $this->get(self::SZBIDROLENAME) !== null;
    }

    /**
     * Sets value of 'nEndBid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndBid($value)
    {
        return $this->set(self::NENDBID, $value);
    }

    /**
     * Returns value of 'nEndBid' property
     *
     * @return integer
     */
    public function getNEndBid()
    {
        $value = $this->get(self::NENDBID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndBid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndBid()
    {
        return $this->get(self::NENDBID) !== null;
    }

    /**
     * Sets value of 'nEndPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndPrice($value)
    {
        return $this->set(self::NENDPRICE, $value);
    }

    /**
     * Returns value of 'nEndPrice' property
     *
     * @return integer
     */
    public function getNEndPrice()
    {
        $value = $this->get(self::NENDPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndPrice()
    {
        return $this->get(self::NENDPRICE) !== null;
    }
}
}