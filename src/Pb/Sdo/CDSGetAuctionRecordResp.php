<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetAuctionRecordResp message
 */
class CDSGetAuctionRecordResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NCOUNT = 2;
    const NMONEY = 3;
    const NSCORE = 4;
    const NGCOIN = 5;
    const RECORDLIST = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NCOUNT => array(
            'name' => 'nCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONEY => array(
            'name' => 'nMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGCOIN => array(
            'name' => 'nGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECORDLIST => array(
            'name' => 'recordList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AuctionRecord'
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
        $this->values[self::NCOUNT] = null;
        $this->values[self::NMONEY] = null;
        $this->values[self::NSCORE] = null;
        $this->values[self::NGCOIN] = null;
        $this->values[self::RECORDLIST] = array();
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
     * Sets value of 'nMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoney($value)
    {
        return $this->set(self::NMONEY, $value);
    }

    /**
     * Returns value of 'nMoney' property
     *
     * @return integer
     */
    public function getNMoney()
    {
        $value = $this->get(self::NMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoney()
    {
        return $this->get(self::NMONEY) !== null;
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'nGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGCoin($value)
    {
        return $this->set(self::NGCOIN, $value);
    }

    /**
     * Returns value of 'nGCoin' property
     *
     * @return integer
     */
    public function getNGCoin()
    {
        $value = $this->get(self::NGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGCoin()
    {
        return $this->get(self::NGCOIN) !== null;
    }

    /**
     * Appends value to 'recordList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AuctionRecord $value Value to append
     *
     * @return null
     */
    public function appendRecordList(\Xnhd\Core\Pb\Sdo\AuctionRecord $value)
    {
        return $this->append(self::RECORDLIST, $value);
    }

    /**
     * Clears 'recordList' list
     *
     * @return null
     */
    public function clearRecordList()
    {
        return $this->clear(self::RECORDLIST);
    }

    /**
     * Returns 'recordList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AuctionRecord[]
     */
    public function getRecordList()
    {
        return $this->get(self::RECORDLIST);
    }

    /**
     * Returns true if 'recordList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecordList()
    {
        return count($this->get(self::RECORDLIST)) !== 0;
    }

    /**
     * Returns 'recordList' iterator
     *
     * @return \ArrayIterator
     */
    public function getRecordListIterator()
    {
        return new \ArrayIterator($this->get(self::RECORDLIST));
    }

    /**
     * Returns element from 'recordList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AuctionRecord
     */
    public function getRecordListAt($offset)
    {
        return $this->get(self::RECORDLIST, $offset);
    }

    /**
     * Returns count of 'recordList' list
     *
     * @return int
     */
    public function getRecordListCount()
    {
        return $this->count(self::RECORDLIST);
    }
}
}