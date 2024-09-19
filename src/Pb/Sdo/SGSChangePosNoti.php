<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSChangePosNoti message
 */
class SGSChangePosNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NHOSTID = 1;
    const ARRROLEID = 2;
    const ARRPOSID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPOSID => array(
            'name' => 'arrPosID',
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
        $this->values[self::NHOSTID] = null;
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRPOSID] = array();
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

    /**
     * Appends value to 'arrPosID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPosID($value)
    {
        return $this->append(self::ARRPOSID, $value);
    }

    /**
     * Clears 'arrPosID' list
     *
     * @return null
     */
    public function clearArrPosID()
    {
        return $this->clear(self::ARRPOSID);
    }

    /**
     * Returns 'arrPosID' list
     *
     * @return integer[]
     */
    public function getArrPosID()
    {
        return $this->get(self::ARRPOSID);
    }

    /**
     * Returns true if 'arrPosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPosID()
    {
        return count($this->get(self::ARRPOSID)) !== 0;
    }

    /**
     * Returns 'arrPosID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPosIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPOSID));
    }

    /**
     * Returns element from 'arrPosID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPosIDAt($offset)
    {
        return $this->get(self::ARRPOSID, $offset);
    }

    /**
     * Returns count of 'arrPosID' list
     *
     * @return int
     */
    public function getArrPosIDCount()
    {
        return $this->count(self::ARRPOSID);
    }
}
}