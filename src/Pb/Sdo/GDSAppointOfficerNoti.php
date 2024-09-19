<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSAppointOfficerNoti message
 */
class GDSAppointOfficerNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NHOSTID = 1;
    const NTARGETID = 2;
    const NBEFOFFICERLEVEL = 3;
    const NOFFICERLEVEL = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBEFOFFICERLEVEL => array(
            'name' => 'nBefOfficerLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOFFICERLEVEL => array(
            'name' => 'nOfficerLevel',
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
        $this->values[self::NHOSTID] = null;
        $this->values[self::NTARGETID] = null;
        $this->values[self::NBEFOFFICERLEVEL] = null;
        $this->values[self::NOFFICERLEVEL] = null;
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
     * Sets value of 'nHostID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHostID($value)
    {
        return $this->set(self::NHOSTID, $value);
    }

    /**
     * Returns value of 'nHostID' property
     *
     * @return integer
     */
    public function getNHostID()
    {
        $value = $this->get(self::NHOSTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHostID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHostID()
    {
        return $this->get(self::NHOSTID) !== null;
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
     * Sets value of 'nBefOfficerLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBefOfficerLevel($value)
    {
        return $this->set(self::NBEFOFFICERLEVEL, $value);
    }

    /**
     * Returns value of 'nBefOfficerLevel' property
     *
     * @return integer
     */
    public function getNBefOfficerLevel()
    {
        $value = $this->get(self::NBEFOFFICERLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBefOfficerLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBefOfficerLevel()
    {
        return $this->get(self::NBEFOFFICERLEVEL) !== null;
    }

    /**
     * Sets value of 'nOfficerLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOfficerLevel($value)
    {
        return $this->set(self::NOFFICERLEVEL, $value);
    }

    /**
     * Returns value of 'nOfficerLevel' property
     *
     * @return integer
     */
    public function getNOfficerLevel()
    {
        $value = $this->get(self::NOFFICERLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOfficerLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOfficerLevel()
    {
        return $this->get(self::NOFFICERLEVEL) !== null;
    }
}
}