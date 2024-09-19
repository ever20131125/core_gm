<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetPayInfoResp message
 */
class IDBGetPayInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRPAYINFO = 3;
    const ARRLIMITGIFT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPAYINFO => array(
            'name' => 'arrPayInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PayInfo'
        ),
        self::ARRLIMITGIFT => array(
            'name' => 'arrLimitGift',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\LimitGiftInfo'
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
        $this->values[self::ARRPAYINFO] = array();
        $this->values[self::ARRLIMITGIFT] = array();
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
     * Appends value to 'arrPayInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PayInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPayInfo(\Xnhd\Core\Pb\Sdo\PayInfo $value)
    {
        return $this->append(self::ARRPAYINFO, $value);
    }

    /**
     * Clears 'arrPayInfo' list
     *
     * @return null
     */
    public function clearArrPayInfo()
    {
        return $this->clear(self::ARRPAYINFO);
    }

    /**
     * Returns 'arrPayInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PayInfo[]
     */
    public function getArrPayInfo()
    {
        return $this->get(self::ARRPAYINFO);
    }

    /**
     * Returns true if 'arrPayInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPayInfo()
    {
        return count($this->get(self::ARRPAYINFO)) !== 0;
    }

    /**
     * Returns 'arrPayInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPayInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPAYINFO));
    }

    /**
     * Returns element from 'arrPayInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PayInfo
     */
    public function getArrPayInfoAt($offset)
    {
        return $this->get(self::ARRPAYINFO, $offset);
    }

    /**
     * Returns count of 'arrPayInfo' list
     *
     * @return int
     */
    public function getArrPayInfoCount()
    {
        return $this->count(self::ARRPAYINFO);
    }

    /**
     * Appends value to 'arrLimitGift' list
     *
     * @param \Xnhd\Core\Pb\Sdo\LimitGiftInfo $value Value to append
     *
     * @return null
     */
    public function appendArrLimitGift(\Xnhd\Core\Pb\Sdo\LimitGiftInfo $value)
    {
        return $this->append(self::ARRLIMITGIFT, $value);
    }

    /**
     * Clears 'arrLimitGift' list
     *
     * @return null
     */
    public function clearArrLimitGift()
    {
        return $this->clear(self::ARRLIMITGIFT);
    }

    /**
     * Returns 'arrLimitGift' list
     *
     * @return \Xnhd\Core\Pb\Sdo\LimitGiftInfo[]
     */
    public function getArrLimitGift()
    {
        return $this->get(self::ARRLIMITGIFT);
    }

    /**
     * Returns true if 'arrLimitGift' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLimitGift()
    {
        return count($this->get(self::ARRLIMITGIFT)) !== 0;
    }

    /**
     * Returns 'arrLimitGift' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLimitGiftIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLIMITGIFT));
    }

    /**
     * Returns element from 'arrLimitGift' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\LimitGiftInfo
     */
    public function getArrLimitGiftAt($offset)
    {
        return $this->get(self::ARRLIMITGIFT, $offset);
    }

    /**
     * Returns count of 'arrLimitGift' list
     *
     * @return int
     */
    public function getArrLimitGiftCount()
    {
        return $this->count(self::ARRLIMITGIFT);
    }
}
}