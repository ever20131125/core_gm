<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetAuctionSumResp message
 */
class CDSGetAuctionSumResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const AUCTIONSUM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::AUCTIONSUM => array(
            'name' => 'auctionSum',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AuctionSum'
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
        $this->values[self::AUCTIONSUM] = array();
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
     * Appends value to 'auctionSum' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AuctionSum $value Value to append
     *
     * @return null
     */
    public function appendAuctionSum(\Xnhd\Core\Pb\Sdo\AuctionSum $value)
    {
        return $this->append(self::AUCTIONSUM, $value);
    }

    /**
     * Clears 'auctionSum' list
     *
     * @return null
     */
    public function clearAuctionSum()
    {
        return $this->clear(self::AUCTIONSUM);
    }

    /**
     * Returns 'auctionSum' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AuctionSum[]
     */
    public function getAuctionSum()
    {
        return $this->get(self::AUCTIONSUM);
    }

    /**
     * Returns true if 'auctionSum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuctionSum()
    {
        return count($this->get(self::AUCTIONSUM)) !== 0;
    }

    /**
     * Returns 'auctionSum' iterator
     *
     * @return \ArrayIterator
     */
    public function getAuctionSumIterator()
    {
        return new \ArrayIterator($this->get(self::AUCTIONSUM));
    }

    /**
     * Returns element from 'auctionSum' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AuctionSum
     */
    public function getAuctionSumAt($offset)
    {
        return $this->get(self::AUCTIONSUM, $offset);
    }

    /**
     * Returns count of 'auctionSum' list
     *
     * @return int
     */
    public function getAuctionSumCount()
    {
        return $this->count(self::AUCTIONSUM);
    }
}
}