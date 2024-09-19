<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchStartInfo message
 */
class MatchStartInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ARRROLEATTRINFO = 1;
    const ARRROLESKILLINFO = 2;
    const ARRROLEMATCHSTATUS = 3;
    const ARRNPCINFO = 4;
    const ARRNPCMATCHSTATUS = 5;
    const ARRTEAMMATCHSTATUS = 6;
    const NTOTALFANS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRROLEATTRINFO => array(
            'name' => 'arrRoleAttrInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleAttrInfo'
        ),
        self::ARRROLESKILLINFO => array(
            'name' => 'arrRoleSkillInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleSkillInfo'
        ),
        self::ARRROLEMATCHSTATUS => array(
            'name' => 'arrRoleMatchStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleMatchStatus'
        ),
        self::ARRNPCINFO => array(
            'name' => 'arrNPCInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleInfo'
        ),
        self::ARRNPCMATCHSTATUS => array(
            'name' => 'arrNPCMatchStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleMatchStatus'
        ),
        self::ARRTEAMMATCHSTATUS => array(
            'name' => 'arrTeamMatchStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TeamMatchStatus'
        ),
        self::NTOTALFANS => array(
            'name' => 'nTotalFans',
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
        $this->values[self::ARRROLEATTRINFO] = array();
        $this->values[self::ARRROLESKILLINFO] = array();
        $this->values[self::ARRROLEMATCHSTATUS] = array();
        $this->values[self::ARRNPCINFO] = array();
        $this->values[self::ARRNPCMATCHSTATUS] = array();
        $this->values[self::ARRTEAMMATCHSTATUS] = array();
        $this->values[self::NTOTALFANS] = null;
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
     * Appends value to 'arrRoleAttrInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleAttrInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleAttrInfo(\Xnhd\Core\Pb\Sdo\RoleAttrInfo $value)
    {
        return $this->append(self::ARRROLEATTRINFO, $value);
    }

    /**
     * Clears 'arrRoleAttrInfo' list
     *
     * @return null
     */
    public function clearArrRoleAttrInfo()
    {
        return $this->clear(self::ARRROLEATTRINFO);
    }

    /**
     * Returns 'arrRoleAttrInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleAttrInfo[]
     */
    public function getArrRoleAttrInfo()
    {
        return $this->get(self::ARRROLEATTRINFO);
    }

    /**
     * Returns true if 'arrRoleAttrInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleAttrInfo()
    {
        return count($this->get(self::ARRROLEATTRINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleAttrInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleAttrInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEATTRINFO));
    }

    /**
     * Returns element from 'arrRoleAttrInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleAttrInfo
     */
    public function getArrRoleAttrInfoAt($offset)
    {
        return $this->get(self::ARRROLEATTRINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleAttrInfo' list
     *
     * @return int
     */
    public function getArrRoleAttrInfoCount()
    {
        return $this->count(self::ARRROLEATTRINFO);
    }

    /**
     * Appends value to 'arrRoleSkillInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleSkillInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleSkillInfo(\Xnhd\Core\Pb\Sdo\RoleSkillInfo $value)
    {
        return $this->append(self::ARRROLESKILLINFO, $value);
    }

    /**
     * Clears 'arrRoleSkillInfo' list
     *
     * @return null
     */
    public function clearArrRoleSkillInfo()
    {
        return $this->clear(self::ARRROLESKILLINFO);
    }

    /**
     * Returns 'arrRoleSkillInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleSkillInfo[]
     */
    public function getArrRoleSkillInfo()
    {
        return $this->get(self::ARRROLESKILLINFO);
    }

    /**
     * Returns true if 'arrRoleSkillInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleSkillInfo()
    {
        return count($this->get(self::ARRROLESKILLINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleSkillInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleSkillInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLESKILLINFO));
    }

    /**
     * Returns element from 'arrRoleSkillInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleSkillInfo
     */
    public function getArrRoleSkillInfoAt($offset)
    {
        return $this->get(self::ARRROLESKILLINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleSkillInfo' list
     *
     * @return int
     */
    public function getArrRoleSkillInfoCount()
    {
        return $this->count(self::ARRROLESKILLINFO);
    }

    /**
     * Appends value to 'arrRoleMatchStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleMatchStatus $value Value to append
     *
     * @return null
     */
    public function appendArrRoleMatchStatus(\Xnhd\Core\Pb\Sdo\RoleMatchStatus $value)
    {
        return $this->append(self::ARRROLEMATCHSTATUS, $value);
    }

    /**
     * Clears 'arrRoleMatchStatus' list
     *
     * @return null
     */
    public function clearArrRoleMatchStatus()
    {
        return $this->clear(self::ARRROLEMATCHSTATUS);
    }

    /**
     * Returns 'arrRoleMatchStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus[]
     */
    public function getArrRoleMatchStatus()
    {
        return $this->get(self::ARRROLEMATCHSTATUS);
    }

    /**
     * Returns true if 'arrRoleMatchStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleMatchStatus()
    {
        return count($this->get(self::ARRROLEMATCHSTATUS)) !== 0;
    }

    /**
     * Returns 'arrRoleMatchStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleMatchStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEMATCHSTATUS));
    }

    /**
     * Returns element from 'arrRoleMatchStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus
     */
    public function getArrRoleMatchStatusAt($offset)
    {
        return $this->get(self::ARRROLEMATCHSTATUS, $offset);
    }

    /**
     * Returns count of 'arrRoleMatchStatus' list
     *
     * @return int
     */
    public function getArrRoleMatchStatusCount()
    {
        return $this->count(self::ARRROLEMATCHSTATUS);
    }

    /**
     * Appends value to 'arrNPCInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrNPCInfo(\Xnhd\Core\Pb\Sdo\RoleInfo $value)
    {
        return $this->append(self::ARRNPCINFO, $value);
    }

    /**
     * Clears 'arrNPCInfo' list
     *
     * @return null
     */
    public function clearArrNPCInfo()
    {
        return $this->clear(self::ARRNPCINFO);
    }

    /**
     * Returns 'arrNPCInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo[]
     */
    public function getArrNPCInfo()
    {
        return $this->get(self::ARRNPCINFO);
    }

    /**
     * Returns true if 'arrNPCInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNPCInfo()
    {
        return count($this->get(self::ARRNPCINFO)) !== 0;
    }

    /**
     * Returns 'arrNPCInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNPCInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNPCINFO));
    }

    /**
     * Returns element from 'arrNPCInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo
     */
    public function getArrNPCInfoAt($offset)
    {
        return $this->get(self::ARRNPCINFO, $offset);
    }

    /**
     * Returns count of 'arrNPCInfo' list
     *
     * @return int
     */
    public function getArrNPCInfoCount()
    {
        return $this->count(self::ARRNPCINFO);
    }

    /**
     * Appends value to 'arrNPCMatchStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleMatchStatus $value Value to append
     *
     * @return null
     */
    public function appendArrNPCMatchStatus(\Xnhd\Core\Pb\Sdo\RoleMatchStatus $value)
    {
        return $this->append(self::ARRNPCMATCHSTATUS, $value);
    }

    /**
     * Clears 'arrNPCMatchStatus' list
     *
     * @return null
     */
    public function clearArrNPCMatchStatus()
    {
        return $this->clear(self::ARRNPCMATCHSTATUS);
    }

    /**
     * Returns 'arrNPCMatchStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus[]
     */
    public function getArrNPCMatchStatus()
    {
        return $this->get(self::ARRNPCMATCHSTATUS);
    }

    /**
     * Returns true if 'arrNPCMatchStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNPCMatchStatus()
    {
        return count($this->get(self::ARRNPCMATCHSTATUS)) !== 0;
    }

    /**
     * Returns 'arrNPCMatchStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNPCMatchStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNPCMATCHSTATUS));
    }

    /**
     * Returns element from 'arrNPCMatchStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus
     */
    public function getArrNPCMatchStatusAt($offset)
    {
        return $this->get(self::ARRNPCMATCHSTATUS, $offset);
    }

    /**
     * Returns count of 'arrNPCMatchStatus' list
     *
     * @return int
     */
    public function getArrNPCMatchStatusCount()
    {
        return $this->count(self::ARRNPCMATCHSTATUS);
    }

    /**
     * Appends value to 'arrTeamMatchStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TeamMatchStatus $value Value to append
     *
     * @return null
     */
    public function appendArrTeamMatchStatus(\Xnhd\Core\Pb\Sdo\TeamMatchStatus $value)
    {
        return $this->append(self::ARRTEAMMATCHSTATUS, $value);
    }

    /**
     * Clears 'arrTeamMatchStatus' list
     *
     * @return null
     */
    public function clearArrTeamMatchStatus()
    {
        return $this->clear(self::ARRTEAMMATCHSTATUS);
    }

    /**
     * Returns 'arrTeamMatchStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TeamMatchStatus[]
     */
    public function getArrTeamMatchStatus()
    {
        return $this->get(self::ARRTEAMMATCHSTATUS);
    }

    /**
     * Returns true if 'arrTeamMatchStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTeamMatchStatus()
    {
        return count($this->get(self::ARRTEAMMATCHSTATUS)) !== 0;
    }

    /**
     * Returns 'arrTeamMatchStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTeamMatchStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTEAMMATCHSTATUS));
    }

    /**
     * Returns element from 'arrTeamMatchStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TeamMatchStatus
     */
    public function getArrTeamMatchStatusAt($offset)
    {
        return $this->get(self::ARRTEAMMATCHSTATUS, $offset);
    }

    /**
     * Returns count of 'arrTeamMatchStatus' list
     *
     * @return int
     */
    public function getArrTeamMatchStatusCount()
    {
        return $this->count(self::ARRTEAMMATCHSTATUS);
    }

    /**
     * Sets value of 'nTotalFans' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalFans($value)
    {
        return $this->set(self::NTOTALFANS, $value);
    }

    /**
     * Returns value of 'nTotalFans' property
     *
     * @return integer
     */
    public function getNTotalFans()
    {
        $value = $this->get(self::NTOTALFANS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalFans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalFans()
    {
        return $this->get(self::NTOTALFANS) !== null;
    }
}
}