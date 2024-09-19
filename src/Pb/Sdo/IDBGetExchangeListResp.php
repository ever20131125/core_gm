<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetExchangeListResp message
 */
class IDBGetExchangeListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SOURCE = 3;
    const ARRLIST = 4;

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
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_Mall_Qualify,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRLIST => array(
            'name' => 'arrList',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::ARRLIST] = array();
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Appends value to 'arrList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ExchangeInfo $value Value to append
     *
     * @return null
     */
    public function appendArrList(\Xnhd\Core\Pb\Sdo\ExchangeInfo $value)
    {
        return $this->append(self::ARRLIST, $value);
    }

    /**
     * Clears 'arrList' list
     *
     * @return null
     */
    public function clearArrList()
    {
        return $this->clear(self::ARRLIST);
    }

    /**
     * Returns 'arrList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeInfo[]
     */
    public function getArrList()
    {
        return $this->get(self::ARRLIST);
    }

    /**
     * Returns true if 'arrList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrList()
    {
        return count($this->get(self::ARRLIST)) !== 0;
    }

    /**
     * Returns 'arrList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLIST));
    }

    /**
     * Returns element from 'arrList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeInfo
     */
    public function getArrListAt($offset)
    {
        return $this->get(self::ARRLIST, $offset);
    }

    /**
     * Returns count of 'arrList' list
     *
     * @return int
     */
    public function getArrListCount()
    {
        return $this->count(self::ARRLIST);
    }
}
}