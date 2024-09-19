<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUseItemNoti message
 */
class PDBUseItemNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const NTARGETID = 3;
    const ARROPERATEITEMINFO = 4;
    const SZMESSAGE = 5;

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
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPERATEITEMINFO => array(
            'name' => 'arrOperateItemInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\OperateItemInfo'
        ),
        self::SZMESSAGE => array(
            'name' => 'szMessage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NTARGETID] = null;
        $this->values[self::ARROPERATEITEMINFO] = array();
        $this->values[self::SZMESSAGE] = null;
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
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
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

    /**
     * Sets value of 'szMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMessage($value)
    {
        return $this->set(self::SZMESSAGE, $value);
    }

    /**
     * Returns value of 'szMessage' property
     *
     * @return string
     */
    public function getSzMessage()
    {
        $value = $this->get(self::SZMESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMessage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMessage()
    {
        return $this->get(self::SZMESSAGE) !== null;
    }
}
}