<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BanEvent message
 */
class BanEvent extends \ProtobufMessage
{
    /* Field index constants */
    const BANTYPE = 1;
    const NZONEID = 2;
    const NROLEID = 3;
    const NSTARTTIME = 4;
    const NENDTIME = 5;

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
        self::NROLEID => array(
            'name' => 'nRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::NROLEID] = array();
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