<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetGiftListResp message
 */
class GASGetGiftListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NWEDDINGID = 2;
    const ARRROLEID = 3;
    const ARRPRICE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NWEDDINGID => array(
            'name' => 'nWeddingID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRICE => array(
            'name' => 'arrPrice',
            'repeated' => true,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NWEDDINGID] = null;
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRPRICE] = array();
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
     * Sets value of 'nWeddingID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingID($value)
    {
        return $this->set(self::NWEDDINGID, $value);
    }

    /**
     * Returns value of 'nWeddingID' property
     *
     * @return integer
     */
    public function getNWeddingID()
    {
        $value = $this->get(self::NWEDDINGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingID()
    {
        return $this->get(self::NWEDDINGID) !== null;
    }

    /**
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Appends value to 'arrPrice' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPrice($value)
    {
        return $this->append(self::ARRPRICE, $value);
    }

    /**
     * Clears 'arrPrice' list
     *
     * @return null
     */
    public function clearArrPrice()
    {
        return $this->clear(self::ARRPRICE);
    }

    /**
     * Returns 'arrPrice' list
     *
     * @return integer[]
     */
    public function getArrPrice()
    {
        return $this->get(self::ARRPRICE);
    }

    /**
     * Returns true if 'arrPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrice()
    {
        return count($this->get(self::ARRPRICE)) !== 0;
    }

    /**
     * Returns 'arrPrice' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPriceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRICE));
    }

    /**
     * Returns element from 'arrPrice' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPriceAt($offset)
    {
        return $this->get(self::ARRPRICE, $offset);
    }

    /**
     * Returns count of 'arrPrice' list
     *
     * @return int
     */
    public function getArrPriceCount()
    {
        return $this->count(self::ARRPRICE);
    }
}
}