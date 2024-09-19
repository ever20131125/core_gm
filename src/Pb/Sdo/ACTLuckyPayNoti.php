<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTLuckyPayNoti message
 */
class ACTLuckyPayNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPAYMONEY = 2;
    const NRAFFLETOTAL = 3;
    const NRAFFLERESET = 4;
    const NPAYMORE = 5;
    const ARRITEMID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAYMONEY => array(
            'name' => 'nPayMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRAFFLETOTAL => array(
            'name' => 'nRaffleTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRAFFLERESET => array(
            'name' => 'nRaffleReset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAYMORE => array(
            'name' => 'nPayMore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMID => array(
            'name' => 'arrItemID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NPAYMONEY] = null;
        $this->values[self::NRAFFLETOTAL] = null;
        $this->values[self::NRAFFLERESET] = null;
        $this->values[self::NPAYMORE] = null;
        $this->values[self::ARRITEMID] = array();
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
     * Sets value of 'nPayMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPayMoney($value)
    {
        return $this->set(self::NPAYMONEY, $value);
    }

    /**
     * Returns value of 'nPayMoney' property
     *
     * @return integer
     */
    public function getNPayMoney()
    {
        $value = $this->get(self::NPAYMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPayMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPayMoney()
    {
        return $this->get(self::NPAYMONEY) !== null;
    }

    /**
     * Sets value of 'nRaffleTotal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaffleTotal($value)
    {
        return $this->set(self::NRAFFLETOTAL, $value);
    }

    /**
     * Returns value of 'nRaffleTotal' property
     *
     * @return integer
     */
    public function getNRaffleTotal()
    {
        $value = $this->get(self::NRAFFLETOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaffleTotal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaffleTotal()
    {
        return $this->get(self::NRAFFLETOTAL) !== null;
    }

    /**
     * Sets value of 'nRaffleReset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaffleReset($value)
    {
        return $this->set(self::NRAFFLERESET, $value);
    }

    /**
     * Returns value of 'nRaffleReset' property
     *
     * @return integer
     */
    public function getNRaffleReset()
    {
        $value = $this->get(self::NRAFFLERESET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaffleReset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaffleReset()
    {
        return $this->get(self::NRAFFLERESET) !== null;
    }

    /**
     * Sets value of 'nPayMore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPayMore($value)
    {
        return $this->set(self::NPAYMORE, $value);
    }

    /**
     * Returns value of 'nPayMore' property
     *
     * @return integer
     */
    public function getNPayMore()
    {
        $value = $this->get(self::NPAYMORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPayMore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPayMore()
    {
        return $this->get(self::NPAYMORE) !== null;
    }

    /**
     * Appends value to 'arrItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemID($value)
    {
        return $this->append(self::ARRITEMID, $value);
    }

    /**
     * Clears 'arrItemID' list
     *
     * @return null
     */
    public function clearArrItemID()
    {
        return $this->clear(self::ARRITEMID);
    }

    /**
     * Returns 'arrItemID' list
     *
     * @return integer[]
     */
    public function getArrItemID()
    {
        return $this->get(self::ARRITEMID);
    }

    /**
     * Returns true if 'arrItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemID()
    {
        return count($this->get(self::ARRITEMID)) !== 0;
    }

    /**
     * Returns 'arrItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMID));
    }

    /**
     * Returns element from 'arrItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemIDAt($offset)
    {
        return $this->get(self::ARRITEMID, $offset);
    }

    /**
     * Returns count of 'arrItemID' list
     *
     * @return int
     */
    public function getArrItemIDCount()
    {
        return $this->count(self::ARRITEMID);
    }
}
}