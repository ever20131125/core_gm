<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AuctionSum message
 */
class AuctionSum extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const NCOUNT = 2;
    const NBIDID = 3;
    const NQUANTITY = 4;
    const ASSETTYPE = 5;
    const NSTARTPRICE = 6;
    const NCURPRICE = 7;
    const NFIXEDPRICE = 8;
    const NENDTIME = 9;
    const NSALEROLEID = 10;
    const NSALEZONEID = 11;
    const SZSALEROLENAME = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOUNT => array(
            'name' => 'nCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBIDID => array(
            'name' => 'nBidID',
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
        $this->values[self::NITEMID] = null;
        $this->values[self::NCOUNT] = null;
        $this->values[self::NBIDID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NSTARTPRICE] = null;
        $this->values[self::NCURPRICE] = null;
        $this->values[self::NFIXEDPRICE] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NSALEROLEID] = null;
        $this->values[self::NSALEZONEID] = null;
        $this->values[self::SZSALEROLENAME] = null;
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
     * Sets value of 'nCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCount($value)
    {
        return $this->set(self::NCOUNT, $value);
    }

    /**
     * Returns value of 'nCount' property
     *
     * @return integer
     */
    public function getNCount()
    {
        $value = $this->get(self::NCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCount()
    {
        return $this->get(self::NCOUNT) !== null;
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
}
}