<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetAuctionListResp message
 */
class CDSGetAuctionListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NITEMID = 2;
    const AUCTIONLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUCTIONLIST => array(
            'name' => 'auctionList',
            'repeated' => true,
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
        $this->values[self::NITEMID] = null;
        $this->values[self::AUCTIONLIST] = array();
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
     * Appends value to 'auctionList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AuctionInfo $value Value to append
     *
     * @return null
     */
    public function appendAuctionList(\Xnhd\Core\Pb\Sdo\AuctionInfo $value)
    {
        return $this->append(self::AUCTIONLIST, $value);
    }

    /**
     * Clears 'auctionList' list
     *
     * @return null
     */
    public function clearAuctionList()
    {
        return $this->clear(self::AUCTIONLIST);
    }

    /**
     * Returns 'auctionList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AuctionInfo[]
     */
    public function getAuctionList()
    {
        return $this->get(self::AUCTIONLIST);
    }

    /**
     * Returns true if 'auctionList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuctionList()
    {
        return count($this->get(self::AUCTIONLIST)) !== 0;
    }

    /**
     * Returns 'auctionList' iterator
     *
     * @return \ArrayIterator
     */
    public function getAuctionListIterator()
    {
        return new \ArrayIterator($this->get(self::AUCTIONLIST));
    }

    /**
     * Returns element from 'auctionList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AuctionInfo
     */
    public function getAuctionListAt($offset)
    {
        return $this->get(self::AUCTIONLIST, $offset);
    }

    /**
     * Returns count of 'auctionList' list
     *
     * @return int
     */
    public function getAuctionListCount()
    {
        return $this->count(self::AUCTIONLIST);
    }
}
}