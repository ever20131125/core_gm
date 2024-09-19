<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBBidResultNoti message
 */
class PDBBidResultNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const BIDRET = 2;
    const AUCTIONINFO = 3;
    const NRETURNPRICE = 4;
    const NTAXPRICE = 5;
    const NWINNERID = 6;
    const NZONEID = 7;
    const SZROLENAME = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BIDRET => array(
            'default' => \Xnhd\Core\Pb\Sdo\BidResult::enmBidRet_None,
            'name' => 'bidRet',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUCTIONINFO => array(
            'name' => 'auctionInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AuctionInfo'
        ),
        self::NRETURNPRICE => array(
            'name' => 'nReturnPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTAXPRICE => array(
            'name' => 'nTaxPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWINNERID => array(
            'name' => 'nWinnerID',
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
        $this->values[self::BIDRET] = self::$fields[self::BIDRET]['default'];
        $this->values[self::AUCTIONINFO] = null;
        $this->values[self::NRETURNPRICE] = null;
        $this->values[self::NTAXPRICE] = null;
        $this->values[self::NWINNERID] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::SZROLENAME] = null;
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
     * Sets value of 'bidRet' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBidRet($value)
    {
        return $this->set(self::BIDRET, $value);
    }

    /**
     * Returns value of 'bidRet' property
     *
     * @return integer
     */
    public function getBidRet()
    {
        $value = $this->get(self::BIDRET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bidRet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBidRet()
    {
        return $this->get(self::BIDRET) !== null;
    }

    /**
     * Sets value of 'auctionInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AuctionInfo $value Property value
     *
     * @return null
     */
    public function setAuctionInfo(\Xnhd\Core\Pb\Sdo\AuctionInfo $value=null)
    {
        return $this->set(self::AUCTIONINFO, $value);
    }

    /**
     * Returns value of 'auctionInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AuctionInfo
     */
    public function getAuctionInfo()
    {
        return $this->get(self::AUCTIONINFO);
    }

    /**
     * Returns true if 'auctionInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuctionInfo()
    {
        return $this->get(self::AUCTIONINFO) !== null;
    }

    /**
     * Sets value of 'nReturnPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNReturnPrice($value)
    {
        return $this->set(self::NRETURNPRICE, $value);
    }

    /**
     * Returns value of 'nReturnPrice' property
     *
     * @return integer
     */
    public function getNReturnPrice()
    {
        $value = $this->get(self::NRETURNPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nReturnPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNReturnPrice()
    {
        return $this->get(self::NRETURNPRICE) !== null;
    }

    /**
     * Sets value of 'nTaxPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTaxPrice($value)
    {
        return $this->set(self::NTAXPRICE, $value);
    }

    /**
     * Returns value of 'nTaxPrice' property
     *
     * @return integer
     */
    public function getNTaxPrice()
    {
        $value = $this->get(self::NTAXPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTaxPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTaxPrice()
    {
        return $this->get(self::NTAXPRICE) !== null;
    }

    /**
     * Sets value of 'nWinnerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWinnerID($value)
    {
        return $this->set(self::NWINNERID, $value);
    }

    /**
     * Returns value of 'nWinnerID' property
     *
     * @return integer
     */
    public function getNWinnerID()
    {
        $value = $this->get(self::NWINNERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWinnerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWinnerID()
    {
        return $this->get(self::NWINNERID) !== null;
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
}
}