<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdateSkillSlotResp message
 */
class PDBUpdateSkillSlotResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRSLOTIDX = 3;
    const ARRSKILLID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSLOTIDX => array(
            'name' => 'arrSlotIdx',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSKILLID => array(
            'name' => 'arrSkillID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRSLOTIDX] = array();
        $this->values[self::ARRSKILLID] = array();
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
     * Appends value to 'arrSlotIdx' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrSlotIdx($value)
    {
        return $this->append(self::ARRSLOTIDX, $value);
    }

    /**
     * Clears 'arrSlotIdx' list
     *
     * @return null
     */
    public function clearArrSlotIdx()
    {
        return $this->clear(self::ARRSLOTIDX);
    }

    /**
     * Returns 'arrSlotIdx' list
     *
     * @return integer[]
     */
    public function getArrSlotIdx()
    {
        return $this->get(self::ARRSLOTIDX);
    }

    /**
     * Returns true if 'arrSlotIdx' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSlotIdx()
    {
        return count($this->get(self::ARRSLOTIDX)) !== 0;
    }

    /**
     * Returns 'arrSlotIdx' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSlotIdxIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSLOTIDX));
    }

    /**
     * Returns element from 'arrSlotIdx' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrSlotIdxAt($offset)
    {
        return $this->get(self::ARRSLOTIDX, $offset);
    }

    /**
     * Returns count of 'arrSlotIdx' list
     *
     * @return int
     */
    public function getArrSlotIdxCount()
    {
        return $this->count(self::ARRSLOTIDX);
    }

    /**
     * Appends value to 'arrSkillID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrSkillID($value)
    {
        return $this->append(self::ARRSKILLID, $value);
    }

    /**
     * Clears 'arrSkillID' list
     *
     * @return null
     */
    public function clearArrSkillID()
    {
        return $this->clear(self::ARRSKILLID);
    }

    /**
     * Returns 'arrSkillID' list
     *
     * @return integer[]
     */
    public function getArrSkillID()
    {
        return $this->get(self::ARRSKILLID);
    }

    /**
     * Returns true if 'arrSkillID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSkillID()
    {
        return count($this->get(self::ARRSKILLID)) !== 0;
    }

    /**
     * Returns 'arrSkillID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSkillIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSKILLID));
    }

    /**
     * Returns element from 'arrSkillID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrSkillIDAt($offset)
    {
        return $this->get(self::ARRSKILLID, $offset);
    }

    /**
     * Returns count of 'arrSkillID' list
     *
     * @return int
     */
    public function getArrSkillIDCount()
    {
        return $this->count(self::ARRSKILLID);
    }
}
}