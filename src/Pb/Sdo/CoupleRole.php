<?php
/**
 * Auto generated from complex.proto at 2021-10-26 06:02:43
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleRole message
 */
class CoupleRole extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ENMRELATIONSHIPSTATUS = 2;
    const NCOUPLEID = 3;
    const NWOOEDROLE = 4;
    const NSTARTTIME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENMRELATIONSHIPSTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\RelationshipStatus::enmRelationshipStatus_Invalid,
            'name' => 'enmRelationshipStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOUPLEID => array(
            'name' => 'nCoupleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWOOEDROLE => array(
            'name' => 'nWooedRole',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
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
        $this->values[self::ENMRELATIONSHIPSTATUS] = self::$fields[self::ENMRELATIONSHIPSTATUS]['default'];
        $this->values[self::NCOUPLEID] = null;
        $this->values[self::NWOOEDROLE] = null;
        $this->values[self::NSTARTTIME] = null;
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
     * Sets value of 'enmRelationshipStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnmRelationshipStatus($value)
    {
        return $this->set(self::ENMRELATIONSHIPSTATUS, $value);
    }

    /**
     * Returns value of 'enmRelationshipStatus' property
     *
     * @return integer
     */
    public function getEnmRelationshipStatus()
    {
        $value = $this->get(self::ENMRELATIONSHIPSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'enmRelationshipStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnmRelationshipStatus()
    {
        return $this->get(self::ENMRELATIONSHIPSTATUS) !== null;
    }

    /**
     * Sets value of 'nCoupleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCoupleID($value)
    {
        return $this->set(self::NCOUPLEID, $value);
    }

    /**
     * Returns value of 'nCoupleID' property
     *
     * @return integer
     */
    public function getNCoupleID()
    {
        $value = $this->get(self::NCOUPLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCoupleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCoupleID()
    {
        return $this->get(self::NCOUPLEID) !== null;
    }

    /**
     * Sets value of 'nWooedRole' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWooedRole($value)
    {
        return $this->set(self::NWOOEDROLE, $value);
    }

    /**
     * Returns value of 'nWooedRole' property
     *
     * @return integer
     */
    public function getNWooedRole()
    {
        $value = $this->get(self::NWOOEDROLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWooedRole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWooedRole()
    {
        return $this->get(self::NWOOEDROLE) !== null;
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
}
}