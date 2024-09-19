<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASCommitOperationReq message
 */
class GASCommitOperationReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NKEY = 2;
    const ARRKEYINDEX = 3;
    const ARRKEYCOMMIT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEY => array(
            'name' => 'nKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRKEYINDEX => array(
            'name' => 'arrKeyIndex',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRKEYCOMMIT => array(
            'name' => 'arrKeyCommit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\KeyCommit'
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
        $this->values[self::NKEY] = null;
        $this->values[self::ARRKEYINDEX] = array();
        $this->values[self::ARRKEYCOMMIT] = array();
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
     * Sets value of 'nKey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKey($value)
    {
        return $this->set(self::NKEY, $value);
    }

    /**
     * Returns value of 'nKey' property
     *
     * @return integer
     */
    public function getNKey()
    {
        $value = $this->get(self::NKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKey()
    {
        return $this->get(self::NKEY) !== null;
    }

    /**
     * Appends value to 'arrKeyIndex' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrKeyIndex($value)
    {
        return $this->append(self::ARRKEYINDEX, $value);
    }

    /**
     * Clears 'arrKeyIndex' list
     *
     * @return null
     */
    public function clearArrKeyIndex()
    {
        return $this->clear(self::ARRKEYINDEX);
    }

    /**
     * Returns 'arrKeyIndex' list
     *
     * @return integer[]
     */
    public function getArrKeyIndex()
    {
        return $this->get(self::ARRKEYINDEX);
    }

    /**
     * Returns true if 'arrKeyIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrKeyIndex()
    {
        return count($this->get(self::ARRKEYINDEX)) !== 0;
    }

    /**
     * Returns 'arrKeyIndex' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrKeyIndexIterator()
    {
        return new \ArrayIterator($this->get(self::ARRKEYINDEX));
    }

    /**
     * Returns element from 'arrKeyIndex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrKeyIndexAt($offset)
    {
        return $this->get(self::ARRKEYINDEX, $offset);
    }

    /**
     * Returns count of 'arrKeyIndex' list
     *
     * @return int
     */
    public function getArrKeyIndexCount()
    {
        return $this->count(self::ARRKEYINDEX);
    }

    /**
     * Appends value to 'arrKeyCommit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\KeyCommit $value Value to append
     *
     * @return null
     */
    public function appendArrKeyCommit(\Xnhd\Core\Pb\Sdo\KeyCommit $value)
    {
        return $this->append(self::ARRKEYCOMMIT, $value);
    }

    /**
     * Clears 'arrKeyCommit' list
     *
     * @return null
     */
    public function clearArrKeyCommit()
    {
        return $this->clear(self::ARRKEYCOMMIT);
    }

    /**
     * Returns 'arrKeyCommit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeyCommit[]
     */
    public function getArrKeyCommit()
    {
        return $this->get(self::ARRKEYCOMMIT);
    }

    /**
     * Returns true if 'arrKeyCommit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrKeyCommit()
    {
        return count($this->get(self::ARRKEYCOMMIT)) !== 0;
    }

    /**
     * Returns 'arrKeyCommit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrKeyCommitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRKEYCOMMIT));
    }

    /**
     * Returns element from 'arrKeyCommit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeyCommit
     */
    public function getArrKeyCommitAt($offset)
    {
        return $this->get(self::ARRKEYCOMMIT, $offset);
    }

    /**
     * Returns count of 'arrKeyCommit' list
     *
     * @return int
     */
    public function getArrKeyCommitCount()
    {
        return $this->count(self::ARRKEYCOMMIT);
    }
}
}