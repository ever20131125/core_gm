<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASCastSkillReq message
 */
class GASCastSkillReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTARGETID = 2;
    const NROOMINSTANCEID = 3;
    const GAMESKILLID = 4;
    const CASTTYPE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMESKILLID => array(
            'name' => 'gameSkillID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CASTTYPE => array(
            'name' => 'castType',
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
        $this->values[self::NTARGETID] = null;
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::GAMESKILLID] = null;
        $this->values[self::CASTTYPE] = null;
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
     * Sets value of 'nRoomInstanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomInstanceID($value)
    {
        return $this->set(self::NROOMINSTANCEID, $value);
    }

    /**
     * Returns value of 'nRoomInstanceID' property
     *
     * @return integer
     */
    public function getNRoomInstanceID()
    {
        $value = $this->get(self::NROOMINSTANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomInstanceID()
    {
        return $this->get(self::NROOMINSTANCEID) !== null;
    }

    /**
     * Sets value of 'gameSkillID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameSkillID($value)
    {
        return $this->set(self::GAMESKILLID, $value);
    }

    /**
     * Returns value of 'gameSkillID' property
     *
     * @return integer
     */
    public function getGameSkillID()
    {
        $value = $this->get(self::GAMESKILLID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameSkillID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameSkillID()
    {
        return $this->get(self::GAMESKILLID) !== null;
    }

    /**
     * Sets value of 'castType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCastType($value)
    {
        return $this->set(self::CASTTYPE, $value);
    }

    /**
     * Returns value of 'castType' property
     *
     * @return integer
     */
    public function getCastType()
    {
        $value = $this->get(self::CASTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'castType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCastType()
    {
        return $this->get(self::CASTTYPE) !== null;
    }
}
}