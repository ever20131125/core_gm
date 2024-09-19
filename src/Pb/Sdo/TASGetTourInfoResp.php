<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetTourInfoResp message
 */
class TASGetTourInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const TREEINFO = 2;
    const PUZZLEINFO = 3;
    const NSTAGEID = 4;
    const NPROCESS = 5;
    const SECTIONREWARD = 6;
    const LOCKTYPE = 7;
    const LOCKED = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::TREEINFO => array(
            'name' => 'treeInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TourTree'
        ),
        self::PUZZLEINFO => array(
            'name' => 'puzzleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TourPuzzle'
        ),
        self::NSTAGEID => array(
            'name' => 'nStageID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROCESS => array(
            'name' => 'nProcess',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SECTIONREWARD => array(
            'name' => 'sectionReward',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCKTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PuzzleLockType::enmPuzzleLockType_Invalid,
            'name' => 'lockType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCKED => array(
            'name' => 'locked',
            'repeated' => true,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::TREEINFO] = null;
        $this->values[self::PUZZLEINFO] = null;
        $this->values[self::NSTAGEID] = null;
        $this->values[self::NPROCESS] = null;
        $this->values[self::SECTIONREWARD] = array();
        $this->values[self::LOCKTYPE] = self::$fields[self::LOCKTYPE]['default'];
        $this->values[self::LOCKED] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'treeInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TourTree $value Property value
     *
     * @return null
     */
    public function setTreeInfo(\Xnhd\Core\Pb\Sdo\TourTree $value=null)
    {
        return $this->set(self::TREEINFO, $value);
    }

    /**
     * Returns value of 'treeInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TourTree
     */
    public function getTreeInfo()
    {
        return $this->get(self::TREEINFO);
    }

    /**
     * Returns true if 'treeInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTreeInfo()
    {
        return $this->get(self::TREEINFO) !== null;
    }

    /**
     * Sets value of 'puzzleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TourPuzzle $value Property value
     *
     * @return null
     */
    public function setPuzzleInfo(\Xnhd\Core\Pb\Sdo\TourPuzzle $value=null)
    {
        return $this->set(self::PUZZLEINFO, $value);
    }

    /**
     * Returns value of 'puzzleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TourPuzzle
     */
    public function getPuzzleInfo()
    {
        return $this->get(self::PUZZLEINFO);
    }

    /**
     * Returns true if 'puzzleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPuzzleInfo()
    {
        return $this->get(self::PUZZLEINFO) !== null;
    }

    /**
     * Sets value of 'nStageID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStageID($value)
    {
        return $this->set(self::NSTAGEID, $value);
    }

    /**
     * Returns value of 'nStageID' property
     *
     * @return integer
     */
    public function getNStageID()
    {
        $value = $this->get(self::NSTAGEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStageID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStageID()
    {
        return $this->get(self::NSTAGEID) !== null;
    }

    /**
     * Sets value of 'nProcess' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNProcess($value)
    {
        return $this->set(self::NPROCESS, $value);
    }

    /**
     * Returns value of 'nProcess' property
     *
     * @return integer
     */
    public function getNProcess()
    {
        $value = $this->get(self::NPROCESS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nProcess' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNProcess()
    {
        return $this->get(self::NPROCESS) !== null;
    }

    /**
     * Appends value to 'sectionReward' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendSectionReward($value)
    {
        return $this->append(self::SECTIONREWARD, $value);
    }

    /**
     * Clears 'sectionReward' list
     *
     * @return null
     */
    public function clearSectionReward()
    {
        return $this->clear(self::SECTIONREWARD);
    }

    /**
     * Returns 'sectionReward' list
     *
     * @return integer[]
     */
    public function getSectionReward()
    {
        return $this->get(self::SECTIONREWARD);
    }

    /**
     * Returns true if 'sectionReward' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSectionReward()
    {
        return count($this->get(self::SECTIONREWARD)) !== 0;
    }

    /**
     * Returns 'sectionReward' iterator
     *
     * @return \ArrayIterator
     */
    public function getSectionRewardIterator()
    {
        return new \ArrayIterator($this->get(self::SECTIONREWARD));
    }

    /**
     * Returns element from 'sectionReward' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getSectionRewardAt($offset)
    {
        return $this->get(self::SECTIONREWARD, $offset);
    }

    /**
     * Returns count of 'sectionReward' list
     *
     * @return int
     */
    public function getSectionRewardCount()
    {
        return $this->count(self::SECTIONREWARD);
    }

    /**
     * Sets value of 'lockType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLockType($value)
    {
        return $this->set(self::LOCKTYPE, $value);
    }

    /**
     * Returns value of 'lockType' property
     *
     * @return integer
     */
    public function getLockType()
    {
        $value = $this->get(self::LOCKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lockType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLockType()
    {
        return $this->get(self::LOCKTYPE) !== null;
    }

    /**
     * Appends value to 'locked' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendLocked($value)
    {
        return $this->append(self::LOCKED, $value);
    }

    /**
     * Clears 'locked' list
     *
     * @return null
     */
    public function clearLocked()
    {
        return $this->clear(self::LOCKED);
    }

    /**
     * Returns 'locked' list
     *
     * @return integer[]
     */
    public function getLocked()
    {
        return $this->get(self::LOCKED);
    }

    /**
     * Returns true if 'locked' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLocked()
    {
        return count($this->get(self::LOCKED)) !== 0;
    }

    /**
     * Returns 'locked' iterator
     *
     * @return \ArrayIterator
     */
    public function getLockedIterator()
    {
        return new \ArrayIterator($this->get(self::LOCKED));
    }

    /**
     * Returns element from 'locked' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getLockedAt($offset)
    {
        return $this->get(self::LOCKED, $offset);
    }

    /**
     * Returns count of 'locked' list
     *
     * @return int
     */
    public function getLockedCount()
    {
        return $this->count(self::LOCKED);
    }
}
}