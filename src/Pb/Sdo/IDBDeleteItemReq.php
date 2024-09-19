<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBDeleteItemReq message
 */
class IDBDeleteItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const ARROPERATEITEMINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPERATEITEMINFO => array(
            'name' => 'arrOperateItemInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\OperateItemInfo'
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
        $this->values[self::SOURCE] = null;
        $this->values[self::ARROPERATEITEMINFO] = array();
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
     * Appends value to 'arrOperateItemInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\OperateItemInfo $value Value to append
     *
     * @return null
     */
    public function appendArrOperateItemInfo(\Xnhd\Core\Pb\Sdo\OperateItemInfo $value)
    {
        return $this->append(self::ARROPERATEITEMINFO, $value);
    }

    /**
     * Clears 'arrOperateItemInfo' list
     *
     * @return null
     */
    public function clearArrOperateItemInfo()
    {
        return $this->clear(self::ARROPERATEITEMINFO);
    }

    /**
     * Returns 'arrOperateItemInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\OperateItemInfo[]
     */
    public function getArrOperateItemInfo()
    {
        return $this->get(self::ARROPERATEITEMINFO);
    }

    /**
     * Returns true if 'arrOperateItemInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOperateItemInfo()
    {
        return count($this->get(self::ARROPERATEITEMINFO)) !== 0;
    }

    /**
     * Returns 'arrOperateItemInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOperateItemInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPERATEITEMINFO));
    }

    /**
     * Returns element from 'arrOperateItemInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\OperateItemInfo
     */
    public function getArrOperateItemInfoAt($offset)
    {
        return $this->get(self::ARROPERATEITEMINFO, $offset);
    }

    /**
     * Returns count of 'arrOperateItemInfo' list
     *
     * @return int
     */
    public function getArrOperateItemInfoCount()
    {
        return $this->count(self::ARROPERATEITEMINFO);
    }
}
}