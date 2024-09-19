<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSBanReq message
 */
class COSBanReq extends \ProtobufMessage
{
    /* Field index constants */
    const BANTYPE = 1;
    const NZONEID = 2;
    const SZACCOUNTID = 3;
    const NROLEID = 4;
    const REASON = 5;
    const SZOPERATOR = 6;
    const NSTARTTIME = 7;
    const NENDTIME = 8;

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
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'default' => \Xnhd\Core\Pb\Sdo\BanReason::enmBanReason_Unknow,
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZOPERATOR => array(
            'name' => 'szOperator',
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NROLEID] = array();
        $this->values[self::REASON] = self::$fields[self::REASON]['default'];
        $this->values[self::SZOPERATOR] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
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
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Appends value to 'nRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNRoleID($value)
    {
        return $this->append(self::NROLEID, $value);
    }

    /**
     * Clears 'nRoleID' list
     *
     * @return null
     */
    public function clearNRoleID()
    {
        return $this->clear(self::NROLEID);
    }

    /**
     * Returns 'nRoleID' list
     *
     * @return integer[]
     */
    public function getNRoleID()
    {
        return $this->get(self::NROLEID);
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return count($this->get(self::NROLEID)) !== 0;
    }

    /**
     * Returns 'nRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getNRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::NROLEID));
    }

    /**
     * Returns element from 'nRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNRoleIDAt($offset)
    {
        return $this->get(self::NROLEID, $offset);
    }

    /**
     * Returns count of 'nRoleID' list
     *
     * @return int
     */
    public function getNRoleIDCount()
    {
        return $this->count(self::NROLEID);
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
}
}