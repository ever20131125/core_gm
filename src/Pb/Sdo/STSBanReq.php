<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSBanReq message
 */
class STSBanReq extends \ProtobufMessage
{
    /* Field index constants */
    const BANTYPE = 1;
    const NZONEID = 2;
    const ARRACCOUNTID = 3;
    const ARRROLEID = 4;
    const NPERIOD = 5;
    const REASON = 6;
    const NSTARTTIME = 7;
    const NENDTIME = 8;
    const SZOPERATOR = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BANTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BanType::enmBanType_None,
            'name' => 'banType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACCOUNTID => array(
            'name' => 'arrAccountID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPERIOD => array(
            'name' => 'nPeriod',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZOPERATOR => array(
            'name' => 'szOperator',
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
        $this->values[self::BANTYPE] = self::$fields[self::BANTYPE]['default'];
        $this->values[self::NZONEID] = null;
        $this->values[self::ARRACCOUNTID] = array();
        $this->values[self::ARRROLEID] = array();
        $this->values[self::NPERIOD] = null;
        $this->values[self::REASON] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::SZOPERATOR] = null;
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
     * Sets value of 'banType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBanType($value)
    {
        return $this->set(self::BANTYPE, $value);
    }

    /**
     * Returns value of 'banType' property
     *
     * @return integer
     */
    public function getBanType()
    {
        $value = $this->get(self::BANTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'banType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBanType()
    {
        return $this->get(self::BANTYPE) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Appends value to 'arrAccountID' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrAccountID($value)
    {
        return $this->append(self::ARRACCOUNTID, $value);
    }

    /**
     * Clears 'arrAccountID' list
     *
     * @return null
     */
    public function clearArrAccountID()
    {
        return $this->clear(self::ARRACCOUNTID);
    }

    /**
     * Returns 'arrAccountID' list
     *
     * @return string[]
     */
    public function getArrAccountID()
    {
        return $this->get(self::ARRACCOUNTID);
    }

    /**
     * Returns true if 'arrAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAccountID()
    {
        return count($this->get(self::ARRACCOUNTID)) !== 0;
    }

    /**
     * Returns 'arrAccountID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAccountIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACCOUNTID));
    }

    /**
     * Returns element from 'arrAccountID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrAccountIDAt($offset)
    {
        return $this->get(self::ARRACCOUNTID, $offset);
    }

    /**
     * Returns count of 'arrAccountID' list
     *
     * @return int
     */
    public function getArrAccountIDCount()
    {
        return $this->count(self::ARRACCOUNTID);
    }

    /**
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Sets value of 'nPeriod' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPeriod($value)
    {
        return $this->set(self::NPERIOD, $value);
    }

    /**
     * Returns value of 'nPeriod' property
     *
     * @return integer
     */
    public function getNPeriod()
    {
        $value = $this->get(self::NPERIOD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPeriod' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPeriod()
    {
        return $this->get(self::NPERIOD) !== null;
    }

    /**
     * Sets value of 'reason' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getReason()
    {
        $value = $this->get(self::REASON);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'szOperator' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOperator($value)
    {
        return $this->set(self::SZOPERATOR, $value);
    }

    /**
     * Returns value of 'szOperator' property
     *
     * @return string
     */
    public function getSzOperator()
    {
        $value = $this->get(self::SZOPERATOR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOperator' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOperator()
    {
        return $this->get(self::SZOPERATOR) !== null;
    }
}
}