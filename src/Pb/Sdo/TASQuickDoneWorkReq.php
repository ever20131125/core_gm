<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASQuickDoneWorkReq message
 */
class TASQuickDoneWorkReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NWORKID = 2;
    const NTIMES = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWORKID => array(
            'name' => 'nWorkID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMES => array(
            'name' => 'nTimes',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NWORKID] = null;
        $this->values[self::NTIMES] = null;
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
     * Sets value of 'nWorkID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWorkID($value)
    {
        return $this->set(self::NWORKID, $value);
    }

    /**
     * Returns value of 'nWorkID' property
     *
     * @return integer
     */
    public function getNWorkID()
    {
        $value = $this->get(self::NWORKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWorkID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWorkID()
    {
        return $this->get(self::NWORKID) !== null;
    }

    /**
     * Sets value of 'nTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimes($value)
    {
        return $this->set(self::NTIMES, $value);
    }

    /**
     * Returns value of 'nTimes' property
     *
     * @return integer
     */
    public function getNTimes()
    {
        $value = $this->get(self::NTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimes()
    {
        return $this->get(self::NTIMES) !== null;
    }
}
}