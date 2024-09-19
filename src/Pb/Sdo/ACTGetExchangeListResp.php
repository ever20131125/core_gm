<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetExchangeListResp message
 */
class ACTGetExchangeListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const EXCHANGELIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXCHANGELIST => array(
            'name' => 'exchangeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ExchangeInfo'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::EXCHANGELIST] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'exchangeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ExchangeInfo $value Value to append
     *
     * @return null
     */
    public function appendExchangeList(\Xnhd\Core\Pb\Sdo\ExchangeInfo $value)
    {
        return $this->append(self::EXCHANGELIST, $value);
    }

    /**
     * Clears 'exchangeList' list
     *
     * @return null
     */
    public function clearExchangeList()
    {
        return $this->clear(self::EXCHANGELIST);
    }

    /**
     * Returns 'exchangeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeInfo[]
     */
    public function getExchangeList()
    {
        return $this->get(self::EXCHANGELIST);
    }

    /**
     * Returns true if 'exchangeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExchangeList()
    {
        return count($this->get(self::EXCHANGELIST)) !== 0;
    }

    /**
     * Returns 'exchangeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getExchangeListIterator()
    {
        return new \ArrayIterator($this->get(self::EXCHANGELIST));
    }

    /**
     * Returns element from 'exchangeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeInfo
     */
    public function getExchangeListAt($offset)
    {
        return $this->get(self::EXCHANGELIST, $offset);
    }

    /**
     * Returns count of 'exchangeList' list
     *
     * @return int
     */
    public function getExchangeListCount()
    {
        return $this->count(self::EXCHANGELIST);
    }
}
}