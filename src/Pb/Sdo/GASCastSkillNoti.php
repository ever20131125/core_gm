<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASCastSkillNoti message
 */
class GASCastSkillNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTARGETID = 2;
    const NROOMINSTANCEID = 3;
    const GAMESKILLID = 4;
    const NLEVEL = 5;
    const CASTTYPE = 6;
    const CASTSKILLRET = 7;
    const ARRSKILLTARGETSHOW = 8;

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
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CASTTYPE => array(
            'name' => 'castType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CASTSKILLRET => array(
            'name' => 'castSkillRet',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CastSkillRet'
        ),
        self::ARRSKILLTARGETSHOW => array(
            'name' => 'arrSkillTargetShow',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\SkillTargetShow'
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
        $this->values[self::NLEVEL] = null;
        $this->values[self::CASTTYPE] = null;
        $this->values[self::CASTSKILLRET] = null;
        $this->values[self::ARRSKILLTARGETSHOW] = array();
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
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
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

    /**
     * Sets value of 'castSkillRet' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CastSkillRet $value Property value
     *
     * @return null
     */
    public function setCastSkillRet(\Xnhd\Core\Pb\Sdo\CastSkillRet $value=null)
    {
        return $this->set(self::CASTSKILLRET, $value);
    }

    /**
     * Returns value of 'castSkillRet' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CastSkillRet
     */
    public function getCastSkillRet()
    {
        return $this->get(self::CASTSKILLRET);
    }

    /**
     * Returns true if 'castSkillRet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCastSkillRet()
    {
        return $this->get(self::CASTSKILLRET) !== null;
    }

    /**
     * Appends value to 'arrSkillTargetShow' list
     *
     * @param \Xnhd\Core\Pb\Sdo\SkillTargetShow $value Value to append
     *
     * @return null
     */
    public function appendArrSkillTargetShow(\Xnhd\Core\Pb\Sdo\SkillTargetShow $value)
    {
        return $this->append(self::ARRSKILLTARGETSHOW, $value);
    }

    /**
     * Clears 'arrSkillTargetShow' list
     *
     * @return null
     */
    public function clearArrSkillTargetShow()
    {
        return $this->clear(self::ARRSKILLTARGETSHOW);
    }

    /**
     * Returns 'arrSkillTargetShow' list
     *
     * @return \Xnhd\Core\Pb\Sdo\SkillTargetShow[]
     */
    public function getArrSkillTargetShow()
    {
        return $this->get(self::ARRSKILLTARGETSHOW);
    }

    /**
     * Returns true if 'arrSkillTargetShow' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSkillTargetShow()
    {
        return count($this->get(self::ARRSKILLTARGETSHOW)) !== 0;
    }

    /**
     * Returns 'arrSkillTargetShow' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSkillTargetShowIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSKILLTARGETSHOW));
    }

    /**
     * Returns element from 'arrSkillTargetShow' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\SkillTargetShow
     */
    public function getArrSkillTargetShowAt($offset)
    {
        return $this->get(self::ARRSKILLTARGETSHOW, $offset);
    }

    /**
     * Returns count of 'arrSkillTargetShow' list
     *
     * @return int
     */
    public function getArrSkillTargetShowCount()
    {
        return $this->count(self::ARRSKILLTARGETSHOW);
    }
}
}