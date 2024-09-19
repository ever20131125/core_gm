<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetAssetBuyResp message
 */
class IDBGetAssetBuyResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NBUYCOUNT = 3;
    const ARRCOST = 4;

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
        self::NBUYCOUNT => array(
            'name' => 'nBuyCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCOST => array(
            'name' => 'arrCost',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NBUYCOUNT] = null;
        $this->values[self::ARRCOST] = array();
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
     * Sets value of 'nBuyCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBuyCount($value)
    {
        return $this->set(self::NBUYCOUNT, $value);
    }

    /**
     * Returns value of 'nBuyCount' property
     *
     * @return integer
     */
    public function getNBuyCount()
    {
        $value = $this->get(self::NBUYCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBuyCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBuyCount()
    {
        return $this->get(self::NBUYCOUNT) !== null;
    }

    /**
     * Appends value to 'arrCost' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCost($value)
    {
        return $this->append(self::ARRCOST, $value);
    }

    /**
     * Clears 'arrCost' list
     *
     * @return null
     */
    public function clearArrCost()
    {
        return $this->clear(self::ARRCOST);
    }

    /**
     * Returns 'arrCost' list
     *
     * @return integer[]
     */
    public function getArrCost()
    {
        return $this->get(self::ARRCOST);
    }

    /**
     * Returns true if 'arrCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCost()
    {
        return count($this->get(self::ARRCOST)) !== 0;
    }

    /**
     * Returns 'arrCost' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCostIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOST));
    }

    /**
     * Returns element from 'arrCost' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCostAt($offset)
    {
        return $this->get(self::ARRCOST, $offset);
    }

    /**
     * Returns count of 'arrCost' list
     *
     * @return int
     */
    public function getArrCostCount()
    {
        return $this->count(self::ARRCOST);
    }
}
}