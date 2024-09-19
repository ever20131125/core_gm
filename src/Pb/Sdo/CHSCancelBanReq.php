<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSCancelBanReq message
 */
class CHSCancelBanReq extends \ProtobufMessage
{
    /* Field index constants */
    const NZONEID = 1;
    const NROLEID = 2;
    const NPERIOD = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::NPERIOD => array(
            'name' => 'nPeriod',
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
        $this->values[self::NZONEID] = null;
        $this->values[self::NROLEID] = array();
        $this->values[self::NPERIOD] = null;
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
}
}