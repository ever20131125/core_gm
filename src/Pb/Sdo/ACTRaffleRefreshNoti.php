<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTRaffleRefreshNoti message
 */
class ACTRaffleRefreshNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ACTTYPE = 2;
    const NSTARTTIME = 3;
    const REASON = 4;
    const PRIZELIST = 5;
    const STITEMCOST = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActType::enmActType_None,
            'name' => 'actType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STITEMCOST => array(
            'name' => 'stItemCost',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ACTTYPE] = self::$fields[self::ACTTYPE]['default'];
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::REASON] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::STITEMCOST] = null;
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
     * Sets value of 'actType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActType($value)
    {
        return $this->set(self::ACTTYPE, $value);
    }

    /**
     * Returns value of 'actType' property
     *
     * @return integer
     */
    public function getActType()
    {
        $value = $this->get(self::ACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActType()
    {
        return $this->get(self::ACTTYPE) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'reason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReason($value)
    {
        return $this->set(self::REASON, $value);
    }

    /**
     * Returns value of 'reason' property
     *
     * @return integer
     */
    public function getReason()
    {
        $value = $this->get(self::REASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReason()
    {
        return $this->get(self::REASON) !== null;
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendPrizeList($value)
    {
        return $this->append(self::PRIZELIST, $value);
    }

    /**
     * Clears 'prizeList' list
     *
     * @return null
     */
    public function clearPrizeList()
    {
        return $this->clear(self::PRIZELIST);
    }

    /**
     * Returns 'prizeList' list
     *
     * @return integer[]
     */
    public function getPrizeList()
    {
        return $this->get(self::PRIZELIST);
    }

    /**
     * Returns true if 'prizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeList()
    {
        return count($this->get(self::PRIZELIST)) !== 0;
    }

    /**
     * Returns 'prizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZELIST));
    }

    /**
     * Returns element from 'prizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getPrizeListAt($offset)
    {
        return $this->get(self::PRIZELIST, $offset);
    }

    /**
     * Returns count of 'prizeList' list
     *
     * @return int
     */
    public function getPrizeListCount()
    {
        return $this->count(self::PRIZELIST);
    }

    /**
     * Sets value of 'stItemCost' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStItemCost(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STITEMCOST, $value);
    }

    /**
     * Returns value of 'stItemCost' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStItemCost()
    {
        return $this->get(self::STITEMCOST);
    }

    /**
     * Returns true if 'stItemCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStItemCost()
    {
        return $this->get(self::STITEMCOST) !== null;
    }
}
}