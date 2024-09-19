<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSOnSaleAuctionResp message
 */
class CDSOnSaleAuctionResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const AUCTIONINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUCTIONINFO => array(
            'name' => 'auctionInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AuctionInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::AUCTIONINFO] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
}
}