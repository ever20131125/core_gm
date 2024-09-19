<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCouplePlanResp message
 */
class RLSCouplePlanResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NEXP = 2;
    const NPAYMENT = 3;
    const NLEVEL = 4;
    const COMSTATUS = 5;
    const PAYSTATUS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NEXP => array(
            'name' => 'nExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAYMENT => array(
            'name' => 'nPayment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMSTATUS => array(
            'name' => 'comStatus',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PAYSTATUS => array(
            'name' => 'payStatus',
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
        $this->values[self::NEXP] = null;
        $this->values[self::NPAYMENT] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::COMSTATUS] = array();
        $this->values[self::PAYSTATUS] = array();
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
     * Sets value of 'nExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExp($value)
    {
        return $this->set(self::NEXP, $value);
    }

    /**
     * Returns value of 'nExp' property
     *
     * @return integer
     */
    public function getNExp()
    {
        $value = $this->get(self::NEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExp()
    {
        return $this->get(self::NEXP) !== null;
    }

    /**
     * Sets value of 'nPayment' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPayment($value)
    {
        return $this->set(self::NPAYMENT, $value);
    }

    /**
     * Returns value of 'nPayment' property
     *
     * @return integer
     */
    public function getNPayment()
    {
        $value = $this->get(self::NPAYMENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPayment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPayment()
    {
        return $this->get(self::NPAYMENT) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Appends value to 'comStatus' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendComStatus($value)
    {
        return $this->append(self::COMSTATUS, $value);
    }

    /**
     * Clears 'comStatus' list
     *
     * @return null
     */
    public function clearComStatus()
    {
        return $this->clear(self::COMSTATUS);
    }

    /**
     * Returns 'comStatus' list
     *
     * @return integer[]
     */
    public function getComStatus()
    {
        return $this->get(self::COMSTATUS);
    }

    /**
     * Returns true if 'comStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasComStatus()
    {
        return count($this->get(self::COMSTATUS)) !== 0;
    }

    /**
     * Returns 'comStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getComStatusIterator()
    {
        return new \ArrayIterator($this->get(self::COMSTATUS));
    }

    /**
     * Returns element from 'comStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getComStatusAt($offset)
    {
        return $this->get(self::COMSTATUS, $offset);
    }

    /**
     * Returns count of 'comStatus' list
     *
     * @return int
     */
    public function getComStatusCount()
    {
        return $this->count(self::COMSTATUS);
    }

    /**
     * Appends value to 'payStatus' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendPayStatus($value)
    {
        return $this->append(self::PAYSTATUS, $value);
    }

    /**
     * Clears 'payStatus' list
     *
     * @return null
     */
    public function clearPayStatus()
    {
        return $this->clear(self::PAYSTATUS);
    }

    /**
     * Returns 'payStatus' list
     *
     * @return integer[]
     */
    public function getPayStatus()
    {
        return $this->get(self::PAYSTATUS);
    }

    /**
     * Returns true if 'payStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayStatus()
    {
        return count($this->get(self::PAYSTATUS)) !== 0;
    }

    /**
     * Returns 'payStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getPayStatusIterator()
    {
        return new \ArrayIterator($this->get(self::PAYSTATUS));
    }

    /**
     * Returns element from 'payStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getPayStatusAt($offset)
    {
        return $this->get(self::PAYSTATUS, $offset);
    }

    /**
     * Returns count of 'payStatus' list
     *
     * @return int
     */
    public function getPayStatusCount()
    {
        return $this->count(self::PAYSTATUS);
    }
}
}