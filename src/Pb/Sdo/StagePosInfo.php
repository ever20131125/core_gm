<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * StagePosInfo message
 */
class StagePosInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NPOSID = 1;
    const ARRINDEX = 2;
    const ARRROLEID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPOSID => array(
            'name' => 'nPosID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRINDEX => array(
            'name' => 'arrIndex',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
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
        $this->values[self::NPOSID] = null;
        $this->values[self::ARRINDEX] = array();
        $this->values[self::ARRROLEID] = array();
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
     * Sets value of 'nPosID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosID($value)
    {
        return $this->set(self::NPOSID, $value);
    }

    /**
     * Returns value of 'nPosID' property
     *
     * @return integer
     */
    public function getNPosID()
    {
        $value = $this->get(self::NPOSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosID()
    {
        return $this->get(self::NPOSID) !== null;
    }

    /**
     * Appends value to 'arrIndex' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrIndex($value)
    {
        return $this->append(self::ARRINDEX, $value);
    }

    /**
     * Clears 'arrIndex' list
     *
     * @return null
     */
    public function clearArrIndex()
    {
        return $this->clear(self::ARRINDEX);
    }

    /**
     * Returns 'arrIndex' list
     *
     * @return integer[]
     */
    public function getArrIndex()
    {
        return $this->get(self::ARRINDEX);
    }

    /**
     * Returns true if 'arrIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrIndex()
    {
        return count($this->get(self::ARRINDEX)) !== 0;
    }

    /**
     * Returns 'arrIndex' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrIndexIterator()
    {
        return new \ArrayIterator($this->get(self::ARRINDEX));
    }

    /**
     * Returns element from 'arrIndex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrIndexAt($offset)
    {
        return $this->get(self::ARRINDEX, $offset);
    }

    /**
     * Returns count of 'arrIndex' list
     *
     * @return int
     */
    public function getArrIndexCount()
    {
        return $this->count(self::ARRINDEX);
    }

    /**
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }
}
}