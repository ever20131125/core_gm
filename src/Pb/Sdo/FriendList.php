<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendList message
 */
class FriendList extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const FRIENDID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDID => array(
            'name' => 'friendID',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::FRIENDID] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'friendID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendFriendID($value)
    {
        return $this->append(self::FRIENDID, $value);
    }

    /**
     * Clears 'friendID' list
     *
     * @return null
     */
    public function clearFriendID()
    {
        return $this->clear(self::FRIENDID);
    }

    /**
     * Returns 'friendID' list
     *
     * @return integer[]
     */
    public function getFriendID()
    {
        return $this->get(self::FRIENDID);
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return count($this->get(self::FRIENDID)) !== 0;
    }

    /**
     * Returns 'friendID' iterator
     *
     * @return \ArrayIterator
     */
    public function getFriendIDIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDID));
    }

    /**
     * Returns element from 'friendID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getFriendIDAt($offset)
    {
        return $this->get(self::FRIENDID, $offset);
    }

    /**
     * Returns count of 'friendID' list
     *
     * @return int
     */
    public function getFriendIDCount()
    {
        return $this->count(self::FRIENDID);
    }
}
}